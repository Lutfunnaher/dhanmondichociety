@extends('layouts.backend')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Add Member</h5>
                </div>
                <div class="card-body">

                    <form action="{{ route('member.store') }}" method="POST" enctype='multipart/form-data'>
                        @csrf
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
                                        <span class="input-group-text" id="basic-addon11">Membership ID *</span>
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
                            <h6>Membership Type</h6>
                            <div class="col-6">
                                <div class="mb-3">
                                    <div class="input-group">
                                        {{-- <span class="input-group-text" id="basic-addon11">Membership Type</span> --}}
                                        <input type="checkbox" name="membership_type" value="executive"> Executive (Check the tick mark for executive member)

                                        {{-- <select name="membership_category" id="" class="form-control">
                                            <option value="" style="display: none">Select</option>

                                            @forelse ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @empty
                                                <option value="" class="test-warning" disabled>Please add member category first!</option>
                                            @endforelse
                                        </select> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <h6>Children Information</h6>
                            <div class="form-group">
                                <div class="d-flex align-content-between">
                                    <input type="text" name="name[]" class="form-control" placeholder="Enter name">
                                    <select name="gender[]" id="" class="form-control">
                                        <option value="" style="display: none">Select</option>
                                        <option value="1">Son</option>
                                        <option value="2">Daughter</option>
                                        <option value="3">Other</option>
                                    </select>
                                    <input type="text" name="age[]" class="form-control" placeholder="Enter age">
                                    <button id="newBtn" class="btn btn-primary"><i class="fas fa-plus"></i></button>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <h6>Membership Information</h6>
                            <div class="col-6">
                                <div class="mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon11">Category of Membership*</span>
                                        <select id="mCategory" name="category_of_membership" id="" class="form-control">
                                            <option value="" style="display: none">Select</option>
                                            @forelse ($categories as $category)
                                                <option value="{{ $category->name }}">{{ $category->name }}</option>
                                            @empty
                                                <option value="" class="test-warning" disabled>Please add member category first!</option>
                                            @endforelse
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon11">Amount*</span>
                                        <input id="categoryAmount" type="text" class="form-control" placeholder="Membership Fees"
                                            name="membership_fees" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text">Payment Type</span>
                                        <select name="payment_type" id="paymentType" class="form-control">
                                            <option value="cash" selected>Cash</option>
                                            <option value="cheque">Cheque</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div id="cashPayment" class="input-group">
                                        <span class="input-group-text" id="basic-addon11">Payment Date</span>
                                        <input class="form-control" id="pDate" type="date" name="payment_date"
                                            placeholder="Payment Date" value="">
                                    </div>
                                    <div id="chequePayment">
                                        <div class="mt-3">
                                            <div class="input-group">
                                                <span class="input-group-text" id="basic-addon11">Bank Name</span>
                                                <input class="form-control" id="bName" type="text" name="bank_name" placeholder="Bank Name" value="">
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <div class="input-group">
                                                <span class="input-group-text">Cheque Number</span>
                                                <input class="form-control" type="text" id="cNum" name="cheque_number" placeholder="Cheque Number" value="">
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <div class="input-group">
                                                <span class="input-group-text">Date</span>
                                                <input class="form-control" type="date" id="cDate" name="cheque_date" placeholder="Date" value="">
                                            </div>
                                        </div>
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
                                        <input id="introduceId" type="text" class="form-control" placeholder="Member ID"
                                            name="intro_member_id" aria-label="Username"
                                            aria-describedby="basic-addon11">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon11">Introduce Member Name</span>
                                        <input type="text" class="form-control" id="introMName" placeholder="Member Name"
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
                                        <input type="text" class="form-control" placeholder="Joining Date" id="introMDate"
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
                        <hr>
                        <div class="row">
                            <div class="col-6">
                                <h6>Member Image</h6>
                                <div class="mb-3">
                                    <input class="form-control" type="file" id="formFile">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <button type="submit" class="btn btn-primary">Send</button>
                    </form>

                </div>
            </div>
        </div>

    </div>
    </div>
@endsection


@section('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            // dynamic input box
            // add new field
            $('#newBtn').click(function(e) {
                e.preventDefault();
                $('.form-group').append(
                    '<div class="d-flex align-content-between mt-2"><input type="text" name="name[]" class="form-control" placeholder="Enter name"><select name="gender[]" id="" class="form-control"><option value="" style="display:none">Select</option><option value="1">Son</option><option value="2">Daughter</option><option value="3">Other</option></select><input type="text" name="age[]" class="form-control" placeholder="Enter age"><button id="removeBtn" class="btn btn-danger"><i class="fas fa-trash"></i></button></div>'
                    );
            });
            // remove field
            $('.form-group').on('click', '#removeBtn', function(e) {
                e.preventDefault();
                $(this).parent('div').remove();
            });
            // dynamic input box end


            // payment type select box
            let paymentType = $('#paymentType').val();
            if(paymentType == 'cash') {
                $('#chequePayment').hide();
            }

            $('#paymentType').on('change', function(){
                let paymentType = $('#paymentType').val();
                if (paymentType == 'cheque') {
                    $('#chequePayment').show();
                    $('#cashPayment').hide();
                    $('#pDate').val('');  // bNamecNumcDate
                    $('#bName').val('');  // cNumcDate
                    $('#cNum').val('');  //
                    $('#cDate').val('');  //
                } else {
                    $('#chequePayment').hide();
                    $('#cashPayment').show();
                    $('#pDate').val('');  // bNamecNumcDate
                    $('#bName').val('');  // cNumcDate
                    $('#cNum').val('');  //
                    $('#cDate').val('');  //
                }
            });

            // category of membership
            let category = $('#mCategory').val();

            $('#mCategory').on('change', function(){
                let category = $('#mCategory').val();
                if(category == 'General') {
                    $('#categoryAmount').val('5000');
                } else if(category == 'Life') {
                    $('#categoryAmount').val('500000');
                } else if(category == 'Donor') {
                    $('#categoryAmount').val('500000');
                } else if(category == 'Honorable') {
                    $('#categoryAmount').val('0');
                } else if(category == 'Corporate') {
                    $('#categoryAmount').val('2500000');
                }
            });

            // introduce member call
            $('#introduceId').on('change', function(e){
                e.preventDefault();
                let member_id = $('#introduceId').val(); // GM202208310134
                // console.log(member_id);

                $.ajax({
                    type: 'GET',
                    dataType: 'json',
                    data: { member_id: member_id },
                    url: '/introduce/'+member_id,
                    success: function(data) {
                        $('#introMName').val(data.name);
                        $('#introMDate').val(data.created_at); // $.datepicker.formatDate('dd M yy', new Date())
                    }
                });

            });
        });
    </script>
@endsection
