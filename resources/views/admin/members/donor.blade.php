@extends('layouts.backend')

@section('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
@endsection

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">
      <span class="text-muted fw-light">Member /</span> Donor
    </h4>

    <!-- DataTable with Buttons -->
    <div class="row">
        <div class="col-lg-12 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-12">
                        <div class="card-body">
                            <table id="example" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Membership ID</th>
                                        <th>Email</th>
                                        <th>Contact No</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($members as $member)
                                    <tr>
                                        <td>1</td>
                                        <td>{{ $member->name }}</td>
                                        <td>{{ $member->membership_number }}</td>
                                        <td>{{ $member->email }}</td>
                                        <td>{{ $member->mobile }}</td>
                                        <td>
                                            <a href="" class="btn btn-primary btn-sm"><i class="fa-solid fa-eye"></i></a>
                                            <a href="" class="btn btn-success btn-sm"><i class="fa-solid fa-pen"></i></a>
                                            <a href="" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
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

        <!-- Total Revenue -->
    </div>
</div>

@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function () {
        $('#example').DataTable();
    });
</script>
@endsection
