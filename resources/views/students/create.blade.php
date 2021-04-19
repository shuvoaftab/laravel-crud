@extends('students.layout')

@section('content')

@if($errors->any())
    <div>
        <strong> Whoops! </strong> There were some problem with your input <br/>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>

    </div>
@endif


<div style="text-align:center">
    <form action="{{route('students.store')}}" method="POST">
        @csrf
        Student ID:<input type="text" name="student_id" placeholder="XXX-XXX-XXX"> <br/>
        Student Name:<input type="text" name="name" placeholder="Ibrahim Sharif"> <br/>
        Student Batch:<input type="text" name="batch" placeholder="CSE 46"> <br/>

        <button type="submit" >Register</button>

    </form>
</div>