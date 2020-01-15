<!DOCTYPE html>
<html>
<head>
    <title></title>
@include('layouts.style')
</head>
<body>


<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>RESULT</h2>

        </div>

        

    </div>

</div>



@if ($message = Session::get('success'))

<div class="alert alert-success">

    <p>{{ $message }}</p>

</div>

@endif



<table class="table table-bordered">

    <tr>



        <th>Name</th>
       
        <th>Subjects</th>

        <th>Obt_marks</th>

        <th>Remarks</th>



    </tr>

    @foreach ($joins as $join)

    <tr>
        <td>{{ $join->name }}</td>

        <td>{{ $join->sub_name }}</td>

        <td>{{ $join->obt_marks }}</td>
        <td><?php


        if ($join->obt_marks > "40") {
            echo "pass";
        } else {
            echo "fail";
        }
        ?>




        
    </tr>

    @endforeach

</table>

<!-- <div class="text-center">

            <a class="btn btn-success" href="{{ url("/pdf_result") }}">pdf</a>

            <a class="btn btn-success" href="{{ url('/excel_result') }}">Excel</a>


</div> -->




</body>
</html>



