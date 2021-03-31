<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
	public function pageById($id) {

		if(view()->exists('page') && $id > 0)
		{
			$data = [
						'id' => $id
					];

			return view( 'page', $data );
		}
	}
}
