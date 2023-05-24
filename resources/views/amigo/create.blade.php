Crear un nuevo amigo
<div class="container-fluid" style="background-color: #EDF3FC;">
    <div class="row">
        <div class="col- col-md">
            <div class="card vh-100">
                <div class="card-header">
                    <h5 class="card-title fw-semibold">Registro Amigos</h5>
                </div>
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Formulario de Registro</h5>
                    <form>
                        <!-- nombre, apellido paterno, apellido materno, edad, gmail y en donde viven -->
                        <div class="row">
                            <div class="col- col-md-6">
                                <div class="mb-3">
                                    <label for="nombreText" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" id="nombreText" autocomplete="off">
                                </div>
                            </div>
                            <div class="col- col-md-6">
                                <div class="mb-3">
                                    <label for="apellidoPaternoText" class="form-label">Apellido Paterno</label>
                                    <input type="text" class="form-control" id="apellidoPaternoText"
                                        autocomplete="off">
                                </div>
                            </div>
                            <div class="col- col-md-6">
                                <div class="mb-3">
                                    <label for="apellidoMaternoText" class="form-label">Apellido Materno</label>
                                    <input type="text" class="form-control" id="apellidoMaternoText"
                                        autocomplete="off">
                                </div>
                            </div>
                            <div class="col- col-md-6">
                                <div class="mb-3">
                                    <label for="edadText" class="form-label">Edad</label>
                                    <input type="text" class="form-control" id="edadText" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col- col-md-6">
                                <div class="mb-3">
                                    <label for="correoText" class="form-label">Correo</label>
                                    <input type="text" class="form-control" id="correoText" autocomplete="off">
                                </div>
                            </div>
                            <div class="col- col-md-6">
                                <div class="mb-3">
                                    <label for="direccionText" class="form-label">Direccion</label>
                                    <input type="text" class="form-control" id="direccionText" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <div class="mb-3 w-100">
                                </div>
                            </div>
                        </div>
                        <button id="submit" class="btn btn-success">Agregar</button>
                    </form>
                </div>
            </div>

        </div>
        {{-- <div class="col- col-md">
            <div class="card vh-100">
                <div class="card-header">
                    <h5 class="card-title fw-semibold">Listado de Registros</h5>
                </div>
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Registros De Amigos</h5>
                    <form>
                        <div class="table-responsive">
                            <table class="table text-nowrap mb-0 align-middle">
                                <thead class="text-dark fs-4">
                                    <!-- nombre, apellido paterno, apellido materno, edad, gmail y en donde viven -->
                                    <tr>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Id</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Nombre</h6>
                                        </th>
                                        <!-- <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Apellidos</h6>
                                        </th> -->
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Edad</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Correo</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Direccion</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Eliminar</h6>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">1</h6>
                                        </td>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-1">Sunil Joshi</h6>
                                            <span class="fw-normal">Web Designer</span>
                                        </td>
                                        <td class="border-bottom-0">
                                            <p class="mb-0 fw-normal">Elite Admin</p>
                                        </td>
                                        <td class="border-bottom-0">
                                            <div class="d-flex align-items-center gap-2">
                                                <span class="badge bg-primary rounded-3 fw-semibold">Low</span>
                                            </div>
                                        </td>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0 fs-4">$3.9</h6>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">2</h6>
                                        </td>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-1">Andrew McDownland</h6>
                                            <span class="fw-normal">Project Manager</span>
                                        </td>
                                        <td class="border-bottom-0">
                                            <p class="mb-0 fw-normal">Real Homes WP Theme</p>
                                        </td>
                                        <td class="border-bottom-0">
                                            <div class="d-flex align-items-center gap-2">
                                                <span class="badge bg-secondary rounded-3 fw-semibold">Medium</span>
                                            </div>
                                        </td>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0 fs-4">$24.5k</h6>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">3</h6>
                                        </td>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-1">Christopher Jamil</h6>
                                            <span class="fw-normal">Project Manager</span>
                                        </td>
                                        <td class="border-bottom-0">
                                            <p class="mb-0 fw-normal">MedicalPro WP Theme</p>
                                        </td>
                                        <td class="border-bottom-0">
                                            <div class="d-flex align-items-center gap-2">
                                                <span class="badge bg-danger rounded-3 fw-semibold">High</span>
                                            </div>
                                        </td>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0 fs-4">$12.8k</h6>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">4</h6>
                                        </td>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-1">Nirav Joshi</h6>
                                            <span class="fw-normal">Frontend Engineer</span>
                                        </td>
                                        <td class="border-bottom-0">
                                            <p class="mb-0 fw-normal">Hosting Press HTML</p>
                                        </td>
                                        <td class="border-bottom-0">
                                            <div class="d-flex align-items-center gap-2">
                                                <span class="badge bg-success rounded-3 fw-semibold">Critical</span>
                                            </div>
                                        </td>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0 fs-4">$2.4k</h6>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div> --}}
    </div>
</div>
