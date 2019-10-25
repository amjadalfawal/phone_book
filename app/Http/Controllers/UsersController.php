<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\UsersService;
use App\User;
use App\Company;
use App\Section;
use App\Brunch;
use Illuminate\Support\Facades\Hash;


class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.users.index');
    }

    public function data(Request $request)
    {
        $index = $request->start;
        $pageSize = $request->length;
        $search = $request->search['value'];
        $orderColumn = $request->columns[$request->order[0]['column']]['data'];
        $orderDir = $request->order[0]['dir'];

        // filter
        $data = UsersService::getUsersData($index, $pageSize , $search, $orderColumn, $orderDir);

        $response = new \stdClass;
        $response->draw = $request->draw;
        $response->recordsTotal = $data['total'];
        $response->recordsFiltered = $data['filter'];
        $response->data= $data['data'];
        return json_encode($response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.users.create')->withcompanies(Company::all())->withsections(Section::all())->withbrnuches(Brunch::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email= $request->email;
        $user->adress = $request->adress;
        $user->phone_number = $request->phone_number;
        $user->password = Hash::make($request->password);
        $user->role_id = 1;
        $user->section_id = $request->section_id;
        $user->save();
        //todo
        //$user->section_id = ;
       
        // UsersService::createUpdateUser($request->all());
        return view('admin.users.index');
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('admin.users.details')->withUser($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.users.edit')->withUser($user);
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
        $data= $request->all();
        $data['id'] = $id;
        UsersService::createUpdateUser($data);
        return redirect(route('admin-users'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete relations or Soft Deletes but for now
        User::find($id)->delete();
        return 1;
    }
}
