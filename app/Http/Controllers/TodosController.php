<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use App\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index()
    {
        $todos= Todo::paginate(5);
        return view('todos')->with('todos',$todos);
    }

    public function store(Request $request)
    {
        $todo=new Todo;
        $todo->todo=$request->todo;
        $todo->save();
        Session::flash('success','successfully created');
        return redirect()->back();

    }

    public function delete($id)
    {
        $todo=Todo::find($id);
        $todo->delete();
        Session::flash('success','successfully deleted');
        return redirect()->back();
    }

    public function update($id)
    {
        $todo=Todo::find($id);

        return view('update')->with('todo',$todo);
    }

    public function save(Request $request, $id)
    {
        $todo=Todo::find($id);

        $todo->todo=$request->todo;
        $todo->save();
        Session::flash('success','successfully updated');
        return redirect()->route('todos');
    }

    public function completed($id)
    {
        $todo=Todo::find($id);
        $todo->completed=1;
        $todo->save();
        Session::flash('success','successfully mark as completed');
        return redirect()->back();
    }
}
