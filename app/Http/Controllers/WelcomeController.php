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

		$modulo2 = DB::table('Fileuploads')->where('categoria' ,'=', 'modulo2')->get();

		$modulo3 = DB::table('Fileuploads')->where('categoria' ,'=', 'modulo3')->get();

		$modulo4 = DB::table('Fileuploads')->where('categoria' ,'=', 'modulo4')->get();
		
		return view('welcome',
			['Fileupload' => $Fileupload ,
			'modulo1' => $modulo1,
			'modulo2' => $modulo2,
			'modulo3' => $modulo3,
			'modulo4' => $modulo4]);
	}
	
	public function cadastro(){

		$Fileupload = DB::table('Fileuploads')->where('categoria' ,'=', 'Banner')->get();
		
	return view('contato/cadastro',['Fileupload' => $Fileupload]);

}	
	public function email(Request $Request){

		
	$email = $Request->all();
	email::create($email);



	return view('contato.cadastro');

	
}
public function quem(){
	$Fileupload = DB::table('Fileuploads')->where('categoria' ,'=', 'Banner')->get();

	$modulo5 = DB::table('Fileuploads')->where('categoria' ,'=', 'modulo5')->get();
	return view('modulo/quemsomos',[
									'modulo5' => $modulo5,
									'Fileupload' => $Fileupload]);
}

}


