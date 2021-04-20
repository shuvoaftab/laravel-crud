
@section('content')

<div>

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

                    <a href="{{route('students.edit', $student->id)}}" style="background:darkblue;color:white;border:none;padding:3px;margin:5px;text-decoration:none;border-radius:3px">Edit</a>

                    @csrf
                    @method('DELETE')
                    <button type="submit" style="background:red;color:white;border:none;padding:3px;margin-left:5px"> Delete</button>
                </form>
            </td>
        </tr>
        @endforeach


    </table>
    <div style="text-align:center;margin-top:20px">
        <a href="{{route('students.create')}}" style="color:red;background:darkgreen;color:white;text-decoration:none;border-radius:3px;padding:10px"> Register a new Student</a>
    </div>

</div>
