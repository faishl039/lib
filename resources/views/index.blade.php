@extends('layouts.app')

@section('content')
    <div class="relative z-10 flex items-center justify-center">
        <div class="flex items-center w-1/2 p-1 mt-[-25px] mb-[-25px] rounded-lg bg-white shadow-md">
            <input type="text" placeholder="Masukkan kata kunci" class="flex-grow px-4 py-2 outline-none focus:outline-none" />
            <button type="submit" class="bg-blue-500 text-white p-2 rounded-lg cursor-pointer"> Search </button>
        </div>
    </div>

    <div class=" bg-blue-500">
        <div class="text-center text-black pt-10">
            <h1 class="text-2xl font-bold">BUKU TERLARIS</h1>
        </div>

        <div class="grid grid-cols-5 gap-10 p-10">
            <div class="text-center">
                <img src="/book.png" alt="buku" class="w-full mb-2" />
                <p class="font-medium text-white">Zero to One: Notes on Startups, or How to Build the Future</p>
            </div>

            <div class="text-center">
                <img src="/book.png" alt="buku" class="w-full mb-2" />
                <p class="font-medium text-white">Zero to One: Notes on Startups, or How to Build the Future</p>
            </div>

            <div class="text-center">
                <img src="/book.png" alt="buku" class="w-full mb-2" />
                <p class="font-medium text-white">Zero to One: Notes on Startups, or How to Build the Future</p>
            </div>

            <div class="text-center">
                <img src="/book.png" alt="buku" class="w-full mb-2" />
                <p class="font-medium text-white">Zero to One: Notes on Startups, or How to Build the Future</p>
            </div>

            <div class="text-center">
                <img src="/book.png" alt="buku" class="w-full mb-2" />
                <p class="font-medium text-white">Zero to One: Notes on Startups, or How to Build the Future</p>
            </div>
        </div>
    </div>

    <div class=" bg-[#FEFEFE]">
        <div class=" text-black ml-[40px] my-[15px]">
            <h1 class="text-2xl font-bold mb-4">BUKU</h1>
        </div>
    </div>

    <div class="grid grid-cols-5 gap-10 p-10 bg-blue-500">
        <div class="text-center">
            <img src="/book1.png" alt="buku" class="w-full mb-2" />
            <p class="font-medium text-white">The Practice of English Language Teaching</p>
        </div>

        <div class="text-center">
            <img src="/book1.png" alt="buku" class="w-full mb-2" />
            <p class="font-medium text-white">The Practice of English Language Teaching</p>
        </div>

        <div class="text-center">
            <img src="/book1.png" alt="buku" class="w-full mb-2" />
            <p class="font-medium text-white">The Practice of English Language Teaching</p>
        </div>

        <div class="text-center">
            <img src="/book1.png" alt="buku" class="w-full mb-2" />
            <p class="font-medium text-white">The Practice of English Language Teaching</p>
        </div>

        <div class="text-center">
            <img src="/book1.png" alt="buku" class="w-full mb-2" />
            <p class="font-medium text-white">The Practice of English Language Teaching</p>
        </div>
    </div>

    <div class=" bg-[#FEFEFE]">
        <div class=" text-black ml-[40px] my-[15px]">
            <h1 class="text-2xl font-bold mb-4">MAKALAH</h1>
        </div>
    </div>

    <div class="grid grid-cols-5 gap-10 p-10 bg-blue-500">
        <div class="text-center">
            <img src="/makalah.png" alt="buku" class="w-full mb-2" />
            <p class="font-medium text-white">Dampak Covid-19 Terhadap Pendidikan di Indonesia</p>
        </div>

        <div class="text-center">
            <img src="/makalah.png" alt="buku" class="w-full mb-2" />
            <p class="font-medium text-white">Dampak Covid-19 Terhadap Pendidikan di Indonesia</p>
        </div>

        <div class="text-center">
            <img src="/makalah.png" alt="buku" class="w-full mb-2" />
            <p class="font-medium text-white">Dampak Covid-19 Terhadap Pendidikan di Indonesia</p>
        </div>

        <div class="text-center">
            <img src="/makalah.png" alt="buku" class="w-full mb-2" />
            <p class="font-medium text-white">Dampak Covid-19 Terhadap Pendidikan di Indonesia</p>
        </div>

        <div class="text-center">
            <img src="/makalah.png" alt="buku" class="w-full mb-2" />
            <p class="font-medium text-white">Dampak Covid-19 Terhadap Pendidikan di Indonesia</p>
        </div>
    </div>

    <div class=" bg-[#FEFEFE]">
        <div class=" text-black ml-[40px] my-[15px]">
            <h1 class="text-2xl font-bold mb-4">ARTIKEL</h1>
        </div>
    </div>

    <div class="grid grid-cols-5 gap-10 p-10 bg-blue-500">
        <div class="text-center">
            <img src="/artikel.png" alt="buku" class="w-full mb-2" />
            <p class="font-medium text-white">
                Software Konsultasi Seleksi Karir Siswa menggunakan Metode Certainy Factor
            </p>
        </div>

        <div class="text-center">
            <img src="/artikel.png" alt="buku" class="w-full mb-2" />
            <p class="font-medium text-white">
                Software Konsultasi Seleksi Karir Siswa menggunakan Metode Certainy Factor
            </p>
        </div>

        <div class="text-center">
            <img src="/artikel.png" alt="buku" class="w-full mb-2" />
            <p class="font-medium text-white">
                Software Konsultasi Seleksi Karir Siswa menggunakan Metode Certainy Factor
            </p>
        </div>

        <div class="text-center">
            <img src="/artikel.png" alt="buku" class="w-full mb-2" />
            <p class="font-medium text-white">
                Software Konsultasi Seleksi Karir Siswa menggunakan Metode Certainy Factor
            </p>
        </div>

        <div class="text-center">
            <img src="/artikel.png" alt="buku" class="w-full mb-2" />
            <p class="font-medium text-white">
                Software Konsultasi Seleksi Karir Siswa menggunakan Metode Certainy Factor
            </p>
        </div>
    </div>

    <div class=" bg-[#FEFEFE]">
        <div class=" text-black ml-[40px] my-[15px]">
            <h1 class="text-2xl font-bold mb-4">PROSIDING</h1>
        </div>
    </div>

    <div class="grid grid-cols-5 gap-10 p-10 bg-blue-500">
        <div class="text-center">
            <img src="/prosiding.png" alt="buku" class="w-full mb-2" />
            <p class="font-medium text-white">
                Pemanfaatan LKS Digital untuk Meningkatkan Hasil Belajar KKPI di SMK Negeri 1 Gesi Kabupaten Sragen
            </p>
        </div>

        <div class="text-center">
            <img src="/prosiding.png" alt="buku" class="w-full mb-2" />
            <p class="font-medium text-white">
                Pemanfaatan LKS Digital untuk Meningkatkan Hasil Belajar KKPI di SMK Negeri 1 Gesi Kabupaten Sragen
            </p>
        </div>

        <div class="text-center">
            <img src="/prosiding.png" alt="buku" class="w-full mb-2" />
            <p class="font-medium text-white">
                Pemanfaatan LKS Digital untuk Meningkatkan Hasil Belajar KKPI di SMK Negeri 1 Gesi Kabupaten Sragen
            </p>
        </div>

        <div class="text-center">
            <img src="/prosiding.png" alt="buku" class="w-full mb-2" />
            <p class="font-medium text-white">
                Pemanfaatan LKS Digital untuk Meningkatkan Hasil Belajar KKPI di SMK Negeri 1 Gesi Kabupaten Sragen
            </p>
        </div>

        <div class="text-center">
            <img src="/prosiding.png" alt="buku" class="w-full mb-2" />
            <p class="font-medium text-white">
                Pemanfaatan LKS Digital untuk Meningkatkan Hasil Belajar KKPI di SMK Negeri 1 Gesi Kabupaten Sragen
            </p>
        </div>
    </div>
@endsection
