@extends('mahasiswa.layout')

@section('title', 'Daftar Mahasiswa')

@section('content')
<div class="space-y-6">
    <!-- Header Card -->
    <div class="card">
        <div class="card-header">
            <div class="flex justify-between items-center">
                <div class="flex items-center space-x-3">
                    <div class="bg-white bg-opacity-20 p-2 rounded-lg">
                        <img src="{{ asset('logo.png') }}" alt="Logo" class="h-8 w
                        <i class="fas fa-users text-xl"></i>
                    </div>
                    <h1 class="text-2xl font-bold">Daftar Mahasiswa UTB</h1>
                </div>
                <a href="{{ route('mahasiswa.create') }}" class="btn-success flex items-center space-x-2">
                    <i class="fas fa-plus"></i>
                    <span>Tambah Mahasiswa</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Content Card -->
    <div class="card">
        <div class="p-6">
            @if($mahasiswas->count() > 0)
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr class="table-header">
                                <th class="px-6 py-4 text-left">No</th>
                                <th class="px-6 py-4 text-left">NIM</th>
                                <th class="px-6 py-4 text-left">Nama</th>
                                <th class="px-6 py-4 text-left">Jurusan</th>
                                <th class="px-6 py-4 text-left">Email</th>
                                <th class="px-6 py-4 text-left">Telepon</th>
                                <th class="px-6 py-4 text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            @foreach($mahasiswas as $index => $mahasiswa)
                            <tr class="table-row">
                                <td class="px-6 py-4 text-gray-600">
                                    {{ $index + 1 + ($mahasiswas->currentPage() - 1) * $mahasiswas->perPage() }}
                                </td>
                                <td class="px-6 py-4">
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-gradient-to-r from-blue-100 to-blue-200 text-blue-800">
                                        {{ $mahasiswa->nim }}
                                    </span>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center space-x-3">
                                        <div class="w-10 h-10 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-full flex items-center justify-center">
                                            <i class="fas fa-user text-white text-sm"></i>
                                        </div>
                                        <div>
                                            <div class="font-medium text-gray-900">{{ $mahasiswa->nama }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-gradient-to-r from-emerald-100 to-emerald-200 text-emerald-800">
                                        {{ $mahasiswa->jurusan }}
                                    </span>
                                </td>
                                <td class="px-6 py-4">
                                    <a href="mailto:{{ $mahasiswa->email }}" class="text-blue-600 hover:text-blue-800 transition-colors duration-200">
                                        {{ $mahasiswa->email }}
                                    </a>
                                </td>
                                <td class="px-6 py-4">
                                    <a href="tel:{{ $mahasiswa->telepon }}" class="text-gray-600 hover:text-gray-800 transition-colors duration-200">
                                        {{ $mahasiswa->telepon }}
                                    </a>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex justify-center space-x-2">
                                        <a href="{{ route('mahasiswa.show', $mahasiswa->id) }}" 
                                           class="btn-info px-3 py-2 text-sm" 
                                           title="Detail">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="{{ route('mahasiswa.edit', $mahasiswa->id) }}" 
                                           class="btn-warning px-3 py-2 text-sm" 
                                           title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('mahasiswa.destroy', $mahasiswa->id) }}" 
                                              method="POST" 
                                              class="inline"
                                              onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" 
                                                    class="btn-danger px-3 py-2 text-sm" 
                                                    title="Hapus">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                
                <!-- Pagination -->
                <div class="mt-6 flex justify-center">
                    {{ $mahasiswas->links() }}
                </div>
            @else
                <div class="text-center py-12">
                    <div class="w-24 h-24 bg-gradient-to-r from-blue-100 to-indigo-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-users text-3xl text-blue-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-700 mb-2">Belum ada data mahasiswa</h3>
                    <p class="text-gray-500 mb-6">Silakan tambahkan data mahasiswa pertama Anda.</p>
                    <a href="{{ route('mahasiswa.create') }}" class="btn-success inline-flex items-center space-x-2">
                        <i class="fas fa-plus"></i>
                        <span>Tambah Mahasiswa Pertama</span>
                    </a>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection 