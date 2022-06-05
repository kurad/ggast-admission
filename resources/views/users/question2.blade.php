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
        <form method="POST" action="{{route('question2.store')}}">
            @csrf
            <div>
                <input type="hidden" name="applicant" value="{{Auth::user()->id}}">
            </div>
            <div class="form-group">
                <label for="q2"><b>Question 2: Why should we select you over the many other qualified candidates who will be applying? </b></label>
                
                    <textarea id="question2" class="form-control" name="question2"></textarea>
                    @error('question2') <span class="text-danger">{{ $message }}</span> @enderror
               
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
      $('#question2').summernote({
        placeholder: 'Type your answer here',
        tabsize: 2,
        height: 300
      });
    </script>
@endpush