<?php

namespace App\Http\Controllers;

use App\Link;
use App\User;
use App\Tree;
use Auth;
use DB;

use Illuminate\Http\Request;

class LinkTreeController extends Controller
{
    public function index(Request $request) 
    {
        $tree_id = $request->id;
        $items = Tree::find($tree_id)
            ->links
            ->sortBy('order');

        return view('link_tree.index', ['items' => $items,'tree_id' => $tree_id]);
    }

    public function new(Request $request)
    {
        $tree_id = $request->id;
        $items = User::find(Auth::id())->links;
        return view('link_tree.new',['items' => $items, 'tree_id' => $tree_id]);
    }

    public function create(Request $request)
    {
        $link_id = $request->link_id;
        $tree_id = $request->tree_id;
        $order = $request->order;
        for ($i=0; $i < count($order); $i++) { 
            $params = [
                'link_id' => $link_id[$i],
                'tree_id' => $tree_id[$i],
                'order' => $order[$i]
            ];
            DB::table('link_tree')->insert($params);
        }

        return redirect('/tree');
    }

    public function order(Request $request)
    {
        $links = $request->links;
        $tree_id = $request->tree_id;

        $items = DB::table('links')->whereIn('id', $request->links)->get();
        return view('link_tree.order', ['items' => $items, 'tree_id' => $tree_id]);
    }

    public function check(Request $request)
    {
        return view('link_tree.order');
    }
}