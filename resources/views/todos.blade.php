@extends('layouts')


@section('content')<br/>
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <br/><br>
            <form action="/create/todos" method="post">
                {{csrf_field()}}
                <input type="text" class="form-control input-lg" name="todo" placeholder="Create Todo">
            </form>
        </div>
    </div>
@foreach($todos as $todo)

    {{$todo->todo}} <a href="{{route('todo.delete',['id'=>$todo->id])}}" class="btn btn-danger">X</a>
    <a href="{{route('todo.update',['id'=>$todo->id])}}" class="btn btn-info">Update</a>
    <hr>

@endforeach

@stop