const BASE_URL = $('meta[name="base-url"]').attr("content");

$("#guardar_curso").on("click", function (event) {
    event.preventDefault();

    let formData = new FormData();

    formData.append("nombre", $("#nombre").val());
    formData.append("desc", $("#desc").val());
    formData.append("max_alumnos", $("#max_alumnos").val());
    formData.append("maestro", $("#maestro").val());
    formData.append("horas", $("#horas").val());
    formData.append("costo", $("#costo").val());

    // 🔥 ESTA ES LA CLAVE
    let imagen = $("#imagen")[0].files[0];

    if (imagen !== undefined) {
        formData.append("imagen", imagen);
    }

    $.ajax({
        url: BASE_URL + "/registrarcurso",
        type: "POST",
        data: formData,
        processData: false,
        contentType: false,
        cache: false,
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },

        success: function (response) {
            console.log(response);
            alert("Guardado correctamente");
        },

        error: function (xhr) {
            console.log(xhr.responseText);
        },
    });
});

$(document).ready(function () {

    window.t = $('#dt_search').DataTable({
        responsive: true,
        autoWidth: false,
    });

    cargarTodos();
});

function cargarTodos() {
    $.ajax({
        url: `${BASE_URL}/crearcurso/traercursos`,
        type: "GET",
        dataType: "json",
        success: function (res) {

            console.log(res);

            let dataSet = res.map((r) => [
                r.nombre,
                r.maestro,
                r.descripcion,
                r.costo,

                r.imagen
                    ? `<img src="${BASE_URL}/storage/${r.imagen}" width="50">`
                    : 'Sin imagen',

                `<button type="button" class="btn btn-primary btn-seleccionar"
                    data-id="${r.id}">
                    Seleccionar
                </button>`
            ]);

            window.t.clear().rows.add(dataSet).draw();
        },
        error: function (xhr) {
            console.error("ERROR:", xhr.responseText);
        },
    });
}