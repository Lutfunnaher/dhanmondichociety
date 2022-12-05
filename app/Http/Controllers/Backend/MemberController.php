<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Member;
use App\Models\MembershipCategory;
use App\Models\Children;
use App\Models\Payment;
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
        // $members = Member::find('membership_number', 20221120);
        // $members = Member::all();
        // return $members;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = MembershipCategory::all();
        return view('admin.members.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // membership_type check
        if($request->membership_type == 'executive') {
            $member_type = $request->membership_type;
        } else {
            $member_type = 'non-executive';
        }

        // generate membership number
        $membership_number = 'GM' . $request->membership_number;

        // insert data to member table
        Member::create([
            'name' => $request->name,
            'father_name' => $request->father_name,
            'mother_name' => $request->mother_name,
            'spouse_ame' => $request->spouse_ame,
            'membership_number' => $membership_number,
            'current_membership_number' => $membership_number,
            'road_no' => $request->road_no,
            'address' => $request->address,
            'nid_no' => $request->nid_no,
            'nationality' => $request->nationality,
            'occupation' => $request->occupation,
            'blood_group' => $request->blood_group,
            'member_type' => $member_type,
            'marital_status' => $request->marital_status,
            'date_of_birth' => $request->date_of_birth,
            'date_of_marriage' => $request->date_of_marriage,
            'telephone_res' => $request->telephone_res,
            'mobile' => $request->mobile,
            'workplace' => $request->workplace,
            'email' => $request->email,
            'contact_person_name' => $request->contact_person_name,
            'relation' => $request->relation,
            'contact_person_telephone' => $request->contact_person_telephone,
            'contact_person_mobile' => $request->contact_person_mobile,
            'membership_category_id' => $request->category_of_membership,
            'introduce_member_id' => $request->introduce_member_id,
            'how_long_known' => $request->how_long_known,
        ]);

        // insert data to children table
        $children_name = $request->children_name;
        $gender = $request->gender;
        $age = $request->age;

        $array = [$children_name, $gender, $age];
        $count = count($children_name);

        for($i=0; $i<=$count-1; $i++) {
        $child_info = array_column($array, $i);

            if($request->children_name[0] !== null) {
                Children::create([
                    'membership_number' => $request->membership_number,
                    'children_name' => $child_info[0],
                    'gender' => $child_info[1],
                    'age' => $child_info[2],
                ]);
            }
        }

        // insert data to payment table
        Payment::create([
            'membership_number' => $request->membership_number,
            'category_of_membership' => $request->category_of_membership,
            'payment_type' => $request->payment_type,
            'payment_date' => $request->payment_date,
            'bank_name' => $request->bank_name,
            'cheque_number' => $request->cheque_number,
            'cheque_date' => $request->cheque_date,
        ]);

        return redirect()->back();
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
        // dd($member_id);  // GM1234567825
        // return $id;
        $data = Member::where('membership_number', $member_id)->first();
        return $data;
        return response()->json($data);
    }

    // executive retrive
    public function executive()
    {
        $members = Member::where('member_type', 'executive')->get();
        // return $executives;
        return view('admin.members.executive', compact('members'));
    }

    // general member
    public function general()
    {
        $members = Member::where('current_membership_number', 'LIKE', '%GM%')->get();
        return view('admin.members.general', compact('members'));
    }
    // life member
    public function life()
    {
        $members = Member::where('current_membership_number', 'LIKE', '%LM%')->get();
        return view('admin.members.life', compact('members'));
    }
    // life member
    public function donar()
    {
        $members = Member::where('current_membership_number', 'LIKE', '%DM%')->get();
        return view('admin.members.donar', compact('members'));
    }
    // life member
    public function honorable()
    {
        $members = Member::where('current_membership_number', 'LIKE', '%HM%')->get();
        return view('admin.members.honorable', compact('members'));
    }
    // life member
    public function corporate()
    {
        $members = Member::where('current_membership_number', 'LIKE', '%CM%')->get();
        return view('admin.members.corporate', compact('members'));
    }
}
