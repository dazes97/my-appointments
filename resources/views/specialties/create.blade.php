@extends('layouts.panel')

@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="mb-0">Nueva Especialidad</h3>
                        </div>
                        <div class="col text-right">
                            <a href="{{url('/specialties')}}" class="btn btn-sm btn-primary">Volver atras</a>
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
                    <form action="{{url('/specialties')}}" method="POST">
                        @csrf
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name"> Nombre de la especialidad</label>
                                <input type="text" class="form-control" id="name" name="name"  value="{{old('name')}}" required>
                            </div>
                            <div class="form-group">
                                <label for="description"> Descripcion</label>
                                <input type="text" class="form-control" id="description" name="description" value="{{old('description')}}">
                            </div>
                        </div>
                        <button class="btn btn-default" type="submit">Guardar</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
