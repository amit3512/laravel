@extends('layouts.app')



@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Exams Details</h2>

        </div>

        <!-- <div class="pull-right">

            <a class="btn btn-success" href="{{ route('exams.create') }}"> Add Exam Details</a>

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

        <th>Student ID</th>

        <th>Subject ID</th>

        <th>Obt_marks</th>

        <!-- <th width="300px">Action</th> -->

    </tr>

    @foreach ($exams as $exam)

    <tr>

        <td>{{ $exam->stu_id }}</td>

        <td>{{ $exam->exam_id }}</td>

        <td>{{ $exam->obt_marks }}</td>

        <!-- <td>

            <form action="{{ route('exams.destroy',$exam->id) }}" method="POST">



                <a class="btn btn-info" href="{{ route('exams.show',$exam->id) }}">Show</a>

                

                <a class="btn btn-primary" href="{{ route('exams.edit',$exam->id) }}">Edit</a>

                

                @csrf

                @method('DELETE')

                

                <button type="submit" class="btn btn-danger">Delete</button>

                


            </form>



        </td> -->


    </tr>

    @endforeach

</table>
<div class="pull-right">

    <a class="btn btn-success" href="{{ url("/pdf_exam") }}">pdf</a>
    <a class="btn btn-success" href="{{ url('/excel_exam') }}">Excel</a>


</div>





{!! $exams->links() !!}



@endsection

