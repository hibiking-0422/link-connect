@extends('layouts.common')

@section('style')
    <link href="{{ asset('/css/link_tree/common.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/link_tree/new.css') }}"  rel="stylesheet" type="text/css">
@endsection

@section('contents')
<table>
<form action="/link_tree/order" method="post">
    @csrf
    <input type="hidden" name="tree_id" value="{{$tree_id}}">
    <tr><th></th><th>url</th><th>link_name</th><th>comment</th></tr>
    @foreach ($items as $item)
        <tr>
            <td><input type="checkbox" name="links[]" value="{{ $item->id }}"></td>
            <td>{{$item->url}}</td>
            <td>{{$item->link_name}}</td>
            <td>{{$item->comment}}</td>
        </tr>
    @endforeach
    <tr>
        <th></th><th></th><th><td><input type="submit" value="送信"></td></th>
    </tr>
</table>
@endsection