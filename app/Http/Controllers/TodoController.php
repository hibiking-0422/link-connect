<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
    public function index(Request $request)
    {
        $items = DB::table('todo')->get();
        return view('todo.index', ['items' => $items]);
    }

    public function show(Request $request)
    {
        $id = $request->id;
        $item = DB::table('todo')->where('id', $id)->first();
        return view('todo.show',['item' => $item]);
    }

    public function new(Request $request)
    {
        return view('todo.new');
    }

    public function create(Request $request)
    {
        $param = [
            'title' => $request->title,
            'details' => $request->details
        ];
        DB::table('todo')->insert($param);
        return redirect('/todo');
    }

    public function edit(Request $request)
    {
        $item = DB::table('todo')
            ->where('id', $request->id)->first();
        return view('todo.edit', ['form' => $item]);
    }

    public function update(Request $request)
    {
        $param = [
            'title' => $request->title,
            'details' => $request->details
        ];
        DB::table('todo')
            ->where('id', $request->id)
            ->update($param);
        return redirect('/todo');
    }

    public function del(Request $request)
    {
        $item = DB::table('todo')
            ->where('id', $request->id)->first();
        return view('todo.del', ['form' => $item]);
    }

    public function remove(Request $request)
    {
        DB::table('todo')
            ->where('id', $request->id)->delete();
        return redirect('/todo');
    }
}