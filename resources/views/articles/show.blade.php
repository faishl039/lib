@extends('layouts.app')

@section('content')
    <div class="mt-[50px] w-full flex justify-center mb-6">
        <div class="flex max-w-screen-xl w-full">
            <img src="/artikel.png" alt="artikel" width="232" height="347" />
            <div class="ml-16">
                <table class="table-auto mb-8">
                    <tbody>
                        <tr>
                            <td class="text-gray-700 font-bold pr-4">Judul Artikel</td>
                            <td class="text-gray-700">: {{ $article->title }}</td>
                        </tr>
                        <tr>
                            <td class="text-gray-700 font-bold pr-4">Penulis</td>
                            <td class="text-gray-700">: {{ $article->author }}</td>
                        </tr>
                        <tr>
                            <td class="text-gray-700 font-bold pr-4">Nama Jurnal</td>
                            <td class="text-gray-700">: {{ $article->journal_name }}</td>
                        </tr>
                        <tr>
                            <td class="text-gray-700 font-bold pr-4">Volume Jurnal</td>
                            <td class="text-gray-700">: {{ $article->journal_volume }}</td>
                        </tr>
                        <tr>
                            <td class="text-gray-700 font-bold pr-4">Nomor Jurnal (Opsional)</td>
                            <td class="text-gray-700">: {{ $article->journal_number }}</td>
                        </tr>
                        <tr>
                            <td class="text-gray-700 font-bold pr-4">Halaman</td>
                            <td class="text-gray-700">: {{ $article->page }}</td>
                        </tr>
                        <tr>
                            <td class="text-gray-700 font-bold pr-4">ISSN</td>
                            <td class="text-gray-700">: {{ $article->issn }}</td>
                        </tr>
                        <tr>
                            <td class="text-gray-700 font-bold pr-4">Penerbit</td>
                            <td class="text-gray-700">: {{ $article->publisher }}</td>
                        </tr>
                        <tr>
                            <td class="text-gray-700 font-bold pr-4">DOI (Opsional)</td>
                            <td class="text-gray-700">: {{ $article->doi }}</td>
                        </tr>
                    </tbody>
                </table>

                <a href="/artikel/{{ $article->id }}/download" target="_blank">
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
            @if ($sameAuthor->isEmpty())
                <div class="text-center text-black">
                    <h1 class="text-xl font-bold">Tidak ada data</h1>
                </div>
            @endif
            <div class="grid grid-cols-5 gap-10">
                @foreach ($anotherArticle as $article)
                    <a class="text-center" href="/artikel/{{ $article->id }}">
                        <img src="/artikel.png" alt="artikel" class="w-full mb-2" />
                        <p class="font-medium text-white">{{ $article->title }}</p>
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
                @foreach ($sameAuthor as $article)
                    <a class="text-center" href="/artikel/{{ $article->id }}">
                        <img src="/artikel.png" alt="artikel" class="w-full mb-2" />
                        <p class="font-medium text-white">{{ $article->title }}</p>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
