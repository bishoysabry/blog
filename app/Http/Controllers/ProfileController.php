<?php

namespace App\Http\Controllers;
use App\User;
 use Illuminate\Http\Request;

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

        $this->validate($request, [
              'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
          ]);

                $user=User::find($request->id);
                /**
                 * lw kont 3mlt $request->all mkan4 a4t8l :D de 7aga mrar
                 */
                $user->name = $request->name;
                $user->email =$request->email;
                $user->hobbies = implode(" ",$request->hobbies);
                $user->gender =$request->gender;
                  $imageName =time().'.'.$request->image->getClientOriginalExtension();
                  $request->image->move(public_path('images'), $imageName);
                  $user->image=$imageName;
                  $user->save();
                  return view('home',compact('image'));
                 //return redirect()->route('profile');

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
