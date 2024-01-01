<div class="flex justify-center items-center mt-[50px] mr-[300px] ml-[300px]">

  <a href="/tambah/buku" class="mx-300px mr-4 relative">
      <div class="p-8 text-center rounded-lg overflow-hidden transition duration-200 {{ request()->is('tambah/buku') ? 'bg-[#162B45]' : 'bg-[#4A91E8] hover:bg-[#162B45]' }}">
          <img src="/iconbook.png" alt="Gambar 1" class="w-full h-full p-[20px] object-cover">
      </div>
      <p class="text-center mt-2 text-xl font-bold mb-4 text-black">Buku</p>
  </a>

  <a href="/tambah/makalah" class="mr-4 relative hover:no-underline">
      <div
          class="p-8 text-center cursor-pointer rounded-lg overflow-hidden transition duration-200 {{ request()->is('tambah/makalah') ? 'bg-[#162B45]' : 'bg-[#4A91E8] hover:bg-[#162B45]' }}">
          <img src="/iconmakalah.png" alt="Gambar 1" class="w-full h-full p-[20px] object-cover">
      </div>
      <p class="text-center mt-2 text-xl font-bold mb-4 text-black">Makalah</p>
  </a>

  <a href="/tambah/artikel" class="mr-4 relative hover:no-underline">
      <div
          class="p-8 text-center cursor-pointer rounded-lg overflow-hidden transition duration-200 {{ request()->is('tambah/artikel') ? 'bg-[#162B45]' : 'bg-[#4A91E8] hover:bg-[#162B45]' }}">
          <img src="/iconartikel.png" alt="Gambar 1" class="w-full h-full p-[20px] object-cover">
      </div>
      <p class="text-center mt-2 text-xl font-bold mb-4 text-black">Artikel</p>
  </a>

  <a href="/tambah/prosiding" class="mx-300px relative hover:no-underline">
      <div
          class="p-8 text-center cursor-pointer rounded-lg overflow-hidden transition duration-200 {{ request()->is('tambah/prosiding') ? 'bg-[#162B45]' : 'bg-[#4A91E8] hover:bg-[#162B45]' }}">
          <img src="/iconprosiding.png" alt="Gambar 1" class="w-full h-full p-[20px] object-cover">
      </div>
      <p class="text-center mt-2 text-xl font-bold mb-4 text-black">Prosiding</p>
  </a>

</div>