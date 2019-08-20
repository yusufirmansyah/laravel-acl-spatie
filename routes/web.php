<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Spatie\Permission\Models\Role;

Route::get('/', function () {
    return view('welcome');

    // ! Roles
    // auth()->user()->assignRole('user');
    // auth()->user()->removeRole('admin');
    // auth()->user()->assignRole('admin', 'user');
    // auth()->user()->syncRoles('admin');
    // auth()->user()->syncRoles(['admin']);

    // ! Permissions
    // $user = auth()->user();

    // $user->givePermissionTo('add post');
    // $user->givePermissionTo('edit post');
    // $user->revokePermissionTo('edit post');
    // $user->syncPermissions(['add post', 'delete post']);
    // dd($user->hasPermissionTo('edit post'));
    // dd($user->hasAnyPermission(['edit post', 'delete post']));

    // ! Role has Permissions
    // $role = Role::find(1);

    // $role->givePermissionTo('add post', 'edit post', 'delete post', 'view post');
    // $role->revokePermissionTo('edit post');
    // $role->syncPermissions(['add post', 'edit post', 'delete post', 'view post']);
    // dd($role->hasPermissionTo('edit post'));
    // dd($role->hasAnyPermission(['edit post', 'delete post']));

    // ! cek permission dari User yang sedang login
    // $user = auth()->user();

    // dd($user->can('add post'));

    // ! memberi permission khusus (direct permission) pada User selain permission dari Role-nya
    // $user = auth()->user();

    // $user->givePermissionTo('add post');

    // dd($user->can('add post'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
