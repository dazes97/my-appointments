@extends('layouts.panel')

@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="mb-0">Nuevo Medico</h3>
                        </div>
                        <div class="col text-right">
                            <a href="{{url('/doctors')}}" class="btn btn-sm btn-primary">Volver atras</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @if($errors->any())
                        <div class="alert alert-danger col-md-6" role="alert">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{url('/doctors')}}" method="POST">
                        @csrf
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name"> Nombre del Medico</label>
                                <input type="text" class="form-control" id="name" name="name"  value="{{old('name')}}" required>
                            </div>
                            <div class="form-group">
                                <label for="email"> Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}">
                            </div>
                            <div class="form-group">
                                <label for="password"> Contraseña</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <div class="form-group">
                                <label for="address"> Direccion</label>
                                <input type="email" class="form-control" id="address" name="address" value="{{old('address')}}">
                            </div>
                            <div class="form-group">
                                <label for="phone"> Telefono</label>
                                <input type="tel" class="form-control" id="phone" name="phone" value="{{old('phone')}}">
                            </div>
                        </div>
                        <button class="btn btn-default" type="submit">Guardar</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
