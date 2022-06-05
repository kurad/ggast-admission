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
        <form method="POST" action="{{route('question3.store')}}">
            @csrf
            <div>
                <input type="hidden" name="applicant" value="{{Auth::user()->id}}">
            </div>
            <div class="form-group">
                <label for="q1"><b>Question 3: Discuss 3 different career choices you would like to pursue in your life from what you like most to the one you like least.</b> </label>
                <div wire:ignore>
                    <textarea id="question3" class="form-control" name="question3"></textarea>
                    @error('question3') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="form-group">
                <div></div>
                <button class="btn btn-secondary mr-1" type="button" wire:click="decreaseStep()"><i class="fa fa-step-backward"></i>Back</button>
                
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
      $('#question3').summernote({
        placeholder: 'Type your answer here',
        tabsize: 2,
        height: 300
      });
    </script>
@endpush