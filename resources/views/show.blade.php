@extends('layout')
@section('content')
<br>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <a class="btn btn-primary" href="{{ route('students.index') }}"><i class="fa fa-arrow-circle-left" style="font-size:20px">Back</i></a>
                </div>
            </div>
        </div>
        <br>
        <div class="show-content">
            <div class="row">
                <div class="left">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Student name:</strong>
                            {{ $student->name }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $student->email }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Phone Number:</strong>
                            {{ $student->phone }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<style>
    .container{
        width: 90%;
    }

    .row{
        display: flex;
    }

    .left{
        width: 50%;
    }

    .show-content{
        background: #899fab;
        width: 100%;
        padding: 10px;
        height: auto;
        border-radius: 5px;
        color: #fff;
    }
</style>