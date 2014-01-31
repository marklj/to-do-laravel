<?php

class ToDoController extends BaseController {

    protected $todo_model;

    public function __construct()
    {
        // We need instantiate the model before we do anything
        $this->todo_model = new ToDo;
    }

    // Main listing page
    public function listing()
    {
        // Get all of the todo items from the model for the listing page
        $todos = $this->todo_model->all();

        // Load listing_view and pass in the todo list
        return View::make('listing_view')->with('todos', $todos);
    }

    // Individual todo item page
    public function detail($id)
    {
        try
        {
            // Get the todo item from the model based on the id passed to this controller function
            $todo = $this->todo_model->find($id);
        }
        catch(TodoNotFoundException $e)
        {
            // If there is no todo item with the given ID, then catch the exception and return a "404 NotFoundHttpException"
            App::abort(404);
        }

        // Load detail_view and pass in the todo data variable
        return View::make('detail_view')->with('todo', $todo);
    }

    // Todo item creation view
    public function create()
    {
        // If the form has been submitted, insert the todo item and redirect back to main listing page
        if($_POST)
        {
            try
            {
                // Run the insert function from the model to create the todo item in the database
                $this->todo_model->insert(Input::all());

                // Redirect to the new todo item in the detail view
                return Redirect::to('/todo');
            }
            catch(TodoValidationException $e)
            {
                // You can add something here to handle validation errors.
                // For now we wont return anything and send the user back to the create_view
            }
        }

        // Load create_view if not submitted
        return View::make('create_view');
    }





    //unimplemented functions

    public function edit($id)
    {
        // Unfinished function. Why not take a shot at it?
        
        return 'edit view';
    }

    public function delete($id)
    {
        // Unfinished function. Why not take a shot at it?

        return 'delete';
    }

}