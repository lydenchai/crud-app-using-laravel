@extends('layout')
<link rel="stylesheet" href="{{ asset('css/edit.css') }}"> 
@section('content')

<div class="card push-top">
  <div class="card-header text-center" style="background:#244154; color: #fff;">
    <h3>Update Student</h3>
  </div>
  <div class="card-body">
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div><br />
    @endif
    <form method="post" action="{{ route('students.update', $student->id) }}">
      <div class="form-group">
        @csrf
        @method('PATCH')
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" value="{{ $student->name }}" />
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" value="{{ $student->email }}" />
      </div>
      <div class="form-group">
        <label for="phone">Phone</label>
        <input type="tel" class="form-control" name="phone" value="{{ $student->phone }}" />
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="text" class="form-control" name="password" value="{{ $student->password }}" />
      </div>
      <div class="action">
        <ul id="back">
          <li><a class="btn btn-block btn-danger" href="{{ url('/students') }}">Cancel</a></li>
        </ul>
        <button id="update" type="submit" class="btn btn-block btn-primary">Update</button>
      </div>
    </form>
  </div>
</div>
@endsection
<style>
  .container {
    max-width: 450px;
  }

  .push-top {
    margin-top: 50px;
  }

  .action {
    display: flex;
    width: 100%;
  }

  .c {
    margin-top: 15px;
  }

  ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    text-decoration: none;
  }

  #update,
  #back {
    width: 100%;
    margin: 5px;
    cursor: pointer;
  }
</style>