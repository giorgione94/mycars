@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="form-control bg-gradient create">
                    <form action="{{ route('cars.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="m-3">
                            <label for="brand" class="form-label">Brand</label>
                            <input type="text" name="brand" class="form-control">
                        </div>

                        <div class="m-3">
                            <label for="model" class="form-label">Model</label>
                            <input type="text" name="model" class="form-control">
                        </div>

                        <div class="m-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>

                        <div class="m-3">
                            <label for="logo" class="form-label">Logo</label>
                            <input type="file" name="logo" class="form-control">
                        </div>

                        <div class="d-grid gap-2 col-6 mx-auto m-3">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </form>

                    <div class="m-3">
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-primary">
                                <a class="dropdown-item" href="{{ route('cars.index') }}">
                                    List Car
                                </a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
