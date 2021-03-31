<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

use Validator;

class SearchController extends Controller
{

	public function searchLib(Request $req) {
		
		
		$rules = [
					'search'=>'required|string|min:3|max:108'
				];
		$validator = Validator::make($req->all(), $rules);
		if($validator->fails()) {
			return response()->json($validator->errors(), 400);
		}

		$query = $req->search;
		$result_books = DB::table('books')->where('title','like','%'.$query.'%','or')
									->where('description','like','%'.$query.'%','or')
									->get();
		$result_authors = DB::table('books_authors')->where('name','like','%'.$query.'%','or')
									->get();	
		
	
		
		

		if(is_null($result_authors) && is_null($result_books)) {
			return response()->json([
										'error'=>true,
										'message'=>'not found',
									], 404 );
		}

		if(!is_null($result_books))
		return response()->json($result_books, 200);
		
		if(!is_null($result_authors))
		return response()->json($result_authors, 200);

		//ps. поиск не доделан!
	}


}
