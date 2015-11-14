<?php namespace App\Http\Controllers;

use App\email;
use App\Http\Controllers\Controller;
use App\Fileupload;
use DB;
use Mail;
use Illuminate\Http\Request;

class HomeController extends Controller {

	 
	public function __construct()
	{
	   $this->middleware('auth');
	}

	public function index()	{
		
		$Fileupload = DB::table('Fileuploads')->where('categoria','=','Banner')->get();

		return view('home',['Fileupload' => $Fileupload]);
	}

	public function postResgister()	{
		return view('auth/register');
	}

	public function responderEmail(){

		$email = email::all();

		return view('emails/responderEmail',['email' => $email]);
	}
	public function edit($id){

		$email = email::find($id);

		return view('emails/emailcontato', compact('email'));
	}

	public function update(Request $Request, $id){

		$emailupdate = email::find($id)->update($Request->all()); 

		$email = email::findOrFail($id);

		Mail::send('emails.test',['email' => $email],function($m) use ($email){
			$m->to($email->email,$email->name)->subject('you reminder');
		});

		return redirect('email/responderEmail');
	}


	
	
}
