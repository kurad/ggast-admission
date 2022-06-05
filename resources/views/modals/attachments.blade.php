<!-- Modal Attachments -->
<div class="modal fade" id="attachmentModal" tabindex="-1" role="dialog" aria-labelledby="attachmentModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Attach files</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="tile">
            <form name="save-multiple-files" method="POST"  action="{{route('storeAttachment')}}" accept-charset="utf-8" enctype="multipart/form-data">
          @csrf        
            <div class="row">
 
                <div class="col-md-12">
                    <div class="form-group">
                      <input class="form-control" type="hidden" name="aID" value="{{$applicant_sib->id}}">
                        <input type="file" name="files[]" placeholder="Choose files" multiple >
                    </div>
                    @error('files')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                   
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary" id="submit">Submit</button>
                </div>
            </div>     
        </form>
          </div>
      </div>
      
    </div>
  </div>
</div>