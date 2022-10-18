@extends('layouts.backend');

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="row">
                    <div class="col-11">
                        <h5 class="card-header">Member Category</h5>
                    </div>
                    <div class="col-1 pt-4">
                        <a href="{{ route('category.create') }}"><button type="submit" class="btn btn-primary btn-sm"><i class="fa-solid fa-plus"></i></button></a>
                    </div>
                </div>
                <div class="card-body">
                    @if (Session::has('message'))
                        <div class="alert alert-success">{{ Session::get('message') }}</div>
                    @endif
                    <table class="table table-default">
                        <thead>
                            <th>#</th>
                            <th>Category Name</th>
                            <th>Fees</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach ($categories as $key => $item)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->fees }}</td>
                                <td>
                                    <a href="{{ route('category.edit', $item->id) }}"><button type="submit" class="btn btn-primary"><i class="fa-solid fa-pen"></i></button></a>

                                    <form action="{{ route('category.destroy', $item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
