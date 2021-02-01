@extends('layouts.app')

@section('content')

  @include('admin.includes.errors')
  
    <div class="panel panel-default">
      <div class="panel-heading">
          edit blog settings      
      </div>
      <div class="panel-body">
        <form action="{{ route('settings.update') }}" method="post">
          {{ csrf_field() }}
            <div class="form-group">
              <label for="site_name">Site name</label>
              <input type="text" name="site_name" value="{{ $settings->site_name }}" class="form-control">
            </div>
            <div class="form-group">
              <label for="address">Email</label>
              <input type="text" name="address" value="{{ $settings->address }}" class="form-control">
            </div>
            <div class="form-group">
              <label for="contact_number">Contact phones</label>
              <input type="text" name="contact_number" value="{{ $settings->contact_number }}" class="form-control">
            </div>
            <div class="form-group">
              <label for="contact_email">Contact email</label>
              <input type="text" name="contact_email" value="{{ $settings->contact_email }}" class="form-control">
            </div>
           
            <div class="form-group">
              <div class="text-center">
                <button type="submit" class="btn btn-success">Update site settings</button>
              </div>
            </div>
        </form>
      </div>
    </div>
@stop