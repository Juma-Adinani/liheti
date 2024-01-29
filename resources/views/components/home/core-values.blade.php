<div class="container-fluid services py-5 mb-5">
    <div class="container">
        <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
            <h5 class="text-primary">Our Core Values</h5>
            <h1>Our Core Values: Guiding Principles for Excellence</h1>
        </div>
        <div class="row g-5 services-inner">
            @foreach ($coreValues as $value)
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                    <div class="services-item bg-light">
                        <div class="p-4 text-center services-content">
                            <div class="services-content-icon">
                                <i class="fa fa-{{ $value['icon'] }} fa-7x mb-4 text-primary"></i>
                                <h4 class="mb-3">{{ $value['title'] }}</h4>
                                <p class="mb-4">{{ $value['description'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
