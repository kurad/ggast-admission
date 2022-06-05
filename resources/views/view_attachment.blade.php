@extends('layouts.app')
@section('content')
    <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Document: {{Auth::user()->name }}</h3>
            <div class="tile-body">
            	<iframe height="700px" width="800px" src="/storage/files/{{$attachment->name}}"></iframe>

            </div>
            <a href="{{route('home')}}" class="btn btn-secondary">Back</a>
        </div>
    </div>
            
@endsection