@extends('layouts.backend')

@section('content')
    <div class="form-group">
        <div class="d-flex align-content-between">
            <input type="text" name="name[]" class="form-control" placeholder="Enter name">
            <select name="" id="" class="form-control">
                <option value="">Select</option>
                <option value="">Select</option>
                <option value="">Select</option>
            </select>
            <input type="text" name="age[]" class="form-control" placeholder="Enter age">
            <button id="newBtn" class="btn btn-primary"><i class="fas fa-plus"></i></button>
        </div>
    </div>
@endsection


@section('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <script>
        // $(document).ready(function() {
        //     $('#plusButton').click(function(e) {
        //         e.preventDefault();
        //         $('table').append('<tr><td><input type="text"></td><td><select><option value=""></option></select></td><td><input type="text"></td><td><button id="trashButton" class="btn btn-danger"><i class="fas fa-trash"></i></button></td></tr>');
        //     });

        //     $('table').on('click', '#trashButton', function(e){
        //         e.preventDefault();
        //         $(this).parent('tr').remove();
        //     });
        // });




        $('#newBtn').click(function() {
                $('.form-group').append('<div class="d-flex align-content-between mt-2"><input type="text" name="name[]" class="form-control" placeholder="Enter name"><select name="" id="" class="form-control"><option value="">Select</option><option value="">Select</option><option value="">Select</option></select><input type="text" name="age[]" class="form-control" placeholder="Enter age"><button id="removeBtn" class="btn btn-danger"><i class="fas fa-trash"></i></button></div>');
            });

        $('.form-group').on('click', '#removeBtn', function() {
            $(this).parent('div').remove();
        });
    </script>
@endsection

