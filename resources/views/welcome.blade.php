<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Portafolio</title>
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
            rel="stylesheet"
        />
        <link rel="shortcut icon" href="{{asset('img/icono.ico')}}">
        <link rel="stylesheet" href="{{ asset('/css/tailwind.output.css') }}" />
        <script
            src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
            defer
        ></script>
        <script src="{{ asset('js/init-alpine.js') }}"></script>
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css"
        />
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
            defer
        ></script>
        <script src="{{ asset('js/charts-lines.js') }}" defer></script>
        <script src="{{ asset('js/charts-pie.js') }}" defer></script>
    </head>
    <body>
        <div
            class="flex h-screen bg-gray-50 dark:bg-gray-900"
            :class="{ 'overflow-hidden': isSideMenuOpen }"
        >
            <!-- Desktop sidebar -->
            <aside
                class="z-20 hidden w-56 overflow-y-auto bg-white dark:bg-gray-800 md:block flex-shrink-0"
            >
                <div class="py-4 text-gray-500 dark:text-gray-400">
                    <a
                        class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200"
                        href="{{route('inicio')}}"
                    >
                        Portafolio
                    </a>
                    <ul>
                        <li class="relative px-6 py-3">
                            <a
                                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                                href="{{route('inicio')}}"
                            >
                                <svg
                                    class="w-5 h-5"
                                    aria-hidden="true"
                                    fill="none"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                >
                                    <path
                                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
                                    ></path>
                                </svg>
                                <span class="ml-4">Inicio</span>
                            </a>
                        </li>
                        <li class="relative px-6 py-3">
                            <a
                                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                                href="#1"
                            >
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                            </svg>
                                <span class="ml-4">I. Algoritmo</span>
                            </a>
                        </li>
                        <li class="relative px-6 py-3">
                            <a
                                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                                href="#2"
                            >
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                            </svg>
                                <span class="ml-4">II. Tipos de datos</span>
                            </a>
                        </li>
                        <li class="relative px-6 py-3">
                            <a
                                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                                href="#3"
                            >
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                            </svg>
                                <span class="ml-4">III. Programación estructurada</span>
                            </a>
                        </li>
                        <li class="relative px-6 py-3">
                            <a
                                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                                href="#4"
                            >
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                            </svg>
                                <span class="ml-4">IV. Fases de la creación de un programa</span>
                            </a>
                        </li>
                        <li class="relative px-6 py-3">
                            <a
                                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                                href="#5"
                            >
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                            </svg>
                                <span class="ml-4">Estructura de control secuencial</span>
                            </a>
                        </li>
                        <li class="relative px-6 py-3">
                            <a
                                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                                href="#6"
                            >
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                            </svg>
                                <span class="ml-4">RESEÑA</span>
                            </a>
                        </li>
                        <li class="relative px-6 py-3">
                            <a
                                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                                href="#7"
                            >
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                            </svg>
                                <span class="ml-4">Estructura de control selectiva simple y doble</span>
                            </a>
                        </li>
                        <li class="relative px-6 py-3">
                            <a
                                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                                href="#8"
                            >
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                            </svg>
                                <span class="ml-4">Estructura de control selectiva multiple</span>
                            </a>
                        </li>
                        <li class="relative px-6 py-3">
                            <a
                                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                                href="#9"
                            >
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                            </svg>
                                <span class="ml-4">Selectiva anidada</span>
                            </a>
                        </li>
                        <li class="relative px-6 py-3">
                            <a
                                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                                href="#10"
                            >
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                            </svg>
                                <span class="ml-4">Contador, acumulador y bandera</span>
                            </a>
                        </li>
                        <li class="relative px-6 py-3">
                            <a
                                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                                href="#11"
                            >
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                            </svg>
                                <span class="ml-4">Estuctura while, 21,22,23</span>
                            </a>
                        </li>
                        <li class="relative px-6 py-3">
                            <a
                                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                                href="#12"
                            >
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                            </svg>
                                <span class="ml-4">Estructura Do while, 24, 25 y 26</span>
                            </a>
                        </li>
                        <li class="relative px-6 py-3">
                            <a
                                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                                href="#13"
                            >
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                            </svg>
                                <span class="ml-4">Estructura For 27, 28, 29 y 30</span>
                            </a>
                        </li>
                        <li class="relative px-6 py-3">
                            <a
                                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                                href="#14"
                            >
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                            </svg>
                                <span class="ml-4">For anidadas</span>
                            </a>
                        </li>
                        <li class="relative px-6 py-3">
                            <a
                                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                                href="#15"
                            >
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                            </svg>
                                <span class="ml-4">Arreglos unidimensionales</span>
                            </a>
                        </li>
                        <li class="relative px-6 py-3">
                            <a
                                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                                href="#16"
                            >
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                            </svg>
                                <span class="ml-4">Teoría de arreglos</span>
                            </a>
                        </li>
                        <li class="relative px-6 py-3">
                            <a
                                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                                href="#17"
                            >
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                            </svg>
                                <span class="ml-4">Arreglos bidimensionales</span>
                            </a>
                        </li>
                        <li class="relative px-6 py-3">
                            <a
                                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                                href="#18"
                            >
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                            </svg>
                                <span class="ml-4">Investigación de arreglos bidimensionales</span>
                            </a>
                        </li>
                        <li class="relative px-6 py-3">
                            <a
                                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                                href="#19"
                            >
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                            </svg>
                                <span class="ml-4">Investigación Cadenas</span>
                            </a>
                        </li>
                        <li class="relative px-6 py-3">
                            <a
                                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                                href="#20"
                            >
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                            </svg>
                                <span class="ml-4">Resumen funciones</span>
                            </a>
                        </li>
                        <li class="relative px-6 py-3">
                            <a
                                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                                href="#21"
                            >
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                            </svg>
                                <span class="ml-4">Tipos de datos primitivos</span>
                            </a>
                        </li>
                        <li class="relative px-6 py-3">
                            <a
                                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                                href="#22"
                            >
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                            </svg>
                                <span class="ml-4">Funciones sin parametros por valor</span>
                            </a>
                        </li>
                        <li class="relative px-6 py-3">
                            <a
                                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                                href="#23"
                            >
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                            </svg>
                                <span class="ml-4">Funciones con paso de parametros por valor</span>
                            </a>
                        </li>
                        <li class="relative px-6 py-3">
                            <a
                                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                                href="#24"
                            >
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                            </svg>
                                <span class="ml-4">Prototipo de funciones y paso de parametros por valor </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </aside>
            <!-- Mobile sidebar -->
            <!-- Backdrop -->
            <div
                x-show="isSideMenuOpen"
                x-transition:enter="transition ease-in-out duration-150"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in-out duration-150"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"
            ></div>
            <aside
                class="fixed inset-y-0 z-20 flex-shrink-0 w-48 mt-16 overflow-y-auto bg-white dark:bg-gray-800 md:hidden"
                x-show="isSideMenuOpen"
                x-transition:enter="transition ease-in-out duration-150"
                x-transition:enter-start="opacity-0 transform -translate-x-20"
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in-out duration-150"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0 transform -translate-x-20"
                @click.away="closeSideMenu"
                @keydown.escape="closeSideMenu"
            >
                <div class="py-4 text-gray-500 dark:text-gray-400">
                    <a
                        class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200"
                        href="{{route('inicio')}}"
                    >
                        Portafolio
                    </a>
                    <ul>
                        <li class="relative px-6 py-3">
                            <a
                                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                                href="{{route('inicio')}}"
                            >
                                <svg
                                    class="w-5 h-5"
                                    aria-hidden="true"
                                    fill="none"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                >
                                    <path
                                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
                                    ></path>
                                </svg>
                                <span class="ml-4">Inicio</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </aside>
            <div class="flex flex-col flex-1 w-full">
                <header class="z-10 py-4 bg-white shadow-md dark:bg-gray-800">
                    <div
                        class="container flex items-center justify-between h-full px-6 mx-auto text-purple-600 dark:text-purple-300"
                    >
                        <!-- Mobile hamburger -->
                        <button
                            class="p-1 mr-5 -ml-1 rounded-md md:hidden focus:outline-none focus:shadow-outline-purple"
                            @click="toggleSideMenu"
                            aria-label="Menu"
                        >
                            <svg
                                class="w-6 h-6"
                                aria-hidden="true"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                    clip-rule="evenodd"
                                ></path>
                            </svg>
                        </button>
                        <ul class="flex items-center flex-shrink-0 space-x-6">
                            <!-- Theme toggler -->
                            <li class="flex">
                                <button
                                    class="rounded-md focus:outline-none focus:shadow-outline-purple"
                                    @click="toggleTheme"
                                    aria-label="Toggle color mode"
                                >
                                    <template x-if="!dark">
                                        <svg
                                            class="w-5 h-5"
                                            aria-hidden="true"
                                            fill="currentColor"
                                            viewBox="0 0 20 20"
                                        >
                                            <path
                                                d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"
                                            ></path>
                                        </svg>
                                    </template>
                                    <template x-if="dark">
                                        <svg
                                            class="w-5 h-5"
                                            aria-hidden="true"
                                            fill="currentColor"
                                            viewBox="0 0 20 20"
                                        >
                                            <path
                                                fill-rule="evenodd"
                                                d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                                clip-rule="evenodd"
                                            ></path>
                                        </svg>
                                    </template>
                                </button>
                            </li>
                        </ul>
                    </div>
                </header>
                <main class="h-full overflow-y-auto">
                    <div class="container px-6 mx-auto grid">
                        <h2
                            class="my-6 text-3xl font-semibold text-gray-700 dark:text-gray-200"
                        >
                            portafolio
                        </h2>
                        <h2
                            id="1"
                            class="my-6 text-l font-semibold text-gray-700 dark:text-gray-200"
                        >
                            I. Algoritmo
                        </h2>
                        <div  class="flex justify-center items-center h-screen">
                            <iframe src="{{ route('pdf.show', ['filename' => 'I. Algoritmo, Beleche Alondra (1).pdf']) }}" 
                                class="w-full h-full"></iframe>
                        </div>
                        <h2
                            id="2"
                            class="my-6 text-l font-semibold text-gray-700 dark:text-gray-200"
                        >
                            II. Tipos de datos
                        </h2>
                        <div class="flex justify-center items-center h-screen">
                            <iframe src="{{ route('pdf.show', ['filename' => 'II. Tipos de datos, Beleche Alondra.pdf']) }}" 
                                class="w-full h-full"></iframe>
                        </div>
                        <h2
                            id="3"
                            class="my-6 text-l font-semibold text-gray-700 dark:text-gray-200"
                        >
                            III. Programación estructurada
                        </h2>
                        <div class="flex justify-center items-center h-screen">
                            <iframe src="{{ route('pdf.show', ['filename' => 'III. Programación estructurada, Beleche Alondra.pdf']) }}" 
                                class="w-full h-full"></iframe>
                        </div>
                        <h2
                            id="4"
                            class="my-6 text-l font-semibold text-gray-700 dark:text-gray-200"
                        >
                            IV. Fases de la creación de un programa
                        </h2>
                        <div class="flex justify-center items-center h-screen">
                            <iframe src="{{ route('pdf.show', ['filename' => 'IV. Fases de la creación de un programa, Beleche Alondra (1).pdf']) }}" 
                                class="w-full h-full"></iframe>
                        </div>
                        <h2
                            id="5"
                            class="my-6 text-l font-semibold text-gray-700 dark:text-gray-200"
                        >
                        Estructura de control secuencial
                        </h2>
                        <div class="flex justify-center items-center h-screen">
                            <iframe src="{{ route('pdf.show', ['filename' => 'Estructura de control secuencial, Beleche Alondra (1).pdf']) }}" 
                                class="w-full h-full"></iframe>
                        </div>
                        <h2
                            id="6"
                            class="my-6 text-l font-semibold text-gray-700 dark:text-gray-200"
                        >
                        RESEÑA
                        </h2>
                        <div class="flex justify-center items-center h-screen">
                            <iframe src="{{ route('pdf.show', ['filename' => 'RESENA Beleche Alondra.pdf']) }}" 
                                class="w-full h-full"></iframe>
                        </div>
                        <h2
                            id="7"
                            class="my-6 text-l font-semibold text-gray-700 dark:text-gray-200"
                        >
                        Estructura de control selectiva simple y doble
                        </h2>
                        <div class="flex justify-center items-center h-screen">
                            <iframe src="{{ route('pdf.show', ['filename' => 'Estructura de control selectiva simple y doble, Beleche Alondra (2).pdf']) }}" 
                                class="w-full h-full"></iframe>
                        </div>
                        <h2
                            id="8"
                            class="my-6 text-l font-semibold text-gray-700 dark:text-gray-200"
                        >
                        Estructura de control selectiva multiple
                        </h2>
                        <div class="flex justify-center items-center h-screen">
                            <iframe src="{{ route('pdf.show', ['filename' => 'Estructura de control selectiva multiple, Beleche Alondra (1).pdf']) }}" 
                                class="w-full h-full"></iframe>
                        </div>
                        <h2
                            id="9"
                            class="my-6 text-l font-semibold text-gray-700 dark:text-gray-200"
                        >
                        Selectiva anidada
                        </h2>
                        <div class="flex justify-center items-center h-screen">
                            <iframe src="{{ route('pdf.show', ['filename' => 'Practica 20. Selectiva anidada, Beleche Alondra.pdf']) }}" 
                                class="w-full h-full"></iframe>
                        </div>
                        <h2
                            id="10"
                            class="my-6 text-l font-semibold text-gray-700 dark:text-gray-200"
                        >
                        Contador, acumulador y bandera
                        </h2>
                        <div class="flex justify-center items-center h-screen">
                            <iframe src="{{ route('pdf.show', ['filename' => 'Contador, acumulador y bandera, Beleche Alondra.pdf']) }}" 
                                class="w-full h-full"></iframe>
                        </div>
                        <h2
                            id="11"
                            class="my-6 text-l font-semibold text-gray-700 dark:text-gray-200"
                        >
                        Estuctura while, 21,22,23
                        </h2>
                        <div class="flex justify-center items-center h-screen">
                            <iframe src="{{ route('pdf.show', ['filename' => 'Estuctura while, 21,22,23; Beleche Alondra.pdf']) }}" 
                                class="w-full h-full"></iframe>
                        </div>
                        <h2
                            id="12"
                            class="my-6 text-l font-semibold text-gray-700 dark:text-gray-200"
                        >
                        Estructura Do while, 24, 25 y 26
                        </h2>
                        <div class="flex justify-center items-center h-screen">
                            <iframe src="{{ route('pdf.show', ['filename' => 'Estructura Do while, 24, 25 y 26; Beleche Alondra.pdf']) }}" 
                                class="w-full h-full"></iframe>
                        </div>
                        <h2
                            id="13"
                            class="my-6 text-l font-semibold text-gray-700 dark:text-gray-200"
                        >
                        Estructura For 27, 28, 29 y 30
                        </h2>
                        <div class="flex justify-center items-center h-screen">
                            <iframe src="{{ route('pdf.show', ['filename' => 'Estructura For 27, 28, 29 y 30;  Beleche Alondra.pdf']) }}" 
                                class="w-full h-full"></iframe>
                        </div>
                        <h2
                            id="14"
                            class="my-6 text-l font-semibold text-gray-700 dark:text-gray-200"
                        >
                        For anidadas
                        </h2>
                        <div class="flex justify-center items-center h-screen">
                            <iframe src="{{ route('pdf.show', ['filename' => 'For anidadas, Beleche Alondra (1).pdf']) }}" 
                                class="w-full h-full"></iframe>
                        </div>
                        <h2
                            id="15"
                            class="my-6 text-l font-semibold text-gray-700 dark:text-gray-200"
                        >
                        Arreglos unidimensionales
                        </h2>
                        <div class="flex justify-center items-center h-screen">
                            <iframe src="{{ route('pdf.show', ['filename' => 'Arreglos unidimensionales, Beleche Alondra.pdf']) }}" 
                                class="w-full h-full"></iframe>
                        </div>
                        <h2
                            id="16"
                            class="my-6 text-l font-semibold text-gray-700 dark:text-gray-200"
                        >
                        Teoría de arreglos
                        </h2>
                        <div class="flex justify-center items-center h-screen">
                            <iframe src="{{ route('pdf.show', ['filename' => 'Teoría de arreglos, Beleche Alondra.pdf']) }}" 
                                class="w-full h-full"></iframe>
                        </div>
                        <h2
                            id="17"
                            class="my-6 text-l font-semibold text-gray-700 dark:text-gray-200"
                        >
                        Arreglos bidimensionales
                        </h2>
                        <div class="flex justify-center items-center h-screen">
                            <iframe src="{{ route('pdf.show', ['filename' => 'Arreglos bidimensionales, Beleche Alondra.pdf']) }}" 
                                class="w-full h-full"></iframe>
                        </div>
                        <h2
                            id="18"
                            class="my-6 text-l font-semibold text-gray-700 dark:text-gray-200"
                        >
                        Investigación de arreglos bidimensionales
                        </h2>
                        <div class="flex justify-center items-center h-screen">
                            <iframe src="{{ route('pdf.show', ['filename' => 'Investigación de arreglos bidimensionales, Beleche Alondra.pdf']) }}" 
                                class="w-full h-full"></iframe>
                        </div>
                        <h2
                            id="19"
                            class="my-6 text-l font-semibold text-gray-700 dark:text-gray-200"
                        >
                        Investigación Cadenas
                        </h2>
                        <div class="flex justify-center items-center h-screen">
                            <iframe src="{{ route('pdf.show', ['filename' => 'Investigación Cadenas, Beleche Alondra.pdf']) }}" 
                                class="w-full h-full"></iframe>
                        </div>
                        <h2
                            id="20"
                            class="my-6 text-l font-semibold text-gray-700 dark:text-gray-200"
                        >
                        Resumen funciones
                        </h2>
                        <div class="flex justify-center items-center h-screen">
                            <iframe src="{{ route('pdf.show', ['filename' => 'Resumen funciones, Beleche Alondra.pdf']) }}" 
                                class="w-full h-full"></iframe>
                        </div>
                        <h2
                            id="21"
                            class="my-6 text-l font-semibold text-gray-700 dark:text-gray-200"
                        >
                        Tipos de datos primitivos
                        </h2>
                        <div class="flex justify-center items-center h-screen">
                            <iframe src="{{ route('pdf.show', ['filename' => 'Tipos de datos primitivos, Beleche Alondra.pdf']) }}" 
                                class="w-full h-full"></iframe>
                        </div>
                        <h2
                            id="22"
                            class="my-6 text-l font-semibold text-gray-700 dark:text-gray-200"
                        >
                        Funciones sin parametros por valor
                        </h2>
                        <div class="flex justify-center items-center h-screen">
                            <iframe src="{{ route('pdf.show', ['filename' => 'Funciones sin parametros por valor, Beleche Alondra (1).pdf']) }}" 
                                class="w-full h-full"></iframe>
                        </div>
                        <h2
                            id="23"
                            class="my-6 text-l font-semibold text-gray-700 dark:text-gray-200"
                        >
                        Funciones con paso de parametros por valor
                        </h2>
                        <div class="flex justify-center items-center h-screen">
                            <iframe src="{{ route('pdf.show', ['filename' => 'Funciones con paso de parametros por valor, Beleche Alondra (1).pdf']) }}" 
                                class="w-full h-full"></iframe>
                        </div>
                        <h2
                            id="24"
                            class="my-6 text-l font-semibold text-gray-700 dark:text-gray-200"
                        >
                        Prototipo de funciones y paso de parametros por valor 
                        </h2>
                        <div class="flex justify-center items-center h-screen">
                            <iframe src="{{ route('pdf.show', ['filename' => 'Prototipo de funciones y paso de parametros por valor, Beleche Alondra (1).pdf']) }}" 
                                class="w-full h-full"></iframe>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </body>
</html>
