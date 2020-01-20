@extends('layouts.common')

@section('style')
    <link href="{{ asset('/css/link_tree/common.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/link_tree/order.css') }}"  rel="stylesheet" type="text/css">
@endsection

@section('contents')
<table>
<form action="/link_tree/new" method="post">
    @csrf
    <tr><th>order</th><th>url</th><th>link_name</th><th>comment</th></tr>
    @foreach ($items as $item)
        <tr>
            <input type="hidden" name="tree_id[]" value="{{$tree_id}}">
            <input type="hidden" name="link_id[]" value="{{$item->id}}">
            <td><input type="number" name="order[]" class="order-num"></td>
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