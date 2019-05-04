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

        <a href="{{ route('lights.create')}}" class="btn btn-primary">New Light</a>

        <table class="table table-striped">
            <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Address</td>
                <td>Coordinate X</td>
                <td>Coordinate Y</td>
                <td colspan=2>Actions</td>
            </tr>
            </thead>
            <tbody>
            @foreach($lightnames as $lightname)
                <tr>
                    <td>{{$lightname->id}}</td>
                    <td>{{$lightname->name}}</td>
                    <td>{{$lightname->address}}</td>
                    <td>{{$lightname->location->coordinateX}}</td>
                    <td>{{$lightname->location->coordinateY}}</td>
                    <td>
                        <a href="{{ route('lights.edit',$lightname->id)}}" class="btn btn-primary">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('lights.destroy', $lightname->id)}}" method="post">
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