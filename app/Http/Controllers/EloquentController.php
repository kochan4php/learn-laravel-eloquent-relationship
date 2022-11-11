<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class EloquentController extends Controller
{
    public function __construct(private User $user_model = new User)
    {
    }

    public function one_to_one()
    {
        $users = $this->user_model->all();
        return view('one-to-one', compact('users'));
    }

    public function one_to_many()
    {
        $users = $this->user_model->all();
        return view('one-to-many', compact('users'));
    }
}
