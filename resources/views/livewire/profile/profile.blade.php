<div id="sidebar" class="absolute z-50 top-0 left-0 w-64 h-full bg-white shadow-2xl transform -translate-x-full transition-transform lg:translate-x-0 lg:relative lg:w-1/4 lg:h-screen lg:fixed flex flex-col items-center justify-center p-6 rounded-r-2xl border border-gray-200">
    <!-- Imagen de perfil (opcional) -->
    {{-- <img src="{{ asset('img/profile.svg') }}" alt="Profile Picture" class="w-32 h-32 rounded-full shadow-lg mb-6"> --}}

    <!-- Nombre -->
    <h2 class="text-2xl text-center font-bold text-yellow-700 mb-4 border-b-4 border-yellow-400 pb-2">
      Yeison Alexis Velasco Trejos
    </h2>

    <!-- Información personal -->
    <p class="text-gray-600 text-center mb-1 font-medium">Backend Developer</p>
    <p class="text-gray-600 text-center mb-6">Colombia, Risaralda</p>

    <!-- Botón de descarga -->
    <button wire:click="downloadCV" class="bg-yellow-400 text-white px-6 py-2 rounded-full font-semibold shadow-md hover:bg-yellow-500 transition duration-300">
      Descargar CV
    </button>
</div>
