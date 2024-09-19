<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>

<div class="container mx-auto "> 
<section class="bg-white dark:bg-gray-900 flex mt-20">
        <div class="py-6 px-4 mx-auto max-w-2xl lg:py-8">
            <h1 class="mb-2 text-xl font-bold leading-none text-gray-900 dark:text-white">{{ $siswas->nama_lengkap }}</h1>
            <dl class="pt-3">
                <p class="text-black-200 pb-1">Tinggal : <span class="text-black-200">{{ $siswas->tempat_lahir }}</span></p>
                <p class="text-black-200 pb-1">Alamat : <span class="text-black-200">{{ $siswas->alamat }}</span></p>
                <p class="text-black-200 pb-1">Tanggal : <span class="text-black-200">{{ $siswas->tanggal_lahir }}</span></p>
                <p class="text-black-200 pb-1">Asal Sekolah : <span class="text-black-200">{{ $siswas->asal_sekolah }}</span></p>
                <p class="text-black-200">Email : <span class="text-black-200">{{ $siswas->email }}</span></p>
                <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="{{asset('/storage/siswas/'.
                $siswas->foto)}}" class="rounded" style="width: 150px" alt="">
                                <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="{{asset('/storage/siswas/'.
                $siswas->foto)}}" class="rounded" style="width: 150px" alt="">

            </dl>

            <div class="flex items-center space-x-4 pt-6"> 
                <a href="../../" class="block text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" type="button">
                     Back
                </a>
            </div>
        </div>
    </section>
</div>



</body>
</html>