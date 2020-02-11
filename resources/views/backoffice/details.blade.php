{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>{{$name}}</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="box box-primary">
                {{csrf_field()}}
                <p>Locality: {{$locality}}</p>
                <p>Price: {{$price}}</p>
                <p>Open: {{$open}} to {{$close}}</p>
                <p>Phone: {{$phone}}</p>
                <p>Email: {{$email}}</p>
            </div>
        </div>
    </div>
    <a type="button" class="btn btn-warning">Edit</a>





@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
