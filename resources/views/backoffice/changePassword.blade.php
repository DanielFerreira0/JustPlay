{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Change Password</h1>
@stop

@section('content')
 <form>
     <input type="password" name="old-password" placeholder="Old Password"><br>
     <input type="password" name="new-password" placeholder="New Password"><br>
     <input type="password" name="confirm-password" placeholder="Confirm Password"><br>
     <input type="submit" name="submit" value="Save">
 </form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
