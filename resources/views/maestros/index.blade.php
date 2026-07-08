<div class="card">
    <div class="card-body">

                @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="fv-row mb-5">
            <input type="text" placeholder="Nombre del maestro" name="nombre" id="nombre"
                value="{{ old('nombre') }}" autocomplete="off" class="form-control form-control-solid" />

            @error('nombre')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="fv-row mb-5">
            <input type="text" placeholder="Apellido paterno" name="apellido_paterno" id="apellido_paterno"
                value="{{ old('apellido_paterno') }}" autocomplete="off" class="form-control form-control-solid" />

            @error('apellido_paterno')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="fv-row mb-5">
            <input type="text" placeholder="Apellido materno" name="apellido_materno" id="apellido_materno"
                value="{{ old('apellido_materno') }}" autocomplete="off" class="form-control form-control-solid" />

            @error('apellido_materno')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="fv-row mb-5">
            <input type="email" placeholder="Correo electrónico" name="correo" id="correo"
                value="{{ old('correo') }}" autocomplete="off" class="form-control form-control-solid" />

            @error('correo')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="fv-row mb-5">
            <input type="text" placeholder="Materia que imparte" name="materia" id="materia"
                value="{{ old('materia') }}" autocomplete="off" class="form-control form-control-solid" />

            @error('materia')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="fv-row mb-7">
            <select name="turno" id="turno" class="form-control form-control-solid">
                <option value="">Selecciona el turno</option>
                <option value="Matutino" {{ old('turno') == 'Matutino' ? 'selected' : '' }}>Matutino</option>
                <option value="Vespertino" {{ old('turno') == 'Vespertino' ? 'selected' : '' }}>Vespertino</option>
            </select>

            @error('turno')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
     
        <button type="submit" id="btnAgregarMaestro" class="btn btn-primary">
            Agregar maestro
        </button>

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
    <script>
        // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }
    </script>
</head>
<!--end::Head-->
<!--begin::Body-->

        <div class="text-start mb-10">
            <h1 class="text-gray-900 mb-3 fs-3x">Gestión de Maestros</h1>
            <p class="text-muted">Registra y visualiza maestros.</p>
        </div>

        <div class="fv-row mb-5">
            <input type="text" placeholder="Nombre del maestro" name="nombre" id="nombre"
                class="form-control form-control-solid" />
        </div>

        <div class="fv-row mb-5">
            <input type="text" placeholder="Apellido paterno" name="apellido_paterno"
                class="form-control form-control-solid" />
        </div>

        <div class="fv-row mb-5">
            <input type="text" placeholder="Apellido materno" name="apellido_materno"
                class="form-control form-control-solid" />
        </div>

        <div class="fv-row mb-5">
            <input type="email" placeholder="Correo electrónico" name="correo"
                class="form-control form-control-solid" />
        </div>

        <div class="fv-row mb-5">
            <input type="text" placeholder="Materia que imparte" name="materia"
                class="form-control form-control-solid" />
        </div>

        <div class="fv-row mb-7">
            <select name="turno" class="form-control form-control-solid">
                <option value="">Selecciona el turno</option>
                <option value="Matutino">Matutino</option>
                <option value="Vespertino">Vespertino</option>
            </select>
        </div>

        <button type="button" id="btnAgregarMaestro" class="btn btn-primary">
            Agregar maestro
        </button>

        <div class="mt-10">
            <h3>Lista de maestros registrados</h3>

            <div class="table-responsive">
                <table class="table table-row-bordered">
                    <thead>
                        <tr>
                            <th>Nombre completo</th>
                            <th>Correo</th>
                            <th>Materia</th>
                            <th>Turno</th>
                        </tr>
                    </thead>


                    <tbody id="tablaMaestros">
                        @forelse($maestros as $maestro)
                            <tr class="fila-animada">
                                <td>{{ $maestro->nombre }} {{ $maestro->apellido_paterno }} {{ $maestro->apellido_materno }}</td>
                                <td>{{ $maestro->correo }}</td>
                                <td>{{ $maestro->materia }}</td>
                                <td>{{ $maestro->turno }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center text-muted">
                                    No hay maestros registrados.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

                    <tbody id="tablaMaestros">
                        <tr>
                            <td colspan="4" class="text-center text-muted">
                                No hay maestros registrados.
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>

    </div>
</div>