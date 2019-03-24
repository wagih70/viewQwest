<?php

namespace App\Http\Controllers;

use App\Http\Requests\newRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class viewQuestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit()
    {
       return view('edit');
    }

    public function update(newRequest $request)
    {
        $user = User::find(Auth::user()->id);

        $user->name = $request->name;
        $user->nric = $request->nric;
        $user->email = $request->email;
        $user->mobile = $request->mobile;
        $user->address = $request->address;
        $user->city = $request->city;
        $user->state = $request->state;
        $user->country = $request->country;
        $user->zip_code = $request->zip_code;
        if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = $image->getClientOriginalName();
                $destinationPath = public_path('/images');
                $image->move($destinationPath, $imageName);
                $user->image = $imageName;
        }
        $user->save();
        return redirect()->back();
    }

}
