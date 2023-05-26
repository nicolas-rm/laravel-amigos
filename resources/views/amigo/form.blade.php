<div class="row">
    <div class="col- col-md-6">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input name="nombre" type="text" class="form-control" id="nombre" autocomplete="off" value="{{ isset($amigo->nombre) ? $amigo->nombre : "" }}">
        </div>
    </div>
    <div class="col- col-md-6">
        <div class="mb-3">
            <label for="apellidoPaterno" class="form-label">Apellido Paterno</label>
            <input name="apellidoPaterno" type="text" class="form-control" id="apellidoPaterno" value="{{ isset($amigo->apellidoPaterno) ? $amigo->apellidoPaterno : "" }}" autocomplete="off">
        </div>
    </div>
    <div class="col- col-md-6">
        <div class="mb-3">
            <label for="apellidoMaterno" class="form-label">Apellido Materno</label>
            <input name="apellidoMaterno" type="text" class="form-control" id="apellidoMaterno" value="{{ isset($amigo->apellidoMaterno) ? $amigo->apellidoMaterno : "" }}" autocomplete="off">
        </div>
    </div>
    <div class="col- col-md-6">
        <div class="mb-3">
            <label for="edad" class="form-label">Edad</label>
            <input name="edad" type="text" class="form-control" id="edad" autocomplete="off" value="{{ isset($amigo->edad) ? $amigo->edad : "" }}">
        </div>
    </div>
</div>
<div class="row">
    <div class="col- col-md-6">
        <div class="mb-3">
            <label for="correo" class="form-label">Correo</label>
            <input name="correo" type="text" class="form-control" id="correo" autocomplete="off" value="{{ isset($amigo->correo) ? $amigo->correo : "" }}">
        </div>
    </div>
    <div class="col- col-md-6">
        <div class="mb-3">
            <label for="direccion" class="form-label">Direccion</label>
            <input name="direccion" type="text" class="form-control" id="direccion" autocomplete="off" value="{{ isset($amigo->direccion) ? $amigo->direccion : "" }}">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 col-md-12">
        <div class="mb-3 w-100">
        </div>
    </div>
</div>
<div class="row">
    <div class="btn-group">
        <a type="submit" href="{{ url('amigos/') }}" class="btn btn-warning">Cancelar</a>
        <a type="submit"  class="btn btn-success">Confirmar</a>
        {{-- <a href="#" class="btn btn-primary active" aria-current="page">Active link</a>
        <a href="#" class="btn btn-primary">Link</a>
        <a href="#" class="btn btn-primary">Link</a> --}}
      </div>
</div>
