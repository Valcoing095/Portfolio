<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Sidebar</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex lg:flex-row h-screen font-serif">
    <!-- Header para pantallas pequeñas -->
    <header class="bg-yellow-400 text-white p-4 fixed top-0 left-0 w-full flex items-center justify-between z-10 lg:hidden">
        <h1 class="text-lg font-bold">Yeison Alexis Velasco Trejos</h1>
        <button id="menu-toggle" class="text-2xl focus:outline-none">&#9776;</button>
    </header>


    <!-- Sidebar -->
    <livewire:profile.profile />

    <!-- Contenido -->
    <hr>
    <div class="flex-1 p-6 bg-white overflow-y-auto">
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
        <section class="mt-6 text-center">
            <h1 class="text-3xl font-bold inline-block border-b-4 border-yellow-100 hover:border-yellow-400 px-4">
                Experiencia
            </h1>
            <div class="flex space-x-4 justify-center mt-4">
                <button id="btn-profesional"
                        class="bg-yellow-400 text-white px-4 py-2 rounded-full font-semibold  inactive">
                  Profesional
                </button>
                <button id="btn-personal"
                        class="bg-yellow-400 text-white px-4 py-2 rounded-full font-semibold inactive">
                  Freelance
                </button>
              </div>

            <!-- Contenido de Profesional -->
            <div id="profesional" class="hidden mt-6">
                <article class="bg-white shadow-md rounded-lg p-6 text-left mt-6">
                    <h2 class="text-xl font-semibold mb-2 text-yellow-700">
                        Analista y Desarrollador de Sistemas - Chevrolet Caminos
                    </h2>
                    <ul class="list-disc list-inside space-y-2">
                        <li>Mantenimiento de sistema Inhouse en Visual Basic y optimización continua.</li>
                        <li>Desarrollo de sistema de facturación electrónica en PHP conforme a las regulaciones fiscales vigentes.</li>
                        <li>Migración de módulos de Visual Basic 6.0 a Laravel, mejorando rendimiento y calidad.</li>
                        <li>Integración de pasarela de pagos Wompy en aplicaciones existentes, garantizando transacciones seguras.</li>
                        <li>Desarrollo de plataforma de seguros en Node.js, incluyendo webhooks para comunicación en tiempo real.</li>
                        <li>Creación y automatización de informes personalizados en MySQL, optimizando la extracción y análisis de datos.</li>
                    </ul>
                </article>
                <article class="bg-white shadow-md rounded-lg p-6 text-left mt-6">
                    <h2 class="text-xl font-semibold mb-2 text-yellow-700">
                        Desarrollador Frontend - Tencoparque
                    </h2>
                    <p>Trabajé en proyectos de frontend con tecnologías modernas, enfocado en la creación de interfaces interactivas y optimización de la experiencia de usuario.</p>
                    <ul class="list-disc list-inside space-y-2">
                        <li>Análisis de requerimientos y documentación de requisitos funcionales y no funcionales.</li>
                        <li>Desarrollo de sistemas adaptados a las necesidades del cliente, implementando componentes reutilizables y modulares.</li>
                        <li>Pruebas exhaustivas y depuración de aplicaciones web y móviles híbridas, garantizando un funcionamiento óptimo.</li>
                    </ul>
                </article>
            </div>

            <!-- Contenido de Personal -->
            <div id="personal" class="hidden mt-6">
                <h2 class="text-xl font-semibold mb-2 text-yellow-700">Freelance y Proyectos Personales</h2>
                <!-- Slider -->
                <div class="flex space-x-4 overflow-x-scroll scrollbar-hide mt-6">
                    <!-- Proyecto 1 -->
                    <article class="relative bg-white shadow-2xl rounded-2xl p-6 w-72 flex-shrink-0 border border-gray-200 flex flex-col justify-between">
                        <!-- Etiqueta decorativa -->
                        <span class="absolute top-0 right-0 bg-yellow-600 text-white text-xs font-bold py-1 px-3 rounded-bl-lg">
                            En desarrollo
                        </span>
                        <!-- Contenido del artículo -->
                        <div>
                            <h3 class="text-lg font-semibold mb-2 text-yellow-700">Sistema de gestión de inventario para cafetería</h3>
                            <p class="text-gray-600">Sistema de gestión para cafeterías.</p>
                        </div>
                        <!-- Tecnologías utilizadas -->
                        <div class="flex justify-center mt-4 gap-4">
                            <div class="bg-yellow-100 p-2 rounded-full">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-original.svg" alt="Laravel" class="w-8 h-8">
                            </div>
                        </div>
                        <!-- Botón Ver más -->
                        <a href="https://github.com/Valcoing095/Cafeteria-web" target="_blank"  class="text-yellow-400 font-semibold mt-auto block hover:underline text-center">
                            Github
                        </a>
                    </article>


                    <article class="relative bg-white shadow-2xl rounded-2xl p-6 w-72 flex-shrink-0 border border-gray-200">
                        <!-- Etiqueta decorativa -->
                        <span class="absolute top-0 right-0 bg-green-600 text-white text-xs font-bold py-1 px-3 rounded-bl-lg">
                            Proyecto finalizado
                        </span>
                        <!-- Contenido del artículo -->
                        <h3 class="text-lg font-semibold mb-2 text-yellow-700 text-center">Desarrollo Web para Agenxi</h3>
                        <p class="text-gray-600 text-justify">Implementé y desarrollé la página oficial de Agenxi a partir de un mockup proporcionado, enfocándome en la optimización UX/UI y asegurando un diseño moderno y funcional.</p>
                        <!-- Tecnologías utilizadas -->
                        <div class="flex justify-center mt-4 gap-4">
                            <div class="bg-yellow-100 p-2 rounded-full">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" alt="HTML5" class="w-8 h-8">
                            </div>
                            <div class="bg-yellow-100 p-2 rounded-full">
                                <img src=src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/tailwindcss/tailwindcss-original-wordmark.svg" alt="tailwind" class="w-8 h-8">
                            </div>
                            <div class="bg-yellow-100 p-2 rounded-full">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/laravel/laravel-original.svg" alt="CSS3" class="w-8 h-8"/>
                            </div>
                            <div class="bg-yellow-100 p-2 rounded-full">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/php/php-plain.svg " alt="PHP" class="w-8 h-8"/>
                            </div>
                        </div>
                        <!-- Enlace al proyecto -->
                        <a href="https://agenxi.com/" target="_blank" class="text-yellow-400 font-semibold mt-4 block hover:underline text-center">
                            Visitar página web
                        </a>
                    </article>


                    <article class="bg-white shadow-2xl rounded-2xl p-6 w-72 flex-shrink-0 border border-gray-200">
                        <h3 class="text-lg font-semibold mb-2 text-yellow-700">Proyecto 1: Sistema de Gestión</h3>
                        <p class="text-gray-600">Un sistema completo de gestión de inventarios desarrollado con Laravel y Vue.js.</p>
                        <a href="#" class="text-yellow-400 font-semibold mt-2 block hover:underline">Ver más</a>
                    </article>
                    <article class="bg-white shadow-2xl rounded-2xl p-6 w-72 flex-shrink-0 border border-gray-200">
                        <h3 class="text-lg font-semibold mb-2 text-yellow-700">Proyecto 1: Sistema de Gestión</h3>
                        <p class="text-gray-600">Un sistema completo de gestión de inventarios desarrollado con Laravel y Vue.js.</p>
                        <a href="#" class="text-yellow-400 font-semibold mt-2 block hover:underline">Ver más</a>
                    </article>
                    <article class="bg-white shadow-2xl rounded-2xl p-6 w-72 flex-shrink-0 border border-gray-200">
                        <h3 class="text-lg font-semibold mb-2 text-yellow-700">Proyecto 1: Sistema de Gestión</h3>
                        <p class="text-gray-600">Un sistema completo de gestión de inventarios desarrollado con Laravel y Vue.js.</p>
                        <a href="#" class="text-yellow-400 font-semibold mt-2 block hover:underline">Ver más</a>
                    </article>
                    <!-- Proyecto 2 -->
                    <article class="bg-white shadow-md rounded-lg p-6 w-72 flex-shrink-0">
                        <h3 class="text-lg font-semibold mb-2 text-yellow-700">Proyecto 2: Plataforma de E-learning</h3>
                        <p class="text-gray-600">Desarrollo de una plataforma educativa con Node.js y React para clases en tiempo real.</p>
                        <a href="#" class="text-yellow-400 font-semibold mt-2 block hover:underline">Ver más</a>
                    </article>
                    <!-- Proyecto 3 -->
                    <article class="bg-white shadow-md rounded-lg p-6 w-72 flex-shrink-0">
                        <h3 class="text-lg font-semibold mb-2 text-yellow-700">Proyecto 3: Aplicación Móvil</h3>
                        <p class="text-gray-600">Creación de una app híbrida para rastreo de envíos utilizando Ionic y Firebase.</p>
                        <a href="#" class="text-yellow-400 font-semibold mt-2 block hover:underline">Ver más</a>
                    </article>
                    <!-- Proyecto 4 -->
                    <article class="bg-white shadow-md rounded-lg p-6 w-72 flex-shrink-0">
                        <h3 class="text-lg font-semibold mb-2 text-yellow-700">Proyecto 4: Tienda Online</h3>
                        <p class="text-gray-600">Desarrollo de una tienda online con pasarela de pagos integrada utilizando Shopify.</p>
                        <a href="#" class="text-yellow-400 font-semibold mt-2 block hover:underline">Ver más</a>
                    </article>
                </div>
            </div>
        </section>
    </div>
    <style>
        .inactive {
          animation: breathing 2s infinite;
        }

        @keyframes breathing {
          0%, 100% {
            transform: scale(1);
            box-shadow: 0 0 10px rgba(255, 223, 0, 0.3);
          }
          50% {
            transform: scale(1.05);
            box-shadow: 0 0 20px rgba(255, 223, 0, 0.5);
          }
        }
    </style>
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



        // Alternar vistas entre experiencia personal y profesional
        const btnProfesional = document.getElementById('btn-profesional');
        const btnPersonal = document.getElementById('btn-personal');
        const divProfesional = document.getElementById('profesional');
        const divPersonal = document.getElementById('personal');

        btnProfesional.addEventListener('click', () => {
            divProfesional.classList.remove('hidden');
            divPersonal.classList.add('hidden');
        });

        btnPersonal.addEventListener('click', () => {
            divPersonal.classList.remove('hidden');
            divProfesional.classList.add('hidden');
        });


        // efecto de respiración en un botón
        document.getElementById('btn-profesional').addEventListener('click', function () {
            this.classList.remove('inactive');
            document.getElementById('btn-personal').classList.add('inactive');

        });

        document.getElementById('btn-personal').addEventListener('click', function () {
            this.classList.remove('inactive');
            document.getElementById('btn-profesional').classList.add('inactive');
        });
    </script>
</body>
</html>
