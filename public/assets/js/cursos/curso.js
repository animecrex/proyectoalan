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
    formData.append("fecha_fin", $("#fecha_fin").val());
    formData.append("objetivos", $("#objetivos").val());
    formData.append("requisitos", $("#requisitos").val());
    formData.append("fecha_inicio", $("#fecha_inicio").val());

    
    let imagen = $("#imagen")[0].files[0];

    if (imagen !== undefined) {
        formData.append("imagen", imagen);
    }

    if (
        formData.get("nombre") === "" ||
        formData.get("desc") === "" ||
        formData.get("max_alumnos") === "" ||
        formData.get("maestro") === "" ||
        formData.get("horas") === "" ||
        formData.get("costo") === "" ||
        formData.get("fecha_fin") === "" ||
        formData.get("objetivos") === "" ||
        formData.get("requisitos") === "" ||
        formData.get("fecha_inicio") === ""
    ) {
        Swal.fire({
            icon: "warning",
            title: "Campos obligatorios",
            text: "Completa los campos requeridos",
            confirmButtonColor: "#4f46e5",
        });
        return;
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
            cargarTodos(); 
            Swal.fire({
                icon: "success",
                title: "Curso registrado correctamente",
                showConfirmButton: false,
                timer: 1500,
            });
        },

        error: function (xhr) {
            console.log(xhr.responseText);
        },
    });
});

$(document).ready(function () {
    window.t = $("#dt_search").DataTable({
        responsive: true,
        autoWidth: false,
        language: {
            url: "https://cdn.datatables.net/plug-ins/1.13.6/i18n/es-ES.json",
        },
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

            let dataSet = [];

            res.forEach((r) => {
                dataSet.push([
                    `<strong>${r.nombre}</strong>`,
                    r.maestro,
                    r.descripcion,
                    `<span class="badge-costo">$${r.costo}</span>`,
                    `<img src="${BASE_URL}/storage/${r.imagen}" class="img-curso">`,
                    `
                    <a href="${BASE_URL}/detallescurso/${r.hash}" class="btn btn-action btn-ver">Ver</a>
                    <button type="button" class="btn btn-action btn-eliminar" data-id="${r.id}">Eliminar</button>
                    `,
                ]);
            });

            window.t.clear().rows.add(dataSet).draw();
        },
        error: function (xhr) {
            console.error("ERROR:", xhr.responseText);
        },
    });
}


$(document).on("click", ".btn-eliminar", function () {
    let id = $(this).data("id");

    eliminarCurso(id);
});

function eliminarCurso(id) {
    Swal.fire({
        title: "¿Estás seguro?",
        text: "¡No podrás revertir esto!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Sí, eliminar",
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: `${BASE_URL}/crearcurso/eliminarcurso/${id}`,
                type: "POST",
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                },
                success: function () {
                    cargarTodos();
                    Swal.fire("Eliminado", "Curso eliminado correctamente", "success");
                },
            });
        }
    });
}
