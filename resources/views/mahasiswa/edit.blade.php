@extends('mahasiswa.layout')

@section('title', 'Edit Mahasiswa - ' . $mahasiswa->nama)

@section('content')
<div class="max-w-4xl mx-auto">
    <div class="card">
        <div class="bg-gradient-to-r from-amber-500 to-amber-600 text-white px-6 py-4">
            <div class="flex items-center space-x-3">
                <div class="bg-white bg-opacity-20 p-2 rounded-lg">
                <img src="{{ asset('logo.png') }}" alt="Logo" class="h-8 w-auto object-contain">                    
                </div>
                <h1 class="text-2xl font-bold">Edit Data Mahasiswa</h1>
            </div>
        </div>
        
        <div class="p-6">
            <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST" class="space-y-6">
                @csrf
                @method('PUT')
                
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
                               value="{{ old('nim', $mahasiswa->nim) }}" 
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
                               value="{{ old('nama', $mahasiswa->nama) }}" 
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
                            <option value="Teknik Informatika" {{ old('jurusan', $mahasiswa->jurusan) == 'Teknik Informatika' ? 'selected' : '' }}>
                                Teknik Informatika
                            </option>
                            <option value="Sistem Informasi" {{ old('jurusan', $mahasiswa->jurusan) == 'Sistem Informasi' ? 'selected' : '' }}>
                                Sistem Informasi
                            </option>
                            <option value="Teknik Komputer" {{ old('jurusan', $mahasiswa->jurusan) == 'Teknik Komputer' ? 'selected' : '' }}>
                                Teknik Komputer
                            </option>
                            <option value="Manajemen Informatika" {{ old('jurusan', $mahasiswa->jurusan) == 'Manajemen Informatika' ? 'selected' : '' }}>
                                Manajemen Informatika
                            </option>
                            <option value="Teknik Elektro" {{ old('jurusan', $mahasiswa->jurusan) == 'Teknik Elektro' ? 'selected' : '' }}>
                                Teknik Elektro
                            </option>
                            <option value="Teknik Mesin" {{ old('jurusan', $mahasiswa->jurusan) == 'Teknik Mesin' ? 'selected' : '' }}>
                                Teknik Mesin
                            </option>
                            <option value="Teknik Sipil" {{ old('jurusan', $mahasiswa->jurusan) == 'Teknik Sipil' ? 'selected' : '' }}>
                                Teknik Sipil
                            </option>
                            <option value="Ekonomi" {{ old('jurusan', $mahasiswa->jurusan) == 'Ekonomi' ? 'selected' : '' }}>
                                Ekonomi
                            </option>
                            <option value="Hukum" {{ old('jurusan', $mahasiswa->jurusan) == 'Hukum' ? 'selected' : '' }}>
                                Hukum
                            </option>
                            <option value="Kedokteran" {{ old('jurusan', $mahasiswa->jurusan) == 'Kedokteran' ? 'selected' : '' }}>
                                Kedokteran
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
                               value="{{ old('telepon', $mahasiswa->telepon) }}" 
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
                           value="{{ old('email', $mahasiswa->email) }}" 
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
                              required>{{ old('alamat', $mahasiswa->alamat) }}</textarea>
                    @error('alamat')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex justify-between items-center pt-6 border-t border-gray-200">
                    <a href="{{ route('mahasiswa.show', $mahasiswa->id) }}" class="btn-secondary flex items-center space-x-2">
                        <i class="fas fa-arrow-left"></i>
                        <span>Kembali</span>
                    </a>
                    <div class="flex space-x-3">
                        <a href="{{ route('mahasiswa.index') }}" class="bg-gray-100 hover:bg-gray-200 text-gray-700 px-4 py-2 rounded-lg font-medium transition-all duration-200 flex items-center space-x-2">
                            <i class="fas fa-times"></i>
                            <span>Batal</span>
                        </a>
                        <button type="submit" class="btn-warning flex items-center space-x-2">
                            <i class="fas fa-save"></i>
                            <span>Update Data</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection 