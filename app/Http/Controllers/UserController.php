<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class UserController extends Controller
{
    /**
     * All users
     */
    public function index()
    {
        $getUsers = file_get_contents('/var/www/laravel/example-app/storage/app/users.json');
        $users = json_decode($getUsers, true);

        return view('users.index', [
            'users' => $users
        ]);
    }

    /**
     * show user for id
     */
    public function show($id)
    {
        $getUsers = file_get_contents('/var/www/laravel/example-app/storage/app/users.json');
        $users = json_decode($getUsers, true);
        $user = [];

        foreach ($users as $key => $value) {
            if ($value['id'] === $id) {
                $user = array_merge($user, $value);
                break;
            }
        }

        return view('users.show', [
            'user' => $user
        ]);
    }

    /**
     * Create new user
     */
    public function store(Request $request)
    {
        $getUsers = file_get_contents('/var/www/laravel/example-app/storage/app/users.json');
        $users = json_decode($getUsers, true);
        $newUser = [
            [
                'id' => md5(rand()),
                'name' => $request->name,
                'age' => $request->age,
                'birth_date' => $request->birth_date

            ]
        ];
        $users = array_merge($users, $newUser);


        $createUser = file_put_contents('/var/www/laravel/example-app/storage/app/users.json', json_encode($users, JSON_PRETTY_PRINT));

        if ($createUser) {
            return redirect('/users');
        }

        return redirect('users/create', 302);
    }

    /**
     * Create new user
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * show update form page
     */
    public function edit($id)
    {
        $getUsers = file_get_contents('/var/www/laravel/example-app/storage/app/users.json');
        $users = json_decode($getUsers, true);
        $user = [];

        foreach ($users as $key => $value) {
            if ($value['id'] === $id) {
                $user = array_merge($user, $value);
                break;
            }
        }

        return view('users.edit', [
            'user' => $user
        ]);
    }

    /**
     * Update user
     */
    public function update(Request $request, string $id) {
        $getUsers = file_get_contents('/var/www/laravel/example-app/storage/app/users.json');
        $users = json_decode($getUsers, true);
        $user = [];

        foreach ($users as $key => $value) {
            if ($value['id'] === $id) {
                $user = array_merge($user, $value);
                $users[$key]['name'] = $request->name;
                $users[$key]['age'] = $request->age;
                $users[$key]['birth_date'] = $request->birth_date;
            }
        }

         file_put_contents('/var/www/laravel/example-app/storage/app/users.json', json_encode($users, JSON_PRETTY_PRINT));
         return redirect('/users');
    }

    /**
     * Destroy user
     */
    public function destroy(Request $request, string $id) {
        $getUsers = file_get_contents('/var/www/laravel/example-app/storage/app/users.json');
        $users = json_decode($getUsers, true);

        foreach ($users as $key => $value) {
            if ($value['id'] === $id) {
                unset($users[$key]);
            }
        }

         file_put_contents('/var/www/laravel/example-app/storage/app/users.json', json_encode($users, JSON_PRETTY_PRINT));
         return redirect('/users');
    }
}
