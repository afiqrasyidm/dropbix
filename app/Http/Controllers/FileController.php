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

					File::create([
							"user_id"    => Auth::user()->id,
							"name"         => $request->nama_file,
							"url"      => $url,
							'is_active'          => 1
					]);

					return redirect()->route('list-file');
			}
		}

		public function get_list_file(){

				$files = File::where('user_id', Auth::user()->id)
									->where('is_active', 1)
									->get();

				return view('file.list-file', ["files"=>$files]);
		}

		public function get_file($id_file){

				$file = File::where('user_id', Auth::user()->id)
									->where('is_active', 1)
									->where('id', $id_file)
									->first();

				return view('file.detail-file', ["file"=>$file]);
		}

}
