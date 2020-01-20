@extends('layouts.common')

@section('style')
    <link href="{{ asset('/css/home/common.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/home/home.css') }}"  rel="stylesheet" type="text/css">
@endsection

@section('contents')
<table>
    <tr><th>ID</th><th>url</th><th>link_name</th><th>comment</th><th>user_id</th></tr>
    @foreach ($items as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->url}}</td>
            <td>{{$item->link_name}}</td>
            <td>{{$item->comment}}</td>
            <td>{{$item->user_id}}</td>
            <td><a href="{{ action('LinkController@edit', $item->id)}}">edit</td>
            <td><a href="{{ action('LinkController@del', $item->id)}}">delete</td>
        </tr>
    @endforeach
</table>
@endsection