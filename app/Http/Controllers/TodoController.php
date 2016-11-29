<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Todo;

class TodoController extends Controller
{
    public $restful = true;


    public function index() {
        $todos = Todo::all();
        return view("todo.index")
            ->with("todos", $todos);
    }

    public function delete(Request $request, $id) {

        if($request->ajax()){

            $todo = Todo::find($id);
            $todo->delete();
            return "OK";

        }
    }

    public function done(Request $request, $id) {

        if($request->ajax()){

            $task = Todo::find($id);

            $task->status = '1';

            $task->save();

            return "OK";

        }

    }


    public function add(Request $request) {


        if($request->ajax()){

            $todo = new Todo();
            $todo->title = $request->input('title');
            $todo->save();

            $last_todo = $todo->id;

            $todo = Todo::find($last_todo);

            return view("todo.ajaxdata")
                ->with("todo", $todo);
        }


    }

    public function update(Request $request, $id) {

        if($request->ajax()){

            $task = Todo::find($id);
            $task->title = $request->input('title');
            $task->save();
            return "OK";

        }
    }
}
