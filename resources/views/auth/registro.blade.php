<h1>NUEVO USUARIO</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{route('guardarUsuario')}}" method="post">
@csrf
<label for="">Ingrese nombre</label>
<input type="text" name="name">
<br>
<label for="">Ingrese correo</label>
<input type="email" name="email">
<br>
<label for="">Ingrese password</label>
<input type="password" name="password">
<br>
<label for="">Repetir password</label>
<input type="password" name="c_password">
<br>
<input type="submit" value='REGISTRARSE'>
</form>