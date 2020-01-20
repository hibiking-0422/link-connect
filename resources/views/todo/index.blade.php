@extends('layouts.common')

@section('style')
    <link href="{{ asset('/css/todo/common.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/todo/index.css') }}"  rel="stylesheet" type="text/css">
@endsection

@section('contents')
<table>
    <tr><th>ID</th><th>title</th><th>details</th></tr>
    @foreach ($items as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->title}}</td>
            <td>{{$item->details}}</td>
            <td><a href="{{ action('TodoController@edit', $item->id)}}">edit</td>
            <td><a href="{{ action('TodoController@del', $item->id)}}">delete</td>
        </tr>
    @endforeach
</table>
    <a href="{{ action('TodoController@new') }}"><div class="new-button">new</div>
@endsection