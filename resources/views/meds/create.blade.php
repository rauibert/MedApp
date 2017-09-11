@extends('master')
@section('title','Contact')

@section('content')
    <div class="container col-md-8 col-md-offset-2">
        <form class="form-horizontal" method="post">

        @foreach ($errors->all() as $error)
            <p class="alert alert-danger">{{ $error }}</p>
        @endforeach
        @if (session('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>
        @endif
            
            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
            <fieldset>
                <legend>Agregar nuevo medicamento</legend>
                <div class="form-group">
                    <label for="title" class="col-lg-2 control-label">Título</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="title" placeholder="Titulo" name="title">
                    </div>
                </div>
                <div class="form-group">
                    <label for="description" class="col-lg-2 control-label">Descripción</label>
                    <div class="col-lg-10">
                        <textarea id="description" class="form-control" name="description"></textarea>
                        <span class="help-block">Descripción del medicamento</span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="urlImage" class="col-lg-2 control-label">urlImage</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="urlImage" placeholder="urlImage" name="urlImage">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                        <button class="btn btn-default">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Agregar</button>
                    </div>
                </div>
            </fieldset>
        </form>  
    </div>
    @endsection