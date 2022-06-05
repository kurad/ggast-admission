<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Province;
use App\Models\District;
use App\Models\Sector;
use App\Models\Cell;


class Address extends Component
{
    public $provinces;
    public $districts;
    public $sectors;
    public $cells;
    
    public $selectedProvinces = NULL;
    public $selectedDistricts = NULL;
    public $selectedSectors = NULL;
    public $selectedCell = NULL;


    public function mount()
    {
        $this->provinces = Province::all();
        $this->districts = collect();
        $this->sectors = collect();
        $this->cells = collect();
    }

    public function render()
    {
        $provinces = Province::all();
        return view('livewire.address',compact('provinces'))->extends('layouts.app');
    }

    public function updatedSelectedProvince($province)
    {
        if (!is_null($province)) {
            $this->districts = District::where('province_id', $province)->get();
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
