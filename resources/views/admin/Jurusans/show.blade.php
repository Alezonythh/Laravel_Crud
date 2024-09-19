<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body >

<div class="container mx-auto max-w-screen-x1 ">

    <a href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
       
        <div class="flex flex-col justify-between p-4 leading-normal">

            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$jurusan->jurusan}}</p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$jurusan->detail}}</p>
        </div>

      
        <div class="flex items-center space-x-4 pt-6"> 
                <a href="../../" class="block text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" type="button">
                     Back
                </a>
            </div>
    </a>

</div>
</body>
</html>



