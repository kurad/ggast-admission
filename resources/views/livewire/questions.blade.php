<div>
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
        <form wire:submit.prevent="storeQuestion">
            <div>
                <input type="hidden" name="applicant" value="{{Auth::user()->id}}">
            </div>
            <div class="form-group">
                <label for="q1">Question 1: Why do you want to attend Gashora Girls Academy of Science and Technology? </label>
                <div wire:ignore>
                    <textarea id="question1" class="form-control" name="q1" wire:model="question1"></textarea>
                    @error('question1') <span class="text-danger">{{ $message }}</span> @enderror
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

</div>

@push('scripts')
    <script>
      $('#question1').summernote({
        placeholder: 'Type your answer here',
        tabsize: 2,
        height: 300
      });
    </script>
@endpush