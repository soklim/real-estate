<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Datatables;


class UserController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\User  $model
     * @return \Illuminate\View\View
     */

    public function index(Request $request)
    {

        if ($request->ajax()) {
            $data = User::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('profile', function($row){
                    $profile ="";
                    if ($row->profile_id == 1)
                    {
                        $profile="Administrator";
                    }
                    else
                    {
                        $profile="Editor";
                    }


                    return $profile;
                })
                ->rawColumns(['profile'])
                ->addColumn('action', function($row){

                    $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editUser"><i class="fa fa-pencil"></i>  Edit</a>';

                    $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteUser"><i class="fa fa-trash"></i>  Delete</a>';

                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);

        }

        return view('users.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->password == '') {
            User::updateOrCreate(['id' => $request->id],
                [
                    'name' => $request->name,
                    'email' => $request->email,
                    'profile_id'=>$request->profile_id
                ]);
        }
        else {
            User::updateOrCreate(['id' => $request->id],
                [
                    'name' => $request->name,
                    'email' => $request->email,
                    'profile_id'=>$request->profile_id,
                    'password' => Hash::make($request->get('password'))
                ]);
        }



        return response()->json(['success'=>'User saved successfully.']);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return response()->json($user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();

        return response()->json(['success'=>'User deleted successfully.']);
    }
}
