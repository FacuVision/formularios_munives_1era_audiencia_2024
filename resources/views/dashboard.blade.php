<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Administracion') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{-- <x-jet-welcome /> --}}

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
                                    <th>Apellido Paterno</th>
                                    <th>Apellido Materno</th>
                                    <th>N° DNI</th>
                                    <th>Tipo de organizacion</th>
                                    <th>Fecha</th>
                                    <th>Dirección</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($neighbors as $ng)
                                <tr>
                                    <td>{{$ng->id}}</td>
                                    <td>{{$ng->name}}</td>
                                    <td>{{$ng->lastname_p}}</td>
                                    <td>{{$ng->lastname_m}}</td>
                                    <td>{{$ng->document}}</td>
                                    <td>{{$ng->type_organization}}</td>
                                    <td>{{$ng->creation_date}}</td>
                                    <td>{{$ng->territory}}</td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>





            </div>
        </div>
    </div>
</x-app-layout>
