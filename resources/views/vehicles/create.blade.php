@extends('layouts.app')

@section('content')
<div class="text-left" style="margin:40px;">
    <h2 class="text-center">Add Vehicle</h2>
    <div class="card-body">
        <form method="post" action="{{ route('create_vehicle') }}">
            @csrf

            <div class="row mb-3">
                <label for="vehicle_vin" class="col-md-4 col-form-label text-md-end">{{ __('Vehicle VIN') }}</label>

                <div class="col-md-6">
                    <input id="vehicle_vin" type="text" class="form-control @error('vehicle_vin') is-invalid @enderror" name="vehicle_vin" value="{{ old('vehicle_vin') }}" required autocomplete="vehicle_vin" autofocus>

                    @error('vehicle_vin')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            
            
            <div class="row mb-3">
                <label for="load_capacity" class="col-md-4 col-form-label text-md-end">{{ __('Load Capacity (KG)') }}</label>

                <div class="col-md-6">
                    <input id="load_capacity" type="text" class="form-control @error('name') is-invalid @enderror" name="load_capacity" value="{{ old('load_capacity') }}" required autocomplete="load_capacity" autofocus>

                    @error('load_capacity')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="driver_phone" class="col-md-4 col-form-label text-md-end">{{ __('Driver Number') }}</label>

                <div class="col-md-6">
                    <input id="driver_phone" type="tel" class="form-control @error('driver_phone') is-invalid @enderror" name="driver_phone" value="{{ old('driver_phone') }}" required autocomplete="driver_phone" autofocus>

                    @error('driver_phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Create') }}
                    </button>
                </div>
            </div>
        </form></div>
</div>
@endsection