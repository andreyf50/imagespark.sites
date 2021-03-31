<?php

namespace App\Models\Books;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BooksModel extends Model
{
    use HasFactory;
	protected $table = "books";
	public $timestamp = false;
	
	protected $fillable = [
							'id',
							'title',
							'description',
							'raiting',
							'author_id'
						];	
}
