@extends("layouts.admin")

@section("contenedor")

<div class="row">
    <div class="col-md-12">
        <div class="card">
        <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">


<table class='yajra-datatable'>
    <thead>
    <tr>
        <th>ID</th>
        <th>NOMBRE</th>
        <th>EMAIL</th>
        <th>ACCION</th>
    </tr>

    </thead>

<tbody>

</tbody>

</table>
        </div>
    </div>

</div>

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

<script>
    $(function(){
        var table = $('.yajra-datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('listarUsuariosDT') }}",
            columns: [
                {data: 'id', name: 'ID'},
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'accion', name: 'accion'}                
            ]
        })
    });
</script>
