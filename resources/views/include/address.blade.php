<div class="tile user-settings">
  <h4 class="line-head">My Address</h4>
  <section class="invoice">
    <div class="row mb-4">

    </div>
    <div class="row invoice-info">
      @if($applicants->cell_id==null)
      <div class="col-4">
        <p>No Address added yet </p>
        <a href="#home" class="btn btn-primary" data-toggle="modal" data-target="#addressModal">Add Address</a>
      </div>
      @else
      <div class="col-4">
        @foreach($address as $addr)
        <address><strong>Province: {{$addr->pro_name}}</strong> <br><strong>District: {{$addr->district_name}}</strong><br><strong>Sector: {{$addr->sector_name}}</strong> <br><strong>Cell: {{$addr->cell_name}}</strong> </address>
        @endforeach
      </div>
      <div class="col-md-12 bg-light text-right">
            <a href="" class="btn btn-warning"><i class="fa fa-pencil"></i>Edit</a>
        </div>
      @endif
    </div>
    
  </section>
</div>

<!-- Modal address -->
<div class="modal fade" id="addressModal" tabindex="-1" role="dialog" aria-labelledby="addressModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Add your Address</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="tile">
            <form method="POST" action="{{route('storeAddress')}}">
               @csrf
            <div class="row">

              <div class="col-lg-12">
                
                  <div class="form-group">
                    <label for="exampleInputEmail1">Province</label>
                    
                    <select class="form-control" id="province" name="province_id">
                      <option>--Select Province--</option>
                      @foreach($provinces as $province)
                      <option value="{{$province->id}}">{{$province->pro_name}}</option>
                      @endforeach
                    </select>

                  </div>

                  <div class="form-group">
                    <label for="district">District:</label>
                    <select name="district_id" id="district" class="form-control"></select>
                </div>
                <div class="form-group">
                 <label for="sector">Sector:</label>
                 <select name="sector_id" id="sector" class="form-control"></select>
                </div>
                <div class="form-group">
                  <label for="cell">Cell:</label>
                  <select name="cell_id" id="cell" class="form-control"></select>
                </div>
              </div>

            <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
       </div>
        </form>
          </div>
  

      </div>
      
    </div>
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
        // when province dropdown changes
        $('#province').change(function() {
          var provinceID = $(this).val();
          if (provinceID) {
            $.ajax({
              type: "GET",
              url: "{{ url('getDistricts') }}?province_id=" + provinceID,
              success: function(res) {
                if (res) {
                  $("#district").empty();
                  $("#district").append('<option>Select District</option>');
                  $.each(res, function(key, value) {
                    $("#district").append('<option value="' + key + '">' + value +
                      '</option>');
                  });
                } else {
                  $("#district").empty();
                }
              }
            });
          } else {

            $("#district").empty();
            $("#sector").empty();
            $("#cell").empty();
          }
        });

        // when district dropdown changes
        $('#district').on('change', function() {
          var districtID = $(this).val();
          if (districtID) {
            $.ajax({
              type: "GET",
              url: "{{ url('getSectors') }}?district_id=" + districtID,
              success: function(res) {
                if (res) {
                  $("#sector").empty();
                  $("#sector").append('<option>Select Sector</option>');
                  $.each(res, function(key, value) {
                    $("#sector").append('<option value="' + key + '">' + value +
                      '</option>');
                  });

                } else {

                  $("#sector").empty();
                }
              }
            });
          } else {

            $("#sector").empty();
          }
        });

      // when sector dropdown changes
        $('#sector').on('change', function() {
          var sectorID = $(this).val();
          if (sectorID) {
            $.ajax({
              type: "GET",
              url: "{{ url('getCells') }}?sector_id=" + sectorID,
              success: function(res) {
                if (res) {
                  $("#cell").empty();
                  $("#cell").append('<option>Select Cell</option>');
                  $.each(res, function(key, value) {
                    $("#cell").append('<option value="' + key + '">' + value +
                      '</option>');
                  });

                } else {

                  $("#cell").empty();
                }
              }
            });
          } else {

            $("#cell").empty();
          }
        });

      </script>