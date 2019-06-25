@extends('layouts.app')
@section('title')
    Home
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                  
                </div>
            </div>
        </div>
        <div class="col-md-4">
       <div class="card shadow">
       <div class="card-header">
        User
       </div>
       <div class="card-body">
  <form method="post" action="{{route('aa')}}">
            <div class="form-group">
                <label for="name">Name</label>
            <input type="text" id="name" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
            <input type="number" id="password" name="password" class="form-control">
            </div>
            <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Save</button>
            </div>
            @csrf
         </form>
       </div>
       </div>
        </div>
    </div>
</div>
@endsection
