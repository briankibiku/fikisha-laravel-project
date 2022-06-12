@extends('layouts.app')

@section('content')
<div class="text-left" style="margin:40px;">
    <h2 class="text-center">Create Order</h2>
    <div class="card-body">
        <form method="post" action="{{ route('create_order') }}">
            @csrf

            <div class="row mb-3">
                <label for="customer_name" class="col-md-4 col-form-label text-md-end">{{ __('Customer Name') }}</label>

                <div class="col-md-6">
                    <input id="customer_name" type="text" class="form-control @error('customer_name') is-invalid @enderror" name="customer_name" value="{{ old('customer_name') }}" required autocomplete="customer_name" autofocus>

                    @error('customer_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            
            <div class="row mb-3">
                <label for="customer_phone" class="col-md-4 col-form-label text-md-end">{{ __('Customer Number') }}</label>

                <div class="col-md-6">
                    <input id="customer_phone" type="tel" class="form-control @error('customer_phone') is-invalid @enderror" name="customer_phone" value="{{ old('customer_phone') }}" required autocomplete="customer_phone" autofocus>

                    @error('customer_phone')
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
                <label for="destination" class="col-md-4 col-form-label text-md-end">{{ __('Destination') }}</label>

                <div class="col-md-6">
                    <input id="destination" type="text" class="form-control @error('destination') is-invalid @enderror" name="destination" value="{{ old('destination') }}" required autocomplete="destination" autofocus>

                    @error('destination')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="priority" class="col-md-4 col-form-label text-md-end">{{ __('Select Priority') }}</label>

                <div class="col-md-6">
                    <select class="form-control" id="priority" name="priority" placeholder="Select Priority">
                        <option>High</option>
                        <option>Low</option>
                    </select>
                    @error('priority')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="description" class="col-md-4 col-form-label text-md-end">{{ __('Description') }}</label>

                <div class="col-md-6">
                    <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" required autocomplete="description">

                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>


            <div class="row mb-3">
                <label for="due_date" class="col-md-4 col-form-label text-md-end">{{ __('Due Date') }}</label>

                <div class="col-md-6">
                    <input id="due_date" type="text" class="form-control @error('due_date') is-invalid @enderror" name="due_date" required >

                    @error('due_date')
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