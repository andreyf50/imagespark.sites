<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="ImageSpark Test-task by Andrey A">
	<meta name="keywords" content="уникальные системы дистанционного обучения для бизнеса и вузов">
	<meta name="author" content="core[dev]">
	
	<link href="{{ asset('/public/files/images/favicon.ico') }}" type="image/x-icon" rel="shortcut icon">
	
	
	<title>ImageSpark</title>
	<link rel="stylesheet" href="{{ asset('/public/files/css/bootstrap5.css') }}">
	<link rel="stylesheet" href="{{ asset('/public/files/css/main.css') }}">
	
	<!--[if lt IE 9]>
      <script src="{{ asset('/public/files/js/html5shiv.min.js') }}"></script>
      <script src="{{ asset('/public/files/js/respond.min.js') }}"></script>
    <![endif]-->
</head>

<body>

	<div class="container overflow-hidden">
	
	  <div class="row">
		<div class="col-12"> 
			<div class="mx-auto logo" >
				<div class="p-3 border bg-light">
				<button type="button" class="btn btn-outline-secondary b_m active" onclick="relocate_menu(0)">
					<span>Library API</span>
				</button>
				</div>
			</div>
		</div>
	  </div>
	  
	  <div class="row">
		<div class="col-12"> 
			<div class="mx-auto menu" >
				<div class="btn-group" role="group">
				  <button type="button" class="btn btn-outline-secondary b_m @if( $id == 1 )active @endif" onclick="relocate_menu(1)">Роуты</button>
				  <button type="button" class="btn btn-outline-secondary b_m @if( $id == 2 )active @endif" onclick="relocate_menu(2)">Инструкция</button>
				  <button type="button" class="btn btn-outline-secondary b_m @if( $id == 3 )active @endif" onclick="relocate_menu(3)">Регистрация</button>
				</div>

			</div>
		</div>
	  </div>
	 
@if ( $id == 1 )
	<div class="row">
		<div class="col-12"> 
			<div class="mx-auto task-one" style="height: 1350px;" >
				<p>Инструкция для front-end разработки. Роуты API, методы и параметры передачи данных приложения библиотеки. </p>
				
				<p><b>Без авторизации:</b></p>
				<p>Единый поиск по названию книги, автору:<br>
				Роутер: /api/search/<br>
				Метод: POST<br>
				Передаваемые поля:<br>
				{search} - строка поиска [varchar|required]<br>
				</p>
				<p>Отображение общего каталога книг - с возможностью сортировки по оценкам:<br>
				Роутер: /api/books/all/<br>
				Метод: GET<br>
				Передаваемые поля:<br>
				{sort} - сортировка по оценке [int: 0-1]<br>
				</p>
				<p>Отображение общего списка авторов с возможностью получения всех книг автора:<br>
				Роутер: /api/authors/<br>
				Метод: GET<br>
				Передаваемые поля:<br>
				{author_id} - id автора [int]<br>
				</p>

				<p><b>Авторизаци JWT:</b></p>
				<p>Получение токена:<br>
				Роутер: /api/login/<br>
				Метод: POST<br>
				Передаваемые поля: <br>
				{email} - email пользователя [varchar|required]<br>
				{password} - пароль [varchar|required]
				</p>
				<p>Обновление токена:<br>
				Роутер: /api/refresh/
				</p>
				
				
				
				<p><b>С авторизацией JWT:</b></p>
				<p>Оценка книги:<br>
				Роутер: /api/books/raiting/<br>
				Метод: GET<br>
				Передаваемые поля: <br>
				{book_id} - id книги [int|required]<br>
				{raiting} - оценка 1-5 [int|required]
				</p>
				<p>Оценка автора:<br>
				Роутер: /api/authors/raiting/<br>
				Метод: GET<br>
				Передаваемые поля: <br>
				{author_id} - id автора [int|required]<br>
				{raiting} - оценка 1-5 [int|required]
				</p>	

				<p>Crud для книги:<br>
				Роутер: /api/books/crud/<br>
				Метод: POST<br>
				Передаваемые поля: <br>
				{action} - create, read, update или delete<br>
				{id} - id книги [int]<br>
				{title} - название книги [varchar]<br>
				{description} - описание книги [string]<br>
				{raiting} - оценка 1-5 [int]<br>
				{author_id} - id автора [int]
				</p>
				
				<p>Crud для автора:<br>
				Роутер: /api/authors/crud/<br>
				Метод: POST<br>
				Передаваемые поля: <br>
				{action} - create, read, update или delete<br>
				{id} - id автора [int]<br>
				{name} - имя автора [varchar]<br>
				{raiting} - оценка 1-5 [int]
				</p>	
				
			</div>
		</div>
	</div>
@endif

@if ( $id == 2 )
	<div class="row">
		<div class="col-12"> 
			<div class="mx-auto task-one" >
				<p>Ссылка на приложение Github:  <a href="https://github.com" target=_blank>[Library API]</a></p>
				<p>Использовал фреймворк Laravel 8 и JWT от <a href="https://github.com/tymondesigns/jwt-auth" target=_blank>[Tymon]</a></p>
				<p>Тестируем в <a href="https://www.postman.com/" target=_blank>Postman</a>.</p>
			</div>
		</div>
	</div>
@endif


	  <div class="row">
		<div class="col-12"> 
			<div class="mx-auto footer" >
					<button type="button" class="btn btn-outline-secondary b_m" onclick="relocate_menu(6)">core[dev] Andrey A</button>
			</div>
		</div>
	  </div>
	  

	 
	<script src="{{ asset('/public/files/js/jquery-3.6.0.min.js') }}"></script>
	<script src="{{ asset('/public/files/js/bootstrap.js') }}"></script>
	<script src="{{ asset('/public/files/js/main.js') }}"></script>
</body>

</html>