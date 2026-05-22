<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="bg-elden-darker">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Yeison Alexis Velasco Trejos - Backend Developer Portfolio - Elden Ring Style">
        <meta name="theme-color" content="#0D0D0D">

        <title>Yeison Velasco | Tarnished Developer</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700;800;900&family=Cinzel+Decorative:wght@400;700;900&family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
        
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
        
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        @livewireStyles
    </head>
    <body class="antialiased min-h-screen bg-elden-darker overflow-x-hidden">
        <!-- Ambient particles background -->
        <div class="fixed inset-0 pointer-events-none overflow-hidden z-0">
            <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-elden-gold/5 rounded-full blur-3xl animate-pulse"></div>
            <div class="absolute bottom-1/4 right-1/4 w-64 h-64 bg-elden-blood/10 rounded-full blur-3xl animate-pulse" style="animation-delay: 1s;"></div>
        </div>

        <!-- Navigation -->
        <nav class="fixed top-0 left-0 right-0 z-50 backdrop-blur-md bg-elden-darker/80 border-b border-elden-gold/10">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-16">
                    <div class="flex items-center gap-2">
                        <svg class="w-8 h-8 text-elden-gold" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
                        </svg>
                        <span class="font-serif text-elden-gold text-lg tracking-wider">Tarnished</span>
                    </div>
                    <div class="hidden md:flex items-center gap-2">
                        <a href="#character" class="nav-link">Personaje</a>
                        <a href="#attributes" class="nav-link">Atributos</a>
                        <a href="#inventory" class="nav-link">Obsequios</a>
                        <a href="#journey" class="nav-link">Travesia</a>
                        <a href="#summon" class="nav-link">Invocar</a>
                    </div>
                    <button id="mobile-menu-btn" class="md:hidden text-elden-gold p-2">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
            <!-- Mobile menu -->
            <div id="mobile-menu" class="hidden md:hidden bg-elden-darker/95 border-t border-elden-gold/10">
                <div class="px-4 py-4 space-y-2">
                    <a href="#character" class="block nav-link">Personaje</a>
                    <a href="#attributes" class="block nav-link">Atributos</a>
                    <a href="#inventory" class="block nav-link">Obsequios</a>
                    <a href="#journey" class="block nav-link">Travesia</a>
                    <a href="#summon" class="block nav-link">Invocar</a>
                </div>
            </div>
        </nav>

        <main class="relative z-10">
            <!-- Hero Section - Character Screen -->
            <section id="character" class="min-h-screen flex items-center justify-center pt-16 px-4">
                <div class="max-w-6xl mx-auto w-full">
                    <div class="grid lg:grid-cols-2 gap-12 items-center">
                        <!-- Character Info -->
                        <div class="text-center lg:text-left">
                            <div class="mb-4">
                                <span class="text-elden-gold-dark text-sm tracking-[0.3em] uppercase font-sans">Clase: Backend Developer</span>
                            </div>
                            <h1 class="font-serif text-4xl md:text-6xl lg:text-7xl text-elden-gold mb-6 text-shadow-gold leading-tight">
                                Yeison Alexis<br>
                                <span class="text-elden-gold-light">Velasco Trejos</span>
                            </h1>
                            <div class="w-24 h-0.5 bg-gradient-to-r from-elden-gold to-transparent mx-auto lg:mx-0 mb-6"></div>
                            <p class="font-body text-lg md:text-xl text-elden-gold-light/80 leading-relaxed mb-8 max-w-xl mx-auto lg:mx-0">
                                Un desarrollador backend con experiencia en la creacion de soluciones innovadoras para problemas cotidianos. 
                                Especializado en tecnologias como <span class="text-elden-gold">Node.js</span>, <span class="text-elden-gold">Laravel</span>, y <span class="text-elden-gold">Angular</span>. 
                                Poseo una solida capacidad de aprendizaje continuo y adaptabilidad a nuevos desafios.
                            </p>
                            <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                                <a href="#inventory" class="btn-elden">
                                    <i class="fas fa-scroll mr-2"></i>Ver Obsequios
                                </a>
                                <a href="{{ asset('files/CV_Yeison.pdf') }}" download class="btn-elden">
                                    <i class="fas fa-download mr-2"></i>Descargar Pergamino
                                </a>
                            </div>
                        </div>

                        <!-- Character Level/Stats Card -->
                        <div class="elden-border elden-corner p-8 max-w-md mx-auto lg:ml-auto">
                            <div class="text-center mb-6">
                                <div class="w-32 h-32 mx-auto mb-4 rounded-full border-2 border-elden-gold/30 flex items-center justify-center bg-gradient-to-b from-elden-stone to-elden-dark">
                                    <i class="fas fa-code text-5xl text-elden-gold animate-pulse-gold"></i>
                                </div>
                                <h3 class="font-serif text-2xl text-elden-gold">Nivel 99</h3>
                                <p class="text-elden-gold-dark text-sm tracking-wider">Tarnished Developer</p>
                            </div>
                            
                            <div class="space-y-4 font-body">
                                <div class="flex justify-between items-center border-b border-elden-gold/10 pb-2">
                                    <span class="text-elden-gold-dark">Region</span>
                                    <span class="text-elden-gold-light">Colombia, Risaralda</span>
                                </div>
                                <div class="flex justify-between items-center border-b border-elden-gold/10 pb-2">
                                    <span class="text-elden-gold-dark">Experiencia</span>
                                    <span class="text-elden-gold-light">+4 Anos</span>
                                </div>
                                <div class="flex justify-between items-center border-b border-elden-gold/10 pb-2">
                                    <span class="text-elden-gold-dark">Runas Acumuladas</span>
                                    <span class="text-elden-gold-light">999,999</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-elden-gold-dark">Estado</span>
                                    <span class="text-green-500 flex items-center gap-2">
                                        <span class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></span>
                                        Disponible
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Scroll indicator -->
                    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 animate-bounce hidden lg:block">
                        <i class="fas fa-chevron-down text-elden-gold/50 text-2xl"></i>
                    </div>
                </div>
            </section>

            <!-- Attributes Section - Stats Panel -->
            <section id="attributes" class="py-20 px-4">
                <div class="max-w-6xl mx-auto">
                    <div class="text-center mb-16">
                        <span class="text-elden-gold-dark text-sm tracking-[0.3em] uppercase font-sans">Panel de</span>
                        <h2 class="font-serif text-4xl md:text-5xl text-elden-gold mt-2 text-shadow-gold">Atributos</h2>
                        <div class="rune-divider max-w-xs mx-auto">
                            <i class="fas fa-diamond text-elden-gold text-sm"></i>
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-8">
                        <!-- Primary Stats -->
                        <div class="elden-border p-6">
                            <h3 class="font-serif text-xl text-elden-gold mb-6 flex items-center gap-3">
                                <i class="fas fa-fire text-elden-ember"></i>
                                Estadisticas Primarias
                            </h3>
                            <div class="space-y-6">
                                <!-- Vigor - Backend -->
                                <div>
                                    <div class="flex justify-between mb-2">
                                        <span class="font-sans text-sm text-elden-gold-light tracking-wider">VIGOR (Backend)</span>
                                        <span class="text-elden-gold font-bold">99</span>
                                    </div>
                                    <div class="stat-bar">
                                        <div class="stat-bar-fill" style="width: 99%"></div>
                                    </div>
                                    <p class="text-xs text-elden-gold-dark mt-1">Laravel, Node.js, PHP, Python</p>
                                </div>

                                <!-- Mind - Frontend -->
                                <div>
                                    <div class="flex justify-between mb-2">
                                        <span class="font-sans text-sm text-elden-gold-light tracking-wider">MENTE (Frontend)</span>
                                        <span class="text-elden-gold font-bold">75</span>
                                    </div>
                                    <div class="stat-bar">
                                        <div class="stat-bar-fill" style="width: 75%"></div>
                                    </div>
                                    <p class="text-xs text-elden-gold-dark mt-1">React, Angular, JavaScript, HTML/CSS</p>
                                </div>

                                <!-- Endurance - Database -->
                                <div>
                                    <div class="flex justify-between mb-2">
                                        <span class="font-sans text-sm text-elden-gold-light tracking-wider">RESISTENCIA (Base de Datos)</span>
                                        <span class="text-elden-gold font-bold">90</span>
                                    </div>
                                    <div class="stat-bar">
                                        <div class="stat-bar-fill" style="width: 90%"></div>
                                    </div>
                                    <p class="text-xs text-elden-gold-dark mt-1">MySQL, PostgreSQL, MongoDB</p>
                                </div>

                                <!-- Strength - DevOps -->
                                <div>
                                    <div class="flex justify-between mb-2">
                                        <span class="font-sans text-sm text-elden-gold-light tracking-wider">FUERZA (DevOps)</span>
                                        <span class="text-elden-gold font-bold">80</span>
                                    </div>
                                    <div class="stat-bar">
                                        <div class="stat-bar-fill" style="width: 80%"></div>
                                    </div>
                                    <p class="text-xs text-elden-gold-dark mt-1">Docker, Linux, Git, CI/CD</p>
                                </div>

                                <!-- Dexterity - API Development -->
                                <div>
                                    <div class="flex justify-between mb-2">
                                        <span class="font-sans text-sm text-elden-gold-light tracking-wider">DESTREZA (APIs)</span>
                                        <span class="text-elden-gold font-bold">95</span>
                                    </div>
                                    <div class="stat-bar">
                                        <div class="stat-bar-fill" style="width: 95%"></div>
                                    </div>
                                    <p class="text-xs text-elden-gold-dark mt-1">REST, GraphQL, Webhooks, Integraciones</p>
                                </div>
                            </div>
                        </div>

                        <!-- Skills Grid -->
                        <div class="elden-border p-6">
                            <h3 class="font-serif text-xl text-elden-gold mb-6 flex items-center gap-3">
                                <i class="fas fa-gem text-elden-gold-light"></i>
                                Habilidades Equipadas
                            </h3>
                            <div class="grid grid-cols-4 gap-4">
                                @php
                                    $skills = [
                                        ['icon' => 'fab fa-python', 'name' => 'Python', 'level' => 'A'],
                                        ['icon' => 'fab fa-js-square', 'name' => 'JavaScript', 'level' => 'S'],
                                        ['icon' => 'fab fa-php', 'name' => 'PHP', 'level' => 'S'],
                                        ['icon' => 'fab fa-laravel', 'name' => 'Laravel', 'level' => 'S'],
                                        ['icon' => 'fab fa-node-js', 'name' => 'Node.js', 'level' => 'S'],
                                        ['icon' => 'fab fa-react', 'name' => 'React', 'level' => 'A'],
                                        ['icon' => 'fab fa-docker', 'name' => 'Docker', 'level' => 'A'],
                                        ['icon' => 'fab fa-linux', 'name' => 'Linux', 'level' => 'A'],
                                        ['icon' => 'fab fa-angular', 'name' => 'Angular', 'level' => 'B'],
                                        ['icon' => 'fab fa-git-alt', 'name' => 'Git', 'level' => 'S'],
                                        ['icon' => 'fas fa-database', 'name' => 'MySQL', 'level' => 'S'],
                                        ['icon' => 'fas fa-server', 'name' => 'APIs', 'level' => 'S'],
                                    ];
                                @endphp

                                @foreach($skills as $skill)
                                    <div class="group relative">
                                        <div class="skill-icon mx-auto transition-all duration-300 group-hover:scale-110 group-hover:border-elden-gold {{ $skill['level'] === 'S' ? 'border-elden-gold' : '' }}">
                                            <i class="{{ $skill['icon'] }} text-lg {{ $skill['level'] === 'S' ? 'text-elden-gold' : 'text-elden-gold-dark' }}"></i>
                                        </div>
                                        <p class="text-center text-xs mt-2 text-elden-gold-dark group-hover:text-elden-gold-light transition-colors">{{ $skill['name'] }}</p>
                                        <span class="absolute -top-1 -right-1 text-[10px] font-bold px-1.5 py-0.5 rounded {{ $skill['level'] === 'S' ? 'bg-elden-gold text-elden-dark' : ($skill['level'] === 'A' ? 'bg-elden-gold-dark text-white' : 'bg-elden-stone-light text-elden-gold-dark') }}">
                                            {{ $skill['level'] }}
                                        </span>
                                    </div>
                                @endforeach
                            </div>

                            <!-- Legend -->
                            <div class="mt-6 pt-4 border-t border-elden-gold/10">
                                <p class="text-xs text-elden-gold-dark text-center">
                                    <span class="inline-flex items-center gap-1 mr-3"><span class="w-3 h-3 bg-elden-gold rounded-sm"></span> S - Maestria</span>
                                    <span class="inline-flex items-center gap-1 mr-3"><span class="w-3 h-3 bg-elden-gold-dark rounded-sm"></span> A - Avanzado</span>
                                    <span class="inline-flex items-center gap-1"><span class="w-3 h-3 bg-elden-stone-light rounded-sm"></span> B - Competente</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Inventory Section - Projects as Items -->
            <section id="inventory" class="py-20 px-4 bg-gradient-to-b from-transparent via-elden-dark/50 to-transparent">
                <div class="max-w-6xl mx-auto">
                    <div class="text-center mb-16">
                        <span class="text-elden-gold-dark text-sm tracking-[0.3em] uppercase font-sans">Inventario de</span>
                        <h2 class="font-serif text-4xl md:text-5xl text-elden-gold mt-2 text-shadow-gold">Obsequios</h2>
                        <p class="text-elden-gold-dark mt-4 font-body max-w-xl mx-auto">
                            Artefactos y reliquias creados durante mi travesia como desarrollador
                        </p>
                        <div class="rune-divider max-w-xs mx-auto">
                            <i class="fas fa-scroll text-elden-gold text-sm"></i>
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @php
                            $projects = [
                                [
                                    'name' => 'Cafeteria Web',
                                    'rarity' => 'Legendary',
                                    'type' => 'Sistema de Gestion',
                                    'description' => 'Sistema que permite gestionar el inventario de una cafeteria, desarrollado con tecnologias web modernas. Un artefacto poderoso para el control de recursos.',
                                    'stats' => ['Laravel', 'MySQL', 'Tailwind'],
                                    'link' => 'https://github.com/Valcoing095/Cafeteria-web',
                                    'icon' => 'fa-mug-hot'
                                ],
                                [
                                    'name' => 'Finnazz Web',
                                    'rarity' => 'Epic',
                                    'type' => 'Aplicacion Financiera',
                                    'description' => 'Sistema para la gestion financiera de usuarios, con enfoque en la experiencia del usuario. Una reliquia que otorga vision sobre el oro acumulado.',
                                    'stats' => ['React', 'Node.js', 'MongoDB'],
                                    'link' => 'https://github.com/Valcoing095/FinazzWeb',
                                    'icon' => 'fa-coins'
                                ],
                                [
                                    'name' => 'Finnazz API',
                                    'rarity' => 'Epic',
                                    'type' => 'API RESTful',
                                    'description' => 'API para la gestion financiera de usuarios, desarrollada utilizando Node.js y Express. El nucleo magico que da poder al sistema Finnazz.',
                                    'stats' => ['Node.js', 'Express', 'JWT'],
                                    'link' => 'https://github.com/Valcoing095/finanzz-api',
                                    'icon' => 'fa-code'
                                ],
                                [
                                    'name' => 'Sistema de Facturacion',
                                    'rarity' => 'Legendary',
                                    'type' => 'Enterprise Solution',
                                    'description' => 'Sistema de facturacion electronica en PHP conforme a las regulaciones fiscales vigentes. Un grimorio esencial para el comercio.',
                                    'stats' => ['PHP', 'DIAN', 'XML'],
                                    'link' => '#',
                                    'icon' => 'fa-file-invoice'
                                ],
                                [
                                    'name' => 'Plataforma de Seguros',
                                    'rarity' => 'Rare',
                                    'type' => 'Sistema Web',
                                    'description' => 'Plataforma de seguros en Node.js, incluyendo webhooks para comunicacion en tiempo real. Proteccion magica para los viajeros.',
                                    'stats' => ['Node.js', 'Webhooks', 'API'],
                                    'link' => '#',
                                    'icon' => 'fa-shield-halved'
                                ],
                                [
                                    'name' => 'Integracion Wompy',
                                    'rarity' => 'Rare',
                                    'type' => 'Pasarela de Pagos',
                                    'description' => 'Integracion de pasarela de pagos Wompy en aplicaciones existentes, garantizando transacciones seguras. El puente dorado del comercio.',
                                    'stats' => ['PHP', 'Wompy API', 'Security'],
                                    'link' => '#',
                                    'icon' => 'fa-credit-card'
                                ],
                            ];
                        @endphp

                        @foreach($projects as $project)
                            <div class="item-card group cursor-pointer" onclick="window.open('{{ $project['link'] }}', '_blank')">
                                <!-- Rarity indicator -->
                                <div class="absolute top-0 left-0 right-0 h-1 {{ $project['rarity'] === 'Legendary' ? 'bg-gradient-to-r from-transparent via-elden-gold to-transparent' : ($project['rarity'] === 'Epic' ? 'bg-gradient-to-r from-transparent via-purple-500 to-transparent' : 'bg-gradient-to-r from-transparent via-blue-500 to-transparent') }}"></div>
                                
                                <div class="flex items-start gap-4">
                                    <div class="w-16 h-16 flex items-center justify-center border {{ $project['rarity'] === 'Legendary' ? 'border-elden-gold bg-elden-gold/10' : ($project['rarity'] === 'Epic' ? 'border-purple-500 bg-purple-500/10' : 'border-blue-500 bg-blue-500/10') }} transition-all duration-300 group-hover:scale-110">
                                        <i class="fas {{ $project['icon'] }} text-2xl {{ $project['rarity'] === 'Legendary' ? 'text-elden-gold' : ($project['rarity'] === 'Epic' ? 'text-purple-400' : 'text-blue-400') }}"></i>
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex items-center gap-2 mb-1">
                                            <h4 class="font-serif text-lg {{ $project['rarity'] === 'Legendary' ? 'text-elden-gold' : ($project['rarity'] === 'Epic' ? 'text-purple-400' : 'text-blue-400') }}">{{ $project['name'] }}</h4>
                                        </div>
                                        <p class="text-xs text-elden-gold-dark tracking-wider uppercase mb-2">{{ $project['type'] }}</p>
                                    </div>
                                </div>

                                <p class="font-body text-sm text-elden-gold-light/70 mt-4 leading-relaxed">{{ $project['description'] }}</p>

                                <!-- Stats tags -->
                                <div class="flex flex-wrap gap-2 mt-4">
                                    @foreach($project['stats'] as $stat)
                                        <span class="text-xs px-2 py-1 bg-elden-stone-light/50 text-elden-gold-dark border border-elden-gold/10">{{ $stat }}</span>
                                    @endforeach
                                </div>

                                <!-- Hover indicator -->
                                <div class="mt-4 pt-4 border-t border-elden-gold/10 flex items-center justify-between opacity-0 group-hover:opacity-100 transition-opacity">
                                    <span class="text-xs text-elden-gold-dark">Toca para examinar</span>
                                    <i class="fas fa-external-link-alt text-elden-gold text-sm"></i>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>

            <!-- Journey Section - Experience Timeline -->
            <section id="journey" class="py-20 px-4">
                <div class="max-w-4xl mx-auto">
                    <div class="text-center mb-16">
                        <span class="text-elden-gold-dark text-sm tracking-[0.3em] uppercase font-sans">Cronica de</span>
                        <h2 class="font-serif text-4xl md:text-5xl text-elden-gold mt-2 text-shadow-gold">Travesia</h2>
                        <div class="rune-divider max-w-xs mx-auto">
                            <i class="fas fa-road text-elden-gold text-sm"></i>
                        </div>
                    </div>

                    <div class="relative">
                        <!-- Timeline line -->
                        <div class="absolute left-4 md:left-1/2 top-0 bottom-0 w-px bg-gradient-to-b from-elden-gold via-elden-gold-dark to-transparent transform md:-translate-x-1/2"></div>

                        <!-- Experience Items -->
                        <div class="space-y-12">
                            <!-- Chevrolet Caminos -->
                            <div class="relative flex flex-col md:flex-row md:items-center">
                                <div class="absolute left-4 md:left-1/2 w-4 h-4 bg-elden-gold rounded-full border-4 border-elden-dark transform md:-translate-x-1/2 z-10 animate-glow"></div>
                                <div class="ml-12 md:ml-0 md:w-1/2 md:pr-12 md:text-right">
                                    <span class="text-elden-gold text-sm font-sans tracking-wider">2021 - Presente</span>
                                </div>
                                <div class="ml-12 md:ml-0 md:w-1/2 md:pl-12 mt-2 md:mt-0">
                                    <div class="elden-border p-6">
                                        <h4 class="font-serif text-xl text-elden-gold mb-2">Analista y Desarrollador de Sistemas</h4>
                                        <p class="text-elden-gold-dark text-sm mb-4">Chevrolet Caminos - Pereira, Colombia</p>
                                        <ul class="space-y-2 font-body text-sm text-elden-gold-light/80">
                                            <li class="flex items-start gap-2">
                                                <i class="fas fa-chevron-right text-elden-gold text-xs mt-1.5"></i>
                                                Mantenimiento de sistema Inhouse en Visual Basic
                                            </li>
                                            <li class="flex items-start gap-2">
                                                <i class="fas fa-chevron-right text-elden-gold text-xs mt-1.5"></i>
                                                Desarrollo de facturacion electronica en PHP
                                            </li>
                                            <li class="flex items-start gap-2">
                                                <i class="fas fa-chevron-right text-elden-gold text-xs mt-1.5"></i>
                                                Migracion de modulos VB6 a Laravel
                                            </li>
                                            <li class="flex items-start gap-2">
                                                <i class="fas fa-chevron-right text-elden-gold text-xs mt-1.5"></i>
                                                Integracion de pasarela de pagos Wompy
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Tencoparque -->
                            <div class="relative flex flex-col md:flex-row md:items-center">
                                <div class="absolute left-4 md:left-1/2 w-4 h-4 bg-elden-gold-dark rounded-full border-4 border-elden-dark transform md:-translate-x-1/2 z-10"></div>
                                <div class="ml-12 md:ml-0 md:w-1/2 md:pr-12 md:text-right order-1 md:order-none">
                                    <div class="elden-border p-6">
                                        <h4 class="font-serif text-xl text-elden-gold mb-2">Desarrollador Frontend</h4>
                                        <p class="text-elden-gold-dark text-sm mb-4">Tencoparque - Pereira, Colombia</p>
                                        <ul class="space-y-2 font-body text-sm text-elden-gold-light/80">
                                            <li class="flex items-start gap-2">
                                                <i class="fas fa-chevron-right text-elden-gold text-xs mt-1.5"></i>
                                                Analisis de requerimientos y documentacion
                                            </li>
                                            <li class="flex items-start gap-2">
                                                <i class="fas fa-chevron-right text-elden-gold text-xs mt-1.5"></i>
                                                Desarrollo de componentes reutilizables
                                            </li>
                                            <li class="flex items-start gap-2">
                                                <i class="fas fa-chevron-right text-elden-gold text-xs mt-1.5"></i>
                                                Pruebas y depuracion de aplicaciones
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="ml-12 md:ml-0 md:w-1/2 md:pl-12 mt-2 md:mt-0">
                                    <span class="text-elden-gold-dark text-sm font-sans tracking-wider">Julio 2020 - Marzo 2021</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Contact Section - Summon -->
            <section id="summon" class="py-20 px-4 bg-gradient-to-b from-transparent via-elden-blood/5 to-transparent">
                <div class="max-w-4xl mx-auto">
                    <div class="text-center mb-16">
                        <span class="text-elden-gold-dark text-sm tracking-[0.3em] uppercase font-sans">Piedra de</span>
                        <h2 class="font-serif text-4xl md:text-5xl text-elden-gold mt-2 text-shadow-gold">Invocacion</h2>
                        <p class="text-elden-gold-dark mt-4 font-body max-w-xl mx-auto">
                            Usa estos signos de invocacion para contactarme en tu travesia
                        </p>
                        <div class="rune-divider max-w-xs mx-auto">
                            <i class="fas fa-envelope text-elden-gold text-sm"></i>
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-8">
                        <!-- Contact Info -->
                        <div class="elden-border elden-corner p-8">
                            <h3 class="font-serif text-xl text-elden-gold mb-6">Signos de Invocacion</h3>
                            <div class="space-y-6">
                                <a href="mailto:yvelasco321@gmail.com" class="flex items-center gap-4 group">
                                    <div class="w-12 h-12 flex items-center justify-center border border-elden-gold/30 group-hover:border-elden-gold transition-colors">
                                        <i class="fas fa-envelope text-elden-gold"></i>
                                    </div>
                                    <div>
                                        <p class="text-elden-gold-dark text-xs tracking-wider uppercase">Correo Mistico</p>
                                        <p class="text-elden-gold-light group-hover:text-elden-gold transition-colors">yvelasco321@gmail.com</p>
                                    </div>
                                </a>

                                <a href="tel:+573022475080" class="flex items-center gap-4 group">
                                    <div class="w-12 h-12 flex items-center justify-center border border-elden-gold/30 group-hover:border-elden-gold transition-colors">
                                        <i class="fas fa-phone text-elden-gold"></i>
                                    </div>
                                    <div>
                                        <p class="text-elden-gold-dark text-xs tracking-wider uppercase">Piedra de Comunicacion</p>
                                        <p class="text-elden-gold-light group-hover:text-elden-gold transition-colors">+57 302 247 5080</p>
                                    </div>
                                </a>

                                <a href="https://www.linkedin.com/in/yeison-velasco-37104b1a3/" target="_blank" class="flex items-center gap-4 group">
                                    <div class="w-12 h-12 flex items-center justify-center border border-elden-gold/30 group-hover:border-elden-gold transition-colors">
                                        <i class="fab fa-linkedin text-elden-gold"></i>
                                    </div>
                                    <div>
                                        <p class="text-elden-gold-dark text-xs tracking-wider uppercase">Gremio de Profesionales</p>
                                        <p class="text-elden-gold-light group-hover:text-elden-gold transition-colors">LinkedIn</p>
                                    </div>
                                </a>

                                <a href="https://github.com/Valcoing095" target="_blank" class="flex items-center gap-4 group">
                                    <div class="w-12 h-12 flex items-center justify-center border border-elden-gold/30 group-hover:border-elden-gold transition-colors">
                                        <i class="fab fa-github text-elden-gold"></i>
                                    </div>
                                    <div>
                                        <p class="text-elden-gold-dark text-xs tracking-wider uppercase">Repositorio de Hechizos</p>
                                        <p class="text-elden-gold-light group-hover:text-elden-gold transition-colors">GitHub</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- Quick Message -->
                        <div class="elden-border p-8">
                            <h3 class="font-serif text-xl text-elden-gold mb-6">Mensaje Rapido</h3>
                            <p class="font-body text-elden-gold-light/70 mb-6 leading-relaxed">
                                Si buscas un aliado para tu proyecto o deseas discutir una colaboracion, 
                                no dudes en invocarme. Siempre estoy dispuesto a unirme a nuevas aventuras 
                                en el desarrollo de software.
                            </p>
                            <a href="mailto:yvelasco321@gmail.com?subject=Solicitud de Colaboracion" class="btn-elden inline-block w-full text-center">
                                <i class="fas fa-paper-plane mr-2"></i>Enviar Senal de Invocacion
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <!-- Footer -->
        <footer class="py-8 border-t border-elden-gold/10">
            <div class="max-w-6xl mx-auto px-4 text-center">
                <div class="mb-4">
                    <svg class="w-8 h-8 mx-auto text-elden-gold/50" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
                    </svg>
                </div>
                <p class="font-body text-elden-gold-dark text-sm">
                    &copy; 2024 Yeison Alexis Velasco Trejos
                </p>
                <p class="font-body text-elden-gold-dark/50 text-xs mt-2">
                    Forjado en las Tierras Intermedias del Codigo
                </p>
            </div>
        </footer>

        @livewireScripts

        <script>
            // Mobile menu toggle
            const mobileMenuBtn = document.getElementById('mobile-menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');
            
            mobileMenuBtn.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });

            // Close mobile menu when clicking a link
            mobileMenu.querySelectorAll('a').forEach(link => {
                link.addEventListener('click', () => {
                    mobileMenu.classList.add('hidden');
                });
            });

            // Smooth scroll for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });

            // Animate stat bars on scroll
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.querySelectorAll('.stat-bar-fill').forEach(bar => {
                            bar.style.width = bar.style.width;
                        });
                    }
                });
            }, { threshold: 0.5 });

            document.querySelectorAll('.stat-bar').forEach(bar => observer.observe(bar));
        </script>
    </body>
</html>
