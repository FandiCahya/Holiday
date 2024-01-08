<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- Navbar --}}
    <nav class="navbar fixed-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    {{-- Content --}}
    

    {{-- Carousel ndusel ndusel --}}
    <div class="row">
        <div class="bd-example">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">

                <div class="carousel-inner row w-100 mx-auto">
                    {{-- foreach nunggu database --}}
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
                </div>

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
</body>
</html>
