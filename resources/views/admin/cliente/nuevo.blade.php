@extends("layouts.admin")

@section("titulo", "Nuevo Cliente")

@section("contenedor")

<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

                <form action="{{route('producto.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <label for="nombre_completo">Nombre Cliente</label>
                    <input type="text" id="nombre_completo" name="nombre_completo" required class="form-control @error('nombre_completo') is-invalid @enderror">
                    @error('nombre_completo')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="row">
                        <div class="col-md-6">
                            <label for="ruc">Ruc</label>
                            <input type="text" id="ruc" name="ruc" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="direccion">Direccion</label>
                            <input type="text" id="direccion" name="direccion" class="form-control">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="telefono">Telefono</label>
                            <input type="number" id="telefono" name="telefono" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="correo">Correo</label>
                            <input type="email" id="correo" name="correo" class="form-control">
                        </div>
                    </div>

                    <br>
                    <input  value='Guardar' class="btn btn-primary" type="submit">

                </form>

            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">

            </div>
        </div>
    </div>
</div>

@endsection