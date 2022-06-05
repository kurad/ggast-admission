<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Question;
use Auth;
class Questions extends Component
{

    public $question1;
    public $question2;
    public $question3;
    public $question4;
    public $question5;
    public $question6;
    public $applicant_id;

    public $totalSteps = 6;
    public $currentStep = 1;

    public function mount(){

        $this->currentStep=1;
        
    }

    public function increaseStep(){
        $this->currentStep++;
        if ($this->currentStep > $this->totalSteps) {
            $this->currentStep = $this->totalSteps;
        }
    }

    public function decreaseStep(){
        $this->currentStep--;
        if ($this->currentStep < 1) {
            $this->currentStep = 1;
        }
    }
    public function storeQuestion(){
       $data = $this->validate([
            'question1'=>'required|max:500|min:20',
            //'question2'=>'required|max:500|min:20',
            //'question3'=>'required|max:500|min:20',
            //'question4'=>'required|max:500|min:20',
            //'question5'=>'required|max:500|min:20',
            //'question6'=>'required|max:500|min:20',

        ]);
       $data->applicant_id = Auth::user()->id;

        Question::create($data);

        //$qu->question1 = $this->question1;
        //$qu->applicant_id = Auth::user()->id;
    }
    public function render()
    {
        return view('livewire.questions')->extends('layouts.app');
        //return view('livewire.questions')
    }
}



    