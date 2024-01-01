@extends('layouts.app')

@section('content')
    <x-create-navigation />

    <form class="bg-[#4A91E8] flex items-center justify-center" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="w-1/2 mt-[50px]">
            <div class="form-group mb-5">
                <input type="text" id="title" name="title" placeholder="Judul Buku" value="{{ old('title') }}"
                    class="@error('title') error @enderror">
                @error('title')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group mb-5">
                <input type="text" id="author" name="author" placeholder="Penulis Buku" value="{{ old('author') }}"
                    class="@error('author') error @enderror">
                @error('author')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group mb-5">
                <input type="text" id="isbn" name="isbn" placeholder="ISBN" value="{{ old('isbn') }}"
                    class="@error('isbn') error @enderror">
                @error('isbn')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group mb-5">
                <input type="text" id="publisher" name="publisher" placeholder="Penerbit" value="{{ old('publisher') }}"
                    class="@error('publisher') error @enderror">
                @error('publisher')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group mb-5">
                <input type="number" id="total_pages" name="total_pages" placeholder="Jumlah Halaman"
                    value="{{ old('total_pages') }}" class="@error('total_pages') error @enderror">
                @error('total_pages')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-5">
                <label for="cover_image" class="block text-white text-sm font-medium">Unggah Gambar Cover</label>
                <input type="file" id="cover_image" name="cover_image" accept="image/*"
                    class="mt-1 p-5 border rounded-md w-full outline-none @error('cover_image') error @enderror">
                @error('cover_image')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-5">
                <label for="file" class="block text-white text-sm font-medium">Unggah File Buku</label>
                <input type="file" id="file" name="file"
                    class="mt-1 p-5 border rounded-md w-full outline-none @error('file') error @enderror">
                @error('file')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-end mb-[100px]">
                <button type="submit"
                    class="bg-[#162B45] font-bold text-white px-4 py-2 rounded-md hover:bg-blue-700">Submit</button>
            </div>
        </div>

    </form>
@endsection
