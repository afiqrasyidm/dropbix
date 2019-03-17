<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;
use Auth;

class FileController extends Controller
{
    //

		public function create(Request $request){

			$file     = $request->file('file');
			$url       = "";
			if($file != null){
					$destinationPath    = 'file/';
					$name               = $file->getClientOriginalName();
					$move              =   $file->move($destinationPath, $name);
					$url                = "{$name}";

					$course =File::create([
							"user_id"    => Auth::user()->id,
							"name"         => $request->nama_file,
							"url"      => $url,
							'is_active'          => 1
					]);

					return redirect()->route('list-file');
			}
		}

		

}
