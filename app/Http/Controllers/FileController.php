<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Fileupload;
use Illuminate\Http\Request;

class FileController extends Controller {

	public function __construct(){

		$this->middleware('auth');
	}

	public function getbanner(){
		
		return view('modulo/Formbanner');
	}

	

	public function postbanner(Request $Request){

	 $filename = $Request->filename;
	 
	 $newfile = new Fileupload;
	 $newfile->imagem= $Request->file('imagem')->move('img',$filename);
	 $newfile->filename=$Request->filename;
	 $newfile->ativo=$Request->ativo;
	 $newfile->categoria=$Request->categoria;
	 $newfile->descricao=$Request->descricao;
	 $newfile->save();
	 
	}

	public function update(Request $Request,$id){

		return 'este id=='.$id;

	}

}
