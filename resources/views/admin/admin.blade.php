<h1>ADMIN:</h1>

{{ Auth::user() }}

<form action="/salir" method="post">
@csrf

<input type="submit" value=" Cerrar Session">
</form>