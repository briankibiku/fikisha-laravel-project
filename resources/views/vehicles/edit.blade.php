@extends('layouts.app')

@section('content')
<div class="text-left" style="margin:40px;">
    <h2 class="text-center">Update Vehicle</h2>
    <div class="card-body">
        <form method="post" action="/edit_vehicle">
            @csrf

            <div class="row mb-3">

                <div class="col-md-6">
                    <input id="id" type="hidden" value="{{$vehicle->id}}" class="form-control" name="id">

                </div>
            </div>

            <div class="row mb-3">
                <label for="vehicle_vin" class="col-md-4 col-form-label text-md-end">{{ __('Vehicle VIN') }}</label>

                <div class="col-md-6">
                    <input id="vehicle_vin" type="text" value="{{$vehicle->vehicle_vin}}" class="form-control @error('vehicle_vin') is-invalid @enderror" name="vehicle_vin" value="{{ old('vehicle_vin') }}" required autocomplete="vehicle_vin" autofocus>

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
                    <input id="load_capacity" type="text" value="{{$vehicle->load_capacity}}"  class="form-control @error('name') is-invalid @enderror" name="load_capacity" value="{{ old('load_capacity') }}" required autocomplete="load_capacity" autofocus>

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
                    <input id="driver_phone" type="tel" value="{{$vehicle->driver_phone}}" class="form-control @error('driver_phone') is-invalid @enderror" name="driver_phone" value="{{ old('driver_phone') }}" required autocomplete="driver_phone" autofocus>

                    @error('driver_phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>



            <div class="row mb-3">
                <label for="status" class="col-md-4 col-form-label text-md-end">{{ __('Status') }}</label>

                <div class="col-md-6">
                    {{-- <input id="status" type="tel" value="{{$vehicle->status}}" class="form-control @error('status') is-invalid @enderror" name="status" value="{{ old('status') }}" required autocomplete="status" autofocus> --}}
                    <select class="form-control" id="status"  value="{{$vehicle->status}}" name="status" placeholder="Select Status">
                        <option>Vehicle is currently {{$vehicle->status}}</option>
                        <option>Available</option>
                        <option>Loading</option>
                        <option>On Transit</option>
                    </select>
                    @error('status')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary" >
                        {{ __('Update') }}
                    </button>
                </div>
            </div>
        </form></div>
</div>
@endsection