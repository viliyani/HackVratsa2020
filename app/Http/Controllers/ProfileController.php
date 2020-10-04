<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Order;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        return view('profile.home')->withUser($user);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('profile.show')->withUser($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Auth::user();
        return view("profile.edit", compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
        ]);

        $user = User::find(Auth::user()->id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->settlement = $request->settlement;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->age = $request->age;
        $user->quarantine_started_at = $request->quarantine_started_at;
        $user->quarantine_finished_at = $request->quarantine_finished_at;

        $user->save();

        return redirect()->route('profile.edit')->with('alert-success', 'Успешно редактирахте профила!');
    }

    public function editProfileCustom(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
        ]);

        $user = User::find(Auth::user()->id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->settlement = $request->settlement;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->age = $request->age;
        $user->quarantine_started_at = $request->quarantine_started_at;
        $user->quarantine_finished_at = $request->quarantine_finished_at;

        $user->save();

        return redirect()->route('home')->with('alert-success', 'Успешно редактирахте профила!');
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
