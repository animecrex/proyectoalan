<div class="card">
    <div class="card-body">

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