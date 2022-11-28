@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('User') }}</div>

                    <div class="card-body">
                        {{ Auth::user()->name }}
                        {{ Auth::user()->email }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

