@extends('students.layout')

@section('content')

<div>

    <h1>Student Profiles</h1>
    <table border="1" width="100%">
        <tr>
            <th>Student ID</th>
            <th>Full Name</th>
            <th>Batch</th>
            <th>Action</th>
        </tr>

        @foreach($students as $student)
        <tr>
            <td>{{$student->student_id}}</td>

            <td>{{$student->name}}</td>

            <td>{{$student->batch}}</td>

            <td>
                <form action="{{route('students.destroy', $student->id)}}" method="POST">
                    <a href="{{route('students.edit', $student->id)}}">Edit</a>

                    @csrf
                    @method('DELETE')
                    <button type="submit"> Delete</button>
                </form>
            </td>
        </tr>
        @endforeach


    </table>
    <div style="text-align:center;margin-top:20px">
        <a href="{{route('students.create')}}" style="color:red"> Register a new Student</a>
    </div>
  
</div>