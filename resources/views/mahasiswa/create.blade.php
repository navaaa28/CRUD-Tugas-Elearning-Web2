@extends('mahasiswa.layout')

@section('title', 'Tambah Mahasiswa')

@section('content')
<div class="max-w-4xl mx-auto">
    <div class="card">
        <div class="bg-gradient-to-r from-emerald-500 to-emerald-600 text-white px-6 py-4">
            <div class="flex items-center space-x-3">
                <div class="bg-white bg-opacity-20 p-2 rounded-lg">
                <img src="{{ asset('logo.png') }}" alt="Logo" class="h-8 w-auto object-contain">
                    
                </div>
                <h1 class="text-2xl font-bold">Tambah Data Mahasiswa</h1>
            </div>
        </div>
        
        <div class="p-6">
            <form action="{{ route('mahasiswa.store') }}" method="POST" class="space-y-6">
                @csrf
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="nim" class="block text-sm font-medium text-gray-700 mb-2">
                            <i class="fas fa-id-card text-blue-500 mr-2"></i>
                            NIM <span class="text-red-500">*</span>
                        </label>
                        <input type="text" 
                               class="form-input @error('nim') border-red-300 focus:ring-red-500 focus:border-red-500 @enderror" 
                               id="nim" 
                               name="nim" 
                               value="{{ old('nim') }}" 
                               placeholder="Masukkan NIM"
                               required>
                        @error('nim')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div>
                        <label for="nama" class="block text-sm font-medium text-gray-700 mb-2">
                            <i class="fas fa-user text-blue-500 mr-2"></i>
                            Nama Lengkap <span class="text-red-500">*</span>
                        </label>
                        <input type="text" 
                               class="form-input @error('nama') border-red-300 focus:ring-red-500 focus:border-red-500 @enderror" 
                               id="nama" 
                               name="nama" 
                               value="{{ old('nama') }}" 
                               placeholder="Masukkan nama lengkap"
                               required>
                        @error('nama')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="jurusan" class="block text-sm font-medium text-gray-700 mb-2">
                            <i class="fas fa-graduation-cap text-blue-500 mr-2"></i>
                            Jurusan <span class="text-red-500">*</span>
                        </label>
                        <select class="form-select @error('jurusan') border-red-300 focus:ring-red-500 focus:border-red-500 @enderror" 
                                id="jurusan" 
                                name="jurusan" 
                                required>
                            <option value="">Pilih Jurusan</option>
                            <option value="Teknik Informatika" {{ old('jurusan') == 'Teknik Informatika' ? 'selected' : '' }}>
                                Teknik Informatika
                            </option>
                            <option value="Desain Komunikasi Visual" {{ old('jurusan') == 'Sistem Informasi' ? 'selected' : '' }}>
                                Desain Komunikasi Visual
                            </option>
                            <option value="Teknik Industri" {{ old('jurusan') == 'Teknik Komputer' ? 'selected' : '' }}>
                                Teknik Industri
                            </option>
                            <option value="Bisnis Digital" {{ old('jurusan') == 'Teknik Komputer' ? 'selected' : '' }}>
                                Bisnis Digital
                            </option>
                            <option value="Manajemen Retail" {{ old('jurusan') == 'Teknik Komputer' ? 'selected' : '' }}>
                                Manajemen Retail
                            </option>
                        </select>
                        @error('jurusan')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div>
                        <label for="telepon" class="block text-sm font-medium text-gray-700 mb-2">
                            <i class="fas fa-phone text-blue-500 mr-2"></i>
                            Nomor Telepon <span class="text-red-500">*</span>
                        </label>
                        <input type="text" 
                               class="form-input @error('telepon') border-red-300 focus:ring-red-500 focus:border-red-500 @enderror" 
                               id="telepon" 
                               name="telepon" 
                               value="{{ old('telepon') }}" 
                               placeholder="Contoh: 08123456789"
                               required>
                        @error('telepon')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                        <i class="fas fa-envelope text-blue-500 mr-2"></i>
                        Email <span class="text-red-500">*</span>
                    </label>
                    <input type="email" 
                           class="form-input @error('email') border-red-300 focus:ring-red-500 focus:border-red-500 @enderror" 
                           id="email" 
                           name="email" 
                           value="{{ old('email') }}" 
                           placeholder="contoh@email.com"
                           required>
                    @error('email')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="alamat" class="block text-sm font-medium text-gray-700 mb-2">
                        <i class="fas fa-map-marker-alt text-blue-500 mr-2"></i>
                        Alamat <span class="text-red-500">*</span>
                    </label>
                    <textarea class="form-textarea @error('alamat') border-red-300 focus:ring-red-500 focus:border-red-500 @enderror" 
                              id="alamat" 
                              name="alamat" 
                              rows="3" 
                              placeholder="Masukkan alamat lengkap"
                              required>{{ old('alamat') }}</textarea>
                    @error('alamat')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex justify-between items-center pt-6 border-t border-gray-200">
                    <a href="{{ route('mahasiswa.index') }}" class="btn-secondary flex items-center space-x-2">
                        <i class="fas fa-arrow-left"></i>
                        <span>Kembali</span>
                    </a>
                    <button type="submit" class="btn-success flex items-center space-x-2">
                        <i class="fas fa-save"></i>
                        <span>Simpan Data</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection 