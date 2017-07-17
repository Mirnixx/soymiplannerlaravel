<!DOCTYPE html>
<html>
<head>
	<title>Productos</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link id="pagestyle" rel="stylesheet" type="text/css" href="../css/style.css">
<body>

@include('partials/nav')
	<h1>Todos los Productos</h1>

@foreach ($products->Chunk(3) as $productChunk)
	
	<div class="row">
		@foreach ($productChunk as $product)
			<div class="col-xs-12 col-md-3">
				<div class="thumbnail">
					@if (isset($product->imgName))
					    <img src="{{Storage::url($product->imgName)}}">
					@else
						<img style="height: 300px;" src="http://cdn.playbuzz.com/cdn/adabbd88-1450-44a4-b4bc-a96174ea963c/b3d6a27c-fdf4-438e-9a04-b8a67ee04b52.png" alt="Evento">
					@endif ($product->imgName)
					<div class="caption">
						<h3>Nombre de Evento: {{$product->name}}</h3>
						<p>Descripcion: {{$product->description}}.</p>
						<p class="caption">Precio: {{$product->price}} </p>
						<button class="btn btn-primary">
							Contactar
						</button>
					</div>
				</div>	
			</div>	
		@endforeach
	</div>
@endforeach


</body>
</html>

