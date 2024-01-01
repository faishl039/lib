@extends('layouts.app')

@section('content')
    <div class="mt-[50px] w-full flex justify-center mb-6">
        <div class="flex max-w-screen-xl w-full">
            <img src="/uploads/{{ $book->cover_image }}" alt={{ $book->title }} width="232" height="347" />
            <div class="ml-16">
                <table class="table-auto mb-8">
                    <tbody>
                        <tr>
                            <td class="text-gray-700 font-bold pr-4">Judul Buku</td>
                            <td class="text-gray-700">: {{ $book->title }}</td>
                        </tr>
                        <tr>
                            <td class="text-gray-700 font-bold pr-4">Penulis Buku</td>
                            <td class="text-gray-700">: {{ $book->author }}</td>
                        </tr>
                        <tr>
                            <td class="text-gray-700 font-bold pr-4">ISBN</td>
                            <td class="text-gray-700">: {{ $book->isbn }}</td>
                        </tr>
                        <tr>
                            <td class="text-gray-700 font-bold pr-4">Penerbit</td>
                            <td class="text-gray-700">: {{ $book->publisher }}</td>
                        </tr>
                        <tr>
                            <td class="text-gray-700 font-bold pr-4">Jumlah Halaman
                            </td>
                            <td class="text-gray-700">: {{ $book->total_pages }}</td>
                        </tr>
                    </tbody>
                </table>
                
                <a href="/buku/{{ $book->id }}/download" target="_blank">
                    <img width="50" height="50" alt="pdf-download" src="/download.png" />
                </a>
            </div>
        </div>
    </div>

    <div class="px-10 py-4 bg-white flex justify-center">
        <div class="flex max-w-screen-xl w-full">
            <div class="font-bold text-2xl">Mungkin Kamu Juga Suka</div>
        </div>
    </div>

    <div class="flex justify-center bg-blue-500 py-10">
        <div class="w-full max-w-screen-xl">
            @if ($anotherBook->isEmpty())
                <div class="text-center text-black">
                    <h1 class="text-xl font-bold">Tidak ada data</h1>
                </div>
            @endif
            <div class="grid grid-cols-5 gap-10">
                @foreach ($anotherBook as $book)
                    <a class="text-center" href="/buku/{{ $book->id }}">
                        <img src="/uploads/{{ $book->cover_image }}" alt="{{ $book->title }}" class="w-full mb-2" />
                        <p class="font-medium text-white">{{ $book->title }}</p>
                    </a>
                @endforeach
            </div>
        </div>
    </div>

    <div class="px-10 py-4 bg-white flex justify-center">
        <div class="flex max-w-screen-xl w-full">
            <div class="font-bold text-2xl">Lainya dari penulis ini</div>
        </div>
    </div>

    <div class="flex justify-center bg-blue-500 py-10">
        <div class="w-full max-w-screen-xl">
            @if ($sameAuthor->isEmpty())
                <div class="text-center text-black">
                    <h1 class="text-xl font-bold">Tidak ada data</h1>
                </div>
            @endif

            <div class="grid grid-cols-5 gap-10">
                @foreach ($sameAuthor as $book)
                    <a class="text-center" href="/buku/{{ $book->id }}">
                        <img src="/uploads/{{ $book->cover_image }}" alt="{{ $book->title }}" class="w-full mb-2" />
                        <p class="font-medium text-white">{{ $book->title }}</p>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
