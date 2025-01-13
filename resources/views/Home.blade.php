<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    @vite('resources/css/app.css')
    <title>Document</title>

</head>
<body>
<div class="hero bg-white min-h-screen">
  <div class="hero-content flex-col lg:flex-row-reverse">
    <img
      src="https://i.pinimg.com/474x/74/c5/b8/74c5b81f2a2eb8616e55df86b82edbfb.jpg"
     />
    <div>
      <h1 class="text-5xl font-bold text-black">Hello Felles! SIARIS</h1>
      <p class="py-6">
       Aplikasi Pencari Oleh Oleh Khas Makassar
       disini Kamu Bisa Cari Oleh Oleh yang kamu inginkan.
      </p>

      <a class="group relative inline-block focus:outline-none focus:ring" href="{{ route('register') }}">
      <span
    class="absolute inset-0 translate-x-1.5 translate-y-1.5 bg-green-500 transition-transform group-hover:translate-x-0 group-hover:translate-y-0"
  ></span>

  <span
    class="relative inline-block border-2 border-current px-8 py-3 text-sm font-bold uppercase tracking-widest text-black group-active:text-opacity-75"
  >
    Sign up Segera
  </span>
      </a>

    </div>
  </div>
</div>










<!-- Team -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto bg-white">
  <!-- Title -->
  <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
    <h2 class="text-2xl font-bold md:text-4xl md:leading-tight dark:text-white text-black">Meet the Member Group</h2>
    <p class="mt-1 text-black dark:text-neutral-400">Kelompok 1 PBL</p>
  </div>
  <!-- End Title -->

  <!-- Grid -->
  <div class="grid grid-cols-2 lg:grid-cols-3 gap-8 md:gap-12">
    <div class="flex flex-col sm:flex-row sm:items-center gap-3 sm:gap-4 ">
      <img class="w-24 rounded-full" src="https://i.pinimg.com/474x/1f/97/c2/1f97c2b126afc0cc179294ca7e29f74c.jpg" alt="Avatar">

      <div class="grow">
        <div>
          <h3 class="font-medium text-gray-800 dark:text-neutral-200">
            Muhammad Fajar Sadiq
          </h3>
          <p class="mt-1 text-xs uppercase text-gray-500 dark:text-neutral-500">
            Backend Developer
          </p>
        </div>

      </div>
    </div>
    <!-- End Col -->

    <div class="flex flex-col sm:flex-row sm:items-center gap-3 sm:gap-4">
      <img class="w-24 rounded-full" src="https://i.pinimg.com/474x/4f/d2/de/4fd2dedfebdc0d388d7f0d8c0e4f2c87.jpg" alt="Avatar">

      <div class="grow">
        <div>
          <h3 class="font-medium text-gray-800 dark:text-neutral-200">
            Muhammad Athaillah Baharuddin
          </h3>
          <p class="mt-1 text-xs uppercase text-gray-500 dark:text-neutral-500">
            Front-end Developer
          </p>
        </div>
      </div>
    </div>
    <!-- End Col -->

    <div class="flex flex-col sm:flex-row sm:items-center gap-3 sm:gap-4">
      <img class="w-24 rounded-full" src="https://i.pinimg.com/736x/a6/85/ac/a685aca65465a97fdbeb881eb1e7bd0e.jpg" alt="Avatar">

      <div class="grow">
        <div>
          <h3 class="font-medium text-gray-800 dark:text-neutral-200">
            Muhammad Iqbal Azzahir
          </h3>
          <p class="mt-1 text-xs uppercase text-gray-500 dark:text-neutral-500">
            Database Administrator
          </p>
        </div>
      </div>
    </div>
    <!-- End Col -->












</body>
</html>
