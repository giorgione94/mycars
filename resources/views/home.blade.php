@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>

            <div>
                <button class="btn btn-primary create m-2">
                    <a class="dropdown-item" href="{{ route('cars.index') }}">
                        List Car
                    </a>
                </button>
            </div>
        </div>
    </div>
    
</div>
@endsection
