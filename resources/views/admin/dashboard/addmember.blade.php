@extends('layouts.backend')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Add Member</h5>
                </div>
                <div class="card-body">
                    <form action="">
                        <div class="row">
                            <h6>Personal Information</h6>
                            <div class="col-6">
                                <div class="mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon11">Member Name *</span>
                                        <input type="text" class="form-control" placeholder="Member Name"
                                            name="member_name" aria-label="Username" aria-describedby="basic-addon11">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon11">Father Name *</span>
                                        <input type="text" class="form-control" placeholder="Father Name"
                                            name="father_name" aria-label="Username" aria-describedby="basic-addon11">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon11">Mother Name *</span>
                                        <input type="text" class="form-control" placeholder="Mother Name"
                                            name="mother_name" aria-label="Username" aria-describedby="basic-addon11">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon11">Spouse's Name</span>
                                        <input type="text" class="form-control" placeholder="Spouse's Name"
                                            name="spouse_name" aria-label="Username" aria-describedby="basic-addon11">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon11">Membership ID</span>
                                        <input type="text" class="form-control" placeholder="Membership ID"
                                            name="membership_id" aria-label="Username" aria-describedby="basic-addon11">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon11">Road Number</span>
                                        <select name="road_no" id="" class="form-control">
                                            <option value="" style="display: none">Select</option>
                                            <option data-v-1a2e0016="" value="1">Road #1</option>
                                            <option data-v-1a2e0016="" value="2">Road #2</option>
                                            <option data-v-1a2e0016="" value="3">Road #3</option>
                                            <option data-v-1a2e0016="" value="4">Road #4</option>
                                            <option data-v-1a2e0016="" value="5">Road #5</option>
                                            <option data-v-1a2e0016="" value="6">Road #6</option>
                                            <option data-v-1a2e0016="" value="7">Road #7</option>
                                            <option data-v-1a2e0016="" value="8">Road #8</option>
                                            <option data-v-1a2e0016="" value="9">Road #9</option>
                                            <option data-v-1a2e0016="" value="10">Road #10</option>
                                            <option data-v-1a2e0016="" value="11">Road #11</option>
                                            <option data-v-1a2e0016="" value="12">Road #12</option>
                                            <option data-v-1a2e0016="" value="13">Road #13</option>
                                            <option data-v-1a2e0016="" value="14">Road #14</option>
                                            <option data-v-1a2e0016="" value="14/(New)">Road #14/(New)</option>
                                            <option data-v-1a2e0016="" value="15">Road #15</option>
                                            <option data-v-1a2e0016="" value="15/(New)">Road #15/(New)</option>
                                            <option data-v-1a2e0016="" value="16">Road #16</option>
                                            <option data-v-1a2e0016="" value="16/(New)">Road #16/(New)</option>
                                            <option data-v-1a2e0016="" value="17">Road #17</option>
                                            <option data-v-1a2e0016="" value="18">Road #18</option>
                                            <option data-v-1a2e0016="" value="19">Road #19</option>
                                            <option data-v-1a2e0016="" value="20">Road #20</option>
                                            <option data-v-1a2e0016="" value="21">Road #21</option>
                                            <option data-v-1a2e0016="" value="22">Road #22</option>
                                            <option data-v-1a2e0016="" value="23">Road #23</option>
                                            <option data-v-1a2e0016="" value="24">Road #24</option>
                                            <option data-v-1a2e0016="" value="25">Road #25</option>
                                            <option data-v-1a2e0016="" value="26">Road #26</option>
                                            <option data-v-1a2e0016="" value="27">Road #27</option>
                                            <option data-v-1a2e0016="" value="27/(Old)">Road #27 (Old)</option>
                                            <option data-v-1a2e0016="" value="28">Road #28</option>
                                            <option data-v-1a2e0016="" value="29">Road #29</option>
                                            <option data-v-1a2e0016="" value="30">Road #30</option>
                                            <option data-v-1a2e0016="" value="31">Road #31</option>
                                            <option data-v-1a2e0016="" value="32">Road #32</option>
                                            <option data-v-1a2e0016="" value="2/A">Road #2/A</option>
                                            <option data-v-1a2e0016="" value="3/A">Road #3/A</option>
                                            <option data-v-1a2e0016="" value="4/A">Road #4/A</option>
                                            <option data-v-1a2e0016="" value="5/A">Road #5/A</option>
                                            <option data-v-1a2e0016="" value="6/A">Road #6/A</option>
                                            <option data-v-1a2e0016="" value="7/A">Road #7/A</option>
                                            <option data-v-1a2e0016="" value="8/A">Road #8/A</option>
                                            <option data-v-1a2e0016="" value="9/A">Road #9/A</option>
                                            <option data-v-1a2e0016="" value="10/A">Road #10/A</option>
                                            <option data-v-1a2e0016="" value="11/A">Road #11/A</option>
                                            <option data-v-1a2e0016="" value="12/A">Road #12/A</option>
                                            <option data-v-1a2e0016="" value="13/A">Road #13/A</option>
                                            <option data-v-1a2e0016="" value="14/A">Road #14/A</option>
                                            <option data-v-1a2e0016="" value="15/A">Road #15/A</option>
                                            <option data-v-1a2e0016="" value="16/A">Road #16/A</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon11">Address</span>
                                        <textarea name="address" placeholder="Address" class="form-control" id="" cols="30" rows="1"></textarea>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon11">National ID</span>
                                        <input type="text" class="form-control" placeholder="National ID"
                                            name="national_id" aria-label="Username" aria-describedby="basic-addon11">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon11">Nationality</span>
                                        <input type="text" class="form-control" placeholder="Nationality"
                                            name="nationality" aria-label="Username" aria-describedby="basic-addon11">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon11">Occupation</span>
                                        <input type="text" class="form-control" placeholder="Occupation"
                                            name="occupation" aria-label="Username" aria-describedby="basic-addon11">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon11">Blood Group</span>
                                        <select name="bloodgroup" id="" class="form-control">
                                            <option value="" style="display: none">Select</option>
                                            <option data-v-1a2e0016="" value="A+">A+</option>
                                            <option data-v-1a2e0016="" value="A-">A-</option>
                                            <option data-v-1a2e0016="" value="B+">B+</option>
                                            <option data-v-1a2e0016="" value="B-">B-</option>
                                            <option data-v-1a2e0016="" value="O+">O+</option>
                                            <option data-v-1a2e0016="" value="O-">O-</option>
                                            <option data-v-1a2e0016="" value="AB+">AB+</option>
                                            <option data-v-1a2e0016="" value="AB-">AB-</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon11">Marital Status</span>
                                        <select name="marital_status" id="" class="form-control">
                                            <option value="" style="display: none">Select</option>
                                            <option data-v-1a2e0016="" value="single">Single</option>
                                            <option data-v-1a2e0016="" value="married">Married</option>
                                            <option data-v-1a2e0016="" value="separated">Separated</option>
                                            <option data-v-1a2e0016="" value="divorced">Divorced</option>
                                            <option data-v-1a2e0016="" value="window">Window(er)</option>
                                            <option data-v-1a2e0016="" value="other">Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon11">Date of Birth</span>
                                        <input class="form-control" type="date" name="dob"
                                            placeholder="Date of Birth" value="" id="html5-date-input">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon11">Date of Marriage</span>
                                        <input class="form-control" type="date" name="dom"
                                            placeholder="Date of Marriage" value="" id="html5-date-input">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon11">Telephone (Res.)</span>
                                        <input type="text" class="form-control" placeholder="Telephone (Res.)"
                                            name="telephone_res" aria-label="Username" aria-describedby="basic-addon11">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon11">Mobile</span>
                                        <input type="text" class="form-control" placeholder="Mobile" name="mobile"
                                            aria-label="Username" aria-describedby="basic-addon11">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon11">Work Place</span>
                                        <input type="text" class="form-control" placeholder="Work Place"
                                            name="work_place" aria-label="Username" aria-describedby="basic-addon11">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon11">Email</span>
                                        <input type="email" class="form-control" placeholder="Email" name="email"
                                            aria-label="Username" aria-describedby="basic-addon11">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon11">Contact Person</span>
                                        <input type="text" class="form-control" placeholder="Contact Person"
                                            name="contact_person" aria-label="Username" aria-describedby="basic-addon11">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon11">Relation</span>
                                        <input type="text" class="form-control" placeholder="Relation"
                                            name="relation" aria-label="Username" aria-describedby="basic-addon11">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon11">Telephone</span>
                                        <input type="text" class="form-control" placeholder="Telephone"
                                            name="cp_telephone" aria-label="Username" aria-describedby="basic-addon11">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon11">Mobile</span>
                                        <input type="text" class="form-control" placeholder="Mobile" name="cp_mobile"
                                            aria-label="Username" aria-describedby="basic-addon11">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <h6>Membership Category</h6>
                            <div class="col-6">
                                <div class="mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon11">Membership Category</span>
                                        <select name="marital_status" id="" class="form-control">
                                            <option value="" style="display: none">Select</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <h6>Children Information</h6>
                            <div class="col-6">
                                <div class="mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon11">Membership Category</span>
                                        <select name="marital_status" id="" class="form-control">
                                            <option value="" style="display: none">Select</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="mb-3">
                                            <div class="input-group">
                                                <span class="input-group-text" id="basic-addon11">Relation</span>
                                                <input type="text" class="form-control" placeholder="Relation"
                                                    name="relation" aria-label="Username"
                                                    aria-describedby="basic-addon11">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="mb-3">
                                            <div class="input-group">
                                                <span class="input-group-text" id="basic-addon11">Relation</span>
                                                <input type="text" class="form-control" placeholder="Relation"
                                                    name="relation" aria-label="Username"
                                                    aria-describedby="basic-addon11">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <button id="trashButton" class="btn btn-danger btn-small"><i
                                                class="fa-solid fa-trash"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-row-reverse">
                                <button class="btn btn-info btn-small"><i class="fa-solid fa-plus"></i></button>
                            </div>

                        </div>
                        <hr>
                        <div class="row">
                            <h6>Membership Information</h6>
                            <div class="col-6">
                                <div class="mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon11">Category of Membership*</span>
                                        <select name="category_of_membership" id="" class="form-control">
                                            <option value="" style="display: none">Select</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon11">Amount*</span>
                                        <input type="text" class="form-control" placeholder="Membership Fees"
                                            name="membership_fees" aria-label="Username" aria-describedby="basic-addon11"
                                            disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon11">Payment Type</span>
                                        <select name="payment_type" id="" class="form-control">
                                            <option value="" style="display: none">Select</option>
                                            <option value="cash">Cash</option>
                                            <option value="cheque">Cheque</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon11">Payment Date</span>
                                        <input class="form-control" type="date" name="payment_date"
                                            placeholder="Payment Date" value="" id="html5-date-input">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <h6>Introduce By</h6>
                            <div class="col-6">
                                <div class="mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon11">Introduce Membership ID*</span>
                                        <input type="text" class="form-control" placeholder="Member ID"
                                            name="intro_memeber_id" aria-label="Username"
                                            aria-describedby="basic-addon11">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon11">Introduce Member Name</span>
                                        <input type="text" class="form-control" placeholder="Member Name"
                                            name="intro_member_name" aria-label="Username"
                                            aria-describedby="basic-addon11" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon11">Introduce Member Joining
                                            Date</span>
                                        <input type="text" class="form-control" placeholder="Joining Date"
                                            name="intro_member_joining_date" aria-label="Username"
                                            aria-describedby="basic-addon11" disabled>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon11">How long known?</span>
                                        <input class="form-control" type="text" name="how_long_know"
                                            placeholder="How long known" value="" id="html5-date-input">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Send</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
    </div>
@endsection
