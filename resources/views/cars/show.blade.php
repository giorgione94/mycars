@extends('layouts.app')

@section('content')
    <div class="container-lg">
        <table class="table car table-bordered">
            <thead class="table-dark">
                <th>ID</th>
                <th>Brand</th>
                <th>Model</th>
                <th>Image</th>
                <th>Logo</th>
            </thead>
            <tbody class="table-dark table-striped">
                <tr>
                    <td class="col-2">{{ $car->id }} </td>
                    <td class="col-2">{{ $car->brand }}</td>
                    <td class="col-2">{{ $car->model }}</td>
                    <td class="col-3"><img src="{{ asset('images/cars/' . $car->image) }}" class="border img-thumbnail w-25"></td>
                    <td class="col-3"><img src="{{ asset('images/logos/' . $car->logo) }}" class="border img-thumbnail w-25"></td>
                </tr>
            </tbody>
        </table>
        
        <div>
            <button class="btn btn-primary create">
                <a class="dropdown-item" href="{{ route('cars.index') }}">
                    List Car
                </a>
            </button>
        </div>
    </div>
@endsection