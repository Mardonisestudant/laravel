<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\email;
use App\Fileupload;
use Mail;
use DB;
use Illuminate\Http\Request;

class WelcomeController extends Controller {


	public function __construct()
	{
	   $this->middleware('guest');
	}

	public function index()
	{
		
		//Select a tabela de Fileuploads onde categoria for igual a banner
		$Fileupload = DB::table('Fileuploads')->where('categoria' ,'=', 'Banner')->get();

		$modulo1 = DB::table('Fileuploads')->where('categoria' ,'=', 'modulo1')->get();
		
		return view('welcome',['Fileupload' => $Fileupload ],['modulo1' => $modulo1]);
	}
	
	public function cadastro(){
		$Fileupload = Fileupload::all();
		
	return view('contato/cadastro',['Fileupload' => $Fileupload]);
}	
	public function email(Request $Request){
		
	$email = $Request->all();
	email::create($email);



	return view('contato.cadastro');

	
}	

}


