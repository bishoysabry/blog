<?php

namespace App\Http\Controllers;
use App\User;
use Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {

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
      $user=User::find($id);
    return view('profile',compact('user'));
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
        $user=User::find($id);
      return view('editprofile',compact('user'));
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




        $user=User::find($id);
        /**
         * lw kont 3mlt $request->all mkan4 a4t8l :D de 7aga mrar
         */
        $user->name = Request::input('name');
        $user->email = Request::input('email');
        $user->hobbies = implode(" ",Request::input('hobbies'));
        $user->gender = Request::input('gender');

        $image =Request::input('image');
        if($image){
          $imageName=$image->getClientOriginalName();
          $image->move('images',$imageName);
          $user->image=$imageName;

        }
        $user->save();

          return view('home',compact('image'));
      //  return redirect()->route('profile');
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
