@extends('layouts.app')

@section('content')
    <div class="container-lg container">

        <form action="{{ route('cars.update', $car) }}" method="POST" enctype="multipart/form-data">
            @method('PUT') @csrf

            <div class="edit">
                <input type="text" name="brand" id="brand" placeholder="brand" value="{{ $car->brand }}" class="m-2">
            </div>

            <div class="edit">
                <input type="text" name="model" id="model" placeholder="model" value="{{ $car->model }}" class="m-2">
            </div>

            <div class="edit">
                <label for="image" class="m-2">Image</label>
                <input type="file" name="image" id="image" class="m-2">
            </div>

            <div class="edit">
                <label for="image" class="m-2">Logo</label>   
                <input class="m-2" type="file" name="logo" class="form-control" id="logo">
            </div>

            <div class="edit">
                <button type="submit" class="m-2">Edit</button>
            </div>

        </form>
    </div>
@endsection