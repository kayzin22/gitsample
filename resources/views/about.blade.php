@extends('layouts.app')
@section('title')
About
@stop
@section('content')
<div class="container">
    <div class="row">
        <!-- profile picture -->
        <div class="col-md-4">
            <div class="form-group">
                <label>Upload Profile</label>
                <div class="input-group">
                    <span class="input-group-btn">
                        <span class="btn btn-default btn-file">
                            Browse...<input type="file" id="imgInp">
                        </span>
                    </span>
                    <input type="text" class="form-control" readonly>
                </div>
                <img id='img-upload'/>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Information
                </div>
                <div class="card-body">
                    <form method="post" action="{{route('about_save')}}">
                        <div class="form-group">
                            <label>Name :</label>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                        <div class="form-group">
                            <label>Gmail :</label>
                            <input type="email" class="form-control" name="gmail" required>
                        </div>
                        <div class="form-group">
                            <label>Company :</label>
                            <input type="text" class="form-control" name="company" required>
                        </div>
                        <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Save</button>
                        </div>
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@stop