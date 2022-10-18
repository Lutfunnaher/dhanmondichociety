@extends('layouts.backend');

@section('content')
    <div class="row">
        <div class="col-md-8 offset-2">
            <div class="card mb-4">
                <h5 class="card-header">Add Member Category</h5>

                @if ($errors->any())
                    <div>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li class="alert alert-danger" style="list-style: none">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif


                <div class="card-body">
                    <form action="{{ route('category.update'), $category->id }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Member Category Name *</label>
                            <input type="text" class="form-control" name="category_name" value="{{ $category->name }}" id="exampleFormControlInput1"
                                placeholder="Enter Category Name">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Member Category Fees *</label>
                            <input type="number" class="form-control" name="category_amount" value="{{ $category->fees }}" id="exampleFormControlInput1"
                                placeholder="Enter Amount">
                        </div>
                        <div class="mb-3">
                            <input type="submit" class="btn btn-primary" value="Add Category">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
