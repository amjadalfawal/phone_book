<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\PhoneBookService;
use App\PhoneBook;
use Auth;


class PhoneBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.phonebook.index');
    }

    public function data(Request $request)
    {
        $index = $request->start;
        $pageSize = $request->length;
        $search = $request->search['value'];
        $orderColumn = $request->columns[$request->order[0]['column']]['data'];
        $orderDir = $request->order[0]['dir'];

        // filter
        $data = PhoneBookService::getPhoneBooksData($index, $pageSize , $search, $orderColumn, $orderDir);

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
        
        return view('admin.phonebook.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $phonebook = new PhoneBook;
        $phonebook->user_name = $request->username;
        $phonebook->email= $request->email;
        $phonebook->adress = $request->adress;
        $phonebook->phone_number_1 = $request->phone_number_1;
        if(isset($request->phone_number_2))
        $phonebook->phone_number_2 = $request->phone_number_2;
        $phonebook->user_id  = Auth::user()->id;
        $phonebook->save();

        //todo
        //$user->section_id = ;
       
        // UsersService::createUpdateUser($request->all());
        return view('admin.phonebook.index');
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
        return view('admin.phonebook.details')->withUser($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $phone_book = PhoneBook::find($id);
        return view('admin.phonebook.edit')->withphonebook($phone_book);
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
    
        $phonebook = PhoneBook::find($id);
        $phonebook->user_name = $request->username;
        $phonebook->email= $request->email;
        $phonebook->adress = $request->adress;
        $phonebook->phone_number_1 = $request->phone_number_1;
        if(isset($request->phone_number_2))
        $phonebook->phone_number_2 = $request->phone_number_2;
        $phonebook->user_id  = Auth::user()->id;
        $phonebook->update();
        return view('admin.phonebook.index');
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
