@extends('layouts.common')

@section('style')
    <link href="{{ asset('/css/tree/common.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/tree/new.css') }}"  rel="stylesheet" type="text/css">
@endsection

@section('contents')
    @if (count($errors) > 0)
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="/tree/new" method="post">
    <table>
        @csrf
        <input type="hidden" name="user_id" value="{{ Auth::id() }}">
        <tr>
            <th>tree_name:</th><td><input type="text" name="tree_name" value="{{ old('tree_name') }}"></td>
        </tr>
        <tr>
            <th>comment:</th><td><input type="text" name="comment" value="{{ old('comment') }}"></td>
        </tr>
        <tr>
            <th></th><td><input type="submit" value="送信"></td>
        </tr>
    </table>
    </form>
@endsection