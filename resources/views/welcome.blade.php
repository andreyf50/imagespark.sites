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
				  <button type="button" class="btn btn-outline-secondary b_m" onclick="relocate_menu(1)">Роуты</button>
				  <button type="button" class="btn btn-outline-secondary b_m" onclick="relocate_menu(2)">Инструкция</button>
				  <button type="button" class="btn btn-outline-secondary b_m" onclick="relocate_menu(3)">Регистрация</button>
				</div>

			</div>
		</div>
	  </div>
	 
	 
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