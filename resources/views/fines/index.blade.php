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

        <form action="{{ route('fines.create') }} " method="post">
            @csrf
            <button class="btn btn-danger" type="submit">Generate Random Fines</button>
        </form>

        <table class="table table-striped">
            <thead>
            <tr>
                <td>ID</td>
                <td>Car</td>
                <td>Light</td>
                <td>Fine</td>
                <td>Fix Date</td>
            </tr>
            </thead>
            <tbody>
            @foreach($carAtLights as $fine)
                <tr>
                    <td>{{$fine->id}}</td>
                    <td>{{$fine->car->stateNumber}}</td>
                    <td>{{$fine->lightName->name}}</td>
                    <td>{{$fine->fineType->fineName}}</td>
                    <td>{{$fine->created_at}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
@endsection