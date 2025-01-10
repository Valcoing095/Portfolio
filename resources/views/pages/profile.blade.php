<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yeison Velasco</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex lg:flex-row h-screen font-serif rugged-background">
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
            <div id="profesional" class=" mt-6">
                <article class="bg-yellow-50 shadow-lg rounded-xl p-6 text-left mt-6 border border-gray-200 relative">
                    <!-- Rango de fechas -->
                    <span class="absolute top-2 left-4  text-sm font-medium text-gray-500">
                        2021 — Actual
                    </span>

                    <!-- Título del puesto -->
                    <h2 class="text-lg font-semibold mb-1 text-yellow-700">
                        Analista y Desarrollador de Sistemas · Chevrolet Caminos
                    </h2>
                    <p class="text-sm text-gray-600 mb-4">
                        Desarrollador Backend y mantenimiento de sistemas.
                    </p>

                    <!-- Lista de responsabilidades -->
                    <ul class="list-disc list-inside space-y-2 text-gray-700">
                        <li>Mantenimiento de sistema Inhouse en Visual Basic y optimización continua.</li>
                        <li>Desarrollo de sistema de facturación electrónica en PHP conforme a las regulaciones fiscales vigentes.</li>
                        <li>Migración de módulos de Visual Basic 6.0 a Laravel, mejorando rendimiento y calidad.</li>
                        <li>Integración de pasarela de pagos Wompy en aplicaciones existentes, garantizando transacciones seguras.</li>
                        <li>Desarrollo de plataforma de seguros en Node.js, incluyendo webhooks para comunicación en tiempo real.</li>
                        <li>Creación y automatización de informes personalizados en MySQL, optimizando la extracción y análisis de datos.</li>
                    </ul>

                    <!-- Tecnologías utilizadas -->
                    <div class="mt-6 flex flex-wrap gap-3">
                        <span class="bg-yellow-200 text-yellow-700 text-xs font-medium px-3 py-1 rounded-full">
                            PHP
                        </span>
                        <span class="bg-yellow-200 text-yellow-700 text-xs font-medium px-3 py-1 rounded-full">
                            Laravel
                        </span>
                        <span class="bg-yellow-200 text-yellow-700 text-xs font-medium px-3 py-1 rounded-full">
                            Visual Basic
                        </span>
                        <span class="bg-yellow-200 text-yellow-700 text-xs font-medium px-3 py-1 rounded-full">
                            Node.js
                        </span>
                        <span class="bg-yellow-200 text-yellow-700 text-xs font-medium px-3 py-1 rounded-full">
                            MySQL
                        </span>
                        <span class="bg-yellow-200 text-yellow-700 text-xs font-medium px-3 py-1 rounded-full">
                            Wompy
                        </span>
                    </div>
                </article>

                <article class="bg-yellow-50 shadow-lg rounded-xl p-6 text-left mt-6 border border-gray-200 relative">
                    <!-- Rango de fechas -->
                    <span class="absolute top-2 left-4 text-sm font-medium text-gray-500">
                        2020 — 2021
                    </span>

                    <!-- Título del puesto -->
                    <h2 class="text-lg font-semibold mb-1 text-yellow-700">
                        Desarrollador Frontend · Tencoparque
                    </h2>
                    <p class="text-sm text-gray-600 mb-4">
                        Creación de interfaces interactivas y optimización de la experiencia de usuario.
                    </p>

                    <!-- Lista de responsabilidades -->
                    <ul class="list-disc list-inside space-y-2 text-gray-700">
                        <li>Análisis de requerimientos y documentación de requisitos funcionales y no funcionales.</li>
                        <li>Desarrollo de sistemas adaptados a las necesidades del cliente, implementando componentes reutilizables y modulares.</li>
                        <li>Pruebas exhaustivas y depuración de aplicaciones web y móviles híbridas, garantizando un funcionamiento óptimo.</li>
                    </ul>

                    <!-- Tecnologías utilizadas -->
                    <div class="mt-6 flex flex-wrap gap-3">
                        <span class="bg-yellow-200 text-yellow-700 text-xs font-medium px-3 py-1 rounded-full">
                            JavaScript
                        </span>
                        <span class="bg-yellow-200 text-yellow-700 text-xs font-medium px-3 py-1 rounded-full">
                            React.js
                        </span>
                        <span class="bg-yellow-200 text-yellow-700 text-xs font-medium px-3 py-1 rounded-full">
                            Vue.js
                        </span>
                        <span class="bg-yellow-200 text-yellow-700 text-xs font-medium px-3 py-1 rounded-full">
                            Tailwind CSS
                        </span>
                        <span class="bg-yellow-200 text-yellow-700 text-xs font-medium px-3 py-1 rounded-full">
                            Git
                        </span>
                    </div>
                </article>

            </div>

            <!-- Contenido de Personal -->
            <div id="personal" class="hidden mt-6">
                <h2 class="text-xl font-semibold mb-2 text-yellow-700">Freelance y Proyectos Personales</h2>
                <!-- Slider -->
                <div class="flex space-x-4 overflow-x-scroll scrollbar-hide mt-6">
                    <!-- Proyecto 1 -->
                    <article class="relative bg-yellow-50 shadow-2xl rounded-2xl p-6 w-72 flex-shrink-0 border border-gray-200">
                        <!-- Etiqueta decorativa -->
                        <span class="absolute top-0 right-0 bg-green-500 text-white text-xs font-bold py-1 px-3 rounded-bl-lg">
                            Proyecto finalizado
                        </span>
                        <!-- Contenido del artículo -->
                        <h3 class="text-lg font-semibold mb-2 text-yellow-700 text-center">Desarrollo Web para Agenxi</h3>
                        <p class="text-gray-700 text-justify">Implementé y desarrollé la página oficial de Agenxi a partir de un mockup proporcionado, enfocándome en la optimización UX/UI y asegurando un diseño moderno y funcional.</p>
                        <!-- Tecnologías utilizadas -->
                        <div class="flex justify-center mt-4 gap-4">
                            <div class="bg-yellow-200 p-2 rounded-full">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" alt="HTML5" class="w-8 h-8">
                            </div>
                            <div class="bg-yellow-200 p-2 rounded-full">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/tailwindcss/tailwindcss-original-wordmark.svg" alt="TailwindCSS" class="w-8 h-8">
                            </div>
                            <div class="bg-yellow-200 p-2 rounded-full">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/laravel/laravel-original.svg" alt="Laravel" class="w-8 h-8">
                            </div>
                            <div class="bg-yellow-200 p-2 rounded-full">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/php/php-plain.svg" alt="PHP" class="w-8 h-8">
                            </div>
                        </div>
                        <!-- Enlace al proyecto -->

                        <div class="flex space-x-4 justify-center mt-4">
                            <a href="https://agenxi.com/" target="_blank" target="_blank"  class="bg-yellow-600 text-white px-4 py-2 rounded-full font-semibold inactive">
                                Visitar página web
                            </a>
                        </div>
                    </article>

                    <article class="relative bg-yellow-50 shadow-2xl rounded-2xl p-6 w-72 flex-shrink-0 border border-gray-200 flex flex-col justify-between">
                        <!-- Etiqueta decorativa -->
                        <span class="absolute top-0 right-0 bg-yellow-600 text-white text-xs font-bold py-1 px-3 rounded-bl-lg">
                            En desarrollo
                        </span>
                        <!-- Contenido del artículo -->
                        <div>
                            <h3 class="text-lg font-semibold mb-2 text-yellow-700 text-center">Sistema de cafetería</h3>
                            <p class="text-gray-700 text-justify">Sistema de gestión para cafeterías, constará de una sección para administrar el stock de los productos y contará con un proceso de facturación.</p>
                        </div>
                        <!-- Tecnologías utilizadas -->
                        <div class="flex justify-center mt-4 gap-4">
                            <div class="bg-yellow-100 p-2 rounded-full">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-original.svg" alt="Laravel" class="w-8 h-8">
                            </div>
                        </div>
                        <!-- Botón Ver más -->
                        <div class="flex space-x-4 justify-center mt-4">
                            <a href="https://github.com/Valcoing095/Cafeteria-web" target="_blank"  class="bg-yellow-600 text-white px-4 py-2 rounded-full font-semibold inactive">
                              github
                            </a>
                        </div>
                    </article>

                    <article class="relative bg-yellow-50 shadow-2xl rounded-2xl p-6 w-72 flex-shrink-0 border border-gray-200 flex flex-col justify-between">
                        <!-- Etiqueta decorativa -->
                        <span class="absolute top-0 right-0 bg-yellow-600 text-white text-xs font-bold py-1 px-3 rounded-bl-lg">
                            En desarrollo
                        </span>
                        <!-- Contenido del artículo -->
                        <div>
                            <h3 class="text-lg font-semibold mb-2 text-yellow-700 text-center">Proyecto Finazz - Versión Web</h3>
                            <p class="text-gray-700 text-justify">Sistema para llevar seguimiento de mis gastos, préstamos y cuotas.</p>
                        </div>
                        <!-- Tecnologías utilizadas -->
                        <div class="flex justify-center mt-4 gap-4">
                            <div class="bg-yellow-100 p-2 rounded-full shadow-md">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/angularjs/angularjs-original.svg" alt="Angular" class="w-8 h-8">
                            </div>
                            <div class="bg-yellow-100 p-2 rounded-full shadow-md">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-original.svg" alt="nodeJS" class="w-8 h-8">
                            </div>
                        </div>
                        <!-- Botones -->
                        <div class="flex space-x-4 justify-center mt-4">
                            <a href="https://finazz-web.vercel.app/" target="_blank" class="bg-yellow-600 text-white px-4 py-2 rounded-full font-semibold  inactive">
                              Demo Front
                            </a>
                            <a href="https://github.com/Valcoing095/FinazzWeb" target="_blank" class="bg-yellow-600 text-white px-4 py-2 rounded-full font-semibold inactive">
                              github
                            </a>
                          </div>
                    </article>

                    <article class="relative bg-yellow-50 shadow-2xl rounded-2xl p-6 w-72 flex-shrink-0 border border-gray-200 flex flex-col justify-between">
                        <!-- Etiqueta decorativa -->
                        <span class="absolute top-0 right-0 bg-yellow-600 text-white text-xs font-bold py-1 px-3 rounded-bl-lg">
                            En desarrollo
                        </span>
                        <!-- Contenido del artículo -->
                        <div>
                            <h3 class="text-lg font-semibold mb-2 text-yellow-700 text-center">Proyecto Finazz - API</h3>
                            <p class="text-gray-700 text-justify">
                                API que realiza la conexión con el sistema web del proyecto Finazz para llevar seguimiento de mis gastos, préstamos y cuotas.
                            </p>
                        </div>
                        <!-- Tecnologías utilizadas -->
                        <div class="flex justify-center mt-4 gap-4">
                            <div class="bg-yellow-100 p-2 rounded-full shadow-md">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nestjs/nestjs-plain.svg" alt="Nestjs" class="w-8 h-8">
                            </div>
                            <div class="bg-yellow-100 p-2 rounded-full shadow-md">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/postgresql/postgresql-original.svg" alt="Postgresql" class="w-8 h-8">
                            </div>
                            <div class="bg-yellow-100 p-2 rounded-full shadow-md">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-original.svg" alt="Nodejs" class="w-8 h-8">
                            </div>
                        </div>
                        <!-- Botón Ver más -->
                        <div class="flex justify-center mt-6">
                            <a href="https://github.com/Valcoing095/FinazzWeb" target="_blank" class="bg-yellow-600 text-white px-4 py-2 rounded-full font-semibold hover:bg-yellow-700">
                                GitHub
                            </a>
                        </div>
                    </article>
                    <article class="relative bg-yellow-50 shadow-2xl rounded-2xl p-6 w-72 flex-shrink-0 border border-gray-200 flex flex-col justify-between">
                        <!-- Etiqueta decorativa -->
                        <span class="absolute top-0 right-0 bg-yellow-600 text-white text-xs font-bold py-1 px-3 rounded-bl-lg">
                            En desarrollo
                        </span>
                        <!-- Contenido del artículo -->
                        <div>
                            <h3 class="text-lg font-semibold mb-2 text-yellow-700 text-center">Proyecto Hand Academy</h3>
                            <p class="text-gray-700 text-justify">Actualmente formo parte del desarrollo de un sistema de entrenamiento canino, desempeñándome como responsable del backend. Dado que el proyecto aún se encuentra en desarrollo, no se proporcionarán enlaces a repositorios de GitHub ni demostraciones públicas en esta etapa.</p>
                        </div>
                        <!-- Tecnologías utilizadas -->
                        <div class="flex justify-center mt-4 gap-4">
                            <div class="bg-yellow-100 p-2 rounded-full shadow-md">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nestjs/nestjs-plain.svg" alt="Nestjs" class="w-8 h-8">
                            </div>
                            <div class="bg-yellow-100 p-2 rounded-full shadow-md">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/postgresql/postgresql-original.svg" alt="Postgresql" class="w-8 h-8">
                            </div>
                            <div class="bg-yellow-100 p-2 rounded-full shadow-md">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-original.svg" alt="Nodejs" class="w-8 h-8">
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <br>
        <section class="mt-6 text-center">
            <h1 class="text-3xl font-bold inline-block border-b-4 border-yellow-100 hover:border-yellow-400 px-4">
                Estudios
            </h1>
        </section>
        <br>
        <section class="mt-6 text-center">
            <h1 class="text-3xl font-bold inline-block border-b-4 border-yellow-100 hover:border-yellow-400 px-4">
                Contactame
            </h1>

            <form class="mt-8 max-w-lg mx-auto bg-white shadow-md rounded-lg p-6">
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">
                        Nombre
                    </label>
                    <input
                        type="text"
                        id="name"
                        name="name"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400"
                        placeholder="Tu nombre"
                    />
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">
                        Correo Electrónico
                    </label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400"
                        placeholder="Tu correo electrónico"
                    />
                </div>

                <div class="mb-4">
                    <label for="message" class="block text-gray-700 text-sm font-bold mb-2">
                        Mensaje
                    </label>
                    <textarea
                        id="message"
                        name="message"
                        rows="4"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400"
                        placeholder="Escribe tu mensaje aquí..."
                    ></textarea>
                </div>

                <div class="text-center">
                    <button
                        type="submit"
                        class="bg-yellow-400 text-white font-bold py-2 px-4 rounded-lg shadow-md hover:bg-yellow-500 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:ring-offset-2"
                    >
                        Enviar
                    </button>
                </div>
            </form>
        </section>
        <footer class="bg-yellow-50 shadow-lg rounded-xl p-6 mt-12 border border-gray-200 relative">
            <!-- Encabezado -->
            <div class="flex flex-col items-center text-center">
              <!-- Logo y Nombre -->
              <div class="flex justify-center items-center space-x-2 mb-4">
                <div class="bg-white text-yellow-400 rounded-full w-12 h-12 flex items-center justify-center font-bold text-lg">
                  Y
                </div>
                <h1 class="text-2xl font-bold text-yellow-700">Yeison Velasco</h1>
              </div>

              <!-- Mensaje -->
              <p class="text-gray-600 text-sm">
                Gracias por visitar mi sitio web. Espero que podamos trabajar juntos en proyectos interesantes.
              </p>
            </div>
            <!-- Derechos reservados -->
            <div class="mt-8 border-t border-gray-300 pt-4 text-center">
              <p class="text-xs text-gray-500">
                &copy; 2024 Yeison Velasco. Todos los derechos reservados.
              </p>
            </div>
          </footer>

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
