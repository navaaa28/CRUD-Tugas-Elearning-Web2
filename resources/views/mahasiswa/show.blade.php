@extends('mahasiswa.layout')

@section('title', 'Detail Mahasiswa - ' . $mahasiswa->nama)

@section('content')
<div class="max-w-4xl mx-auto">
    <div class="card">
        <div class="bg-gradient-to-r from-cyan-500 to-cyan-600 text-white px-6 py-4">
            <div class="flex justify-between items-center">
                <div class="flex items-center space-x-3">
                    <div class="bg-white bg-opacity-20 p-2 rounded-lg">
                    <img src="{{ asset('logo.png') }}" alt="Logo" class="h-8 w-auto object-contain">                        
                    </div>
                    <h1 class="text-2xl font-bold">Detail Mahasiswa</h1>
                </div>
                <div class="flex space-x-2">
                    <a href="{{ route('mahasiswa.edit', $mahasiswa->id) }}" class=" bg-opacity-20 hover:bg-opacity-30 text-white px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200 flex items-center space-x-2">
                        <i class="fas fa-edit"></i>
                        <span>Edit</span>
                    </a>
                    <a href="{{ route('mahasiswa.index') }}" class=" bg-opacity-20 hover:bg-opacity-30 text-white px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200 flex items-center space-x-2">
                        <i class="fas fa-arrow-left"></i>
                        <span>Kembali</span>
                    </a>
                </div>
            </div>
        </div>
        
        <div class="p-6">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Profile Section -->
                <div class="lg:col-span-1">
                    <div class="text-center">
                        <div class="w-32 h-32 bg-gradient-to-br from-blue-400 to-indigo-600 rounded-full flex items-center justify-center mx-auto mb-6 shadow-lg">
                            <i class="fas fa-user-graduate text-4xl text-white"></i>
                        </div>
                        <h2 class="text-2xl font-bold text-gray-900 mb-2">{{ $mahasiswa->nama }}</h2>
                        <span class="inline-flex items-center px-4 py-2 rounded-full text-sm font-medium bg-gradient-to-r from-blue-100 to-blue-200 text-blue-800">
                            {{ $mahasiswa->nim }}
                        </span>
                    </div>
                </div>
                
                <!-- Details Section -->
                <div class="lg:col-span-2 space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="bg-gray-50 rounded-lg p-4">
                            <div class="flex items-center space-x-3 mb-2">
                                <div class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-id-card text-blue-600"></i>
                                </div>
                                <label class="text-sm font-medium text-gray-500">NIM</label>
                            </div>
                            <p class="text-gray-900 font-semibold">{{ $mahasiswa->nim }}</p>
                        </div>
                        
                        <div class="bg-gray-50 rounded-lg p-4">
                            <div class="flex items-center space-x-3 mb-2">
                                <div class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-user text-blue-600"></i>
                                </div>
                                <label class="text-sm font-medium text-gray-500">Nama Lengkap</label>
                            </div>
                            <p class="text-gray-900 font-semibold">{{ $mahasiswa->nama }}</p>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="bg-gray-50 rounded-lg p-4">
                            <div class="flex items-center space-x-3 mb-2">
                                <div class="w-8 h-8 bg-emerald-100 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-graduation-cap text-emerald-600"></i>
                                </div>
                                <label class="text-sm font-medium text-gray-500">Jurusan</label>
                            </div>
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-gradient-to-r from-emerald-100 to-emerald-200 text-emerald-800">
                                {{ $mahasiswa->jurusan }}
                            </span>
                        </div>
                        
                        <div class="bg-gray-50 rounded-lg p-4">
                            <div class="flex items-center space-x-3 mb-2">
                                <div class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-phone text-blue-600"></i>
                                </div>
                                <label class="text-sm font-medium text-gray-500">Nomor Telepon</label>
                            </div>
                            <a href="tel:{{ $mahasiswa->telepon }}" class="text-blue-600 hover:text-blue-800 transition-colors duration-200 font-semibold">
                                {{ $mahasiswa->telepon }}
                            </a>
                        </div>
                    </div>
                    
                    <div class="bg-gray-50 rounded-lg p-4">
                        <div class="flex items-center space-x-3 mb-2">
                            <div class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center">
                                <i class="fas fa-envelope text-blue-600"></i>
                            </div>
                            <label class="text-sm font-medium text-gray-500">Email</label>
                        </div>
                        <a href="mailto:{{ $mahasiswa->email }}" class="text-blue-600 hover:text-blue-800 transition-colors duration-200 font-semibold">
                            {{ $mahasiswa->email }}
                        </a>
                    </div>
                    
                    <div class="bg-gray-50 rounded-lg p-4">
                        <div class="flex items-center space-x-3 mb-2">
                            <div class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center">
                                <i class="fas fa-map-marker-alt text-blue-600"></i>
                            </div>
                            <label class="text-sm font-medium text-gray-500">Alamat</label>
                        </div>
                        <p class="text-gray-900">{{ $mahasiswa->alamat }}</p>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="bg-gray-50 rounded-lg p-4">
                            <div class="flex items-center space-x-3 mb-2">
                                <div class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-calendar text-blue-600"></i>
                                </div>
                                <label class="text-sm font-medium text-gray-500">Tanggal Dibuat</label>
                            </div>
                            <p class="text-gray-900">{{ $mahasiswa->created_at->format('d F Y H:i') }}</p>
                        </div>
                        
                        <div class="bg-gray-50 rounded-lg p-4">
                            <div class="flex items-center space-x-3 mb-2">
                                <div class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-edit text-blue-600"></i>
                                </div>
                                <label class="text-sm font-medium text-gray-500">Terakhir Diperbarui</label>
                            </div>
                            <p class="text-gray-900">{{ $mahasiswa->updated_at->format('d F Y H:i') }}</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="flex justify-between items-center pt-6 border-t border-gray-200 mt-8">
                <a href="{{ route('mahasiswa.index') }}" class="btn-secondary flex items-center space-x-2">
                    <i class="fas fa-arrow-left"></i>
                    <span>Kembali ke Daftar</span>
                </a>
                <div class="flex space-x-3">
                    <a href="{{ route('mahasiswa.edit', $mahasiswa->id) }}" class="btn-warning flex items-center space-x-2">
                        <i class="fas fa-edit"></i>
                        <span>Edit Data</span>
                    </a>
                    <form action="{{ route('mahasiswa.destroy', $mahasiswa->id) }}" 
                          method="POST" 
                          class="inline"
                          onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-danger flex items-center space-x-2">
                            <i class="fas fa-trash"></i>
                            <span>Hapus Data</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 