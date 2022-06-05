<div>
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <form wire:submit.prevent="storeDetails">
                @if($currentStep == 1)
                <div class="step-one">
                    <div class="card">
                         <div class="card-header bg-secondary text-white">Step 1-3 Personal Details</div> 
                         <div class="card-body">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="exampleInputEmail1">Given Name</label>                 
                                <input class="form-control" id="first_name" name="firstname" type="text" placeholder="Enter Given Name" wire:model="firstname">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label  for="disabledInput">Middle Name</label>
                                <input class="form-control" id="middle_name" type="text" placeholder="Middle Name" wire:model="middlename">
                              </div> 
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="family_name">Family Name</label>
                            <input class="form-control" id="lastname" name="lastname" type="text" placeholder="Enter Family Name" wire:model="lastname">
                            </div>
                        </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="dob">Date of Birth</label>
                                <input class="form-control" id="email" type="date" placeholder="Enter your dob" wire:model="dob" >
                              </div> 
                            </div>
                        </div>
                        </div> 
                        
                    </div>
                </div><br>
                @endif
                @if($currentStep == 2)
                <div class="step-two">
                    <div class="card">
                        <div class="card-header bg-secondary text-white">Step 2-3 Parent/Guardian Details</div> 
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3 class="tile-title">Father</h3>

                                    <div class="form-group">
                                      <label class="control-label">Name</label>
                                      <input class="form-control" type="text" name="fname" placeholder="Enter full name" wire:model="fathername">
                                  </div>
                                  <div class="form-group">
                                      <label class="control-label">Is he alive?</label>
                                      <select class="form-control" name="falive" wire:model="falive">
                                          <option>--- Select ---</option>
                                          <option value="1">Yes</option>
                                          <option value="0">No</option>
                                      </select>
                                  </div>
                                  <div class="form-group">
                                      <label class="control-label">Do you live together?</label>
                                      <select class="form-control" name="flive_together" wire:model="flive_together">
                                          <option>--- Select ---</option>
                                          <option value="1">Yes</option>
                                          <option value="0">No</option>
                                      </select>
                                  </div>
                                  <div class="form-group">
                                      <label class="control-label">Father Phone</label>
                                      <input class="form-control" type="text" name="fphone" placeholder="Enter father's phone" wire:model="fphone">
                                  </div>
                                  <div class="form-group">
                                      <label class="control-label">Father Email</label>
                                      <input class="form-control" type="email" name="femail" placeholder="Enter father's email address" wire:model="femail">
                                  </div>
                                  <div class="form-group">
                                      <label class="control-label">Father Profession</label>
                                      <input class="form-control" type="text" name="fprofession" placeholder="Enter father's profession address" wire:model="fprofession">
                                  </div>
                                  <div class="form-group">
                                      <label class="control-label">Employer</label>
                                      <input class="form-control" type="text" name="femployer" placeholder="Enter father's employer" wire:model="femployer">
                                  </div>    
                              </div>
                              <div class="col-md-6">

                                <h3 class="tile-title">Mother</h3>
                                <div class="tile-body">

                                    <div class="form-group">
                                      <label class="control-label">Name</label>
                                      <input class="form-control" type="text" name="mothername" placeholder="Enter full name" wire:model="mothername">
                                  </div>
                                  <div class="form-group">
                                      <label class="control-label">Is she alive?</label>
                                      <select class="form-control" name="mlive" wire:model="malive">
                                          <option>--- Select ---</option>
                                          <option value="1">Yes</option>
                                          <option value="0">No</option>
                                      </select>
                                  </div>
                                  <div class="form-group">
                                      <label class="control-label">Do you live together?</label>
                                      <select class="form-control" name="mlive_together" wire:model="mlive_together">
                                          <option>--- Select ---</option>
                                          <option value="1">Yes</option>
                                          <option value="0">No</option>
                                      </select>
                                  </div>
                                  <div class="form-group">
                                      <label class="control-label">Mother Phone</label>
                                      <input class="form-control" type="text" placeholder="Enter mother phone" wire:model="mphone">
                                  </div>
                                  <div class="form-group">
                                      <label class="control-label">Mother Email</label>
                                      <input class="form-control" type="email" placeholder="Enter mother's email address" wire:model="memail">
                                  </div>
                                  <div class="form-group">
                                      <label class="control-label">Mother Profession</label>
                                      <input class="form-control" type="text" placeholder="Enter mother's profession address" wire:model="mprofession">
                                  </div>
                                  <div class="form-group">
                                      <label class="control-label">Employer</label>
                                      <input class="form-control" type="text" placeholder="Enter mother's employer" wire:model="memployer">
                                  </div>

                              </div>
                          </div>
                      </div>
                      <hr>
                      <div class="col-md-12">

                        <h3 class="tile-title">Guardian</h3>
                        <div class="row">
                            <div class="form-group col-md-3">
                              <label class="control-label">Full Name</label>
                              <input class="form-control" type="text" placeholder="Enter full name" wire:model="guardianname">
                          </div>
                          <div class="form-group col-md-3">
                              <label class="control-label">Phone</label>
                              <input class="form-control" type="text" placeholder="Enter  Phone " wire:model="gphone">
                          </div>
                          <div class="form-group col-md-3">
                              <label class="control-label">Email</label>
                              <input class="form-control" type="text" placeholder="Enter  email" wire:model="gemail">
                          </div>
                      </div>

                  </div>
              </div>

          </div> 

      </div>
      @endif
      @if($currentStep == 3)
    <div class="step-three">
        <div class="card">
         <div class="card-header bg-secondary text-white">Step 3-3 Address Details</div> 
            <div class="card-body">
                <div class="row">

              <div class="col-lg-6">
                
                  <div class="form-group">
                    <label for="exampleInputEmail1">Province</label>
                    
                    <select wire:model="selectedProvinces" class="form-control" >
                      <option>--Select Province--</option>
                      @foreach($provinces as $province)
                      <option value="{{$province->id}}">{{$province->pro_name}}</option>
                      @endforeach
                    </select>
                    {{ $selectedProvinces}}
                  </div>
                @if (!is_null($selectedProvinces))
                  <div class="form-group">
                    <label for="district">District:</label>
                    <select class="form-control" name="district_id">
                    <option>Choose District</option>
                    @foreach($districts as $district)
                        <option value="{{ $district->id }}">{{ $district->district_name }}</option>
                    @endforeach
                </select>
                </div>
                @endif          
              </div>
              <div class="col-lg-4 offset-lg-1">
                <div class="form-group">
                 <label for="sector">Sector:</label>
                 <select class="form-control"></select>
                </div>
                <div class="form-group">
                  <label for="cell">Cell:</label>
                  <select class="form-control" ></select>
                </div>
              </div>
       </div>
    </div> 
</div>
    </div>
    @endif

    <div class="tile-footer">
    @if($currentStep == 1)
    <div></div>
    @endif
    @if($currentStep == 2 || $currentStep == 3)
    <button class="btn btn-secondary mr-1" type="button" wire:click="decreaseStep()"><i class="fa fa-step-backward"></i>Back</button>
    @endif
    @if($currentStep == 1 || $currentStep == 2)
    <button class="btn btn-primary" type="button" wire:click="increaseStep()"><i class="fa fa-step-forward"></i>Next</button>
    @endif
            
    @if($currentStep == 3)
    <button class="btn btn-success" type="submit"><i class="fa fa-floppy-o"></i>Save</button>
    @endif
    </div>
</form>
</div>
</div>
</div>

</div>


