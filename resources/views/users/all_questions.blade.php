
@extends('layouts.app')
@section('content')
<div class="app-title">
  <div>
    <h1><i class="fa fa-edit"></i> Answers</h1>
    
  </div>

</div>
<div class="tile user-settings">
  <h5 class="line-head">Answer 1: Why do you want to attend Gashora Girls Academy of Science and Technology?</h5>
  <section class="invoice">
    <div class="row mb-12">

    </div>
    <div class="row invoice-info">
      @if(is_null($questions->question1))
      <div class="col-4">
        <p>No Answer submitted yet</p>
        <a href="{{route('question1')}}" class="btn btn-primary">Add your Answer</a>
      </div>
      @else
      <div class="col-12">
         {!! $questions->question1 !!} 
      </div>
      
      <div class="col-md-12">
            <a href="{{route('question1.edit',$questions->id)}}" class="btn btn-warning"><i class="fa fa-pencil"></i>Edit</a>
        </div>
      @endif
    </div>
    
  </section>
</div>

<div class="tile user-settings">
  <h5 class="line-head">Answer 2: Why should we select you over the many other qualified candidates who will be applying? </h5>
  <section class="invoice">
    <div class="row mb-12">

    </div>
    <div class="row invoice-info">
      @if(is_null($questions->question2))
      <div class="col-4">
        <p>No record found</p>
        <a href="#home" class="btn btn-primary" data-toggle="modal" data-target="#profileModal">Add your Answer</a>
      </div>
      @else
      <div class="col-12">
         {!! $questions->question2 !!} 
      </div>
      
      <div class="col-md-12">
            <a href="" class="btn btn-warning"><i class="fa fa-pencil"></i>Edit</a>
        </div>
      @endif
    </div>
    
  </section>
</div>

<div class="tile user-settings">
  <h5 class="line-head">Answer 3: Discuss 3 different career choices you would like to pursue in your life from what you like most to the one you like least </h5>
  <section class="invoice">
    <div class="row mb-12">

    </div>
    <div class="row invoice-info">
      @if(is_null($questions->question3))
      <div class="col-4">
        <p>No record found</p>
        <a href="#home" class="btn btn-primary" data-toggle="modal" data-target="#profileModal">Add your Answer</a>
      </div>
      @else
      <div class="col-12">
         {!! $questions->question3 !!} 
      </div>
      
      <div class="col-md-12">
            <a href="" class="btn btn-warning"><i class="fa fa-pencil"></i>Edit</a>
        </div>
      @endif
    </div>
    
  </section>
</div>

<div class="tile user-settings">
  <h5 class="line-head">Answer 4: Tell us about a time when you experienced failure (outside of school). How did it affect you and what did you learn from it? </h5>
  <section class="invoice">
    <div class="row mb-12">

    </div>
    <div class="row invoice-info">
      @if(is_null($questions->question4))
      <div class="col-4">
        <p>No record found</p>
        <a href="#home" class="btn btn-primary" data-toggle="modal" data-target="#profileModal">Add your Answer</a>
      </div>
      @else
      <div class="col-12">
         {!! $questions->question4 !!} 
      </div>
      
      <div class="col-md-12">
            <a href="" class="btn btn-warning"><i class="fa fa-pencil"></i>Edit</a>
        </div>
      @endif
    </div>
    
  </section>
</div>
<div class="tile user-settings">
  <h5 class="line-head">Answer 5: Tell us about a time where you were leading other people. What challenges did you face? What did you learn? </h5>
  <section class="invoice">
    <div class="row mb-12">

    </div>
    <div class="row invoice-info">
      @if(is_null($questions->question5))
      <div class="col-4">
        <p>No record found</p>
        <a href="#home" class="btn btn-primary" data-toggle="modal" data-target="#profileModal">Add your Answer</a>
      </div>
      @else
      <div class="col-12">
         {!! $questions->question5 !!} 
      </div>
      
      <div class="col-md-12">
            <a href="" class="btn btn-warning"><i class="fa fa-pencil"></i>Edit</a>
        </div>
      @endif
    </div>
    
  </section>
</div>

<div class="tile user-settings">
  <h5 class="line-head">Answer 6: Tell us about the sport you are comftable with </h5>
  <section class="invoice">
    <div class="row mb-12">

    </div>
    <div class="row invoice-info">
      @if(is_null($questions->question6))
      <div class="col-4">
        <p>No record found</p>
        <a href="#home" class="btn btn-primary" data-toggle="modal" data-target="#profileModal">Add your Answer</a>
      </div>
      @else
      <div class="col-12">
         {!! $questions->question6 !!} 
      </div>
      
      <div class="col-md-12">
            <a href="" class="btn btn-warning"><i class="fa fa-pencil"></i>Edit</a>
        </div>
      @endif
    </div>
    
  </section>
</div>
@endsection

