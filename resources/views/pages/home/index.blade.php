@extends('layouts.main_layout')
@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid px-0">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                @foreach ($heroSection as $key => $item)
                    <li data-bs-target="#carouselId" data-bs-slide-to="{{ $key }}"
                        class="{{ $key == 0 ? 'active' : '' }}" aria-current="{{ $key == 0 ? 'true' : 'false' }}"
                        aria-label="Slide {{ $key }}"></li>
                @endforeach
            </ol>

            <div class="carousel-inner" role="listbox">
                @foreach ($heroSection as $key => $item)
                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                        <img src="{{ asset($item['img']) }}" class="img-fluid" alt="Slide {{ $key }}">
                        <div class="carousel-caption">
                            <div class="container carousel-content">
                                <h6 class="text-secondary h4 animated fadeInUp">{{ $item['headTitle'] }}</h6>
                                <h1 class="text-white display-1 mb-4 animated fadeInRight">{{ $item['titleDescription'] }}
                                </h1>
                                {{-- <p class="mb-4 text-white fs-5 animated fadeInDown">Lorem ipsum dolor sit amet elit. Sed
                                    efficitur quis purus ut interdum. Pellentesque aliquam dolor eget urna ultricies
                                    tincidunt.</p> --}}
                                <a href="" class="me-2"><button type="button"
                                        class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn1 animated fadeInLeft">Read
                                        More</button></a>
                                <a href="" class="ms-2"><button type="button"
                                        class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn2 animated fadeInRight">Contact
                                        Us</button></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!-- Carousel End -->

    <!-- Motto Start -->
    @include('components.home.motto')
    <!-- Motto End -->

    <!-- About Start -->
    @include('components.home.about-us')
    <!-- About End -->

    <!-- Our vision Start -->
    @include('components.home.our-vision')
    <!-- Our Vision End -->

    {{-- Our Mission Start --}}
    @include('components.home.our-mission')
    {{-- Our Mission Ends --}}

    {{-- Our Mission Start --}}
    @include('components.home.core-values')
    {{-- Our Mission Ends --}}
@endsection
