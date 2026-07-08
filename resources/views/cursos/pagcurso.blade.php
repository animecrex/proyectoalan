<style>
img {
    width: 500%;
    height: 50%;
    align-items: start;
    height: auto;
}
</style>
<div class="container mt-5">
    <div class="row">
        
        <div class="col-md-6">
            <img src="{{ asset('storage/' . $curso->imagen) }}" class="img-fluid">
        </div>

        <div class="col-md-6">
            <h2>{{ $curso->nombre }}</h2>
            <p>{{ $curso->descripcion }}</p>

            <h4 class="text-success">$ {{ $curso->costo }}</h4>

            <p><strong>Maestro:</strong> {{ $curso->maestro }}</p>

            <p><strong>Horas:</strong> {{ $curso->horas }}</p>

            <p><strong>Fecha de inicio:</strong> {{ $curso->fecha_inicio }}</p>

            <p><strong>Fecha de fin:</strong> {{ $curso->fecha_fin }}</p>

            <p><strong>Objetivos:</strong> {{ $curso->objetivos }}</p>

            <p><strong>Requisitos:</strong> {{ $curso->requisitos }}</p>

            

            <button class="btn btn-success w-100 mb-2">
                Suscribirse al Curso
            </button>


        </div>

    </div>
</div>
