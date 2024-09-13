<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
    <meta name="author" content="David Grzyb">
    <meta name="description" content="">

    <!-- Tailwind CSS -->
    <link href="{{ asset('css/tailwind.min.css') }}" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');
        .font-family-karla { font-family: 'Karla', sans-serif; }
        .bg-sidebar { background: #3d68ff; }
        .cta-btn { color: #3d68ff; }
        .upgrade-btn { background: #1947ee; }
        .upgrade-btn:hover { background: #0038fd; }
        .active-nav-link { background: #1947ee; }
        .nav-item:hover { background: #1947ee; }
        .account-link:hover { background: #3d68ff; }
    </style>
</head>
<body class="bg-gray-100 font-family-karla flex">

    <!-- Sidebar -->
    <aside class="bg-sidebar h-screen w-64 hidden sm:block shadow-lg">
        <div class="p-6">
            <a href="{{ route('index') }}" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">Admin</a>
        </div>
        <nav class="mt-10 text-white text-base font-semibold">
            <a href="{{ route('index') }}" class="flex items-center py-4 pl-6 nav-item @if (Request::is('/')) active-nav-link @else opacity-75 hover:opacity-100 @endif">
                <i class="fas fa-home mr-3"></i> Inicial
            </a>
            <a href="{{ route('filmes') }}" class="flex items-center py-4 pl-6 nav-item @if (Request::is('filmes*')) active-nav-link @else opacity-75 hover:opacity-100 @endif">
                <i class="fas fa-paw mr-3"></i> Filmes
            </a>
            @if (Auth::user() && Auth::user()->admin)
            <a href="{{ route('usuarios') }}" class="flex items-center py-4 pl-6 nav-item @if (Request::is('usuarios*')) active-nav-link @else opacity-75 hover:opacity-100 @endif">
                <i class="fas fa-user mr-3"></i> Usuários
            </a>
            @endif
        </nav>
    </aside>

    <!-- Content -->
    <div class="w-full flex flex-col h-screen overflow-y-hidden">

        <!-- Header -->
        <header class="w-full bg-white py-1 px-4 sm:px-6 sm:py-2 flex justify-between items-center shadow-md">
            <div></div>
            <div class="relative flex items-center">
                <span class="mr-4 text-sm">
                    @if (Auth::user())
                        {{ Auth::user()->name }}
                    @else
                        Você não está autenticado
                    @endif
                </span>
                <button class="w-10 h-10 rounded-full overflow-hidden border-4 border-gray-400 focus:outline-none">
                    <img src="{{ asset('img/pessoa.png') }}" class="w-full h-full object-cover">
                </button>
                @if (Auth::user())
                <a href="{{ route('logout') }}" class="ml-4 text-red-500 hover:text-red-700">Logout</a>
                @else
                <a href="{{ route('login') }}" class="ml-4 text-blue-500 hover:text-blue-700">Login</a>
                @endif
            </div>
        </header>

        <!-- Mobile Header -->
        <header x-data="{ isOpen: false }" class="w-full bg-sidebar py-4 px-6 sm:hidden flex justify-between items-center shadow-md">
            <a href="{{ route('index') }}" class="text-white text-2xl font-semibold uppercase hover:text-gray-300">Admin</a>
            <button @click="isOpen = !isOpen" class="text-white text-2xl">
                <i x-show="!isOpen" class="fas fa-bars"></i>
                <i x-show="isOpen" class="fas fa-times"></i>
            </button>
        </header>

        <!-- Mobile Dropdown Nav -->
        <nav :class="isOpen ? 'block' : 'hidden'" class="flex flex-col bg-sidebar text-white mt-4 sm:hidden">
            <a href="{{ route('index') }}" class="flex items-center py-2 pl-4 opacity-75 hover:opacity-100">Inicial</a>
            <a href="{{ route('filmes') }}" class="flex items-center py-2 pl-4 opacity-75 hover:opacity-100">Filmes</a>
            @if (Auth::user() && Auth::user()->admin)
            <a href="{{ route('usuarios') }}" class="flex items-center py-2 pl-4 opacity-75 hover:opacity-100">Usuários</a>
            @endif
            @if (Auth::user())
            <a href="{{ route('logout') }}" class="flex items-center py-2 pl-4 text-red-500 hover:text-red-700">Logout</a>
            @else
            <a href="{{ route('login') }}" class="flex items-center py-2 pl-4 text-blue-500 hover:text-blue-700">Login</a>
            @endif
        </nav>

        <!-- Main Content -->
        <div class="w-full h-full overflow-x-hidden border-t flex flex-col">
            <main class="flex-grow p-6">
                <h1 class="text-3xl font-bold text-black mb-6">@yield('titulo')</h1>
                <div class="leading-loose">
                    @if (session('erro'))
                    <div class="bg-red-200 border-red-500 text-red-800 px-4 py-3 rounded mb-4">
                        <div class="flex items-center">
                            <i class="fas fa-exclamation-triangle mr-2"></i>
                            <p>{{ session('erro') }}</p>
                        </div>
                    </div>
                    @endif
                    @yield('conteudo')
                </div>
            </main>

            <!-- Footer -->
            <footer class="w-full bg-white text-right p-4">
                Built by <a href="https://davidgrzyb.com" class="underline">David Grzyb</a>. Icons by <a href="https://www.flaticon.com/free-icons/person" class="underline">Flat Icons</a>.
            </footer>
        </div>
    </div>

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
</body>
</html>
