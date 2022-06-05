<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use Auth;
use DB;
class QuestionController extends Controller
{
    public function index(){

        $questions = DB::table('questions')
                    ->where('applicant_id','=',Auth::user()->id)
                    ->first(['questions.*']);
        return view('users.all_questions', compact('questions'));
    }

    public function answer1(){
        return view('users.questions');
    }
    public function question1(Request $request){

        $qu1 = DB::table("questions")->where('applicant_id','=',Auth::user()->id)->first();
        if (is_null($qu1)) {

        $qu1= new Question();
        
        $qu1->question1=$request->question1;
        $qu1->applicant_id=Auth::user()->id;


            $save=$qu1->save();
            if ($save) {
                 //return redirect()->back()->with('success','Answer well saved');
                 return redirect()->route('question2')->with('success','Answer {{$request}} well saved');
            }
    }
    else{
        $qu1=Question::find(Auth::user()->id);
        $qu1->question1=$request->question1;
        $qu1->applicant_id=Auth::user()->id;


            $qu1->update();
            
                //return redirect()->back()->with('success','Answer well saved');
            return redirect()->route('question2')->with('success','Answer {{$request}} well saved');
            
    }
}
    public function answer2(){
        return view('users.question2');
    }

    public function question2(Request $request){

        $qu2 = DB::table("questions")->where('applicant_id','=',Auth::user()->id)->first();
        if (is_null($qu2)) {

        $qu2= new Question();
        
        $qu2->question2=$request->question2;
        $qu2->applicant_id=Auth::user()->id;

            $save=$qu2->save();
            if ($save) {
                 //return redirect()->back()->with('success','Answer well saved');
                 return redirect()->route('question3')->with('success','Answer {{$request}} well saved');
            }
    }
    else{
        $qu2=Question::find(Auth::user()->id);
        $qu2->question2=$request->question2;


            $qu2->update();
            
                //return redirect()->back()->with('success','Answer well saved');
            return redirect()->route('question3')->with('success','Answer {{$request}} well saved');
            
    }
}

    public function answer3(){
        return view('users.question3');
    }

    public function question3(Request $request){

        $qu3 = DB::table("questions")->where('applicant_id','=',Auth::user()->id)->first();
        if (is_null($qu3)) {

        $qu3= new Question();
        
        $qu3->question3=$request->question3;
        $qu3->applicant_id=Auth::user()->id;

            $save=$qu3->save();
            if ($save) {
                 //return redirect()->back()->with('success','Answer well saved');
                 return redirect()->route('question4')->with('success','Answer {{$request}} well saved');
            }
    }
    else{
        $qu3=Question::find(Auth::user()->id);
        $qu3->question3=$request->question3;


            $qu3->update();
            
                //return redirect()->back()->with('success','Answer well saved');
            return redirect()->route('question4')->with('success','Answer {{$request}} well saved');
            
    }
}
    public function answer4(){
        return view('users.question4');
    }

    public function question4(Request $request){

        $qu4 = DB::table("questions")->where('applicant_id','=',Auth::user()->id)->first();
        if (is_null($qu4)) {

        $qu4= new Question();
        
        $qu4->question4=$request->question4;
        $qu4->applicant_id=Auth::user()->id;

            $save=$qu4->save();
            if ($save) {
                 //return redirect()->back()->with('success','Answer well saved');
                 return redirect()->route('question5')->with('success','Answer {{$request}} well saved');
            }
    }
    else{
        $qu4=Question::find(Auth::user()->id);
        $qu4->question4=$request->question4;


            $qu4->update();
            
                //return redirect()->back()->with('success','Answer well saved');
            return redirect()->route('question5')->with('success','Answer {{$request}} well saved');
            
        }
    }
     public function answer5(){
        return view('users.question5');
    }

    public function question5(Request $request){

        $qu5 = DB::table("questions")->where('applicant_id','=',Auth::user()->id)->first();
        if (is_null($qu5)) {

        $qu5= new Question();
        
        $qu5->question5=$request->question5;
        $qu5->applicant_id=Auth::user()->id;

            $save=$qu5->save();
            if ($save) {
                 //return redirect()->back()->with('success','Answer well saved');
                 return redirect()->route('question6')->with('success','Answer {{$request}} well saved');
            }
    }
    else{
        $qu5=Question::find(Auth::user()->id);
        $qu5->question5=$request->question5;


            $qu5->update();
            
                //return redirect()->back()->with('success','Answer well saved');
            return redirect()->route('question6')->with('success','Answer {{$request}} well saved');
            
        }
    }

    public function answer6(){
        return view('users.question6');
    }

    public function question6(Request $request){

        $qu6 = DB::table("questions")->where('applicant_id','=',Auth::user()->id)->first();
        if (is_null($qu6)) {

        $qu6= new Question();
        
        $qu6->question6=$request->question6;
        $qu6->applicant_id=Auth::user()->id;

            $save=$qu6->save();
            if ($save) {
                 //return redirect()->back()->with('success','Answer well saved');
                 return redirect()->route('question')->with('success','Answer {{$request}} well saved');
            }
    }
    else{
        $qu6=Question::find(Auth::user()->id);
        $qu6->question6=$request->question6;


            $qu6->update();
            
                //return redirect()->back()->with('success','Answer well saved');
            return redirect()->route('question')->with('success','Answer {{$request}} well saved');
            
        }
    }

    public function answer1_edit($id){

        $question = Question::find($id);
        return view('users.questions.edit.question1_edit',compact('question'));
    }

    public function question1_edit(Request $request){

        $qu1=Question::find(Auth::user()->id);
        $qu1->question1=$request->question1;
        $qu1->applicant_id=Auth::user()->id;


            $qu1->update();
            
                //return redirect()->back()->with('success','Answer well saved');
            return redirect()->route('question')->with('success','Modifications {{$request}} well saved');
            
    }
}
