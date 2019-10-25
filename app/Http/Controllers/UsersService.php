<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Support\Facades\Hash;

/**
 *
 */
class UsersService
{

	public static function getUsersData($index, $pageSize, $search, $orderColumn = 'id', $orderDir = 'asc')
	{
		$skip = $index;

		$filter = User::select('*');

		$totalCount =$filter->count();

		if (isset($search))
		{
			$filter->where(DB::raw("CONCAT(name, email)") ,  'like' ,  "%$search%");
		}


        $filter->orderBy($orderColumn , $orderDir);

		$filterCount = $filter->count();

		$data = $filter->skip($skip)->take($pageSize)->get();

		return ['data' => $data , 'total' => $totalCount , 'filter' => $filterCount];
	}

	public static function createUpdateUser($data)
	{
		$id = 0 ;
		if (isset($data['id']))
		{
			$id= $data['id'];
		}

		$updatePassword = 1;
		$password = $data['password'];
		if (isset($password)){
			$password = Hash::make($password);
		}
		else {
			if ($id != 0 )
				$updatePassword = 0 ;
		}

		$data = [
			'username' => $data['username'],
			'name' => $data['name'],
			'email' => $data['email'],
		];
		if ($updatePassword == 1)
			$data['password'] = $password;


		User::updateOrCreate(['id' => $id] , $data);

		return 1;
	}
}
