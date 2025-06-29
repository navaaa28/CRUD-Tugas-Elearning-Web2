<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sistem Data Mahasiswa')</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gradient-to-br from-blue-50 via-white to-indigo-50 min-h-screen">
    <!-- Navigation -->
    <nav class="bg-gradient-to-r from-blue-600 to-indigo-700 shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="{{ route('mahasiswa.index') }}" class="flex items-center space-x-3 text-white hover:text-blue-100 transition-colors duration-200">
                    <div class="bg-white bg-opacity-20 p-2 rounded-lg">
                        <img src="{{ asset('logo.png') }}" alt="Logo" class="h-8 w-auto object-contain">
                        </div>
                        <span class="text-xl font-semibold">Sistem Data Mahasiswa UTB</span>
                    </a>
                </div>
                
                <div class="flex items-center space-x-4">
                    <a href="{{ route('mahasiswa.index') }}" class="text-white hover:text-blue-100 px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200 flex items-center space-x-2">
                        <i class="fas fa-list"></i>
                        <span>Daftar Mahasiswa</span>
                    </a>
                    <a href="{{ route('mahasiswa.create') }}" class=" bg-opacity-20 hover:bg-opacity-30 text-white px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200 flex items-center space-x-2">
                        <i class="fas fa-plus"></i>
                        <span>Tambah Mahasiswa</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        @if(session('success'))
            <div class="alert-success mb-6 flex items-center space-x-3">
                <i class="fas fa-check-circle text-emerald-600"></i>
                <span>{{ session('success') }}</span>
                <button type="button" class="ml-auto text-emerald-600 hover:text-emerald-800" onclick="this.parentElement.remove()">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        @endif

        @if(session('error'))
            <div class="alert-error mb-6 flex items-center space-x-3">
                <i class="fas fa-exclamation-circle text-rose-600"></i>
                <span>{{ session('error') }}</span>
                <button type="button" class="ml-auto text-rose-600 hover:text-rose-800" onclick="this.parentElement.remove()">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        @endif

        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t border-gray-200 mt-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="text-center">
                <div class="flex justify-center items-center space-x-2 mb-4">
                    <img src="{{ asset('logo.png') }}" alt="Logo" class="h-10 w-auto object-contain">
                    <span class="text-lg font-semibold text-gray-700">Sistem Data Mahasiswa UTB</span>
                </div>
                <p class="text-gray-500">&copy; {{ date('Y') }} Aplikasi CRUD Mahasiswa UTB Dibuat dengan Laravel</p>
            </div>
        </div>
    </footer>
</body>
</html> 