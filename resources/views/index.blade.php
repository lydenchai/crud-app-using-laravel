@extends('layout')
@section('content')

<div class="create">
  <ul>
    <li><a class="btn btn-block btn-primary" href="{{ url('/students/create') }}"><i class="fa fa-plus"></i> Create</a></li>
  </ul>
</div>
<div class="push-top">
  @if ($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
  @endif
  @if($student =="")
  <h3 class="text-center">No data available</h3>
  @else
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Password</th>
        <th>Details</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($student as $students)
      <tr>
        <td>{{$students->id}}</td>
        <td>{{$students->name}}</td>
        <td>{{$students->email}}</td>
        <td>{{$students->phone}}</td>
        <td>{{$students->password}}</td>
        <td><a class="" style="margin: 10px;" href="{{ route('students.show',$students->id) }}">Show</a></td>
        <td style="width:150px; margin:0">
          <a href="{{ route('students.edit', $students->id)}}" class="btn" style="width:60px;"><i class="fa fa-pencil" style="font-size:24px; color:#2b7cff; "></i></a>
          <form action="{{ route('students.destroy', $students->id)}}" method="post" style="display: inline-block">
            @csrf
            @method('DELETE')
            <button class="btn" type="submit"><i class="fa fa-trash-o" style="font-size:24px; color:red;"></i></button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  @endif
<div>
@endsection
<style>
  .push-top {
    margin-top: 50px;
  }

  table {
    border-collapse: collapse;
    width: 100%;
  }

  th {
    background: #244154;
    font-size: 15px;
    color: #fff;
  }

  tbody,
  tr,
  td {
    /* border: 1px solid rgb(8, 8, 8); */
    color: black;
    text-align: center;
  }

  .btn {
    cursor: pointer;
  }

  .create {
    margin-top: 20px;
    margin-bottom: -20px;
  }

  ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    text-decoration: none;
  }

  li {
    width: 100px;
    height: 30px;
    text-align: center;
    border-radius: 5px;
    cursor: pointer;
  }

  h3 {
    text-align: center;
  }
</style>