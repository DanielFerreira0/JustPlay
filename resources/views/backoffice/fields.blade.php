{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Fields Dashboard</h1>
@stop

@section('content')
    <table class="table thead-dark">
        <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Details</th>
        </tr>
        </thead>
        <tbody>
        @foreach($fields as $field)
            <tr>
                <td>{{$field->name}}</td>
                <td>{{$field->email}}</td>
                <td>
                    <a class="btn btn-info" href="details/{{$field->id}}">Details</a>
                    <a type="button" class="btn btn-danger" href="delete/{{$field->id}}">Delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <br><br>

    <h4>Add a new Field</h4><br>
    <form method="post" style="padding-bottom: 5%">
        @csrf

        <div class="form-group">
            <label for="formGroupExampleInput">Name</label>
            <input type="text" class="form-control" name="name_form">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Locality</label>
            <input type="text" class="form-control" name="locality_form">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Price p/hour</label>
            <input type="number" class="form-control" name="price_form">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Opening Hours</label>
            <div class="row">
                <div class="col">
                    <input type="number" class="form-control" name="open_form" placeholder="Open">
                </div>
                <div class="col">
                    <input type="number" class="form-control" name="close_form" placeholder="Close">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Phone</label>
            <input type="number" class="form-control" name="phone_form">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Email</label>
            <input type="email" class="form-control" name="email_form">
        </div>

        <button type="submit" class="btn btn-warning  btn-lg btn-block">Save</button>

    </form>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
