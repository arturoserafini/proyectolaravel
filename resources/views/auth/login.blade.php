<h1>INGRESAR</h1>

<form action="/login" method="post">
@csrf
<label>Ingrese Correo</label>
<input type="email" value="" name="email">
<br>
<label>Ingrese Password</label>
<input type="password" value="" name="password">
<br>
<input type="submit" value="Ingresar">


</form>