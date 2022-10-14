<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1" >
		<link rel="stylesheet" type="text/css" href="/css/index.css">
		<title>To Do List</title>
	</head>
	
	<body>
		<h1>Lots to do!</h1>
		<h2>New To Do Item:</h2>
		<div>
			<form method="POST" action="/" class="form">
				@csrf
				<input type="text" name="list_item">
				<button type="submit">Submit</button>
			</form>
		</div>
		@foreach ($listItems as $item)
		<div class="list">
			<div class="item_line">
				<p>{{ $item->name }}</p>
					<form method="POST" action="{{ route('markComplete' , [$item->id]) }}">
						@csrf 
						@method('DELETE')
						<button type="submit" class="complete_button">Mark Complete</button>
					</form>
					<br>
			</div>
		</div>
		@endforeach
		<div>
			<a href="logo">
				<img src="/images/logo.jpg" alt="Provo City-like img"/>
			</a>
		</div>
	</body>
</html>