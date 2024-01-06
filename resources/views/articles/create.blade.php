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
                <input type="text" id="journal_name" name="journal_name" placeholder="Nama Jurnal"
                    value="{{ old('journal_name') }}" class="@error('journal_name') error @enderror">
                @error('journal_name')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group mb-5">
                <input type="text" id="journal_Volume" name="journal_volume" placeholder="Volume Jurnal"
                    value="{{ old('journal_volume') }}" class="@error('journal_volume') error @enderror">
                @error('journal_volume')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group mb-5">
                <input type="text" id="journal_number" name="journal_number" placeholder="Nomor Jurnal"
                    value="{{ old('journal_number') }}" class="@error('journal_number') error @enderror">
                @error('journal_number')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group mb-5">
                <input type="number" id="page" name="page" placeholder="Halaman" value="{{ old('page') }}"
                    class="@error('page') error @enderror">
                @error('page')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group mb-5">
                <input type="text" id="issn" name="issn" placeholder="ISSN" value="{{ old('issn') }}"
                    class="@error('issn') error @enderror">
                @error('issn')
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
                <input type="text" id="doi" name="doi" placeholder="DOI (Opsional)"
                    value="{{ old('doi') }}" class="@error('doi') error @enderror">
                @error('doi')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-5">
                <label for="file" class="block text-white text-sm font-medium">Unggah File Artikel</label>
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
