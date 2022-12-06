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
                                        <span class="input-group-text">Member Name *</span>
                                        <input type="text" class="form-control" placeholder="Member Name"
                                            name="name">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text">Father Name *</span>
                                        <input type="text" class="form-control" placeholder="Father Name"
                                            name="father_name">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text">Mother Name *</span>
                                        <input type="text" class="form-control" placeholder="Mother Name"
                                            name="mother_name">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text">Spouse's Name</span>
                                        <input type="text" class="form-control" placeholder="Spouse's Name"
                                            name="spouse_ame">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text">Membership ID *</span>
                                        <input type="text" class="form-control" placeholder="Membership ID"
                                            name="membership_number">
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
                                        <span class="input-group-text">Address</span>
                                        <textarea name="address" placeholder="Address" class="form-control" id="" cols="30" rows="1"></textarea>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text">National ID</span>
                                        <input type="text" class="form-control" placeholder="National ID"
                                            name="nid_no">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text">Nationality</span>
                                        <input type="text" class="form-control" placeholder="Nationality"
                                            name="nationality">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text">Occupation</span>
                                        <input type="text" class="form-control" placeholder="Occupation"
                                            name="occupation">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text">Blood Group</span>
                                        <select name="blood_group" class="form-control">
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
                                        <span class="input-group-text">Marital Status</span>
                                        <select name="marital_status" class="form-control">
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
                                        <span class="input-group-text">Date of Birth</span>
                                        <input class="form-control" type="date" name="date_of_birth"
                                            placeholder="Date of Birth">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon11">Date of Marriage</span>
                                        <input class="form-control" type="date" name="date_of_marriage"
                                            placeholder="Date of Marriage">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text">Telephone (Res.)</span>
                                        <input type="text" class="form-control" placeholder="Telephone (Res.)"
                                            name="telephone_res">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text">Mobile</span>
                                        <input type="text" class="form-control" placeholder="Mobile" name="mobile">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text">Work Place</span>
                                        <input type="text" class="form-control" placeholder="Work Place"
                                            name="workplace">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text">Email</span>
                                        <input type="email" class="form-control" placeholder="Email" name="email">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text">Contact Person</span>
                                        <input type="text" class="form-control" placeholder="Contact Person"
                                            name="contact_person_name">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text">Relation</span>
                                        <input type="text" class="form-control" placeholder="Relation"
                                            name="relation">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text">Telephone</span>
                                        <input type="text" class="form-control" placeholder="Telephone"
                                            name="contact_person_telephone">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text">Mobile</span>
                                        <input type="text" class="form-control" placeholder="Mobile" name="contact_person_mobile">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        {{-- executive member checkbox --}}
                        <div class="row">
                            <h6>Membership Type</h6>
                            <div class="col-6">
                                <div class="mb-3">
                                    <div class="input-group">
                                        <input type="checkbox" name="membership_type" value="executive">&nbsp;Executive (Check the tick mark for executive member)
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <h6>Children Information</h6>
                            <div class="form-group">
                                <div class="d-flex align-content-between">
                                    <input type="text" name="children_name[]" class="form-control" placeholder="Enter name">
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
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @empty
                                                <option value="" class="text-warning" disabled>Please add member category first!</option>
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
                                        <span class="input-group-text">Payment Date</span>
                                        <input class="form-control" id="pDate" type="date" name="payment_date"
                                            placeholder="Payment Date">
                                    </div>
                                    <div id="chequePayment">
                                        <div class="mt-3">
                                            <div class="input-group">
                                                <span class="input-group-text">Bank Name</span>
                                                <input class="form-control" id="bName" type="text" name="bank_name" placeholder="Bank Name">
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <div class="input-group">
                                                <span class="input-group-text">Cheque Number</span>
                                                <input class="form-control" type="text" id="cNum" name="cheque_number" placeholder="Cheque Number">
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <div class="input-group">
                                                <span class="input-group-text">Date</span>
                                                <input class="form-control" type="date" id="cDate" name="cheque_date" placeholder="Date">
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
                                        <span class="input-group-text">Introduce Membership ID*</span>
                                        <input id="introduceId" type="text" class="form-control" placeholder="Member ID"
                                            name="introduce_member_id">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text">Introduce Member Name</span>
                                        <input type="text" class="form-control" id="introMName" placeholder="Member Name"
                                            name="intro_member_name" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text">Introduce Member Joining
                                            Date</span>
                                        <input type="text" class="form-control" placeholder="Joining Date" id="introMDate"
                                            name="intro_member_joining_date" disabled>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text">How long known?</span>
                                        <input class="form-control" type="text" name="how_long_known"
                                            placeholder="How long known">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-6">
                                <h6>Member Image</h6>
                                <div class="mb-3">
                                    <input class="form-control" type="file" name="image">
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


            // get membership category and set amount to input box
            $('#mCategory').on('change', function(){
                let cId = $('#mCategory').val();
                $.ajax({
                    type: 'GET',
                    dataType: 'json',
                    data: {id: cId},
                    url: `/admin/ajax/${cId}`,
                    success: function(d) {
                        $('#categoryAmount').val(d.fees);
                    }
                });
            });

            // introduce member call
            $('#introduceId').on('change', function(e){
                e.preventDefault();
                let member_id = $('#introduceId').val(); // GM202208310134
                console.log(member_id);
                $.ajax({
                    type: 'GET',
                    dataType: 'json',
                    data: { member_id: member_id },
                    url: `/refer/${member_id}`,
                    success: function(data) {
                        console.log(data);
                        $('#introMName').val(data.name);
                        $('#introMDate').val(data.created_at); // $.datepicker.formatDate('dd M yy', new Date())
                    }
                });

            });
        });
    </script>
@endsection
