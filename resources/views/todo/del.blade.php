@extends('layouts.common')

@section('style')
    <link href="{{ asset('/css/todo/common.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/todo/del.css') }}"  rel="stylesheet" type="text/css">
@endsection

@section('contents')
<form action='/todo/del' method="post">
<table>
    @csrf
    <input type="hidden" name="id" value="{{$form->id}}">
    <tr>
        <th>title:</th><td>{{$form->title}}</td></th>
    </tr>
    <tr>
        <th>details:</th><td>{{$form->details}}</td></th>
    </tr>
    <tr>
        <th><td><input type="submit" value="send"></td></th>
    </tr>
</table>
</form>
@endsection