<div>employee.INDEX</div>

<table id="indice">
    <thead>
    <tr>
        <th class="w-1/12 ">ID</th>
        <th class="w-3/12">Nombre</th>
        <th class="w-3/12">Apellido</th>
        <th class="w-3/12">Departamento</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($employees as $employee)
        <tr>
            <td>{{ $employee->id }}</td>
            <td>{{ $employee->first_name }}</td>
            <td>{{ $employee->last_name }}</td>
            <td>{{ $employee->department }}</td>
        </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <th class="w-1/12 ">ID</th>
            <th class="w-3/12">Nombre</th>
            <th class="w-3/12">Apellido</th>
            <th class="w-3/12">Departamento</th>
        </tr>
    </tfoot>        
</table>