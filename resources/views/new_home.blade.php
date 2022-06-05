@extends('layouts.app')
@section('content')
        
<div class="app-title">
  <div>
    <h1><i class="fa fa-file-text-o"></i> Applicant Dashboard</h1><br>
    <p>Welcome {{Auth::user()->name}}</p>
  </div>
  <ul class="app-breadcrumb breadcrumb">
    
    <li class="breadcrumb-item"><h5 class="text-right">{{date('d-m-Y');}}</h5></li>
  </ul>
</div>


@include('new_profile')


@endsection

@section('scripts')

  <script type="text/javascript">
    $('#province').change(function(){
    var province_id = $(this).val();    
    if(province_id){
        $.ajax({
           type:"GET",
           url:"{{url('getDistricts')}}?province_id="+province_id,
           success:function(res){ 
           console.log(res);              
            if(res){
                $("#district").empty();
                $("#district").append('<option>Select District</option>');
                $.each(res,function(key){
                    $("#district").append('<option value="'+res[key].id+'">'+res[key].district_name+'</option>');
                });
           
            }else{
               $("#district").empty();
            }
           }
        });
    }else{
        $("#district").empty();
        $("#sector").empty();
    }      
   });
    $('#state').on('change',function(){
    var stateID = $(this).val();    
    if(stateID){
        $.ajax({
           type:"GET",
           url:"{{url('get-city-list')}}?state_id="+stateID,
           success:function(res){               
            if(res){
                $("#city").empty();
                $.each(res,function(key,value){
                    $("#city").append('<option value="'+res[key].id+'">'+res[key].title+'</option>');
                });
           
            }else{
               $("#city").empty();
            }
           }
        });
    }else{
        $("#city").empty();
    }
        
   });
</script>
@endsection