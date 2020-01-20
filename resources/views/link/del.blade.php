@extends('layouts.common')

@section('style')
    <link href="{{ asset('/css/link/common.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/link/link.css') }}"  rel="stylesheet" type="text/css">
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

    <form action="/link/del" method="post">
    <table>
        @csrf
        <input type="hidden" name="id" value="{{ $form->id }}">
        <tr>
            <th>url:</th><td>{{ $form->url }}</td>
        </tr>
        <tr>
            <th>link_name:</th><td>{{ $form->link_name }}</td>
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