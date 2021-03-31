<?php

namespace App\Http\Controllers\Api\Authors;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Authors\AuthorsModel;
use DB;
use Validator;


class AuthorsController extends Controller
{
	public function authors() {
	
			$result = DB::table('books_authors')->get();
			return response()->json($result, 200);

	}
	
	public function authorBook($id) {
		
		if( $id > 0 ) {
			$result = DB::table('books')->where('author_id','=',$id)->get();
			return response()->json($result, 200);
		}
		else {
			return response()->json('', 401);
		}
	}
	
	public function authorsRaiting(Request $req, $id) {
		
		$author = AuthorsModel::find($id);
		if(is_null($author)) {
			return response()->json([
										'error'=>true,
										'message'=>'not found',
									], 404 );
		}
		
		$rules = [
					'raiting'=>'required|in:1,2,3,4,5'
				];
		$validator = Validator::make($req->all(), $rules);
		if($validator->fails()) {
			return response()->json($validator->errors(), 400);
		}
		
		$author->update($req->all());
		return response()->json($author, 200);
	}
	
	
	public function authorsCrud(Request $req) {
		
		if($req->action == 'create') {
			$rules = [
						'name'=>'required|min:3',
						'raiting'=>'required|in:1,2,3,4,5'
					];
			$validator = Validator::make($req->all(), $rules);
			if($validator->fails()) {
				return response()->json($validator->errors(), 400);
			}
			
			
			$author = AuthorsModel::create($req->all());
			return response()->json($author, 201);
		}
		
		if($req->action == 'read') {
			
			$rules = [
						'id'=>'required'					
					];
			$validator = Validator::make($req->all(), $rules);
			if($validator->fails()) {
				return response()->json($validator->errors(), 400);
			}
			
			return response()->json(AuthorsModel::find($req->id), 200);
			
		}
		
		if($req->action == 'update') {
			
			$author = AuthorsModel::find($req->id);
			if(is_null($author)) {
				return response()->json([
											'error'=>true,
											'message'=>'not found',
										], 404 );
			}			
			$rules = [
						'id'=>'required',
						'name'=>'required|min:3',
						'raiting'=>'required|in:1,2,3,4,5'			
					];
			$validator = Validator::make($req->all(), $rules);
			if($validator->fails()) {
				return response()->json($validator->errors(), 400);
			}
			
			
			$author->update($req->all());
			return response()->json($author, 201);			
		}
		
		if($req->action == 'delete') {	
		
			$author = AuthorsModel::find($req->id);
			if(is_null($author)) {
				return response()->json([
											'error'=>true,
											'message'=>'not found',
										], 404 );
			}
			
			$author->delete();
			return response()->json('', 204);
		
		}
	}	
}
