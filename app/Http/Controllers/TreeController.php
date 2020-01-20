<?php

namespace App\Http\Controllers;

use App\Tree;
use App\User;
use Auth;
use Illuminate\Http\Request;

class TreeController extends Controller
{
    public function index(Request $request) {
        $items = User::find(Auth::id())->trees;
        return view('tree.index',['items' => $items]);
    }

    public function new(Request $request) {
        return view('tree.new');
    }

    public function create(Request $request) {
        $tree = new Tree;
        $form = $request->all();
        unset($form['__token']);
        $tree->fill($form)->save();
        return redirect('/tree');
    }

    public function edit(Request $request) {
        $tree = Tree::find($request->id);
        return view('tree.edit', ['form' => $tree]);
    }

    public function update(Request $request) {
        $tree = Tree::find($request->id);
        $form = $request->all();
        unset($form['__token']);
        $tree->fill($form)->save();
        return redirect('/tree');
    }

    public function del(Request $request) {
        $tree = Tree::find($request->id);
        return view('tree.del', ['form' => $tree]);
    }

    public function remove(Request $request) {
        Tree::find($request->id)->delete();
        return redirect('/tree');
    }
}
