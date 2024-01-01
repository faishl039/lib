<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" href="%sveltekit.assets%/favicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />
    @vite('resources/css/app.css')
</head>

<body>
    <div class="relative min-h-screen w-screen">
        <div class="fixed top-0 left-0 z-20 w-full flex items-center justify-between bg-[#162B45] text-white pr-4 pl-4 h-[80px]">
            <div class="text-white text-lg font-semibold">Sistem Manajemen [apa] Universitas sauco</div>
            <div class="menu flex space-x-4">
                <a href="/" class="text-white text-lg font-semibold">Beranda</a>
                <a href="/tambah/buku" class="text-white text-lg font-semibold">Tambah Karya</a>
                <a href="/tentang-kami" class="text-white text-lg font-semibold">Tentang Kami</a>
            </div>
        </div>

        <main id="container" class="absolute left-0 top-[80px] w-full h-full">
            @yield('content')
        </main>
    </div>
</body>

</html>
