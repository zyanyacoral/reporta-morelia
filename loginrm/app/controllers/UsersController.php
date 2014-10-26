<?php

class UsersController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		 $users = User::all();
        return View::make('index', compact('users'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
	 return View::make('create');
	}

	public function handleCreate() {
        $user = new User;
        $user->name = Input::get('name');
        $user->username = Input::get('username');
        $user->email = Input::get('email');
        $user->password = Input::get('password');
        $user->save();
        return Redirect::action('UsersController@index');
	}

public function edit(User $user)
    {
        // Show the edit user form.
        return View::make('edit', compact('user'));
    }
public function handleEdit()
    {
        // Handle edit form submission.
        $user = User::findOrFail(Input::get('id'));
        $user->name        = Input::get('name');
        $user->username           = Input::get('username');
        $user->email                = Input::get('email');
        $user->password = Input::get('password');
        $user->save();
    	return Redirect::action('UsersController@index');
    }
	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */

	public function store()
	{
	
$rules = array(
			'name'    => 'required|min:3',
			'email'    => 'required|email', // make sure the email is an actual email
			'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
			);
		// run the validation rules on the inputs from the form
		
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
public function handleDelete()
    {
         // Handle the delete confirmation.
        $id = Input::get('user');
        $user = User::findOrFail($id);
        $user->delete();
        return Redirect::action('UsersController@index');
    }

public function delete(User $user)
    {
        // Show delete confirmation page.
        return View::make('delete', compact('user'));
    }

}