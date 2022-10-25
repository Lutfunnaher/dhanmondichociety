<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Member;
use App\Models\MembershipCategory;
use App\Models\Children;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = MembershipCategory::all();
        return view('admin.dashboard.addmember', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'member_name' => '',
            'membership_id' => '',
            'category_of_membership' => '',
            'member_name' => '',
            'member_name' => '',
            'member_name' => '',
            'member_name' => '',
            'member_name' => '',
            'member_name' => '',
            'member_name' => '',
            'member_name' => '',
            'member_name' => '',
            'member_name' => '',
            'member_name' => '',
            'member_name' => '',
            'member_name' => '',
        ]);

        dd($request->input());

        /**
         * Member Children insertion
         *
         */
        // $name = $request->name;
        // $gender = $request->gender;
        // $age = $request->age;

        // $array = [$name, $gender, $age];
        // $count = count($name);
        // dd($count); 4
        // $array 3

        // for($i=0; $i<=$count-1; $i++) {
        //     $child_info = array_column($array, $i);
        //     // print_r($child_info);

        //     Children::create([
        //         'member_id' => 1,
        //         'name' => $child_info[0],
        //         'gender' => $child_info[1],
        //         'age' => $child_info[2],
        //     ]);
        // }


        return redirect()->route('member.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        //
    }


    public function introduce($id)
    {
        //$data =
    }
}
