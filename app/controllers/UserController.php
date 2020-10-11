<?php
namespace App\Controllers;
use App\Models\User;

class UserController extends BaseController{ 

	public function index()
	{
		$users = User::all();
		$this->render('users.index', compact('users'));
	}

	public function remove()
	{	
		$id = isset($_GET['id']) ? $_GET['id'] : -1;
        $model = User::find($id);
        // var_dump($model);
        // die;
        if($model){
            $model->delete();
        }
        header('location: ' . BASE_URL . 'show-user');
	}

	public function adduser()
	{
		$model = User::all();
		$this->render('users.add-user', compact('model'));
	}

	


}


?>