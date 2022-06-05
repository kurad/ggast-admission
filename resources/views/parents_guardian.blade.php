<div class="row">
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Father</h3>
            <div class="tile-body">
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
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Mother</h3>
            <div class="tile-body">
              <form class="form-horizontal">
                <div class="form-group">
                  <label class="control-label">Name</label>
                    <input class="form-control" type="text" placeholder="Enter full name">
                </div>
                <div class="form-group">
                  <label class="control-label">Is she alive?</label>
                   <select class="form-control" name="mlive">
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
                    <input class="form-control" type="text" placeholder="Enter mother phone">
                </div>
                <div class="form-group">
                  <label class="control-label">Mother Email</label>
                    <input class="form-control" type="email" placeholder="Enter mother's email address">
                </div>
                <div class="form-group">
                  <label class="control-label">Mother Profession</label>
                    <input class="form-control" type="text" placeholder="Enter mother's profession address">
                </div>
                <div class="form-group">
                  <label class="control-label">Employer</label>
                    <input class="form-control" type="text" placeholder="Enter mother's employer">
                </div>
              </form>
            </div>
            <div class="tile-footer">
              <div class="row">
                <div class="col-md-8 col-md-offset-3">
                  <button class="btn btn-primary" type="button"><i class="fa fa-floppy-o"></i>Save</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="clearix"></div>
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Guardian</h3>
            <div class="tile-body">
              <form class="row">
                <div class="form-group col-md-3">
                  <label class="control-label">Full Name</label>
                  <input class="form-control" type="text" placeholder="Enter full name">
                </div>
                <div class="form-group col-md-3">
                  <label class="control-label">Phone</label>
                  <input class="form-control" type="text" placeholder="Enter  Phone ">
                </div>
                <div class="form-group col-md-3">
                  <label class="control-label">Email</label>
                  <input class="form-control" type="text" placeholder="Enter  email">
                </div>
                <div class="form-group col-md-4 align-self-end">
                  <button class="btn btn-primary" type="button"><i class="fa fa-floppy-o"></i>Save</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>