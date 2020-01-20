@extends('layouts.common')

@section('style')
    <link href="{{ asset('/css/tree/common.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/tree/link.css') }}"  rel="stylesheet" type="text/css">
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

    <form action="/tree/del" method="post">
    <table>
        @csrf
        <input type="hidden" name="id" value="{{ $form->id }}">
        <tr>
            <th>tree_name:</th><td>{{ $form->tree_name }}</td>
        </tr>
        <tr>
            <th>comment:</th><td>{{ $form->comment }}</td>
        </tr>
        <tr>
            <th></th><td><input type="submit" value="送信"></td>
        </tr>
    </table>
    </form>
@endsection