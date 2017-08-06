<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link id="pagestyle" rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="icon" type="favicon" href="images/favicon.png">
  </head>
  <body>
  @include('partials/nav')
	<div class="row">
		<div class="col-xs-12">
			<h1>{{$product->name}}</h1>
			 @if (isset($product->imgName))
    					    <img src="{{Storage::url($product->imgName)}}">
    					@else
    						<img style="height: 300px;" src="http://cdn.playbuzz.com/cdn/adabbd88-1450-44a4-b4bc-a96174ea963c/b3d6a27c-fdf4-438e-9a04-b8a67ee04b52.png" alt="Evento">
    						@endif
			<h2>{{$product->description}}</h2>
			<p> <b>Precio: {{$product->price}}</b></p>

            @if (!session()->has('cart') || !in_array($product->id,session()->get('cart')))
                <form class="" action="/event/add" method="post">
                    {{ csrf_field() }}
                    <button class="btn-lg  btn-success" type="submit" name="add" value="{{$product->id}}">
                        Añadir a Tu Carruaje de Eventos
                    </button>

                </form>
            @endif
		</div>
	</div>

	  @include('partials/footer')

  </body>
</html>