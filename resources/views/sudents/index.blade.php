<!DOCTYPE html>
<html>
<head>
    <title></title>
    @include('layouts.style')
</head>
<body>




<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="text-center">

            <h2>Student Details</h2>

        </div>

        
    </div>

</div>



@if ($message = Session::get('success'))

<div class="alert alert-success">

    <p>{{ $message }}</p>

</div>

@endif



<table class="table table-bordered">
  <thead class="thead-light">
    <tr>

        <th>No</th>

        
        <th>Name</th>

        <th>Address</th>

        <th>Email:</th>

        <th>MobileNo.</th>

        
         <th> Image </th>

        


        


    </tr>
</thead>

    @foreach ($sudents as $sudent)

    <tr>

        <td>{{ ++$i }}</td>

        

        <td>{{ $sudent->name }}</td>

        <td>{{ $sudent->address }}</td>

        <td>{{ $sudent->email }}</td>

        <td>{{ $sudent->mobile }}</td>

        

        <td><img src="{{ asset('storage/'.$sudent->image) }}" width="70px" height="70px" alt="image"></td>
       
        

        

    </tr>

    @endforeach

</table>
<div class="pull-right">

    <a class="btn btn-success" href="{{ url("/pdf_stu") }}"> pdf </a>
    <a class="btn btn-success" href="{{ url('/excel_stu') }}">Excel</a>

</div>










</body>
</html>



