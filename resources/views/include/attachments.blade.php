
<div class="tile user-settings">
  <h4 class="line-head">Attachments <small>(Attach report cards(S1,S2,S3), Birth certificate and one recent Passport photo)</small></h4>
  <section class="invoice">
    <div class="row mb-4">
      
    </div>
    <div class="row invoice-info">

      @if($attachments->isEmpty())
      <div class="col-12">
        <p><strong>No attachment added yet </strong></p>
        <p>   Attach report cards(S1,S2,S3), Birth certificate and one recent Passport photo</p>
        <a href="#home" class="btn btn-primary" data-toggle="modal" data-target="#attachmentModal">Add Attachment</a>
      </div>
      @else
      <div class="col-12">
               @if(Session::has('message'))
                  <div class="alert alert-success">
                      {{Session::get('message')}}
                  </div>
               @endif
          <table class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>Item</th>
                
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($attachments as $attachment)
              <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{$attachment->name}}</td>
                
                <td>
                  
                  <a href="{{route('viewAttachment',$attachment->id)}}" class="btn btn-success btn-sm"><i class="fa fa-eye"></i>View</a>
                  <a href="{{route('deleteAttachment',$attachment->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>Remove</a>

                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        
        <a href="#home" class="btn btn-primary" data-toggle="modal" data-target="#attachmentModal">Add Another</a>
      </div>

      @endif
    </div>
  </section>
</div>

@include('modals.attachments')