@extends('layouts.common')

@section('style')
    <link href="{{ asset('/css/link_tree/common.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/link_tree/index.css') }}"  rel="stylesheet" type="text/css">
@endsection

@section('contents')

<div class="new">
    <a href="{{ action('LinkTreeController@new', $tree_id)}}">new</a>
</div>

<div>
    @foreach ($items as $item)
        <div class="link-card">
            <div class="link-title">
                <a href="{{$item->url}}" target="_blank"><span class="title-font">{{$item->link_name}}</span></a>
            </div>
            <div class="comment">
                <span class="comment-font">{{$item->comment}}</span>
            </div>
            <div class="card-bottom">
                <span class="edit"><a href="{{ action('LinkController@edit', $item->id)}}">edit</a>
            </div>
        </div>
    @endforeach
</div>
@endsection