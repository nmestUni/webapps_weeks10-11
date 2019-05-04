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
            <form method="post" action="{{ route('cars.store') }}">
                @csrf
                <table>
                    <tr>
                        <td>State Number: </td>
                        <td> <input type="text" name="state_number"> </td>
                    </tr>
                    <tr>
                        <td>Owner Id: </td>
                        <td> <input type="text" name="id_number"> </td>
                    </tr>
                    <tr>
                        <td>Color: </td>
                        <td> <input type="color" name="color"> </td>
                    </tr>
                </table>
                <br>
                <button type="submit" class="btn btn-primary-outline">Add Car</button>
            </form>
    </div>
@endsection