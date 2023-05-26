@vite(['resources/js/app.js', 'resources/sass/app.scss'])
{{-- <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
</div> --}}
<div class="container">
    <div class="row justify-content-center align-items-center" style="height: 100vh;">
        <div class="col- col-md">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md">
                            <h5 class="card-title fw-semibold">Listado de Registros</h5>
                        </div>
                        <div class="col-md-2">
                            <a href="{{ url('/amigos/create') }}" class="btn btn-success btn-circle">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plus" width="auto" height="auto" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="white" stroke-linecap="round" stroke-linejoin="round" >
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M12 5l0 14" />
                                    <path d="M5 12l14 0" />
                                  </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Registros De Amigos</h5>
                    <div class="table-responsive text-center">
                        <table class="table text-nowrap mb-0 align-middle text-center">
                            <thead class="text-dark fs-4">
                                <!-- nombre, apellido paterno, apellido materno, edad, gmail y en donde viven -->
                                <tr>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">#</h6>
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
                                        <h6 class="fw-semibold mb-0">Actualizar</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Eliminar</h6>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @if (strlen($amigos) > 1)
                                    @endif --}}
                                @foreach ($amigos as $amigo)
                                    <tr>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0"> {{ $amigo->id }}</h6>
                                        </td>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-1">{{ $amigo->nombre }}</h6>
                                            <span class="fw-normal">{{ $amigo->apellidoPaterno }}
                                                {{ $amigo->apellidoMaterno }}</span>
                                        </td>
                                        <td class="border-bottom-0">
                                            <p class="mb-0 fw-normal">{{ $amigo->edad }}</p>
                                        </td>
                                        <td class="border-bottom-0 text-center justify-center align-content-center">
                                            <p class="mb-0 fw-normal">{{ $amigo->correo }}</p>
                                            {{-- <div class="d-flex align-items-center gap-2">
                                                    <span
                                                    class="badge bg-primary rounded-3 fw-semibold">{{ $amigo->correo }}</span>
                                                </div> --}}
                                        </td>
                                        <td class="border-bottom-0">
                                            <p class="mb-0 fw-normal">{{ $amigo->direccion }}</p>
                                        </td>
                                        <td class="border-bottom-0 text-center">
                                            <h6 class="fw-semibold mb-0 fs-4">
                                                <a class="btn btn-info btn-circle"
                                                    href="{{ url('/amigos/edit/' . $amigo->id) }}">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="icon icon-tabler icon-tabler-edit-circle" width="auto"
                                                        height="auto" viewBox="0 0 24 24" stroke-width="1.5"
                                                        stroke="#2c3e50" fill="none" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path
                                                            d="M12 15l8.385 -8.415a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3z" />
                                                        <path d="M16 5l3 3" />
                                                        <path d="M9 7.07a7 7 0 0 0 1 13.93a7 7 0 0 0 6.929 -6" />
                                                    </svg>
                                                </a>
                                            </h6>
                                        </td>
                                        <td class="border-bottom-0 text-center">
                                            <h6 class="fw-semibold mb-0 fs-4">
                                                <button type="button" class="btn btn-warning btn-circle"
                                                    data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="icon icon-tabler icon-tabler-trash" width="auto"
                                                        height="auto" viewBox="0 0 24 24" stroke-width="1.5"
                                                        stroke="#2c3e50" fill="none" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path d="M4 7l16 0" />
                                                        <path d="M10 11l0 6" />
                                                        <path d="M14 11l0 6" />
                                                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                                    </svg>
                                                </button>
                                            </h6>
                                        </td>
                                        {{-- Manejo de la venta de confirmacion: eliminar --}}
                                        <div class="modal fade" id="exampleModalCenter" tabindex="-1"
                                            aria-labelledby="exampleModalCenterTitle" style="display: none;"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <form action="{{ url('/amigos/' . $amigo->id) }}" method="post">
                                                    @csrf
                                                    {{ method_field('DELETE') }}
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalCenterTitle">
                                                                Eliminar Amigo!.</h1>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body text-center">
                                                            <h5>Desea Eliminar A {{ $amigo->nombre }}
                                                                {{ $amigo->apellidoPaterno }}
                                                                {{ $amigo->apellidoMaterno }} De La Lista De Amigos?.
                                                            </h5>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger"
                                                                data-bs-dismiss="modal">Cancelar</button>
                                                            <button type="submit"
                                                                class="btn btn-success">Aceptar</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
