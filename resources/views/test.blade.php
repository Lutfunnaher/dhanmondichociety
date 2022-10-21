@extends('layouts.backend')

@section('content')
<table class="" id="children">
    <tr class="row">
        <td class="col-6">
            <div class="mb-3">
                <div class="input-group"><span class="input-group-text">Children Name</span><input type="text"
                        name="children[]" class="form-control" placeholder="Children name"></div>
            </div>
        </td>
        <td class="col-6">
            <div class="row">
                <div class="col-7">
                    <div class="mb-3">
                        <div class="input-group"><span class="input-group-text">Gender</span><select name="gender[]"
                                class="form-control">
                                <option value="" style="display: none">Select</option>
                                <option value="">Son</option>
                                <option value="">Daughter</option>
                                <option value="">Other</option>
                            </select></div>
                    </div>
                </div>
                <div class="col-5 d-flex justify-content-between align-content-center">
                    <div class="mb-3">
                        <div class="input-group"><span class="input-group-text">Age</span><input type="text"
                                class="form-control" placeholder="Age" name="age[]"></div>
                    </div>
                    <div class=""><button id="plusButton" class="btn btn-primary" style="width: 40px; height: 40px"><i
                                class="fa-solid fa-plus" style="margin: -6px"></i></button></div>
                </div>
            </div>
        </td>
    </tr>
</table>
@endsection


@section('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#plusButton').click(function(e) {
                e.preventDefault();
                $('table').append('<tr><td class="col-6"><div class="mb-3"><div class="input-group"><span class="input-group-text" >Children Name</span><input type="text" name="children[]" class="form-control" placeholder="Children name"></div></div></td><td class="col-6"><div class="row"><div class="col-7"><div class="mb-3"><div class="input-group"><span class="input-group-text" >Gender</span><select name="gender[]" class="form-control"><option value="" style="display: none">Select</option><option value="">Son</option><option value="">Daughter</option><option value="">Other</option></select></div></div></div><div class="col-5 d-flex justify-content-between align-content-center"><div class="mb-3"><div class="input-group"><span class="input-group-text">Age</span><input type="text" class="form-control" placeholder="Age" name="age[]"></div></div><div class=""><button id="removeButton" class="btn btn-danger" style="width: 40px; height: 40px"><i class="fa-solid fa-trash" style="margin: -6px"></i></button></div></div></div></td></tr>');
            });

            $('#children').on('click', '#removeButton', function(e){
                e.preventDefault();
                $(this).parent('tr').remove();
            })
        });
    </script>
@endsection

