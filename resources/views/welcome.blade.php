<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body >
<div class="container mx-auto">
        <div class="mb-4 grid gap-4 sm:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 mt-20 pt-20">
        @forelse ($jurusan as $show)
        <a href="{{ route('jurusans.show', $show->id) }}">
            <div class="rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                <div class="h-56 w-full">
                    <img class="mx-auto h-full dark:hidden" src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-front.svg" alt="" />
                    <img class="mx-auto hidden h-full dark:block" src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-front-dark.svg" alt="" />
                </div>
                <div class="pt-6 text-center text-black">
                    {{ $show->jurusan }}
                </div>
            </div>
        </a>
        @empty
        <div class="text-center">
        Data Products belum Tersedia
        </div>       
        @endforelse
        </div>
        <br><br><br>
    <div class="text-center pt-10">
        <a href="{{ route('siswas.create') }}" class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-md px-5 lg:px-5 py-3 lg:py-3 mr-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">Daftar Siswa</a>
    </div>
    <br><br><br><br>

    <div class="overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>

                        <th scope="col" class="px-4 py-3">Nama Lengkap</th>
                        <th scope="col" class="px-4 py-3">Tempat Tinggal</th>
                        <th scope="col" class="px-4 py-3">Tanggal Lahir</th>
                        <th scope="col" class="px-4 py-3">Alamat</th>
                        <th scope="col" class="px-4 py-3">Asal Sekolah</th>
                        <th scope="col" class="px-4 py-3">Email</th>
                        <th scope="col" class="px-4 py-3">Foto</th>
                        <th scope="col" class="px-4 py-3">Scan KK</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($siswa as $show)
                        <tr class="border-b dark:border-gray-700">
                        <td class="px-4 py-3">{{ $show->nama_lengkap }}</td>
                        <td class="px-4 py-3">{{ $show->tempat_lahir}}</td>
                        <td class="px-4 py-3">{{$show->tanggal_lahir}}</td>
                       
                        <td class="px-4 py-3">{{ $show['alamat'] }}</td>
                        <td class="px-4 py-3">{{ $show['asal_sekolah'] }}</td>
                        <td class="px-4 py-3">{{ $show['email'] }}</td>
                        <td class="px-4 py-3">
                                <img src="{{asset('/storage/siswas/'.
                                $show->foto)}}" class="rounded" style="width: 150px">
                        <td class="px-4 py-3">
                                <img src="{{asset('/storage/siswas/'.
                                $show->foto)}}" class="rounded" style="width: 150px">
                            </td>
                        <td class="px-4 py-3 flex items-center justify-end">
                        
                        </td>
                        

                            @empty
                            <div class="alert alert-danger">
                                Data Products belum Tersedia
                            </div>
                            @endforelse
                        </tr>
               
                    </tbody>
                </table>
            </div>
    
    </body>
</html>
