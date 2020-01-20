@extends('layouts.common')

@section('style')
    <link href="{{ asset('/css/link/common.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/link/new.css') }}"  rel="stylesheet" type="text/css">
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

    <form action="/link/new" method="post">
    <table>
        @csrf
        <input type="hidden" name="user_id" value="{{ Auth::id() }}">
        <tr>
            <th>url:</th><td><input type="text" name="url" value="{{ old('url') }}"></td>
        </tr>
        <tr>
            <th>link_name:</th><td><input type="text" name="link_name" value="{{ old('link_name') }}"></td>
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