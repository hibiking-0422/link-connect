@extends('layouts.common')

@section('style')
   <link href="{{ asset('/css/todo/common.css') }}" rel="stylesheet" type="text/css">
   <link href="{{ asset('/css/todo/show.css') }}"  rel="stylesheet" type="text/css">
@endsection

@section('contents')
<table>
    <tr><th>ID</th><th>title</th><th>details</th></tr>
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->title}}</td>
            <td>{{$item->details}}</td>
        </tr>
</table>
@endsection