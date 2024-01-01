@extends('layouts.app')

@section('content')
    <div class="mt-[50px] w-full flex justify-center mb-6">
        <div class="flex max-w-screen-xl w-full">
            <img src="/makalah.png" alt="makalah" width="232" height="347" />
            <div class="ml-16">
                <table class="table-auto mb-8">
                    <tbody>
                        <tr>
                            <td class="text-gray-700 font-bold pr-4">Judul Artikel</td>
                            <td class="text-gray-700">: {{ $paper->title }}</td>
                        </tr>
                        <tr>
                            <td class="text-gray-700 font-bold pr-4">Penulis</td>
                            <td class="text-gray-700">: {{ $paper->author }}</td>
                        </tr>
                        <tr>
                            <td class="text-gray-700 font-bold pr-4">Nama Seminar/Konferensi/Simposium</td>
                            <td class="text-gray-700">: {{ $paper->seminar_name }}</td>
                        </tr>
                        <tr>
                            <td class="text-gray-700 font-bold pr-4">Penyelenggara Seminar/Konferensi/Simposium</td>
                            <td class="text-gray-700">: {{ $paper->penyelenggara }}</td>
                        </tr>
                        <tr>
                            <td class="text-gray-700 font-bold pr-4">Waktu Pelaksanaan Seminar/Konferensi/Simposium
                            </td>
                            <td class="text-gray-700">: {{ $paper->date }}</td>
                        </tr>
                    </tbody>
                </table>
                
                <a href="/makalah/{{ $paper->id }}/download" target="_blank">
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
            @if ($anotherPaper->isEmpty())
                <div class="text-center text-black">
                    <h1 class="text-xl font-bold">Tidak ada data</h1>
                </div>
            @endif
            <div class="grid grid-cols-5 gap-10">
                @foreach ($anotherPaper as $paper)
                    <a class="text-center" href="/makalah/{{ $paper->id }}">
                        <img src="/makalah.png" alt="makalah" class="w-full mb-2" />
                        <p class="font-medium text-white">{{ $paper->title }}</p>
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
                @foreach ($sameAuthor as $paper)
                    <a class="text-center" href="/makalah/{{ $paper->id }}">
                        <img src="/makalah.png" alt="makalah" class="w-full mb-2" />
                        <p class="font-medium text-white">{{ $paper->title }}</p>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
