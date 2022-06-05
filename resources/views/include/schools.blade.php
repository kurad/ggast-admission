<div class="tile user-settings">
  <h4 class="line-head">School Attended</h4>
  <section class="invoice">
    <div class="row mb-4">

    </div>
    <div class="row invoice-info">
      @if($schools->isEmpty())
      <div class="col-4">
        <p><strong>No previous school information added yet </strong></p>
        <a href="#home" class="btn btn-primary" data-toggle="modal" data-target="#schoolModal">Add school information</a>
      </div>
      @else
      <div class="col-12">
               
          <table class="table">
            <thead>
              <tr>
                <th>From</th>
                <th>To </th>
                <th>School Name</th>
                <th>School Principal</th>
                <th>Principal Phone</th>
                <th>Fees</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($schools as $school)
              <tr>
                <td>{!! date('d-m-Y', strtotime($school->from)) !!}</td>
                <td>{!! date('d-m-Y', strtotime($school->to)) !!}</td>
                <td>{{$school->schoolname}}</td>
                <td>
                  @if($school->school_principal!=null)
                  {{$school->school_principal}}
                  @else
                  --
                  @endif
                </td>
                <td>
                  @if($school->principal_phone!=null)
                  {{$school->principal_phone}}
                  @else
                  --
                  @endif
                </td>
                <td>{{$school->fees}}</td>
                
                <td><a href="" class="btn btn-warning"><i class="fa fa-pencil"></i></a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
        
        <a href="#home" class="btn btn-primary" data-toggle="modal" data-target="#schoolModal">Add Another</a>
      </div>

      @endif
    </div>
  </section>
</div>

<!-- Modal previous school -->
<div class="modal fade" id="schoolModal" tabindex="-1" role="dialog" aria-labelledby="schoolModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Add previous school information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="tile">
            <form method="POST" action="{{route('storeSchool')}}">
                @csrf
                <div class="form-group">
                  <input class="form-control" type="hidden" name="aID" value="{{$applicant_sib->id}}">
                  <label class="control-label"><strong>Applicant</strong></label>
                  <input class="form-control" type="text" name="aname" value="{{$applicant_sib->firstname}} {{$applicant_sib->middlename}} {{$applicant_sib->lastname}}" disabled>
                </div>
                <div class="row">
                  <div class="col">
                    <label class="control-label"><strong>From</strong></label>
                  <input class="form-control" type="date" name="from">
                  </div>
                  <div class="col">
                    <label class="control-label"><strong>To</strong></label>
                    <input class="form-control" type="date" name="to">
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="control-label"><strong>School Attended</strong></label>
                    <input class="form-control" type="text" name="schoolname" placeholder="Enter school name">
                </div>
                <div class="form-group">
                  <label class="control-label"><strong>School Principal</strong></label>
                    <input class="form-control" type="text" name="schoolprincipal" placeholder="Enter Principal name">
                </div>
                <div class="form-group">
                  <label class="control-label"><strong>Principal Phone</strong></label>
                    <input class="form-control" type="text" name="principalphone" placeholder="Enter Principal phone No">
                </div>
                <div class="row">

                  <div class="col">
                    <label class="control-label"><strong>Fee Paid</strong></label>
                    <input class="form-control" type="text" name="fee" placeholder="How much were you paying?">
                  </div>
                </div>
                <br>
              <button class="btn btn-primary" type="submit"><i class="fa fa-floppy-o"></i>Save</button>
                
              </form>
          </div>
      </div>
      
    </div>
  </div>
</div>