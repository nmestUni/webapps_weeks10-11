@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="col-sm-12">
            @if(session()->get('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
        </div>

        <a href="{{ route('cars.create')}}" class="btn btn-primary">New Car</a>

        <table class="table table-striped">
            <thead>
            <tr>
                <td>ID</td>
                <td>State Number</td>
                <td>Owner Id</td>
                <td>Color</td>
                <td colspan=2>Actions</td>
            </tr>
            </thead>
            <tbody>
            @foreach($cars as $car)
                <tr>
                    <td>{{$car->id}}</td>
                    <td>{{$car->stateNumber}}</td>
                    <td>{{$car->idNumber}}</td>
                    <td>{{$car->color}}</td>
                    <td>
                        <a href="{{ route('cars.edit',$car->id)}}" class="btn btn-primary">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('cars.destroy', $car->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection