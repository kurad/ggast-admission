<div class="tile user-settings">
  <h4 class="line-head">Questions</h4>
  <section class="invoice">
    <div class="row mb-4">
      
    </div>
    <div class="row invoice-info">

      @if($questions->isEmpty())
      <div class="col-12">
        <p><strong>No answers added yet </strong></p>
        <a href="#home" class="btn btn-primary" data-toggle="modal" data-target="#questionModal">Add Answers</a>
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
                <th>Question 1</th>
                <th>Question 2</th>
                <th>Question 3</th>
                <th>Question 4</th>
                <th>Question 5</th>
                
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($questions as $question)
              <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{$question->question1}}</td>
                <td>{{$question->question2}}</td>
                <td>{{$question->question3}}</td>
                <td>{{$question->question4}}</td>
                <td>{{$question->question5}}</td>
                
                <td>
                  
                  <a href="{{route('viewAttachment',$question->id)}}" class="btn btn-success btn-sm"><i class="fa fa-eye"></i>View</a>
                  <a href="{{route('deleteAttachment',$question->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>Remove</a>
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