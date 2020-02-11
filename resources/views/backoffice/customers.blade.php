{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Users Dashboard</h1>
@stop

@section('content')<br>
<table class="table thead-dark">
    <thead>
    <tr>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Details</th>
    </tr>
    </thead>
    <tbody>
    @foreach($customers as $customer)
        <tr>
            <td>{{$customer->name}}</td>
            <td>{{$customer->email}}</td>
            <td>
                <button type="button" class="btn btn-info">Details</button>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<br><br>

<h4>Add a new User</h4><br>
<form method="post" style="padding-bottom: 5%">
    @csrf

    <div class="form-group">
        <label for="formGroupExampleInput">First Name</label>
        <input type="text" class="form-control" name="name_form">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Last Name</label>
        <input type="text" class="form-control" name="lastname_form">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Email</label>
        <input type="email" class="form-control" name="email_form">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Password</label>
        <input type="password" class="form-control" name="password_form">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Confirm Password</label>
        <input type="password" class="form-control" name="confirm_password_form">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Phone</label>
        <input type="number" class="form-control" name="phone_form">
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
