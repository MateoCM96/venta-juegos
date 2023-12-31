<div 
    class=" box-border h-40 w-50 border-2  bg-blue-600 dark:bg-gray-800 shadow mx-auto ">
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <div class=" box-content h-32 w-32 border-2 p-6">
        <header>
            <h2 class="text-2xl font-medium text-white dark:text-gray-100">
                {{ Auth::user()->name }}
            </h2>
        </header>
    
        <a href="{{ route('profile.edit') }}"
            class="block text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
            Mi Cuenta
        </a>
        @if (Auth::check() && Auth::user()->id == 1)
            <a href="{{ route('dashboard') }}"
                class="block text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                Panel de Control
            </a>
        @endif
    
        <a href="{{ route('logout') }}"
            class="block text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar Sesion
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf <!-- Agrega el token CSRF -->
        </form>
    
    </div>
    
   

</div>

