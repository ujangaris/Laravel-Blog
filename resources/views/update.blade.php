@extends('layout')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <br><br><br><br>
        <form action="{{ route('todo.save',['id'=> $todo->todo]) }}e" method="post">
            {{ csrf_field() }}
            <input type="text" class="form-control input-lg" name="todo"  value="{{ $todo->todo }}" placeholder="Create a new todo">
        </form>

    </div>
</div>
<hr>
    
@stop