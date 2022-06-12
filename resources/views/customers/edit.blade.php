@extends('layouts.app')

@section('content')
<div class="text-left" style="margin:40px;">
    <h2 class="text-center">Update Customer</h2>
    <div class="card-body">
        <form method="post" action="/edit_customer">
            @csrf

            <div class="row mb-3">

                <div class="col-md-6">
                    <input id="id" type="hidden" value="{{$customer->id}}" class="form-control" name="id">

                </div>
            </div>

            <div class="row mb-3">
                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Customer Name') }}</label>

                <div class="col-md-6">
                    <input id="name" type="text" value="{{$customer->name}}" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            
            
            <div class="row mb-3">
                <label for="location" class="col-md-4 col-form-label text-md-end">{{ __('Location') }}</label>

                <div class="col-md-6">
                    <input id="location" type="text" value="{{$customer->location}}"  class="form-control @error('location') is-invalid @enderror" name="location" value="{{ old('location') }}" required autocomplete="location" autofocus>

                    @error('location')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('Customer Number') }}</label>

                <div class="col-md-6">
                    <input id="phone" type="tel" value="{{$customer->phone}}" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                    @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>



            <div class="row mb-3">
                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                <div class="col-md-6">
                    <input id="email" type="tel" value="{{$customer->email}}" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                     
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Update') }}
                    </button>
                </div>
            </div>
        </form></div>
</div>
@endsection