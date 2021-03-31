<?php

namespace App\Models\Authors;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuthorsModel extends Model
{
    use HasFactory;
	protected $table = "books_authors";
	public $timestamp = false;
	
	protected $fillable = [
							'id',
							'name',
							'raiting'
						];		
}
