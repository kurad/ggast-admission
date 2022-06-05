<!-- Modal Question -->
<div class="modal fade" id="questionModal" tabindex="-1" role="dialog" aria-labelledby="questionModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Answer the questions bellow</h5>
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
                  <label class="control-label">Applicant</label>
                  <input class="form-control" type="text" name="aname" value="{{$applicant_sib->firstname}} {{$applicant_sib->middlename}} {{$applicant_sib->lastname}}" disabled>
                </div>
                <div class="row">
                  <div class="col">
                    <label class="control-label">From</label>
                  <input class="form-control" type="date" name="from">
                  </div>
                  <div class="col">
                    <label class="control-label">To</label>
                    <input class="form-control" type="date" name="to">
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="control-label">School Attended</label>
                    <input class="form-control" type="text" name="schoolname" placeholder="Enter school name">
                </div>
                <div class="form-group">
                  <label class="control-label">School Principal</label>
                    <input class="form-control" type="text" name="schoolprincipal" placeholder="Enter Principal name">
                </div>
                <div class="form-group">
                  <label class="control-label">Principal Phone</label>
                    <input class="form-control" type="text" name="principalphone" placeholder="Enter Principal phone No">
                </div>
                <div class="row">
                  <div class="col">
                    <label class="control-label">Index No(S3)</label>
                    <input class="form-control" type="text" name="indexNo" placeholder="Enter Index No (S3 only)">
                  </div>
                  <div class="col">
                    <label class="control-label">Fee Paid</label>
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