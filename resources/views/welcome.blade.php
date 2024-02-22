<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Formulario 2023 - II</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">

</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    2da Audiencia Pública de rendición de cuentas 2023
                </a>
            </div>
        </nav>

        <main class="py-4">
            <div class="container pt-3 pb-2">


                {!! Form::open(['method' => 'POST', 'route' => 'neighbors.store']) !!}

                <div class="card me-4 ms-4 pe-3 ps-3 pt-2 pb-3">
                    <div class="card-body">
                        <div class="container-fluid">
                            @if (Session::has('success'))
                                <div class="alert alert-success alert-dismissible" role="alert">
                                    {{ Session::get('success') }}

                                </div>
                            @endif

                            @if (Session::has('error'))
                                <div class="alert alert-danger alert-dismissible" role="alert">
                                    {{ Session::get('error') }}

                                </div>
                            @endif

                            @if (count($errors) > 0)
                                <div class="alert alert-danger">

                                    <ul>

                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach

                                    </ul>

                                </div>
                            @endif

                        </div>

                        <div class="text-center">

                            <img src="img/logo52.png" alt="">

                            <h3>Municipalidad de Villa el Salvador</h3>

                            <h6><span>Formulario de Inscripción de la 2da Audiencia Pública de rendición de cuentas
                                    2023</span>
                            </h6>

                        </div><br>

                        <div class="row">

                            <div class="col-md-6">

                                <div class="form-group">
                                        {!! Form::label('name', 'Nombre del participante (*)') !!}
                                        {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                </div>

                            </div>
                            <div class="col-md-6">

                                <div class="form-group">
                                        {!! Form::label('lastname_p', 'Apellido Paterno del participante (*)') !!}
                                        {!! Form::text('lastname_p', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                </div>

                            </div>


                            <div class="col-md-6">

                                <div class="form-group">
                                    {!! Form::label('lastname_m', 'Apellido Materno del participante (*)') !!}
                                    {!! Form::text('lastname_m', null, ['class' => 'form-control', 'required' => 'required']) !!}
                            </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-group">
                                    {!! Form::label('document', 'N° DNI del participante (*)') !!}
                                    {!! Form::text('document', null, ['class' => 'form-control', 'required' => 'required']) !!}
                            </div>

                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="organization">Tipo de Organización (*)</label>
                                    <select id="organization" name="organization" class="form-control">

                                        @foreach ($dataOrganizations as $dataOrganization)
                                            <option value="{{ $dataOrganization->name }}"selected>
                                                {{ $dataOrganization->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">

                                <div class="form-group">
                                    {!! Form::label('territory','Dirección del participante (*)') !!}
                                    {!! Form::text('territory', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                </div>

                            </div>

                        </div><br>

                        <button type="submit" class="btn btn-success">Enviar</button>

                    </div>

                </div>

                {!! Form::close() !!}
        </main>
    </div>
</body>

</html>
