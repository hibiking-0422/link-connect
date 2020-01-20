@extends('layouts.common')

@section('style')
    <link href="{{ asset('/css/link/common.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/link/index.css') }}"  rel="stylesheet" type="text/css">
@endsection

@section('contents')
<div class="new">
    <a href="{{ action('LinkController@new')}}">new</a>
</div>
<table>
    <tr><th>url</th><th>link_name</th><th>comment</th><th></th><th></th></tr>
    @foreach ($items as $item)
        <tr>
            <td>{{$item->url}}</td>
            <td>{{$item->link_name}}</td>
            <td>{{$item->comment}}</td>
            <td><a href="{{ action('LinkController@edit', $item->id)}}">edit</td>
            <td><a href="{{ action('LinkController@del', $item->id)}}">delete</a></td>
        </tr>
    @endforeach
</table>
@endsection