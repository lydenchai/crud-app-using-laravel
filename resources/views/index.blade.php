@extends('layout')

@section('content')

<style>
  .push-top {
    margin-top: 50px;
  }
  table{
    border-collapse: collapse;
    border: 1px solid #000;
    width: 100%;
  }
  tr, td{
    border: 0.5px solid rgb(8, 8, 8);
    color: black;
    text-align: center;
    padding: 4.5px;
  }
  th{
    background: rgb(87, 177, 179);
    font-size: 15px;
  }

  .btn{
    cursor: pointer;
  }
  .c{
    margin-top: 15px;
  }
  ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    text-decoration: none;
  }
  li{
    width: 100px;
    height: 30px;
    text-align:center;
    border-radius: 5px;
    cursor: pointer;
  }
</style>
<div class="c">
  <ul>
    <li><a class="btn btn-block btn-primary" href="{{ url("/students/create") }}"><i class="fa fa-plus" ></i> Create</a></li>
  </ul>
</div>
<div class="push-top">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br/>
  @endif
  <table class="table">
    <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Password</th>
          <th class="text-center">Action</th>
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
            <td class="text-center" style="width:150px; margin:0">
                <a href="{{ route('students.edit', $students->id)}}" class="btn" style="width:60px;"><i class="fa fa-pencil" style="font-size:24px; color:red;"></i></a>
                <form action="{{ route('students.destroy', $students->id)}}" method="post" style="display: inline-block">
                  @csrf
                  @method('DELETE')
                  <button class="btn" type="submit"><i class="fa fa-trash-o" style="font-size:24px; color:#2b7cff;"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection