
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<body>
  <div class="tile user-settings">
  <div style="text-align: center;">
        <img src="{{ public_path('logo.PNG') }}" style="width: 70px; height: 70px">

    </div>
    <strong><center>GASHORA GIRLS ACADEMY OF SCIENCE AND TECHNOLOGY</center></strong><hr>
  Applicant Names: <strong> {{$application->firstname}} {{$application->middlename}} {{$application->lastname}}</strong><br><br>
  
  <table class="table ">
    <tr>
      <td>Province: </td><td><strong>{{$application->pro_name}}</strong></td>
      <td>District: </td><td><strong>{{$application->district_name}}</strong></td>
      
    </tr>
    <tr>
      <td>Sector: </td><td><strong>{{$application->sector_name}}</strong></td>
      <td>Cell: </td><td><strong>{{$application->cell_name}}</strong></td>
    </tr>
    <tr>
      <td>Date of Birth:</td><td><strong>{!! date('d-m-Y', strtotime($application->dob)) !!}</strong></td>
      <td>Email:</td><td><strong>{{$application->email}}</strong></td>
    </tr>
    <tr>
      <td>Combination </td><td>Choice 1:<strong> {{$application->combination}}</strong><br>Choice 2: <strong>{{$application->option2}}</strong></td><td>Index No:</td><td><strong>{{$application->indexNo}}</strong></td>
    </tr>
  </table>
  <strong>PARENTS/GUARDIANS’ INFORMATION:</strong><br><br>

  <table class="table ">
    <tr>
      <td>Mother's Name: </td><td><strong>
        @if(is_null($application->mothername))
          --
        @else
        {{$application->mothername}}
        @endif
      </strong></td>
      <td  style="font-size: small;">Is she alive? <strong>
        @if($application->malive==1)
          Yes
        @elseif($application->malive==0)
        No
        @else
        --
        @endif
      </strong> </td>
      <td style="font-size: small;">
        Do you live together?
        <strong>
        @if($application->mlive_together==1)
          Yes
        @elseif($application->mlive_together==0)
        No
        @else
        --
        @endif
      </strong>
      </td>
      
    </tr>
    <tr>
      <td>Telephone: </td>
      <td><strong>
        @if(!is_null($application->mphone))
        {{$application->mphone}}
        @else
        --
        @endif</strong>
      </td>
      <td>Email: </td>
      <td><strong>
        @if(!is_null($application->memail))
        {{$application->memail}}
        @else
        --
        @endif</strong>
      </td>
    </tr>
    <tr>
      <td>Employer: </td>
      <td><strong>
        @if(!is_null($application->memployer))
        {{$application->memployer}}
        @else
        --
        @endif</strong>
      </td>
      <td>Profession: </td>
      <td><strong>
        @if(!is_null($application->mprofession))
        {{$application->mprofession}}
        @else
        --
        @endif</strong>
      </td>
    </tr>

    <tr>
      <td>Father's Name: </td><td><strong>
        @if(is_null($application->fathername))
          --
        @else
        {{$application->fathername}}
        @endif
      </strong></td>
      <td  style="font-size: small;">Is he alive? <strong>
        @if($application->falive==1)
          Yes
        @elseif($application->falive==0)
        No
        @else
        --
        @endif
      </strong> </td>
      <td style="font-size: small;">
        Do you live together?
        <strong>
        @if($application->flive_together==1)
          Yes
        @elseif($application->flive_together==0)
        No
        @else
        --
        @endif
      </strong>
      </td>
      
    </tr>
    <tr>
      <td>Telephone: </td>
      <td><strong>
        @if(!is_null($application->fphone))
        {{$application->fphone}}
        @else
        --
        @endif</strong>
      </td>
      <td>Email: </td>
      <td><strong>
        @if(!is_null($application->femail))
        {{$application->femail}}
        @else
        --
        @endif</strong>
      </td>
    </tr>
    <tr>
      <td>Employer: </td>
      <td><strong>
        @if(!is_null($application->femployer))
        {{$application->femployer}}
        @else
        --
        @endif</strong>
      </td>
      <td>Profession: </td>
      <td><strong>
        @if(!is_null($application->fprofession))
        {{$application->fprofession}}
        @else
        --
        @endif</strong>
      </td>
    </tr>
  </table>
  <strong>Student’s Previous School</strong><br><br>

  <table class="table">
    <thead>
              <tr>
                <th>#</th>
                <th>From</th>
                <th>To </th>
                <th>School</th>
                <th>Principal</th>
                <th>Phone</th>
                <th>Fees</th>
              </tr>
            </thead>
            <tbody>
              @foreach($schools as $items)
              <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{!! date('Y', strtotime($items->from)) !!} </td>
                <td>
                  {!! date('Y', strtotime($items->to)) !!}
                </td>
                
                <td>{{$items->schoolname}}</td>
                
                <td>
                  {{$items->school_principal}}
                </td>
                <td>
                  {{$items->principal_phone}}
                </td>
                <td>
                  {{$items->fees}}
                </td>
              </tr>
              @endforeach
            </tbody>
  </table>
</div>
</body>
</html>


