<?php

namespace App\Http\Controllers\Api\Books;

use App\Http\Controllers\Api\Controller;
use Illuminate\Http\Request;
use App\Models\Books\BooksModel;
use DB;
use Validator;

class BooksController extends Controller
{

	public function books($sort) {
		
		if( $sort == 1 ) {
			$result = DB::table('books')->orderBy('raiting', 'asc')->get();
			return response()->json($result, 200);
		}
		else {
			$result = DB::table('books')->orderBy('id', 'asc')->get();
			return response()->json($result, 200);
		}
	}

	public function booksRaiting(Request $req, $id) {
		
		$book = BooksModel::find($id);
		if(is_null($book)) {
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
		
		$book->update($req->all());
		return response()->json($book, 200);
	}

	public function booksCrud(Request $req) {
		
		if($req->action == 'create') {
			$rules = [
						'title'=>'required|min:3',
						'description'=>'required|min:3',
						'raiting'=>'required|in:1,2,3,4,5',
						'author_id'=>'required'
					];
			$validator = Validator::make($req->all(), $rules);
			if($validator->fails()) {
				return response()->json($validator->errors(), 400);
			}
			
			
			$book = BooksModel::create($req->all());
			return response()->json($book, 201);
		}
		
		if($req->action == 'read') {
			
			$rules = [
						'id'=>'required'					
					];
			$validator = Validator::make($req->all(), $rules);
			if($validator->fails()) {
				return response()->json($validator->errors(), 400);
			}
			
			return response()->json(BooksModel::find($req->id), 200);
			
		}
		
		if($req->action == 'update') {
			
			$book = BooksModel::find($req->id);
			if(is_null($book)) {
				return response()->json([
											'error'=>true,
											'message'=>'not found',
										], 404 );
			}			
			$rules = [
						'id'=>'required',
						'title'=>'required|min:3',
						'description'=>'required|min:3',
						'raiting'=>'required|in:1,2,3,4,5',
						'author_id'=>'required'						
					];
			$validator = Validator::make($req->all(), $rules);
			if($validator->fails()) {
				return response()->json($validator->errors(), 400);
			}
			
			
			$book->update($req->all());
			return response()->json($book, 201);			
		}
		
		if($req->action == 'delete') {	
		
			$book = BooksModel::find($req->id);
			if(is_null($book)) {
				return response()->json([
											'error'=>true,
											'message'=>'not found',
										], 404 );
			}
			
			$book->delete();
			return response()->json('', 204);
		
		}
	}
	
	
}
