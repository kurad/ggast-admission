<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Applicant;
use App\Models\Province;
use App\Models\District;
use App\Models\Sector;
use App\Models\Cell;
use DB;
use Auth;
class RegisterApplicant extends Component
{
    public $firstname;
    public $middlename;
    public $lastname;
    public $dob;
    public $cell_id;
    public $user_id;
    public $mothername;
    public $malive;
    public $mlive_together;
    public $mphone;
    public $memail,$mprofession,$memployer,$fathername,$falive,$flive_together,$fphone,$femail,$fprofession;
    public $femployer;
    public $guardianname;
    public $glive_together,$gphone,$gemail;

    public $provinces;
    public $districts;
    public $sectors;
    public $cells;
    
    public $selectedProvinces = NULL;
    public $selectedDistricts = null;
    public $selectedSectors = NULL;
    public $selectedCell = NULL;

    public $totalSteps = 3;
    public $currentStep = 1;

    public function mount(){

        $this->currentStep=1;
        $this->provinces = Province::all();
        $this->districts = collect();
        $this->sectors = collect();
        $this->cells = collect();
        
    }
    public function render()
    {

        return view('livewire.register-applicant')->extends('layouts.app');   
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

    public function updatedSelectedProvince($province_id)
    {
        if (!is_null($province_id)) {
            $this->districts = District::where('province_id', $province_id)->get();
        }
    }

    public function updatedSelectedDistrict($district)
    {
        if (!is_null($district)) {
            $this->sectors = Sector::where('district_id', $district)->get();
        }
    }
    public function updatedSelectedSector($sector)
    {
        if (!is_null($sector)) {
            $this->cells = Cell::where('sector_id', $sector)->get();
        }
    }
}

