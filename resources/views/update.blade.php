@extends('layouts')


@section('content')<br/>
<div class="row">
    <div class="col-lg-12">
        <br/><br>
        <form action="{{route('todo.save',['id'=>$todo->id])}}" method="post">
            {{csrf_field()}}
            <input type="text" class="form-control input-lg" name="todo" value="{{$todo->todo}}" placeholder="Create Todo">
        </form>
    </div>
</div>


@stop