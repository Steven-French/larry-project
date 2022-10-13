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
		<p>New To Do Item:</p>
		<form action="/" class="form" method="POST">
			@csrf
			<input type="text" name="list_item">
			<button type="submit">Submit</button>
		</form>
		<table>
			<tbody>
				@foreach ($listItems as $item)
					<tr>
						<td>{{ $item->name }}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		<div class="logoimg">
			<a href="logo">
				<img src="/images/logo.jpg" alt="Provo City-like img"/>
			</a>
		</div>
	</body>
</html>