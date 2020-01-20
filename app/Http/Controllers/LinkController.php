<?php

namespace App\Http\Controllers;

use App\Link;
use App\User;
use Auth;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function index(Request $request) {
        $items = User::find(Auth::id())->links;
        return view('link.index',['items' => $items]);
    }

    public function new(Request $request) {
        return view('link.new');
    }

    public function create(Request $request) {
        $link = new Link;
        $form = $request->all();
        unset($form['__token']);
        $link->fill($form)->save();
        return redirect('/link');
    }

    public function edit(Request $request) {
        $link = Link::find($request->id);
        return view('link.edit', ['form' => $link]);
    }

    public function update(Request $request) {
        $link = Link::find($request->id);
        $form = $request->all();
        unset($form['__token']);
        $link->fill($form)->save();
        return redirect('/link');
    }

    public function del(Request $request) {
        $link = Link::find($request->id);
        return view('link/del', ['form' => $link]);
    }

    public function remove(Request $request) {
        Link::find($request->id)->delete();
        return redirect('/link');
    }
}
