<div id="sidebar" class="fixed top-0 left-0 w-64 h-full bg-gray-100 shadow-lg transform -translate-x-full transition-transform lg:translate-x-0 lg:relative lg:w-1/3 lg:h-full flex flex-col items-center justify-center p-6">
    <!-- Contenido del sidebar -->
    {{-- <img src="{{ asset('img/profile.svg') }}" alt="Profile Picture" class="w-44 h-44 rounded-[1rem] mb-4"> --}}
    <h2 class="text-xl text-center font-bold mb-2 border-b-4 border-yellow-400">Yeison Alexis Velasco</h2>
    <p class="text-gray-600 mb-1">Backend Developer</p>
    <p class="text-gray-600 mb-4">Colombia, Risaralda</p>
    <button wire:click="downloadCV" class="bg-yellow-400 text-white px-4 py-2 rounded-full font-semibold">Descargar CV</button>
</div>
