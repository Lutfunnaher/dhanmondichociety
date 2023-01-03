@extends('layouts.backend')

@section('content')
    <div class="card mb-4">
        <div class="card-body">
            <div class="user-avatar-section">
                <div class=" d-flex align-items-center flex-column">
                    <img class="img-fluid rounded my-4" src="{{ asset('backend') }}/assets/img/avatars/10.png" height="110"
                        width="110" alt="User avatar">
                    <div class="user-info text-center">
                        <h2 class="mb-2">{{ $member->name }}</h2>
                        <span class="badge bg-label-secondary mb-2">{{ $member->member_type }}</span>
                        <h6 class="">{{ $member->email }}</h6>
                        <h6 class="mt-2">{{ $member->mobile }}</h6>
                    </div>
                </div>
            </div>
            {{-- <h5 class="pb-2 border-bottom mb-4">Member Details</h5> --}}
            <div class="info-container mt-5">
                <div class="row">
                    <div class="col-6">
                        <h5 class="pb-2 border-bottom mb-4">Member Details</h5>
                        <ul class="list-unstyled">
                            <li class="mb-3">
                                <span class="fw-bold me-2">Membership Id:</span>
                                <span>{{ $member->current_membership_number }}</span>
                            </li>
                            <li class="mb-3">
                                <span class="fw-bold me-2">National ID:</span>
                                <span>{{ $member->nid_no }}</span>
                            </li>
                            <li class="mb-3">
                                <span class="fw-bold me-2">Father Name:</span>
                                <span>{{ $member->father_name }}</span>
                            </li>
                            <li class="mb-3">
                                <span class="fw-bold me-2">Mother Name:</span>
                                <span>{{ $member->mother_name }}</span>
                            </li>
                            <li class="mb-3">
                                <span class="fw-bold me-2">Date of Birth:</span>
                                <span>{{ $member->date_of_birth }}</span>
                            </li>
                            <li class="mb-3">
                                <span class="fw-bold me-2">Nationality:</span>
                                <span>{{ $member->nationality }}</span>
                            </li>
                            <li class="mb-3">
                                <span class="fw-bold me-2">Marital Status:</span>
                                <span>{{ $member->marital_status }}</span>
                            </li>
                            <li class="mb-3">
                                <span class="fw-bold me-2">Spouse Name:</span>
                                <span>{{ $member->spouse_ame }}</span>
                            </li>
                            <li class="mb-3">
                                <span class="fw-bold me-2">Date of Marriage:</span>
                                <span>{{ $member->date_of_marriage }}</span>
                            </li>

                            <li class="mb-3">
                                <span class="fw-bold me-2">Road No:</span>
                                <span>{{ $member->road_no }}</span>
                            </li>
                            <li class="mb-3">
                                <span class="fw-bold me-2">Address:</span>
                                <span>{{ $member->address }}</span>
                            </li>
                            <li class="mb-3">
                                <span class="fw-bold me-2">Occupation:</span>
                                <span>{{ $member->occupation }}</span>
                            </li>
                            <li class="mb-3">
                                <span class="fw-bold me-2">Work Place:</span>
                                <span>{{ $member->workplace }}</span>
                            </li>


                            <h5 class="pb-2 border-bottom mb-4 mt-5">Contact Person Details</h5>
                            <li class="mb-3">
                                <span class="fw-bold me-2">Name:</span>
                                <span>{{ $member->contact_person_name }}</span>
                            </li>
                            <li class="mb-3">
                                <span class="fw-bold me-2">Relation:</span>
                                <span>{{ $member->relation }}</span>
                            </li>
                            <li class="mb-3">
                                <span class="fw-bold me-2">Telephone:</span>
                                <span>{{ $member->contact_person_telephone }}</span>
                            </li>
                            <li class="mb-3">
                                <span class="fw-bold me-2">Mobile:</span>
                                <span>{{ $member->contact_person_mobile }}</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-6">
                        @foreach ($child_info as $child)
                        <h5 class="pb-2 border-bottom mb-4">Children Details</h5>
                        <ul class="list-unstyled mb-5">
                            <li class="mb-3">
                                <span class="fw-bold me-2">Name:</span>
                                <span>{{ $child->children_name }}</span>
                            </li>
                            <li class="mb-3">
                                <span class="fw-bold me-2">Age:</span>
                                <span>{{ $child->age }}</span>
                            </li>
                            <li class="mb-3">
                                <span class="fw-bold me-2">Gender:</span>
                                <span>
                                    @if($child->gender == 1)
                                        {{ "Male" }}
                                    @elseif($child->gender == 2)
                                        {{ "Female" }}
                                    @else
                                        {{ "Others" }}
                                    @endif
                                </span>
                            </li>
                        </ul>
                        @endforeach

                        <h5 class="pb-2 border-bottom mb-4">Payment Details</h5>
                        <ul class="list-unstyled">
                            <li class="mb-3">
                                <span class="fw-bold me-2">Payment Type:</span>
                                <span>{{ $payment->payment_type }}</span>
                            </li>

                            {{--
                            <li class="mb-3">
                                <span class="fw-bold me-2">Payment Amount:</span>
                                <span>
                                    @if ($payment->category_of_membership == 1)
                                        {{ 5000 }}
                                    @elseif($payment->category_of_membership == 2)
                                        {{ 50000 }}
                                    @elseif($payment->category_of_membership == 3)
                                        {{ 50000 }}
                                    @elseif($payment->category_of_membership == 4)
                                        {{ 0 }}
                                    @elseif($payment->category_of_membership == 5)
                                        {{ 250000 }}
                                    @endif
                                </span>
                            </li> --}}

                            @if ($payment->payment_type == 'cash')
                                <li class="mb-3">
                                    <span class="fw-bold me-2">Payment Date:</span>
                                    <span>{{ $payment->payment_date }}</span>
                                </li>
                            @else
                                <li class="mb-3">
                                    <span class="fw-bold me-2">Bank Name:</span>
                                    <span>{{ $payment->bank_name }}</span>
                                </li>
                                <li class="mb-3">
                                    <span class="fw-bold me-2">Cheque Number:</span>
                                    <span>{{ $payment->cheque_number }}</span>
                                </li>
                                <li class="mb-3">
                                    <span class="fw-bold me-2">Payment Date:</span>
                                    <span>{{ $payment->cheque_date }}</span>
                                </li>
                            @endif


                        </ul>
                    </div>
                </div>
                <div class="d-flex justify-content-center pt-3">
                        @if ($member->member_type == 'executive')
                            <a href="{{ url('admin/members/executive') }}" class="btn btn-primary me-3">Back</a>
                        @elseif($member->member_type == 'non-executive')
                            @if ($member->membership_category_id == '1')
                            <a href="{{ url('admin/members/general') }}" class="btn btn-primary me-3">Back</a>
                            @elseif ($member->membership_category_id == '2')
                            <a href="{{ url('admin/members/life') }}" class="btn btn-primary me-3">Back</a>
                            @elseif ($member->membership_category_id == '3')
                            <a href="{{ url('admin/members/donor') }}" class="btn btn-primary me-3">Back</a>
                            @elseif ($member->membership_category_id == '4')
                            <a href="{{ url('admin/members/honorable') }}" class="btn btn-primary me-3">Back</a>
                            @elseif ($member->membership_category_id == '5')
                            <a href="{{ url('admin/members/corporate') }}" class="btn btn-primary me-3">Back</a>
                            @endif
                        @endif

                </div>
            </div>
        </div>
    </div>
@endsection
