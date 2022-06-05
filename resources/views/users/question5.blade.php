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
        <form method="POST" action="{{route('question5.store')}}">
            @csrf
            <div>
                <input type="hidden" name="applicant" value="{{Auth::user()->id}}">
            </div>
            <div class="form-group">
                <label for="q2"><b>Question 5: Tell us about a time where you were leading other people. What challenges did you face? What did you learn? </b></label>
                
                    <textarea id="question5" class="form-control" name="question5"></textarea>
                    @error('question1') <span class="text-danger">{{ $message }}</span> @enderror
               
            </div>
            <div class="form-group">
                <div></div>
                <button class="btn btn-secondary mr-2" type="button"><i class="fa fa-step-backward"></i>Back</button>
                <button class="btn btn-primary" type="submit">Save & Continue</button>
            </div>
        </form>
    </div>
</div>
</div>

</div>
@endsection

@push('scripts')
    <script>
      $('#question5').summernote({
        placeholder: 'Type your answer here',
        tabsize: 2,
        height: 300
      });
    </script>
@endpush