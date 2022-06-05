@extends('layouts.app')
@section('content')
        <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Form Samples</h1>
          <p>Sample forms</p>
        </div>

      </div>
            <div class="row">
        <div class="col-md-12">
          <div class="tile">

    <div class="title-body">
        <form method="POST" action="{{route('question1.store.edit')}}">
            @csrf
            <div>
                <input type="hidden" name="applicant" value="{{Auth::user()->id}}">
            </div>
            <div class="form-group">
                <label for="q1"><strong>Question 1: Why do you want to attend Gashora Girls Academy of Science and Technology? </strong></label>
                
                    <textarea id="question1" class="form-control" name="question1">
                        {!! $question->question1 !!} 
                    </textarea>
                    @error('question1') <span class="text-danger">{{ $message }}</span> @enderror
                
            </div>
            <div class="form-group">
                <div></div>
                
                <button class="btn btn-primary" type="submit">Save changes</button>
            </div>
        </form>
    </div>
</div>
</div>

</div>
@endsection

@push('scripts')
    <script>
      $('#question1').summernote({
        placeholder: 'Type your answer here',
        tabsize: 2,
        height: 300
      });
    </script>
@endpush