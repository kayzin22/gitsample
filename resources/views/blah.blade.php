@extends('layouts.app')
@section('title')
Dataflow
@stop
@section('content')
	<div class="container">
		<div class="row">
      <!-- input box -->
			<div class="col-md-4">
				<div class="card shadow">
          <div class="card-header">
            Input box
          </div>
          <div class="card-body">
            <form method="POST" action="{{route('data')}}">
              <div class="form-group">
                <label>First name :</label>
                <input type="text" class="form-control" name="firstname" required>
              </div>
              <div class="form-group">
                <label>Last name :</label>
                <input type="text" class="form-control" name="lastname" required>
              </div>
              <div class="form-group">
                <label>Email :</label>
                <input type="email" class="form-control" name="email" required>
              </div>
              <div class="form-group">
                <label>City :</label>
                <input type="text" class="form-control" name="city" required>
              </div>
              <div class="form-group">
                <input class="btn btn-primary" type="reset" value="Reset">
                <button class="btn btn-primary" type="submit">submit</button>
              </div>
              @csrf
            </form>
          </div>
        </div>
			</div>
      <!-- detailBox -->
			<div class="col-md-8">
        <div class="card shadow">
          <div class="card-header">
            User Detail
          </div>
          <div class="table">
            <table class="detailtable">
              <tr>
              <th>ID</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
                <th>City</th>
                <th>Delete</th>
                <th>Edit</th>
              </tr>
              @foreach($data as $datas)
              <tr>
              <td>{{$datas->id}}</td>
              <td>{{$datas->firstname}}</td>
              <td>{{$datas->lastname}}</td>
              <td>{{$datas->email}}</td>
              <td>{{$datas->city}}</td>
              <td><a class="btn btn-danger" href="{{route('delete',[$datas->id])}}">Delete</a></td>
              <td><a class="btn btn-success" data-toggle="modal" data-target="#update{{$datas->id}}" href="#">Edit</a></td>
                <div class="modal fade" id="update{{$datas->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form method="POST" action="{{route('update',[$datas->id])}}">
                          <div class="form-group">
                            <label>First name :</label>
                            <input type="text" class="form-control" name="firstname" value="{{$datas->firstname}}" required>
                          </div>
                          <div class="form-group">
                            <label>Last name :</label>
                            <input type="text" class="form-control" name="lastname" value="{{$datas->lastname}}" required>
                          </div>
                          <div class="form-group">
                            <label>Email :</label>
                            <input type="email" class="form-control" name="email" value="{{$datas->email}}" required>
                          </div>
                          <div class="form-group">
                            <label>City :</label>
                            <input type="text" class="form-control" name="city" value="{{$datas->city}}" required>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                          </div>
                          @csrf
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </tr>
              @endforeach
            </table>
          </div>
        </div>
			</div>
		</div>
	</div>
@stop