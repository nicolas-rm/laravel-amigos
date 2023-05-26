@vite(['resources/js/app.js', 'resources/sass/app.scss'])
<div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="row">
        <div class="col- col-md">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title fw-semibold">Actualizacion Amigo</h5>
                </div>
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Formulario de Actualizacion</h5>
                    <form action="{{ url('/amigos/'.$amigo->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{ method_field('PUT') }}
                        {{-- REUTILIZACION DE FORMULARIO --}}
                        @include('amigo.form');
                        <!-- nombre, apellido paterno, apellido materno, edad, gmail y en donde viven -->
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
