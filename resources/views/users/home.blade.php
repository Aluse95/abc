@extends('layout.client')
@section('title')
    Home
@endsection
@if (session('msg'))
<div class="alert alert-success">{{session('msg')}}</div>
@endif
@section('content')
    <div class="container">
        <table class="table table-border text-center">
            <thead style="background-color:#9c6bad">
                <tr>
                    <th width="5%">No.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Class</th>
                    <th>Address</th>
                    <th width="5%"></th>
                    <th width="5%"></th>
                </tr>
            </thead>
            <tbody>
                @if (!empty($data))
                    @foreach ($data as $key => $item)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$item->fullname}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->class}}</td>
                            <td>{{$item->address}}</td>
                            <td><a href="{{route('users.edit',['id'=>$item->id])}}" class="btn btn-warning">Edit</a></td>
                            <td><a onclick="return confirm('Bạn muốn xóa sinh viên này không?')" href="{{route('users.delete',['id'=>$item->id])}}" class="btn btn-danger">Delete</a></td>
                        </tr>
                    @endforeach
                    
                @endif
            </tbody>
        </table>
        <a href="{{route('users.add')}}" class="btn btn-primary">Add Student</a>
    </div>

@endsection