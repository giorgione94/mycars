@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title m-3">{{ $car->brand }} {{ $car->model }}</h5>
                        <p class="card-text m-3">{{ $car->description }} </p>
                    </div>
                    <div class="d-flex justify-content-center">
                        <img src="{{ asset('images/cars/' . $car->image) }}" class="border img-fluid img-thumbnail m-3">
                    </div>
                </div>
            </div>

            <div class="m-3">
                <button class="btn btn-primary create">
                    <a class="dropdown-item" href="{{ route('cars.index') }}">
                        List Car
                    </a>
                </button>
                <button class="btn btn-primary create">
                    <a href="{{ route('cars.edit', $car) }}" class="dropdown-item">
                        Edit
                    </a>
                </button>
            </div>
        </div>
    </div>
@endsection
