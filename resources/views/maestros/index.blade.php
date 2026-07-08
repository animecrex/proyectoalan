<!DOCTYPE html>
<html lang="es">
<!--begin::Head-->

<head>
    <title>Curso+</title>
    <meta charset="utf-8" />
    <meta name="description" content="Sistema de Gestiones" />
    <meta name="keywords" content="gestiones" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="google" content="notranslate">
    <meta property="og:locale" content="es_MX" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="ATENCIÓN CIUDADANA - Gestiones" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="ATENCIÓN CIUDADANA - Gestiones" />
    <link rel="canonical" href="http://preview.keenthemes.comauthentication/layouts/fancy/sign-in.html" />
    <link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico') }}" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
    <style>
        .relative.inline-flex.items-center {
            display: none;
        }
        .form-control-solid {
    transition: all 0.3s ease;
        }

<<<<<<< Updated upstream
        .form-control-solid:focus {
            transform: scale(1.02);
            box-shadow: 0 0 0 3px rgba(54, 153, 255, 0.2);
        }

        .btn {
            transition: all 0.3s ease;
        }

        .btn:hover {
            transform: translateY(-3px);
        }

        .table tbody tr {
            transition: all 0.3s ease;
        }

        .table tbody tr:hover {
            background-color: #f1f5f9;
            transform: scale(1.01);
        }

        .fila-animada {
            animation: aparecerFila 0.5s ease;
        }

        @keyframes aparecerFila {
            from {
                opacity: 0;
                transform: translateY(15px);
            }
=======
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
>>>>>>> Stashed changes

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

<<<<<<< Updated upstream
<body id="kt_body" class="app-blank">

    <div class="d-flex flex-column flex-root" id="kt_app_root">
            <!--begin::Authentication - Sign-in -->
            <div class="d-flex flex-column flex-lg-row flex-column-fluid">
                <!--begin::Logo-->
                
                <!--end::Logo-->
                <!--begin::Aside-->
                <div class="d-flex flex-column flex-column-fluid flex-center w-lg-50 p-10">
                    <!--begin::Wrapper-->
                    <div class="d-flex justify-content-between flex-column-fluid flex-column w-100 mw-450px">
                        <!--begin::Header-->
                        <div class="d-flex flex-stack py-2">
                        </div>
                        <div class="py-20">
                            <form method="POST" class="form w-100" novalidate="novalidate" id="kt_sign_in_form"
                                data-kt-redirect-url="#" >
                                @csrf
                                <div class="card-body">
                                    <div class="text-start mb-10">
                                        <h1 class="text-gray-900 mb-3 fs-3x">Gestión de Maestros</h1>
                                            <p class="text-muted">
                                                Registra y visualiza maestros.
                                            </p>
                                    </div>
                                    @error('erroLogin')
                                        <div class="alert alert-danger d-flex align-items-center p-2">
                                            <i class="ki-duotone ki-shield-cross fs-2hx text-danger me-4">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                            <div class="d-flex flex-column">
                                                <span>{{ $message }}</span>
                                            </div>
                                        </div>
                                    @enderror
                                    <div class="fv-row mb-5">
        <input type="text" placeholder="Nombre del maestro" name="nombre" id="nombre"
            autocomplete="off" class="form-control form-control-solid" />
    </div>

    <div class="fv-row mb-5">
        <input type="text" placeholder="Apellido paterno" name="apellido_paterno" id="apellido_paterno"
            autocomplete="off" class="form-control form-control-solid" />
    </div>

    <div class="fv-row mb-5">
        <input type="text" placeholder="Apellido materno" name="apellido_materno" id="apellido_materno"
            autocomplete="off" class="form-control form-control-solid" />
    </div>

    <div class="fv-row mb-5">
        <input type="email" placeholder="Correo electrónico" name="correo" id="correo"
            autocomplete="off" class="form-control form-control-solid" />
    </div>

    <div class="fv-row mb-5">
        <input type="text" placeholder="Materia que imparte" name="materia" id="materia"
            autocomplete="off" class="form-control form-control-solid" />
    </div>

    <div class="fv-row mb-7">
        <select name="turno" id="turno" class="form-control form-control-solid">
            <option value="">Selecciona el turno</option>
            <option value="Matutino">Matutino</option>
            <option value="Vespertino">Vespertino</option>
        </select>
    </div>
                                <div class="d-flex flex-stack">
                                    <button type="button" id="btnAgregarMaestro" class="btn btn-secondary me-2 flex-shrink-0">
                                        <span class="indicator-label">Agregar maestro</span>
                                    </button>
                                </div>
                                <div class="mt-10">
    <h3 class="text-gray-900 mb-5">Lista de maestros registrados</h3>

    <div class="table-responsive">
        <table class="table table-row-bordered table-row-gray-300 align-middle">
            <thead>
                <tr class="fw-bold text-muted">
                    <th>Nombre completo</th>
                    <th>Correo</th>
                    <th>Materia</th>
                    <th>Turno</th>
                </tr>
            </thead>
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
                        </form>
                    </div>
                    
                </div>
            </div>
            <div class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center order-1 order-lg-2"
                style="background-image: url(assets/media/misc/curso.jpg)">
                <div class="d-flex flex-column flex-center py-7 py-lg-15 px-5 px-md-15 w-100">
                    <a href="index.html" class="mb-0 mb-lg-12">

                    </a>
                    <img class="d-none d-lg-block mx-auto w-275px w-md-50 w-xl-500px mb-10 mb-lg-20" src=""
                        alt="" />

                </div>
=======
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
>>>>>>> Stashed changes
            </div>
        </div>

        <script>
            var hostUrl = "{{ asset('assets/') }}";
        </script>
        <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
        <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
        <script src="{{ asset('js/auth/auth_validate.js') }}"></script>
        <script>
            history.pushState(null, null, location.href);

            window.onpopstate = function() {
                history.go(1);
            };
        </script>
        <script>
    class Maestro {
        constructor(nombre, apellidoPaterno, apellidoMaterno, correo, materia, turno) {
            this.nombre = nombre;
            this.apellidoPaterno = apellidoPaterno;
            this.apellidoMaterno = apellidoMaterno;
            this.correo = correo;
            this.materia = materia;
            this.turno = turno;
        }

        obtenerNombreCompleto() {
            return `${this.nombre} ${this.apellidoPaterno} ${this.apellidoMaterno}`;
        }
    }

    class GestionMaestros {
        constructor() {
            this.maestros = [];
            this.botonAgregar = document.getElementById("btnAgregarMaestro");
            this.tabla = document.getElementById("tablaMaestros");
        }

        iniciar() {
            this.botonAgregar.addEventListener("click", () => {
                this.agregarMaestro();
            });
        }

        validarCampos(nombre, apellidoPaterno, correo, materia, turno) {
            const correoValido = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(correo);

            return nombre.length >= 3 &&
                apellidoPaterno.length >= 3 &&
                correoValido &&
                materia.length >= 3 &&
                turno !== "";
        }

        agregarMaestro() {
            const nombre = document.getElementById("nombre").value.trim();
            const apellidoPaterno = document.getElementById("apellido_paterno").value.trim();
            const apellidoMaterno = document.getElementById("apellido_materno").value.trim();
            const correo = document.getElementById("correo").value.trim();
            const materia = document.getElementById("materia").value.trim();
            const turno = document.getElementById("turno").value;

            if (!this.validarCampos(nombre, apellidoPaterno, correo, materia, turno)) {
                alert("Verifica que los campos estén completos y que el correo sea válido.");
                return;
            }

            const maestro = new Maestro(
                nombre,
                apellidoPaterno,
                apellidoMaterno,
                correo,
                materia,
                turno
            );

            this.maestros.push(maestro);

            this.mostrarMaestros();
            this.limpiarFormulario();
            this.mostrarMensajeAsincrono();
        }

        mostrarMaestros() {
            this.tabla.innerHTML = "";

            this.maestros.forEach(maestro => {
                const fila = document.createElement("tr");

                const columnaNombre = document.createElement("td");
                const columnaCorreo = document.createElement("td");
                const columnaMateria = document.createElement("td");
                const columnaTurno = document.createElement("td");

                columnaNombre.textContent = maestro.obtenerNombreCompleto();
                columnaCorreo.textContent = maestro.correo;
                columnaMateria.textContent = maestro.materia;
                columnaTurno.textContent = maestro.turno;

                fila.appendChild(columnaNombre);
                fila.appendChild(columnaCorreo);
                fila.appendChild(columnaMateria);
                fila.appendChild(columnaTurno);

                fila.classList.add("fila-animada");
                this.tabla.appendChild(fila);
            });
        }

        limpiarFormulario() {
            document.getElementById("nombre").value = "";
            document.getElementById("apellido_paterno").value = "";
            document.getElementById("apellido_materno").value = "";
            document.getElementById("correo").value = "";
            document.getElementById("materia").value = "";
            document.getElementById("turno").value = "";
        }

        mostrarMensajeAsincrono() {
            setTimeout(() => {
                alert("Maestro agregado correctamente.");
            }, 800);
        }
    }

    document.addEventListener("DOMContentLoaded", () => {
        const gestion = new GestionMaestros();
        gestion.iniciar();
    });
</script>
</body>
</html>
