<!DOCTYPE html>
<html lang="en">

<head>
    <title>Laravel 8 Dynamic Dependent Dropdown using jQuery Ajax</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>

    <div class="container">
        <h3>Laravel 8 Dynamic Dependent Dropdown using jQuery Ajax</h3>
        <div class="panel panel-primary">
            <div class="panel-heading">Laravel 8 Dynamic Dependent Dropdown using jQuery Ajax</div>
            <div class="panel-body">
                <div class="form-group">
                    <label for="country">Province:</label>
                    <select id="province" name="province_id" class="form-control">
                        <option value="" selected disabled>Select Country</option>
                        @foreach ($provinces as $key => $province)
                            <option value="{{ $key }}"> {{ $province }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="state">District:</label>
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
        </div>
    </div>
    <script>
        // when country dropdown changes
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

        // when state dropdown changes
        $('#district').on('change', function() {
            var districtID = $(this).val();
            if (districtID) {
                $.ajax({
                    type: "GET",
                    url: "{{ url('getSectors') }}?district_id=" + districtID,
                    success: function(res) {
                        if (res) {
                            $("#sector").empty();
                            $("#sector").append('<option>-- Select Sector</option>');
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

    </script>
</body>

</html>