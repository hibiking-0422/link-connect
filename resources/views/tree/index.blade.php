@extends('layouts.common')

@section('style')
    <link href="{{ asset('/css/tree/common.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/tree/index.css') }}"  rel="stylesheet" type="text/css">
@endsection

@section('contents')
<div class="new">
    <a href="{{ action('TreeController@new')}}">new</a>
</div>
<table>
    <tr><th>tree_name</th><th>comment</th><th></th><th></th><th></th></tr>
    @foreach ($items as $item)
        <tr>
            <td>{{$item->tree_name}}</td>
            <td>{{$item->comment}}</td>
            <td><a href="{{ action('TreeController@edit', $item->id)}}">edit</td>
            <td><a href="{{ action('TreeController@del', $item->id)}}">delete</td>
            <td><a href="{{ action('LinkTreeController@index', $item->id)}}">LinkTree</td>
        </tr>
    @endforeach
</table>
@endsection