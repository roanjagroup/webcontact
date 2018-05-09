@extends('layout')

@section('title', 'Contacto')
@section('content')
        <div class="jumbotron">
        <div class="container">
          <h1 class="display-4">Formulario de contacto</h1>
          <p>This is a template.</p>
          <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more »</a></p>
        </div>
      </div>
        <div class="container">
            <form method="POST" action="{{ url('contact/send') }}">
                {{ @csrf }}
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="razonSocial">Razón social</label>
                        <input type="text" name="razonSocial" class="form-control" id="razonSocial" placeholder="">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="cif">CIF.</label>
                        <input type="text" name="cif" class="form-control" id="cif" placeholder="">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="provincia">Provincia</label>                            
                        <select name="provincia" id="provincia" class="form-control">
                            <option selected>Seleccione...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="codigoPostal">Código Postal</label>
                        <input type="text" name="codigoPostal" class="form-control" id="codigoPostal" placeholder="">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="poblacion">Población</label>
                        <input type="text" name="poblacion" class="form-control" id="poblacion" placeholder="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="direccion">Dirección</label>
                        <input type="text" name="direccion" class="form-control" id="direccion">
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="telefono">Teléfono</label>
                        <input type="text" name="direccion" class="form-control" id="telefono">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="personaContacto">Persona de contacto</label>
                        <input type="text" name="personaContacto" class="form-control" id="personaContacto">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="reenviame" id="reenviame">
                    <label class="form-check-label"  for="reenviame">
                        Reenviame email
                    </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
@endsection