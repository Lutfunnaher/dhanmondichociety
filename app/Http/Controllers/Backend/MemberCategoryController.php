<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MembershipCategory;
use Session;

class MemberCategoryController extends Controller
{
    public function index()
    {
        return view('admin.members.membercategory');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        // ddd($request->all());

        $this->validate($request, [
            'category_name' => 'required',
            'category_amount' =>  'required'
        ]);

        MembershipCategory::create([
            'name' => $request->category_name,
            'fees' => $request->category_amount,
        ]);

        return redirect()->back();
        Session::flash('message', 'Category Inserted');
    }
}

