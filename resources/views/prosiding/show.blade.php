@extends('layouts.app')

@section('content')
    <div class="mt-[50px] w-full flex justify-center mb-6">
        <div class="flex max-w-screen-xl w-full">
            <img src="/prosiding.png" alt="prosiding" width="232" height="347" />
            <div class="ml-16">
                <table class="table-auto mb-8">
                    <tbody>
                        <tr>
                            <td class="text-gray-700 font-bold pr-4">Judul Artikel</td>
                            <td class="text-gray-700">: {{ $prosiding->title }}</td>
                        </tr>
                        <tr>
                            <td class="text-gray-700 font-bold pr-4">Penulis</td>
                            <td class="text-gray-700">: {{ $prosiding->author }}</td>
                        </tr>
                        <tr>
                            <td class="text-gray-700 font-bold pr-4">Nama Seminar/Konferensi/Simposium</td>
                            <td class="text-gray-700">: {{ $prosiding->seminar_name }}</td>
                        </tr>
                        <tr>
                            <td class="text-gray-700 font-bold pr-4">Penyelenggara Seminar/Konferensi/Simposium</td>
                            <td class="text-gray-700">: {{ $prosiding->penyelenggara }}</td>
                        </tr>
                        <tr>
                            <td class="text-gray-700 font-bold pr-4">Waktu Pelaksanaan Seminar/Konferensi/Simposium
                            </td>
                            <td class="text-gray-700">: {{ $prosiding->date }}</td>
                        </tr>
                        <tr>
                            <td class="text-gray-700 font-bold pr-4">ISBN/ISSN</td>
                            <td class="text-gray-700">: {{ $prosiding->isbn }}</td>
                        </tr>
                    </tbody>
                </table>
                
                <a href="/prosiding/{{ $prosiding->id }}/download" target="_blank">
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
            @if ($anotherProsiding->isEmpty())
                <div class="text-center text-black">
                    <h1 class="text-xl font-bold">Tidak ada data</h1>
                </div>
            @endif
            <div class="grid grid-cols-5 gap-10">
                @foreach ($anotherProsiding as $prosiding)
                    <a class="text-center" href="/prosiding/{{ $prosiding->id }}">
                        <img src="/prosiding.png" alt="buku" class="w-full mb-2" />
                        <p class="font-medium text-white">{{ $prosiding->title }}</p>
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
                @foreach ($sameAuthor as $prosiding)
                    <a class="text-center" href="/prosiding/{{ $prosiding->id }}">
                        <img src="/prosiding.png" alt="buku" class="w-full mb-2" />
                        <p class="font-medium text-white">{{ $prosiding->title }}</p>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
