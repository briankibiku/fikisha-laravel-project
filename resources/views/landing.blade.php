@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Landing Page') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <h2>Choose to login or register</h2>                      
                    @endif

                    {{ __('This is the landing page') }}
                    <a class="btn btn-primary" href="/login">Login</a>
                    <a class="btn btn-success" href="/register">Register</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
