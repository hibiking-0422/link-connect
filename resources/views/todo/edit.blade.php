@extends('layouts.common')

@section('style')
    <link href="{{ asset('/css/todo/common.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/todo/edit.css') }}"  rel="stylesheet" type="text/css">
@endsection

@section('contents')
<form action='/todo/edit' method="post">
<table>
    @csrf
    <input type="hidden" name="id" value="{{$form->id}}">
    <tr>
        <th>title:</th><td><input type="text" name="title" value="{{$form->title}}"></td></th>
    </tr>
    <tr>
        <th>details:</th><td><input type="text" name="details" value="{{$form->details}}"></td></th>
    </tr>
    <tr>
        <th><td><input type="submit" value="send"></td></th>
    </tr>
</table>
</form>
@endsection