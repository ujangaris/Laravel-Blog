@extends('layouts.app')

@section('content')

  @include('admin.includes.errors')
  
    <div class="panel panel-default">
      <div class="panel-heading">
          Create a new user        
      </div>
      <div class="panel-body">
        <form action="{{ route('user.store') }}" method="post">
          {{ csrf_field() }}
            <div class="form-group">
              <label for="name">User</label>
              <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" name="email" class="form-control">
            </div>
           
            <div class="form-group">
              <div class="text-center">
                <button type="submit" class="btn btn-success">Add user</button>
              </div>
            </div>
        </form>
      </div>
    </div>
@stop