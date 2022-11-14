<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\MembershipCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = MembershipCategory::all();
        return view('admin.member-category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.member-category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'category_name' => 'required',
            'category_amount' => 'required',
        ]);
        // return $request->all();

        // $category = new MembershipCategory();
        // $category->name = $request->category_name;
        // $category->fees = $request->category_amount;

        // MembershipCategory::create($request->all());

        MembershipCategory::create([
            'name' => $request->category_name,
            'fees' => $request->category_amount
        ]);
        return redirect()->route('category.index')->with('message', 'Member category created.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MembershipCategory  $membershipCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(MembershipCategory $category)
    {
        return view('admin.member-category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MembershipCategory  $membershipCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MembershipCategory $category)
    {
        // return $request->input();
        $this->validate($request, [
            'category_name' => 'required',
            'category_amount' => 'required',
        ]);

        $category->name = $request->category_name;
        $category->fees = $request->category_amount;
        $category->save();
        return redirect()->route('category.index')->with('message', 'Member category updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MembershipCategory  $membershipCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(MembershipCategory $category)
    {
        $category->delete();
        return redirect()->route('category.index')->with('message', 'Member category deleted.');
    }

    public function getCategory($id)
    {
        // dd($id);
        $data = MembershipCategory::find($id);
        // return $data;
        return response()->json($data);
    }
}
