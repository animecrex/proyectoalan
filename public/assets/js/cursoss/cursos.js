const BASE_URL = $('meta[name="base-url"]').attr("content");

$(document).ready(function () {
    cargarTodos();
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
                    <div class="img" >
                        <img  src="${BASE_URL}/storage/${r.imagen}" >
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

                        <button class="btn btn-primary btn-seleccionar"
                            data-id="${r.id}">
                            Seleccionar
                        </button>
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
