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
    <header class="bg-yellow-400 text-white p-4 flex items-center justify-between lg:hidden">
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
        <section class="text-center grid lg:grid-cols-2 gap-4">
            <div class="flex flex-col text-justify">
                <h1 class="text-3xl text-center font-bold border-b-4 border-yellow-400 px-10">Acerca de mí</h1>
                <p class="text-gray-600 mt-4">Soy Yeison Alexis Velasco Trejos, un desarrollador backend apasionado por la creación de soluciones innovadoras que aborden problemas cotidianos. Cuento con experiencia sólida en tecnologías como Node.js, Laravel y Angular, además de un manejo experto en bases de datos relacionales.</p>
                <div id="extra-content" class="hidden">
                    <p class="text-gray-600 mt-4">Soy Tecnólogo en Análisis y Desarrollo de Sistemas de Información, egresado del SENA, con conocimientos tanto en desarrollo web backend como frontend. Me destaco por mi capacidad de aprendizaje continuo, mi adaptabilidad a nuevos desafíos, y mi compromiso con la excelencia técnica.</p>
                    <p class="text-gray-600 mt-4">Actualmente, trabajo en el área de tecnología de Chevrolet Caminos, una empresa líder en Colombia. Desde mi rol, he contribuido a optimizar procesos y desarrollar soluciones eficientes para las operaciones de la compañía.</p>
                    <p class="text-gray-600 mt-4">Mi objetivo profesional es seguir creciendo en el campo del desarrollo web, aplicando mis habilidades técnicas y creativas en entornos dinámicos que valoren la innovación y la colaboración. Estoy a disposición para acompañarte en este maravilloso camino del software y ser un aliado estratégico para tus proyectos tecnológicos.</p>
                </div>
                <button id="toggle-button" class="mt-4 bg-yellow-400 text-white px-4 py-2 rounded-full font-semibold self-center">Leer más</button>
            </div>
            <div class="flex flex-col items-center pt-[4rem]">
                {{-- <img src="{{ asset('img/profile.svg') }}" alt="Profile Picture" class="w-44 h-44 rounded-[1rem] mb-4"> --}}
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



        const toggleButton = document.getElementById('toggle-button');
        const extraContent = document.getElementById('extra-content');

        toggleButton.addEventListener('click', () => {
            if (extraContent.classList.contains('hidden')) {
                extraContent.classList.remove('hidden');
                toggleButton.textContent = 'Leer menos';
            } else {
                extraContent.classList.add('hidden');
                toggleButton.textContent = 'Leer más';
            }
        });
    </script>
</body>
</html>
