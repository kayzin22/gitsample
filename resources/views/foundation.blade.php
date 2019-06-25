@extends('layouts.app')
@section('title')
    Foundation
@stop
@section('content')
<div class='container'>
    <div class="row">
        <div class="col-md-6 offset-3">
            <div class="card">
                <div class="card-header">
                    Foundation
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label>Gmail : </label>
                            <input type="text" class="form-control" name="gmail" required>
                        </div>
                        <div class="form-group">
                            <label>Password : </label>
                            <input type="text" class="form-control" name="password" required>
                        </div>
                        <div class="form-group">
                            <label>Confirm password : </label>
                            <input type="text" class="form-control" name="comfirm_password" required>
                        </div>
                        <div class="form-group">
                            <label>Foundation Name : </label>
                            <input type="text" class="form-control" name="foundation_name" required>
                        </div>
                        <div class="form-group">
                            <label>Chairman : </label>
                            <input type="text" class="form-control" name="chairman" required>
                        </div>
                        <div class="form-group">
                            <label>Addressing : </label>
                            <input type="text" class="form-control" name="addressing" required>
                        </div>
                        <div class="form-group">
                            <label>Phone : </label>
                            <input type="text" class="form-control" name="phone" required>
                        </div>
                        <div class="form-group">
                            <label>Start Date (yy/mm/dd) : </label>
                            <div class="row">
                                <div class="col-md-4">
                                    <select name="yearpicker" id="yearpicker" class="form-control">
                                        @for($i = 1990; $i < date('Y') + 10; $i++ )
                                        <option value="{{ $i }}" @if($i == date('Y')) selected @endif>{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    @php
                                        $months = [
                                            'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'
                                        ];
                                    @endphp
                                    <select class="form-control">
                                        @foreach($months as $key => $val)
                                        <option value="{{ $key }}" @if(date('m') - 1 == $key) selected @endif>{{ $val }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <select name="daypicker" id="daypicker" class="form-control"></select>
                                </div>
                            </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    <script>
        // for (i = new Date().getFullYear(); i > 1900; i--)
        // {
        //     $('#yearpicker').append($('<option />').val(i).html(i));
        // }
        // for (i = 1; i <= 31 ; i++){
        //     $('#daypicker').append($('<option />').val(i).html(i));
        // }
    </script>
@stop