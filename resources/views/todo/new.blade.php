@extends('layouts.common')

@section('style')
   <link href="{{ asset('/css/todo/common.css') }}" rel="stylesheet" type="text/css">
   <link href="{{ asset('/css/todo/new.css') }}"  rel="stylesheet" type="text/css">
@endsection

@section('contents')
<form action="/todo/new" method="post">
<table>
    @csrf
    <tr>
        <th>title:</th><td><input type="text" name="title"></td>
    </tr>
    <tr>
        <th>details:</th><td><input type="text" name="details"></td>
    </tr>
    <tr>
        <th></th><td><input type="submit" value="send"></td>
    </tr>
</table>
</form>
@endsection