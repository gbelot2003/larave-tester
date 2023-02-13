<?php

namespace App\Http\Controllers;

use App\Models\User;
use Inertia\Inertia;
use Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // TODO: move this logic to a service
        $users = User::query()
        ->when(Request::input('search'), function ($query, $search){
            $query->where('name', 'LIKE', "%{$search}%");
        })
        ->with('roles')
        ->orderBy('id', 'DESC')
        ->paginate(10)
        ->withQueryString()
        ->through(fn($users) => [
            'id' => $users->id,
            'name' => $users->name,
            'email' => $users->email,
            'status' => $users->status,
            'role' => $users->roles[0]->name
        ]);

        return Inertia::render('Users/Index', [
            'users' => $users
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
