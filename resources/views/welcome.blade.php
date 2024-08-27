@include('layouts.header')

<x-guest-layout>
    <style>
        /* Estilo para la imagen de fondo */
        .background-image {
            background-image: url('images/Welcome.jpeg'); /* Reemplaza esto con la ruta correcta */
            background-size: cover;
            background-position: center;
            height: 400px;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Estilo para el título */
        .translator-title {
            font-size: 3rem;
            color: black;
            font-weight: bold;
            align-items: center
        }

        .translator-subtitle {
            font-size: 1.5rem;
            color: black;
            justify-content: center;
        }

        /* Estilo para los botones y elementos */
        .translator-button, .translator-select {
            background-color: #b2fab4;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            margin: 10px;
            font-size: 1rem;
        }

        .translator-button:hover, .translator-select:hover {
            background-color: #a0e8a1;
        }

        /* Contenedor de traducción */
        .translator-container {
            padding: 20px;
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }

        .translator-section {
            width: 30%;
            text-align: center;
        }

        .translator-textarea {
            width: 100%;
            height: 100px;
            margin-top: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            padding: 10px;
        }

        /* Ajustes para el footer */
        footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            background-color: #2f6b2f;
            color: white;
            text-align: center;
            padding: 10px 0;
        }
    </style>

    <div class="background-image">
        <div>
            <h1 class="translator-title">Traductor de lenguas</h1>
            <h2 class="translator-subtitle">Indigenas</h2>
        </div>
    </div>

    <div class="translator-container">
        <div class="translator-section">
            <button class="translator-button">Texto</button>
            <select class="translator-select">
                <option>Elegir idioma</option>
                <option value="nah">Náhuatl</option>
                <option value="maya">Maya</option>
                <option value="mixteco">Mixteco</option>
                <option value="zapoteco">Zapoteco</option>
                <option value="tzotzil">Tzotzil</option>
            </select>
            <textarea class="translator-textarea" placeholder="Texto"></textarea>
        </div>

        <div class="translator-section">
            <button class="translator-button">Imagen/Foto</button>
            <button class="translator-button">Subir</button>
        </div>

        <div class="translator-section">
            <button class="translator-button">Voz</button>
            <select class="translator-select">
                <option>Elegir idioma</option>
                <option value="nah">Náhuatl</option>
                <option value="maya">Maya</option>
                <option value="mixteco">Mixteco</option>
                <option value="zapoteco">Zapoteco</option>
                <option value="tzotzil">Tzotzil</option>
            </select>
            <textarea class="translator-textarea" placeholder="Resultado"></textarea>
        </div>
    </div>
</x-guest-layout>

@include('layouts.footer')
