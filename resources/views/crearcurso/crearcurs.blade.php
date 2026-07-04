<div class="card mb-2 mb-xl-10">
    <div class="card-header" style="background-color: #d1d5ec;">
        <div class="card-title">
            <i class="fa-solid fs-2  text-gray-800 px-5"></i>
            <h3>Registro del curso</h3><br>
        </div>
        
    </div>

    <div class="card-body pt-0 pb-0 my-2">
        <div class="mb-13 mt-8 row">
            <br>
            <hr class="my-line">
            <br><br>
            <div class="col-md-12 row mt-4">
                <div class="col-md-3 fv-row mt-4">
                    <label class="fs-6 fw-semibold mb-2">
                        <span class="required">Nombre del curso:</span>
                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                            title="Campo obligatorio"></i>
                    </label>
                    <input style="text-transform:uppercase;" type="text" name="nombre" id="nombre"
                        class="form-control py-2">
                </div>
                <div class="col-md-3 fv-row mt-4">
                    <label class="fs-6 fw-semibold mb-2">
                        <span class="required">Descripcion del curso:</span>
                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                            title="Campo obligatorio"></i>
                    </label>
                    <textarea style="text-transform:uppercase;" type="text" name="desc" id="desc" class="form-control py-2"></textarea>
                </div>
                <div class="col-md-3 fv-row mt-4">
                    <label class="fs-6 fw-semibold mb-2">
                        <span class="required">Cantidad maxima de alumnos :</span>
                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                            title="Campo obligatorio"></i>
                    </label>
                    <input style="text-transform:uppercase;" type="number" name="max_alumnos" id="max_alumnos"
                        class="form-control py-2">
                </div>
                <div class="col-md-3 fv-row mt-4">
                    <label class="fs-6 fw-semibold mb-2">
                        <span class="required">Maestro que lo impartira:</span>
                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                            title="Campo obligatorio"></i>
                    </label>
                    <input style="text-transform:uppercase;" type="text" name="maestro" id="maestro"
                        class="form-control py-2">
                </div>
                <div class="col-md-3 fv-row mt-4">
                    <label class="fs-6 fw-semibold mb-2">
                        <span class="required">Horas de duracion :</span>
                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                            title="Campo obligatorio"></i>
                    </label>
                    <input style="text-transform:uppercase;" type="number" name="horas" id="horas"
                        class="form-control py-2">
                </div>
                <div class="col-md-3 fv-row mt-4">
                    <label class="fs-6 fw-semibold mb-2">
                        <span class="required">Imagen del curso:</span>
                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                            title="Campo obligatorio"></i>
                    </label>
                    <input  type="file" accept="image/jpeg,image/jpg,image/png" name="imagen"
                        id="imagen" class="img-upload">
                </div>
            </div>

            <div class="col-md-3 fv-row mt-4">
                <label class="fs-6 fw-semibold mb-2">
                    <span class="required">Costo del curso:</span>
                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                        title="Campo obligatorio"></i>
                </label>
                <div class="input-group mb-3">
                    <span class="input-group-text">$</span>
                    <input style="text-transform:uppercase;" type="number" name="costo" id="costo"
                        class="form-control py-2">
                </div>
            </div>


    </div>
</div>
