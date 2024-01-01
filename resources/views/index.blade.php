@extends('layouts.app')

@section('content')
    <div class="bg-blue-500 w-full flex justify-center">
        <div class="w-full max-w-screen-xl">
            
            <form class="mt-8 flex items-center justify-center" method="GET">
                <div class="flex items-center w-1/2 p-1 rounded-lg bg-white shadow-md">
                    <input type="text" id="search" name="search" placeholder="Masukkan kata kunci" value="{{ request()->query('search') }}"
                        class="flex-grow px-4 py-2 outline-none focus:outline-none" />
                    <button type="submit" class="bg-blue-500 text-white p-2 rounded-lg"> Search </button>
                </div>
            </form>

            <div class="text-center text-black pt-10">
                <h1 class="text-2xl font-bold">BUKU TERLARIS</h1>
            </div>

            <div class="grid grid-cols-5 gap-10 p-10">
                @foreach ($popularBooks as $bestBook)
                    <a class="text-center" href="/buku/{{ $bestBook->id }}">
                        <img src="/uploads/{{ $bestBook->cover_image }}" alt="buku" class="w-full mb-2" />
                        <p class="font-medium text-white">
                            {{ $bestBook->title }}
                        </p>
                    </a>
                @endforeach
            </div>


            <div class=" bg-[#FEFEFE]">
                <div class=" text-black ml-[40px] my-[15px]">
                    <h1 class="text-2xl font-bold mb-4">BUKU</h1>
                </div>
            </div>

            {{-- if books empty show empty text  --}}
            @if ($books->isEmpty())
                <div class="text-center text-black pt-10">
                    <h1 class="text-2xl font-bold">Tidak ada buku</h1>
                </div>
            @endif

            <div class="grid grid-cols-5 gap-10 p-10">
                @foreach ($books as $book)
                    <a class="text-center" href="/buku/{{ $book->id }}">
                        <img src="/uploads/{{ $book->cover_image }}" alt="buku" class="w-full mb-2" />
                        <p class="font-medium text-white">
                            {{ $book->title }}
                        </p>
                    </a>
                @endforeach
            </div>

            <div class=" bg-[#FEFEFE]">
                <div class=" text-black ml-[40px] my-[15px]">
                    <h1 class="text-2xl font-bold mb-4">MAKALAH</h1>
                </div>
            </div>

            {{-- if papers empty show empty text  --}}
            @if ($papers->isEmpty())
                <div class="text-center text-black pt-10">
                    <h1 class="text-2xl font-bold">Tidak ada makalah</h1>
                </div>
            @endif

            <div class="grid grid-cols-5 gap-10 p-10">
                @foreach ($papers as $paper)
                    <a class="text-center" href="/makalah/{{ $paper->id }}">
                        <img src="/makalah.png" alt="buku" class="w-full mb-2" />
                        <p class="font-medium text-white">
                            {{ $paper->title }}
                        </p>
                    </a>
                @endforeach
            </div>

            <div class=" bg-[#FEFEFE]">
                <div class=" text-black ml-[40px] my-[15px]">
                    <h1 class="text-2xl font-bold mb-4">ARTIKEL</h1>
                </div>
            </div>

            {{-- if papers empty show empty text  --}}
            @if ($articles->isEmpty())
                <div class="text-center text-black pt-10">
                    <h1 class="text-2xl font-bold">Tidak ada artikel</h1>
                </div>
            @endif

            <div class="grid grid-cols-5 gap-10 p-10">
                @foreach ($articles as $article)
                    <a class="text-center" href="/artikel/{{ $article->id }}">
                        <img src="/artikel.png" alt="buku" class="w-full mb-2" />
                        <p class="font-medium text-white">
                            {{ $article->title }}
                        </p>
                    </a>
                @endforeach
            </div>

            <div class=" bg-[#FEFEFE]">
                <div class=" text-black ml-[40px] my-[15px]">
                    <h1 class="text-2xl font-bold mb-4">PROSIDING</h1>
                </div>
            </div>

            {{-- if papers empty show empty text  --}}
            @if ($prosidings->isEmpty())
                <div class="text-center text-black pt-10">
                    <h1 class="text-2xl font-bold">Tidak ada prosiding</h1>
                </div>
            @endif

            <div class="grid grid-cols-5 gap-10 p-10">
                @foreach ($prosidings as $prosiding)
                    <a class="text-center" href="/prosiding/{{ $prosiding->id }}">
                        <img src="/prosiding.png" alt="buku" class="w-full mb-2" />
                        <p class="font-medium text-white">
                            {{ $prosiding->title }}
                        </p>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
