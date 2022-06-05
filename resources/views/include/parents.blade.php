
<div class="tile user-settings">
  <h4 class="line-head">Father</h4>
  <section class="invoice">
    <div class="row mb-4">

    </div>
    <div class="row invoice-info">
      @if($applicants->fathername==null)
      <div class="col-4">
        <p><strong>No Parent information added yet </strong></p>
        <a href="#home" class="btn btn-primary" data-toggle="modal" data-target="#fatherModal">Add Father Details</a>
      </div>
      @else
      <div class="col-12">
        @foreach($fatherInfo as $father)       
          <table class="table">
            <thead>
              <tr>
                <th>Father Name</th>
                <th>Alive? </th>
                <th>Living Together?</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Profession</th>
                <th>Employer</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>{{$father->fathername}}</td>
                <td>
                @if($father->falive==1)
                Yes
                @else
                No
                @endif
              </td>
                <td>
                @if($father->flive_together==1)
                Yes
                @else
                No
                @endif
              </td>
                <td>{{$father->fphone}}</td>
                <td>{{$father->femail}}</td>
                <td>{{$father->fprofession}}</td>
                <td>{{$father->femployer}}</td>
                <td><a href="" class="btn btn-warning"><i class="fa fa-pencil"></i></a></td>
              </tr>
            </tbody>
          </table>
        @endforeach
      </div>
      @endif
    </div>
  </section>
<hr>
  <h4 class="line-head">Mother</h4>
  <section class="invoice">
    <div class="row mb-4">
    </div>
        <div class="row invoice-info">
      @if($applicants->mothername==null)
      <div class="col-4">
        <p><strong>No Parent information added yet </strong></p>
        <a href="#home" class="btn btn-primary" data-toggle="modal" data-target="#motherModal">Add Mother Details</a>
      </div>
      @else
      <div class="col-12">
        @foreach($motherInfo as $mother)       
          <table class="table">
            <thead>
              <tr>
                <th>Mother Name</th>
                <th>Alive? </th>
                <th>Living Together?</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Profession</th>
                <th>Employer</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>{{$mother->mothername}}</td>
                <td>
                @if($mother->malive==1)
                Yes
                @else
                No
                @endif
              </td>
                <td>
                @if($mother->mlive_together==1)
                Yes
                @else
                No
                @endif
              </td>
                <td>{{$mother->mphone}}</td>
                <td>{{$mother->memail}}</td>
                <td>{{$mother->mprofession}}</td>
                <td>{{$mother->memployer}}</td>
                <td><a href="" class="btn btn-warning"><i class="fa fa-pencil"></i></a></td>
              </tr>
            </tbody>
          </table>
        @endforeach
      </div>
      @endif
    </div>
  </section>
</div>

<!-- Modal Father -->
<div class="modal fade" id="fatherModal" tabindex="-1" role="dialog" aria-labelledby="fatherModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Add Father details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        

          <div class="tile">
            <form method="POST" action="{{route('storeFather')}}">
                @csrf
                <div class="form-group">
                  <label class="control-label">Name</label>
                  <input class="form-control" type="text" name="fname" placeholder="Enter full name">
                </div>
                <div class="form-group">
                  <label class="control-label">Is he alive?</label>
                   <select class="form-control" name="falive">
                      <option>--- Select ---</option>
                      <option value="1">Yes</option>
                      <option value="0">No</option>
                    </select>
                </div>
                <div class="form-group">
                  <label class="control-label">Do you live together?</label>
                    <select class="form-control" name="flive_together">
                      <option>--- Select ---</option>
                      <option value="1">Yes</option>
                      <option value="0">No</option>
                    </select>
                </div>
                <div class="form-group">
                  <label class="control-label">Father Phone</label>
                    <input class="form-control" type="text" name="fphone" placeholder="Enter father's phone">
                </div>
                <div class="form-group">
                  <label class="control-label">Father Email</label>
                    <input class="form-control" type="email" name="femail" placeholder="Enter father's email address">
                </div>
                <div class="form-group">
                  <label class="control-label">Father Profession</label>
                    <input class="form-control" type="text" name="fprofession" placeholder="Enter father's profession address">
                </div>
                <div class="form-group">
                  <label class="control-label">Employer</label>
                    <input class="form-control" type="text" name="femployer" placeholder="Enter father's employer">
                </div>


              <button class="btn btn-primary" type="submit"><i class="fa fa-floppy-o"></i>Save</button>
   
              </form>
          </div>
      </div>
      
    </div>
  </div>
</div>

<!-- Modal Mother -->
<div class="modal fade" id="motherModal" tabindex="-1" role="dialog" aria-labelledby="motherModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Add Mother details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        

          <div class="tile">
            <form method="POST" action="{{route('storeMother')}}">
                @csrf
                <div class="form-group">
                  <label class="control-label">Name</label>
                  <input class="form-control" type="text" name="mname" placeholder="Enter full name">
                </div>
                <div class="form-group">
                  <label class="control-label">Is he alive?</label>
                   <select class="form-control" name="malive">
                      <option>--- Select ---</option>
                      <option value="1">Yes</option>
                      <option value="0">No</option>
                    </select>
                </div>
                <div class="form-group">
                  <label class="control-label">Do you live together?</label>
                    <select class="form-control" name="mlive_together">
                      <option>--- Select ---</option>
                      <option value="1">Yes</option>
                      <option value="0">No</option>
                    </select>
                </div>
                <div class="form-group">
                  <label class="control-label">Mother Phone</label>
                    <input class="form-control" type="text" name="mphone" placeholder="Enter mother's phone">
                </div>
                <div class="form-group">
                  <label class="control-label">Mother Email</label>
                    <input class="form-control" type="email" name="memail" placeholder="Enter mother's email address">
                </div>
                <div class="form-group">
                  <label class="control-label">Mother Profession</label>
                    <input class="form-control" type="text" name="mprofession" placeholder="Enter mother's profession address">
                </div>
                <div class="form-group">
                  <label class="control-label">Employer</label>
                    <input class="form-control" type="text" name="memployer" placeholder="Enter mother's employer">
                </div>


              <button class="btn btn-primary" type="submit"><i class="fa fa-floppy-o"></i>Save</button>
   
              </form>
          </div>
      </div>
      
    </div>
  </div>
</div>