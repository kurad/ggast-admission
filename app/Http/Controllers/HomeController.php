<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use DB;
use Auth;
use App\Models\Applicant;
use App\Models\Sibbling;
use App\Models\School_Attended;
use App\Models\Attachment;
use App\Models\Application;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
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

        $questions = DB::table("questions")
                        ->join('applicants','applicants.id','=','questions.applicant_id')
                        ->join('users','users.id','=','applicants.user_id')
                        ->where('user_id','=',Auth::user()->id)
                        ->get(['applicants.*','questions.*']);

         if (is_null($applicants)) {

            return view('new_home', compact('provinces','applicants'));
        }
        else{
            return view('home', compact('provinces','applicants','address','fatherInfo','motherInfo','sibblings','applicant_sib','schools','attachments','questions'));
        }  
    }

    public function apply()
    {
        $applicants = DB::table("applicants")
                        ->join('users','users.id','=','applicants.user_id')
                        ->where('user_id','=',Auth::user()->id)
                        ->first(['applicants.*','users.*']);

        $application = DB::table("applications")
                        ->join('applicants','applicants.id','=','applications.applicant_id')
                        ->join('users','users.id','=','applicants.user_id')
                        ->join('cells','cells.id','=','applicants.cell_id')
                        ->join('sectors','sectors.id','=','cells.sector_id')
                        ->join('districts','districts.id','=','sectors.district_id')
                        ->join('provinces','provinces.id','=','districts.province_id')
                        ->where('user_id','=',Auth::user()->id)
                        ->get(['applicants.*','users.*','applications.*','provinces.*','districts.*']);
                    
        return view('my_application',compact('application','applicants'));
    }

    public function storeApplication(Request $request){
        $applicants = DB::table("applicants")->where('user_id','=',Auth::user()->id)->first();
        $applicant = $applicants->id;
       // if (is_null($applicants)) {
            $apply=new Application();
            
            $apply->applicant_id=$applicant;
            $apply->combination=$request->choice1;
            $apply->option2=$request->choice2;
            $save=$apply->save();
            if ($save) {
                 return redirect()->back()->with('success','Application Submitted');
            }
        }
       /* else{
            $apply=Applicant::find(Auth::user()->id);
            $apply->applicant_id=$applicant;
            $apply->combination=$request->choice1;
            $apply->option2=$request->choice2;
            $update=$apply->update();
            if ($update) {
                 return redirect()->back()->with('success','Application Submitted');
            }
        }
    }*/
    public function storeProfile(Request $request){
        $applicants = DB::table("applicants")->where('user_id','=',Auth::user()->id)->first();
        if (is_null($applicants)) {
            $profile=new Applicant();
            $profile->firstname=$request->firstname;
            $profile->middlename=$request->middlename;
            $profile->lastname=$request->lastname;
            $profile->indexNo=$request->indexNo;
            $profile->dob=$request->dob;
            $profile->user_id=Auth::user()->id;
            $save=$profile->save();
            if ($save) {
                 return redirect()->back()->with('success','Profile Saved');
            }
        }
        else{
            $profile=Applicant::find(Auth::user()->id);
            $profile->firstname=$request->firstname;
            $profile->middlename=$request->middlename;
            $profile->lastname=$request->lastname;
            $profile->indexNo=$request->indexNo;
            $profile->dob=$request->dob;
            $update=$profile->update();
            if ($update) {
                 return redirect()->back()->with('success','Profile Updated');
            }
        }
    }
    public function storeFather(Request $request){

            $father=Applicant::where('user_id','=',Auth::user()->id)->first();
            $father->fathername=$request->fname;
            $father->falive=$request->falive;
            $father->flive_together=$request->flive_together;
            $father->fphone=$request->fphone;
            $father->femail=$request->femail;
            $father->fprofession=$request->fprofession;
            $father->femployer=$request->femployer;

            $save=$father->save();
            if ($save) {
                 return redirect()->back()->with('success','Father Info Saved');
            }
        }

    public function storeMother(Request $request){

            $mother=Applicant::where('user_id','=',Auth::user()->id)->first();
            $mother->mothername=$request->mname;
            $mother->malive=$request->malive;
            $mother->mlive_together=$request->mlive_together;
            $mother->mphone=$request->mphone;
            $mother->memail=$request->memail;
            $mother->mprofession=$request->mprofession;
            $mother->memployer=$request->memployer;

            $save=$mother->save();
            if ($save) {
                 return redirect()->back()->with('success','Father Info Saved');
            }
        }

    public function storeSibbling(Request $request){

            $sibbling= new Sibbling();
            $sibbling->applicant_id=$request->aID;
            $sibbling->fullname=$request->sname;
            $sibbling->sex=$request->sex;
            $sibbling->dob=$request->dob;
            $sibbling->school_attended=$request->school;
            $sibbling->sibbling_at_gashora=$request->sibbling;
            $sibbling->fees=$request->fee;

            $save=$sibbling->save();
            if ($save) {
                 return redirect()->back()->with('success','Sibbling Info Saved');
            }
        }

    public function storeSchool(Request $request){

            $school= new School_Attended();
            $school->applicant_id=$request->aID;
            $school->from=$request->from;
            $school->to=$request->to;
            $school->schoolname=$request->schoolname;
            $school->school_principal=$request->schoolprincipal;
            $school->principal_phone=$request->principalphone;
            $school->fees=$request->fee;
            //$school->indexNo=$request->indexNo;


            $save=$school->save();
            if ($save) {
                 return redirect()->back()->with('success','School Info Saved');
            }
        }
    public function storeAddress(Request $request){

            //$applicant=Auth::user();
            $applicant = Applicant::where('user_id','=',Auth::user()->id)->first();
            
            $applicant->cell_id=$request['cell_id'];

            $applicant->save();
            
            return redirect()->back()->with('success','Address Added');
            //dd($applicant);
        }

    public function storeAttachment(Request $request)
    {
         
        $validatedData = $request->validate([
        'files' => 'required'
        //'files.*' => 'mimes:csv,txt,xlx,xls,pdf'
        ]);
 
        if($request->hasfile('files'))
         {
            $files = $request->file('files');
            $applicant = $request->aID;
            foreach($files as $file)
            {             
                $name = $file->getClientOriginalName();
                //$path = $file->store('public/files');
                $path = $file->storeAs('files', $name, 'public');

                Attachment::create([
                    
                    'name' => $name,
                    'path' => '/storage/'.$path,
                    'applicant_id'=>$applicant
                  ]);
            }
         }
        return redirect()->back()->with('status', 'File has been uploaded Successfully');
 
    }
    public function viewAttachment($id){
        $attachment = Attachment::find($id);
        return view('view_attachment',compact('attachment'));
    }
    public function destroy($id)
{
    $attachment = Attachment::find($id);
    $attachment->delete();

    return redirect()->back()->with('message','Attachment deleted successfully.');
}
    public function logout(Request $request) {
        Session::flush();
        
        Auth::logout();

        return redirect('/login');
      }
}
