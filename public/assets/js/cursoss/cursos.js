const BASE_URL = $('meta[name="base-url"]').attr("content");

$(document).ready(function () {
    cargarTodos();
});

$(document).on("click", "#pagarBtn", function () {
    let cursoId = $(this).data("curso-id");
    let userId = $(this).data("user-id");
    registrarCurso(cursoId, userId);
});

function cargarTodos() {
    $.ajax({
        url: `${BASE_URL}/curso/traercursos`,
        type: "GET",
        dataType: "json",
        success: function (res) {
            let html = "";

            res.forEach((r) => {
                html += `
                    <div class="card">
                        <div class="img">
                            <img src="${BASE_URL}/storage/${r.imagen}">
                        </div>

                        <div class="text">
                            <p class="h3">${r.nombre}</p>
                            <p class="p">${r.descripcion}</p>

                            <div class="icon-box">
                                <p class="span">Maestro: ${r.maestro}</p>
                            </div>

                            <div class="icon-box">
                                <p class="span">Costo: $${r.costo}</p>
                            </div>

                          
                                <a class="btn btn-success btn-seleccionar" 
                                    href="${BASE_URL}/detallescurso/${r.hash}">
                                    Seleccionar 
                                </a>
                        </div>
                    </div>
`;
            });

            $("#contenedor-cursos").html(html);
        },
        error: function (xhr) {
            console.error("ERROR:", xhr.responseText);
        },
    });
}

function registrarCurso(cursoId, userId) {
    $.ajax({
        url: `${BASE_URL}/suscribirse`,
        type: "POST",
        data: {
            curso_id: cursoId,
            user_id: userId,
        },
        success: function (res) {
            Swall.fire({
                title: "¡Éxito!",
                text: "Te has registrado en el curso correctamente.",
                icon: "success",
                confirmButtonText: "Aceptar",
            });
        },
        error: function (xhr) {
            console.error("ERROR:", xhr.responseText);
        },
    });
}



document.getElementById("abrirModalBtn").addEventListener("click", function () {
    document.getElementById("modalPago").style.display = "block";
});

document
    .getElementById("cerrarModalBtn")
    .addEventListener("click", function () {
        document.getElementById("modalPago").style.display = "none";
    });
