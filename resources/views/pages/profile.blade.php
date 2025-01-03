<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Sidebar</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex flex-col lg:flex-row h-screen font-serif">

    <!-- Header (solo para pantallas pequeñas) -->
    <header class="bg-pink-500 text-white p-4 flex items-center justify-between lg:hidden">
        <h1 class="text-lg font-bold">Menú</h1>
        <!-- Botón para mostrar/ocultar el sidenav -->
        <button id="menu-toggle" class="text-2xl focus:outline-none">
            &#9776; <!-- Icono de hamburguesa -->
        </button>
    </header>

    <!-- Sidebar -->
    <livewire:profile.profile/>

    <!-- Content -->
    <div class="flex-1 p-6 bg-white ">
        <section class="text-center grid grid-cols-2 gap-4">
            <div class="flex flex-col text-justify">
                <h1 class="text-3xl font-bold">Acerca de mí </h1>
                <p class="text-gray-600 mt-4 ">Mi nombre es Yeison Alexis Velasco Trejos, vivo en la ciudad de Pereira del departamento de Risaralda en Colombia,
                    soy Tecnologo en Analisis y Desarrollo de Sistemas de Información del SENA, con conocimientos en
                    Desarrollo Web Backend y Frontend. Con alta experiencia en el manejo de Bases de datos relaciónales
                    Actualmete trabajo en el area de tecnólogia en la empresa colombiana Chevrolet Caminos. Estoy a su disposición para serle útil y acompañarlo en este maravilloso camino del software.</p>
            </div>
            <div class="flex flex-col items-center pt-[4rem]">
                <img src="{{ asset('img/profile.svg') }}" alt="Profile Picture" class="w-44 h-44 rounded-[1rem] mb-4">
            </div>

        </section>
    </div>

    <!-- Script para el toggle del menú -->
    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const sidebar = document.getElementById('sidebar');

        menuToggle.addEventListener('click', () => {
            sidebar.classList.toggle('-translate-x-full'); // Oculta o muestra el sidenav en pantallas pequeñas
        });
    </script>
</body>
</html>
