@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="form-control bg-gradient create">

                    <form action="{{ route('cars.update', $car) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT') @csrf

                        <div class="m-3">
                            <input class="form-control" type="text" name="brand" id="brand" placeholder="brand"
                                value="{{ $car->brand }}">
                        </div>

                        <div class="m-3">
                            <input type="text" name="model" id="model" value="{{ $car->model }}" class="form-control">
                        </div>

                        <div class="m-3">
                            <img src="{{ asset('images/cars/' . $car->image) }}"
                                class="card-img-top img-thumbnail w-25">
                            <input type="file" name="image" class="form-control mt-3">
                        </div>

                        <div class="m-3">
                            <img src="{{ asset('images/logos/' . $car->logo) }}"
                                class="card-img-top img-thumbnail w-25">
                            <input type="file" name="logo" class="form-control mt-3">
                        </div>

                        <div class="d-grid gap-2 col-6 mx-auto m-3">
                            <button class="btn btn-primary" type="submit">Update</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    @endsection
