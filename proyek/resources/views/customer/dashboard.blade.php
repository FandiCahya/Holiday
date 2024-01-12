<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>heheha</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    {{-- Alpine js --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    {{-- Font Aweasome Icon --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    {{-- Navbar --}}
    <nav class="navbar fixed-top">
        <div  class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Home</h5>
                    <button type="button" class="btn btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>

                {{-- Alpine Js untuk sub menu  --}}
                <div x-data="{data:false}" class="offcanvas-body">
                    <div>
                        <button @click="data = !data" class="nav-item" type="button" >
                            Kategori
                        </button>
                        <div x-show="data"
                        x-transition:enter="transition ease-out duration-200 "
                        x-transition:enter-start="opacity-0  "
                        x-transition:enter-end="opacity-100 "
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="opacity-200 "
                        x-transition:leave-end="opacity-0 "
                        class="ml-5">
                            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page"  href="#Package"><i class="fa fa-microphone" style="font-size:24px;"></i> Mua</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page"  href="#Package">Dekorasi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page"  href="#Package"><i class="fa fa-volume-up" style="font-size:24px;"></i> Sound System</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page"  href="#Package"><i class="fa fa-cutlery" style="font-size:24px;"></i> Cathering</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page"  href="#Package"><i class="fa fa-address-card" style="font-size:24px;"></i> Wedding Organizer</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page"  href="#Package"><i class="fa fa-camera" style="font-size:24px;"></i> Photography</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active text-2xl" aria-current="page"  href="#Package"><i class="fa fa-envelope" style="font-size:24px;"></i> Undangan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page"  href="#Package"><i class="fa fa-glass" style="font-size:24px;"></i> Souvenir</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    

                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page"  href="#Package">Layanan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page"  href="#Alamat">Alamat</a>
                        </li>
                        <li class="nav-item">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    {{-- Rekomendasi --}}
    <div class="bg-white mb-10">
        <div class="pt-6">
            <div class="flex justify-center items-center">
                <h1 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Rekomendasi</h1>
            </div>
          <div class="mx-auto mt-6 max-w-2xl sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:gap-x-8 lg:px-8">
            <div class=" lg:grid lg:grid-cols-1 lg:gap-y-8">
              <div class="aspect-h-2 aspect-w-3 overflow-hidden rounded-lg">
                <img src="https://cdn.idntimes.com/content-images/post/20200811/cover-artikel-e3f50a783031ab9a485279b0f6036729_600x400.png" alt="Model wearing plain black basic tee." class="h-full w-full object-cover object-center">
              </div>
            </div>
            <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8 border border-box p-4 rounded-md">
                <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-2xl">Wedding Make Up Paket</h1>
                <div class="mt-6">
                    <h3 class="sr-only">Reviews</h3>
                    <div class="flex items-center">
                      <div class="flex items-center">
                        <!-- Active: "text-gray-900", Default: "text-gray-200" -->
                        <svg class="text-gray-900 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                        </svg>
                        <svg class="text-gray-900 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                        </svg>
                        <svg class="text-gray-900 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                        </svg>
                        <svg class="text-gray-900 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                        </svg>
                        <svg class="text-gray-200 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                        </svg>
                      </div>
                      <p class="sr-only">4 out of 5 stars</p>

                    </div>
                </div>
                <p>Rp 5.000.000,00</p>
                <div class="mt-auto flex justify-end">
                    <a href="#" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">Lihat Detail</a>
                </div>
            </div>
          </div>

        </div>
    </div>


    {{-- Carousel ndusel ndusel --}}
    <div class="row">
        <div class="flex justify-center items-center">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Pilih Paket Wedding Impianmu</h1>
        </div>
        <div class="bd-example">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">

                {{-- <div class="carousel-inner row w-100 mx-auto">
                    @foreach($products->chunk(4) as $productCollections)
                        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">

                            <div class="row">
                                @foreach($productCollections as $product)
                                 <div class="col mx-1 my-5">
                                    <img class="img-fluid" width="200" heibght="350" src="{{ asset('uploads/product/' . $product->image) }}" alt="{{ $product->name }}">
                                 </div>
                                @endforeach
                            </div>

                        </div>
                    @endforeach
                </div> --}}

                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

    {{-- Footer --}}
    {{-- failed <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
