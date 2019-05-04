@extends('layouts.app')

@section('content')
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
        @endif
        <form method="post" action="{{ route('lights.store') }}">
            @csrf
            <table>
                <tr>
                    <td>Name: </td>
                    <td> <input type="text" name="name"> </td>
                </tr>
                <tr>
                    <td>Address: </td>
                    <td> <input type="text" name="address"> </td>
                </tr>
                <tr>
                    <td>Coordinate X: </td>
                    <td> <input type="text" name="cord_x"> </td>
                </tr>
                <tr>
                    <td>Coordinate Y: </td>
                    <td> <input type="text" name="cord_y"> </td>
                </tr>
            </table>
            <br>
            <button type="submit" class="btn btn-primary-outline">Add Light</button>
        </form>
    </div>
@endsection