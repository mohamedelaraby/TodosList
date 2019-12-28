<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class TodosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Get all todos into database
      $todos= Todo::orderBy('created_at','desc')->get();
        
        return view('todos.index')->with('todos',$todos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Return the create page
        return view('todos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the form
         $this->validate($request, [
             'text' => 'required|max:50',
             'body' => 'required|max:140',
         ]);

        // $validator = Validator::make($request->all(), [
        //     'text' => 'required|max:50',
        //     'body' => 'required|max:150',
        // ]);
        
        // If validator fails return withh input and error
            // if($validator->failed()){
            //     return redirect('/')->withInput()->withErrors($validator);
            // }

            // Create a Todo
            $todo = new Todo;
            $todo->text = strip_tags(preg_replace('/\s+/', ' ',  $request->input('text')));
            $todo->body = strip_tags(preg_replace('/\s+/', ' ',  $request->input('body')));
            $todo->due = strip_tags($request->input('due'));
            $todo->save();
            return redirect('/')->with('success', 'Todo Created'); 

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Find the todoss
        $todo = Todo::find($id);

        return view('todos.show')->with('todo',$todo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Find  todo
        $todo = Todo::find($id);
        return view('todos.edit')->with('todo', $todo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Find  aTodo to update
        $todo = Todo::find($id);
        // Validate the inputs
        $this->validate($request, [
           'text' => 'max:50',
           'body' => 'max:120',
        ]);
        // store into database
        $todo->text = strip_tags(preg_replace('/\s+/', ' ',  $request->input('text')));
        $todo->body = strip_tags(preg_replace('/\s+/', ' ',  $request->input('body')));
        $todo->due = strip_tags($request->input('due'));

        $todo->save();
        // redirect with success message
        return redirect('/')->with('success','Todo updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $todo = Todo::find($id);
        $todo->delete();
        return redirect('/')->with('success', 'Todo deleted');
    }
}
