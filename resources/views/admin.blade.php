@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{url('cars')}}">Manage Cars</a>
        <br>
        <a href="{{url('lights')}}">Manage Lights</a>
        <br>
        <a href="{{url('fines')}}">Manage Fines</a>
    </div>
@endsection