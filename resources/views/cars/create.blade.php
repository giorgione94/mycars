@extends('layouts.app')

@section('content')
    <div class="container-lg">
        <form action="{{ route('cars.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="create">
                <input class="m-2" type="text" name="brand" id="brand" placeholder="Brand">
            </div>
            
            <div class="create">
                <input class="m-2" type="text" name="model" id="model" placeholder="Model">
            </div>
            
            <div class="create">
                <label for="image" class="m-2">Image</label>   
                <input class="m-2" type="file" name="image" class="form-control" id="image">
            </div>

            <div class="create">
                <label for="image" class="m-2">Logo</label>   
                <input class="m-2" type="file" name="logo" class="form-control" id="logo">
            </div>

            <div class="create">
                <button class="m-2" type="submit">Submit</button>
            </div>
        </form>

        <div>
            <button class="btn btn-primary create m-2">
                <a class="dropdown-item" href="{{ route('cars.index') }}">
                    List Car
                </a>
            </button>
        </div>
        
    </div>
@endsection