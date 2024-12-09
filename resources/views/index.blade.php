@extends('layout')
@section('content')
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
    text-align: center;
  }

  tbody,
  tr,
  td {
    border-bottom: 0.8px solid rgb(8, 8, 8);
    color: black;
    text-align: center;
  }

  td {
    margin-top: 10px;
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
<div class="create d-flex align-items-center justify-content-end">
  <ul>
    <li><a class="btn btn-block btn-primary" href="{{ url('/students/create') }}"><i class="fa fa-plus"></i> Create</a></li>
  </ul>
</div>
@if ($message = Session::get('success'))
  <div class="alert alert-success">
    <p>{{ $message }}</p>
  </div>
@endif
<div class="push-top">
  @if($student =="")
  <h3 class="text-center">No data available</h3>
  @else
  <table class="table">
    <thead>
      <tr>
        <th>No.</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Password</th>
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
        <td>
          <div class="d-flex align-items-center justify-content-center">
            <a href="{{ route('students.show', $students->id) }}">
                <i class="fa fa-eye" style="font-size:24px; color:#007bff;"></i>
            </a>
            <a href="{{ route('students.edit', $students->id) }}" class="mx-2">
                <i class="fa fa-pencil" style="font-size:24px; color:#f39c12;"></i>
            </a>
            <form action="{{ route('students.destroy', $students->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-link p-0">
                    <i class="fa fa-trash" style="font-size:24px; color:#e74c3c;"></i>
                </button>
            </form>
          </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  @endif
  <div>
    @endsection