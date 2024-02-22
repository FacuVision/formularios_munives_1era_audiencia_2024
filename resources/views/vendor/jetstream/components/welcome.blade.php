<div class="p-6 sm:px-20 bg-white border-b border-gray-200">


    <div class="mt-2 text-2xl">
        Lista de participantes
    </div>

    <div class="mt-6 text-gray-500">

        <table id="tabla" class="table-striped dt-responsive nowrap display compact" style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>N° DNI</th>
                    <th>Dirección</th>
                    <th>Tipo de organizacion</th>
                    <th>Periodo</th>
                    <th>Fecha</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($neighbors as $ng)
                <tr>
                    <td>{{$ng->id}}</td>
                    <td>{{$ng->name}}</td>
                    <td>{{$ng->lastname}}</td>
                    <td>{{$ng->document}}</td>
                    <td>{{$ng->type_organization}}</td>
                    <td>{{$ng->audency_period}}</td>
                    <td>{{$ng->creation_date->format('d-m-Y')}}</td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
