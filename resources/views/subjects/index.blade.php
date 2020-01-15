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

          <h2>Subjects Details</h2>

        </div>

        <!-- div class="pull-right">

            <a class="btn btn-success" href="{{ route('subjects.create') }}"> Add New Subject</a>

        </div> -->


    </div>

</div>



@if ($message = Session::get('success'))

<div class="alert alert-success">

    <p>{{ $message }}</p>

</div>

@endif



<table class="table table-bordered">

    <tr>

        <th>Subject ID</th>

        <!-- <th>Students ID</th>

        <th>Subject ID </th>
 -->
        <th>Subject Name</th>

        <!-- <th width="280px">Action</th> -->

    </tr>

    @foreach ($subjects as $subject)

    <tr>

        

        <td>{{ $subject->id }}</td>

        <!-- <td>{{ $subject->student_id }}</td>

        <td>{{ $subject->sub_id }}</td> -->


        <td>{{ $subject->sub_name }}</td>






        

        <!-- <td>  
            <form action="{{ route('subjects.destroy',$subject->id) }}" method="POST">

             

                <a class="btn btn-info" href="{{ route('subjects.show',$subject->id) }}">Show</a>

                

                <a class="btn btn-primary" href="{{ route('subjects.edit',$subject->id) }}">Edit</a>

                

                @csrf

                @method('DELETE')

                

                <button type="submit" class="btn btn-danger">Delete</button>
                

            </form>

        </td>
 -->
    </tr>

    @endforeach

</table>
<div class="text-center">

            <a class="btn btn-success" href="{{ url("/pdf_sub") }}">pdf</a>
            <a class="btn btn-success" href="{{ url('/excel_sub') }}">Excel</a>


        </div>



{!! $subjects->links() !!}





</body>
</html>



