@extends('layouts.app')

@section('content')
    <x-create-navigation />

    <form class="bg-[#4A91E8] flex items-center justify-center" method="POST" enctype="multipart/form-data">
        @csrf
        <div class= "w-1/2 mt-[50px]">
            <div class="form-group mb-5">
                <input type="text" id="title" name="title" placeholder="Judul Artikel"
                    class="@error('title') error @enderror" value="{{ old('title') }}">
                @error('title')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group mb-5">
                <input type="text" id="author" name="author" placeholder="Penulis"
                    class="@error('author') error @enderror" value="{{ old('author') }}">
                @error('author')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group mb-5">
                <input type="text" id="seminar_name" name="seminar_name" placeholder="Nama Seminar/Konferensi/Simposium"
                    value="{{ old('seminar_name') }}" class="@error('seminar_name') error @enderror">
                @error('seminar_name')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group mb-5">
                <input type="text" id="penyelenggara" name="penyelenggara" value="{{ old('penyelenggara') }}"
                    placeholder="Penyelenggara Seminar/Konferensi/Simposium"
                    class="@error('penyelenggara') error @enderror">
                @error('penyelenggara')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group mb-5">
                <input type="text" id="date" name="date" value="{{ old('date') }}" onfocus="(this.type='date')" onblur="(this.type='text')"
                    placeholder="Waktu Pelaksanaan Seminar/Konferensi/Simposium" class="@error('date') error @enderror">
                @error('date')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group mb-5">
                <input type="text" id="isbn" name="isbn" value="{{ old('isbn') }}" placeholder="ISBN/ISSN"
                    class="@error('isbn') error @enderror">
                @error('isbn')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-5">
                <label for="file" class="block text-white text-sm font-medium">Unggah File Prosiding</label>
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
