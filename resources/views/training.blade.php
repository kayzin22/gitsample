@extends('layouts.app')
@section('title')
 dashboard
@stop

@section('content')
<div class='container'>
    <div class='row'>
        <div class='col-md-4 offset-4'>
            <div class='card'>
                <div class='card-header'>
                    Training
                </div>
                <div class='card-body'>
                    <form method='post' action="{{route('trainingPost')}}">
                        <div class="form-group">
                            <label>Title :</label>
                            <input type="text" class="form-control" name="title" required>
                        </div>
                        <div class="form-group">
                            <label>Descination :</label>
                            <input type="text" class="form-control" name="desc" required>
                        </div>
                        <div class="form-group">
                            <label>Image :</label>
                            <input type="file" class="form-control" name="image" required>
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