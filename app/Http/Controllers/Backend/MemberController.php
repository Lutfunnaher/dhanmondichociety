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

        // $membership_id = 'GM'.$request->membership_id;

        if ($request->membership_type == ''){

            Member::create([
                'name'              => $request->member_name,
                'fname'             => $request->father_name,
                'mname'             => $request->mother_name,
                'sname'             => $request->spouse_name,
                'member_id'         => 'GM'.$request->membership_id,
                'road'              => $request->road_no,
                'address'           => $request->address,
                'nid'               => $request->national_id,
                'nationality'       => $request->nationality,
                'occupation'        => $request->occupation,
                'bgroup'            => $request->bloodgroup,
                'marital_status'    => $request->marital_status,
                'dob'               => $request->dob,
                'dom'               => $request->dom,
                'telephone_res'     => $request->telephone_res,
                'mobile'            => $request->mobile,
                'membership_type'   => 'non-executive',
                'workplace'         => $request->work_place,
                'email'             => $request->email,
                'contact_person'    => $request->contact_person,
                'cp_relation'       => $request->relation,
                'cp_telephone'      => $request->cp_telephone,
                'cp_mobile'         => $request->cp_mobile,

                //
                'category_of_membership' => $request->category_of_membership,
                'payment_type'           => $request->payment_type,
                'payment_date'           => $request->payment_date,
                'bank_name'              => $request->bank_name,
                'cheque_number'          => $request->cheque_number,
                'cheque_date'            => $request->cheque_date,
                'intro_member_id'        => $request->intro_member_id,
                'how_long_know'          => $request->how_long_know,
            ]);
        } else {
            Member::create([
                'name'              => $request->member_name,
                'fname'             => $request->father_name,
                'mname'             => $request->mother_name,
                'sname'             => $request->spouse_name,
                'member_id'         => 'GM'.$request->membership_id,
                'road'              => $request->road_no,
                'address'           => $request->address,
                'nid'               => $request->national_id,
                'nationality'       => $request->nationality,
                'occupation'        => $request->occupation,
                'bgroup'            => $request->bloodgroup,
                'marital_status'    => $request->marital_status,
                'dob'               => $request->dob,
                'dom'               => $request->dom,
                'telephone_res'     => $request->telephone_res,
                'mobile'            => $request->mobile,
                'membership_type'   => $request->membership_type,
                'workplace'         => $request->work_place,
                'email'             => $request->email,
                'contact_person'    => $request->contact_person,
                'cp_relation'       => $request->relation,
                'cp_telephone'      => $request->cp_telephone,
                'cp_mobile'         => $request->cp_mobile,

                //
                'category_of_membership' => $request->category_of_membership,
                'payment_type'           => $request->payment_type,
                'payment_date'           => $request->payment_date,
                'bank_name'              => $request->bank_name,
                'cheque_number'          => $request->cheque_number,
                'cheque_date'            => $request->cheque_date,
                'intro_member_id'        => $request->intro_member_id,
                'how_long_know'          => $request->how_long_know,
            ]);
        }
        // return $membership_type;

        // return $request->all();
        // Member::create([
        //     'name'              => $request->member_name,
        //     'fname'             => $request->father_name,
        //     'mname'             => $request->mother_name,
        //     'sname'             => $request->spouse_name,
        //     'member_id'         => 'GM'.$request->membership_id,
        //     'road'              => $request->road_no,
        //     'address'           => $request->address,
        //     'nid'               => $request->national_id,
        //     'nationality'       => $request->nationality,
        //     'occupation'        => $request->occupation,
        //     'bgroup'            => $request->bloodgroup,
        //     'marital_status'    => $request->marital_status,
        //     'dob'               => $request->dob,
        //     'dom'               => $request->dom,
        //     'telephone_res'     => $request->telephone_res,
        //     'mobile'            => $request->mobile,
        //     'membership_type'   => $request->membership_type,
        //     'workplace'         => $request->work_place,
        //     'email'             => $request->email,
        //     'contact_person'    => $request->contact_person,
        //     'cp_relation'       => $request->relation,
        //     'cp_telephone'      => $request->cp_telephone,
        //     'cp_mobile'         => $request->cp_mobile,

            //
        //     'category_of_membership' => $request->category_of_membership,
        //     'payment_type'           => $request->payment_type,
        //     'payment_date'           => $request->payment_date,
        //     'bank_name'              => $request->bank_name,
        //     'cheque_number'          => $request->cheque_number,
        //     'cheque_date'            => $request->cheque_date,
        //     'intro_member_id'        => $request->intro_member_id,
        //     'how_long_know'          => $request->how_long_know,
        // ]);


        $name = $request->name;
        $gender = $request->gender;
        $age = $request->age;

        $array = [$name, $gender, $age];
        $count = count($name);
        // dd($count); 4
        // $array 3

        for($i=0; $i<=$count-1; $i++) {
            $child_info = array_column($array, $i);
            // print_r($child_info);

            Children::create([
                'member_id' => $request->membership_id,
                'name' => $child_info[0],
                'gender' => $child_info[1],
                'age' => $child_info[2],
            ]);
        }













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


    public function introduce($member_id)
    {
        // return $id;
        $data = Member::where('member_id', $member_id)->first();
        // return $data;


        return response()->json($data);
    }
}
