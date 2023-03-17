<?php 

namespace App\Models;
use Illuminate\Support\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;

class AccountModel
{
	
	function __construct()
	{
		// code...
	}

	public function add($dataRegister)
	{
		$username = $dataRegister['username'];
		$name = $dataRegister['name'];
		$placeOfBirth = $dataRegister['place_of_birth'];
		$dateOfBirth = $dataRegister['date_of_birth'];
		$country = $dataRegister['country'];
		$email = $dataRegister['email'];
		$confirmPassword = $dataRegister['confirmPassword'];
		$role = $dataRegister['role'];
		// dd($role);
	}

	public function find($email)
	{
		$account = DB::table('users')->where("email", "=", $email)->get()[0];
		dd($account);
	}
}






 ?>