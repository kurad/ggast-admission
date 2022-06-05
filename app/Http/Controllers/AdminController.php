<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use DB;
use PDF;
use Auth;
use App\Models\Applicant;
use App\Models\Application;
use App\Models\Sibbling;
use App\Models\School_Attended;
use App\Models\Attachment;
class AdminController extends Controller
{
    public function index()
    {
        $provinces = DB::table("provinces")->get();
        $address = DB::table("provinces")
                        ->join("districts","provinces.id","=","districts.province_id")
                        ->join("sectors","districts.id","=","sectors.district_id")
                        ->join("cells","sectors.id","=","cells.sector_id")
                        ->join("applicants","cells.id","=","applicants.cell_id")
                        ->where('applicants.user_id','=', Auth::user()->id)
                        ->get(["cells.cell_name","sectors.sector_name","districts.district_name","provinces.*"]);
        $applicants = DB::table("applicants")
                        ->join('users','users.id','=','applicants.user_id')
                        ->where('user_id','=',Auth::user()->id)
                        ->first(['applicants.*','users.*']);
        $fatherInfo = DB::table("applicants")
                        ->join('users','users.id','=','applicants.user_id')
                        ->where('user_id','=',Auth::user()->id)
                        ->get(["applicants.*"]);
        $motherInfo = DB::table("applicants")
                        ->join('users','users.id','=','applicants.user_id')
                        ->where('user_id','=',Auth::user()->id)
                        ->get(["applicants.*"]);
        $sibblings = DB::table("sibblings")
                        ->join('applicants','applicants.id','=','sibblings.applicant_id')
                        ->join('users','users.id','=','applicants.user_id')
                        ->where('user_id','=',Auth::user()->id)
                        ->get(['applicants.*','sibblings.*']);

        $applicant_sib = DB::table("users")
                        ->join('applicants','users.id','=','applicants.user_id')
                        ->where('user_id','=',Auth::user()->id)
                        ->first(['applicants.*']);

        $schools = DB::table("school__attendeds")
                        ->join('applicants','applicants.id','=','school__attendeds.applicant_id')
                        ->join('users','users.id','=','applicants.user_id')
                        ->where('user_id','=',Auth::user()->id)
                        ->get(['applicants.*','school__attendeds.*']);

        $attachments = DB::table("attachments")
                        ->join('applicants','applicants.id','=','attachments.applicant_id')
                        ->join('users','users.id','=','applicants.user_id')
                        ->where('user_id','=',Auth::user()->id)
                        ->get(['applicants.*','attachments.*']);

        return view('admin.home');  
    }

    public function applications()
    {

        $application = DB::table("applications")
                        ->join('applicants','applicants.id','=','applications.applicant_id')
                        ->join('users','users.id','=','applicants.user_id')
                        ->join('cells','cells.id','=','applicants.cell_id')
                        ->join('sectors','sectors.id','=','cells.sector_id')
                        ->join('districts','districts.id','=','sectors.district_id')
                        ->join('provinces','provinces.id','=','districts.province_id')
                        ->get(['applicants.*','users.*','applications.*','districts.*','provinces.*']);
                    
        return view('admin.applications',compact('application'));
    }
  public function review($id)
    {
        $status = Application::find($id);

        $status->status = 2;
        $status->update();

        $application = DB::table("applications")
                        ->join('applicants','applicants.id','=','applications.applicant_id')
                        ->join('cells','cells.id','=','applicants.cell_id')
                        ->join('sectors','sectors.id','=','cells.sector_id')
                        ->join('districts','districts.id','=','sectors.district_id')
                        ->join('provinces','provinces.id','=','districts.province_id')
                        ->join('users','users.id','=','applicants.user_id')
                        ->where('applications.id','=',$id)
                        ->first(['applications.*','users.*','applicants.*','cells.*','sectors.*','districts.*','provinces.*']);
        $schools = DB::table("school__attendeds")
                        ->join('applicants','applicants.id','=','school__attendeds.applicant_id')
                        ->join('applications','applications.applicant_id','=','applicants.id')
                        ->where('applications.id','=',$id)
                        ->get(['school__attendeds.*']);
        $pdf = PDF::loadView('admin.application_review', compact('application','schools'));            
        
        return $pdf->stream('application.pdf');
    }  
}
