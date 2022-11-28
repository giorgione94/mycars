@extends('layouts.app')

@include('alerts')
@include('errors')

@section('content')

    <div class="container-lg">

        <div id="title">
            <h1>Car List</h1>
        </div>

        <table class="table car table-bordered">
            <thead class="table-dark">
                <td>ID</td>
                <th>Brand</th>
                <th>Model</th>
                <th>Image</th>
                <th>Logo</th>
                <th>Delete</th>
                <th>Edit</th>
                <th>Show</th>
            </thead>
            <tbody class="table-dark table-striped">
                @foreach ($cars as $car)
                
                <tr>
                    <td class="col-1">{{ $car->id }}</td>

                    <td class="col-1">{{ $car->brand }}</td>

                    <td class="col-1">{{ $car->model }}</td>

                    <td class="col-3">
                        <img src="{{ asset('images/cars/' . $car->image) }}" class="border img-thumbnail w-25">
                    </td> <!-- Comando caricamento immagine -->

                    <td class="col-3">
                        <img src="{{ asset('images/logos/' . $car->logo) }}" class="border img-thumbnail w-25">
                    </td> <!-- Comando caricamento immagine -->

                    <td class="col-1">
                        <form action="{{ route('cars.destroy', $car) }}" method="POST">
                            @method('DELETE') @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>

                    <td class="col-1">
                        <a href="{{ route('cars.edit', $car) }}" class="btn btn-primary">
                            Edit
                        </a>
                    </td>

                    <td class="col-1"> 
                        <a href="{{ route('cars.show', $car) }}" class="btn btn-secondary">
                            Show
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div>
            <button class="btn btn-primary create">
                <a class="dropdown-item" href="{{ route('cars.create') }}">
                    Create Car
                </a>
            </button>
        </div>

    </div>

@endsection