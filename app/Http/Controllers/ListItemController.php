<?php

namespace App\Http\Controllers;

use App\Models\ListItem;

use Illuminate\Http\Request;

class ListItemController extends Controller
{
    public function index()
    {
        $data['listItems'] = ListItem::where('completed', 0)->get();
        return view('index', $data);
    }

    public function create(Request $request)
    {
        $item = new ListItem();
        $item->name = $request->input('list_item');
        $item->save();

        return redirect('/');
    }

    public function markComplete($id)
    {
        $listItem = ListItem::find($id);
        $listItem->completed = 1;
        $listItem->save();

        
        return redirect('/');
    }
}
