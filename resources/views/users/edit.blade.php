@extends('layout.client')
@section('title')
    Edit Student
@endsection
@section('content')
    <div class="container">
        <h2 style="margin-top: 15px" class="text-center">Edit Student</h2>
        <form action="" method="post">
            @csrf
            <div class="mb-3">
                <label for="">FullName</label>
                <input type="text" class="form-control" name="fullname" placeholder="Name..." value="{{old('fullname') ?? $student->fullname}}" >
                @error('fullname')
                    <span style="color: red">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="">Email</label>
                <input type="text" class="form-control" name="email" placeholder="Email..." value="{{old('email') ?? $student->email}}">
                @error('email')
                <span style="color: red">{{$message}}</span>
            @enderror
            </div>
            <div class="mb-3">
                <label for="">Class</label>
                <input type="text" class="form-control" name="class" placeholder="Class..." value="{{old('class') ?? $student->class}}">
                @error('class')
                <span style="color: red">{{$message}}</span>
            @enderror
            </div>
            <div class="mb-3">
                <label for="">Address</label>
                <input type="text" class="form-control" name="address" placeholder="Address..." value="{{old('address') ?? $student->address}}">
                @error('address')
                <span style="color: red">{{$message}}</span>
            @enderror
            </div>
    
            <button class="btn btn-primary">Save</button>
            <a href="{{route('users.index')}}" class="btn btn-warning">Back</a>
        </form>
    </div>

@endsection