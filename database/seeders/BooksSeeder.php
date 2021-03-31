<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		// Посев таблицы авторов
		DB::table('books_authors')->insert([
										[
											'id' => 1,
											'name' => "Silvio Moreto",
											'raiting' => 3
										],
										[
											'id' => 2,
											'name' => "Bendjamin Listown",
											'raiting' => 4
										]										
									]);
									
		// Посев таблицы книг							
		DB::table('books')->insert([
										[
											'id' => 1,
											'title' => "Bootstrap by example",
											'description' => "Master Bootstrap 4's frontend framework and build you websites fater than ever before",
											'raiting' => 4,
											'author_id' => 1,
											'user_id' => 1
										],
										[
											'id' => 2,
											'title' => "Vue.JS in action",
											'description' => "All about JavaScript-framework",
											'raiting' => 5,
											'author_id' => 2,
											'user_id' => 1
										]										
										
									]);
									
    }
}
