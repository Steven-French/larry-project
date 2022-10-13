<?php

namespace App\Http\Controllers;

use App\Models\ListItem;

use Illuminate\Http\Request;

class ListItemController extends Controller
{
    public function index()
    {
        $data['listItems'] = ListItem::all();
        return view('index', $data);
    }

    public function create(Request $request)
    {
        $item = new ListItem();

        $item->name = $request->input('list_item');
        $item->save();

        return $this->index();
    }
}
