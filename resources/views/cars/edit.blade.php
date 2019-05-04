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
            <form method="post" action="{{ route('cars.update', $car->id) }}">
                @method('PATCH')
                @csrf
                <table>
                    <tr>
                        <td>State Number: </td>
                        <td> <input type="text" name="state_number" value={{ $car->stateNumber }}> </td>
                    </tr>
                    <tr>
                        <td>Owner Id: </td>
                        <td> <input type="text" name="id_number" value={{ $car->idNumber }}> </td>
                    </tr>
                    <tr>
                        <td>Color: </td>
                        <td> <input type="color" name="color" value={{ $car->color }}> </td>
                    </tr>
                </table>
                <br>
                <button type="submit" class="btn btn-primary-outline">Update</button>
            </form>
    </div>
@endsection