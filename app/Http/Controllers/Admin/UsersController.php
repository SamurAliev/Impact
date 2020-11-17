<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('role', ['only' => ['edit','create']]);
    }
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }


    public function create()
    {
        $roles = Role::pluck('name', 'id')->all();
        return view('admin.users.create', compact('roles'));
    }

    function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',

            'email' => [
                'required',
                'email',
                'unique:users'
            ],
            'password'=>'required'
        ]);

        $user = User::add($request->all());

        $user->generatePassword($request->get('password'));
        return redirect()->route('users.index');
    }


    public function show($id)
    {
        //
    }

    public function edit(User $user)
    {
            $roles = Role::pluck('name', 'id')->all();
            return view('admin.users.edit', compact('user', 'roles'));


    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);


        $this->validate($request, [
            'name' => 'required',

            'email' => [
                'required',
                'email',
                Rule::unique('users')->ignore($user->id)

            ],
        ]);


    $user->edit($request->all());
    $user->generatePassword($request->get('password'));

    return redirect()->route('users.index');
    }


    public function destroy($user)
    {

        User::find($user)->delete();
        return redirect()->route('users.index');
    }
}
