<style>
    #contenedor-cursos {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(420px, 1fr));
        gap: 25px;
        padding: 30px;
    }

    /* CARD */
    .card {
        display: flex;
        height: 220px;
        /* más rectangular */
        width: 100%;
        background: white;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 10px 10px 25px #bebebe,
            -10px -10px 25px #ffffff;
        transition: 0.3s;
    }

    .card:hover {
        transform: translateY(-5px);
    }

    /* IMAGEN IZQUIERDA */
    .img {
        width: 40%;
        height: 100%;
        /* 🔥 ocupa todo el alto */
        background-size: cover;
        /* 🔥 se adapta bien */
        background-position: center;
        background-repeat: no-repeat;
    }

    /* CONTENIDO DERECHA */
    .text {
        width: 60%;
        padding: 15px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        /* 🔥 separa texto y botón */
    }

    /* TITULO */
    .text .h3 {
        font-size: 18px;
        font-weight: bold;
    }

    /* DESCRIPCIÓN */
    .text .p {
        font-size: 13px;
        color: #777;
    }

    /* INFO */
    .icon-box {
        font-size: 13px;
    }

    /* BOTÓN */
    .btn-seleccionar {
        margin-top: 10px;
        align-self: flex-start;
    }
</style>

<div id="contenedor-cursos">


</div>
