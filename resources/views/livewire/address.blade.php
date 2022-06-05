<div>

    <div class="form-group row">

        <label for="province" class="col-md-4 col-form-label text-md-right">Province</label>


        <div class="col-md-6">

            <select wire:model="selectedProvinces" class="form-control">

                <option value="" selected>Choose province</option>

                @foreach($provinces as $province)

                    <option value="{{ $province->id }}">{{ $province->pro_name }}</option>

                @endforeach

            </select>

        </div>

    </div>


    @if (!is_null($selectedProvinces))

        <div class="form-group row">

            <label for="city" class="col-md-4 col-form-label text-md-right">District</label>


            <div class="col-md-6">

                <select class="form-control" name="city_id">

                    <option value="" selected>Choose District</option>

                    @foreach($districts as $district)

                        <option value="{{ $district->id }}">{{ $district->district_name }}</option>

                    @endforeach

                </select>

            </div>

        </div>

    @endif

</div>