@extends('layouts.backend')

@section('content')
    <div class="card mb-4">
        <h5 class="card-header">Edit - {{ $member->name }}</h5>
        <!-- Account -->
        <div class="card-body">
            <div class="d-flex align-items-start align-items-sm-center gap-4">
                <img src="{{ asset('backend') }}/assets/img/avatars/1.png" alt="user-avatar" class="d-block rounded"
                    height="100" width="100" id="uploadedAvatar">
                <div class="button-wrapper">
                    <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                        <span class="d-none d-sm-block">Upload new photo</span>
                        <i class="bx bx-upload d-block d-sm-none"></i>
                        <input type="file" id="upload" class="account-file-input" hidden=""
                            accept="image/png, image/jpeg">
                    </label>


                    <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                </div>
            </div>
        </div>


        <hr class="my-0">
    <!-- DataTable with Buttons -->


    <div class="row">



        <!-- Total Revenue -->
    </div>

        <div class="card">
            <div class="card-header">
                <h6>Payment History</h6>
            </div>
            <div class="card-body">
                <div class="col-lg-12 mb-4 order-0">
                    <div class="card">
                        <div class="d-flex align-items-end row">
                            <div class="col-sm-12">
                                <div class="card-body">
                                    <table id="example" class="table table-striped display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Membership Number</th>
                                                <th>Membership Category</th>
                                                <th>Membership Fees</th>
                                                <th>Payment Type</th>
                                                <th>Payment Details</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($payments as $payment)
                                            <tr>
                                                <td>{{ $payment->membership_number }}</td>
                                                <td>{{ $payment->category_of_membership }}</td>
                                                @if ($payment->category_of_membership == 'General')
                                                    <td>{{ '5000' }}</td>
                                                @elseif($payment->category_of_membership == 'Life')
                                                    <td>{{ '25000' }}</td>
                                                @elseif($payment->category_of_membership == 'Donor')
                                                    <td>{{ '500000' }}</td>
                                                @elseif($payment->category_of_membership == 'Honorable')
                                                    <td>{{ '0' }}</td>
                                                @elseif($payment->category_of_membership == 'Corporate')
                                                    <td>{{ '2500000' }}</td>
                                                @endif
                                                <td>{{ $payment->payment_type }}</td>
                                                <td>
                                                    {{ $payment->payment_date }}
                                                    {{ $payment->bank_name }}
                                                    {{ $payment->cheque_number }}
                                                    {{ $payment->cheque_date }}
                                                </td>
                                            </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('member.update', $member->id) }}">
                @csrf
                @method('PUT')
                <div class="row mb-5">
                    <h6>Membership Type Update</h6>
                    <div class="col-6">
                        <div class="mb-3">
                            @if ($member->member_type == 'non-executive')
                            <div class="input-group">
                                <input type="checkbox" name="membership_type">&nbsp;Executive (Check the tick mark for executive member)
                            </div>
                            @else
                            <div class="input-group">
                                <input type="checkbox" name="membership_type" checked>&nbsp;Executive (Check the tick mark for executive member)
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <h6>Membership Update</h6>
                    <div class="col-6">
                        <div class="mb-3">
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon11">Category of Membership*</span>
                                <select id="mCategory" name="category_of_membership" id="" class="form-control">
                                    <option value="" style="display: none">Select</option>
                                    @forelse ($categories as $category)
                                        <option value="{{ $category->name }}">{{ $category->name }}</option>
                                    @empty
                                        <option value="" class="text-warning" disabled>Please add member category
                                            first!</option>
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
                                        <input class="form-control" id="bName" type="text" name="bank_name"
                                            placeholder="Bank Name">
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <div class="input-group">
                                        <span class="input-group-text">Cheque Number</span>
                                        <input class="form-control" type="text" id="cNum" name="cheque_number"
                                            placeholder="Cheque Number">
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <div class="input-group">
                                        <span class="input-group-text">Date</span>
                                        <input class="form-control" type="date" id="cDate" name="cheque_date"
                                            placeholder="Date">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-2">
                    <button type="submit" class="btn btn-primary me-2">Save changes</button>
                </div>
            </form>
        </div>
        <!-- /Account -->
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            // payment type select box
            let paymentType = $('#paymentType').val();
            if (paymentType == 'cash') {
                $('#chequePayment').hide();
            }

            $('#paymentType').on('change', function() {
                let paymentType = $('#paymentType').val();
                if (paymentType == 'cheque') {
                    $('#chequePayment').show();
                    $('#cashPayment').hide();
                    $('#pDate').val(''); // bNamecNumcDate
                    $('#bName').val(''); // cNumcDate
                    $('#cNum').val(''); //
                    $('#cDate').val(''); //
                } else {
                    $('#chequePayment').hide();
                    $('#cashPayment').show();
                    $('#pDate').val(''); // bNamecNumcDate
                    $('#bName').val(''); // cNumcDate
                    $('#cNum').val(''); //
                    $('#cDate').val(''); //
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
        });
    </script>
@endsection
