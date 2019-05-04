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
        <form method="post" action="{{ route('lights.update', $lightName->id) }}">
            @method('PATCH')
            @csrf
            <table>
                <tr>
                    <td>Name: </td>
                    <td> <input type="text" name="name" value={{ $lightName->name }}> </td>
                </tr>
                <tr>
                    <td>Name: </td>
                    <td> <input type="text" name="address" value={{ $lightName->address }}> </td>
                </tr>
                <tr>
                    <td>Coordinate X: </td>
                    <td> <input type="text" name="cord_x" value="{{ $lightName->location->coordinateX }}"> </td>
                </tr>
                <tr>
                    <td>Coordinate Y: </td>
                    <td> <input type="text" name="cord_y" value="{{ $lightName->location->coordinateY }}"> </td>
                </tr>
            </table>
            <br>
            <button type="submit" class="btn btn-primary-outline">Update</button>
        </form>
    </div>
@endsection