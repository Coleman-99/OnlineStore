@extends('layout')

@section('content')
    <!-- Shop Detail Start -->
    <div class="container-fluid pb-5 bg-light">
        <div class="row px-xl-5">
            <!--Corasel-->
            <div class="col-lg-5 mb-30">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/images/ColdWar.png" class="d-block w-100" alt="..." />
                        </div>
                        <div class="carousel-item">
                            <img src="/images/ColdWar.png" class="d-block w-100" alt="..." />
                        </div>
                        <div class="carousel-item">
                            <img src="/images/ColdWar.png" class="d-block w-100" alt="..." />
                        </div>
                    </div>
                </div>
            </div>
            <!--Corasel end-->

            <div class="col-lg-7 h-auto mb-30">
                <div class="h-100 bg-light p-30">
                    <h3>{{ $single->name }}</h3>
                    <div class="d-flex mb-3">
                        <div class="text-primary mr-2">
                            <img src={{ asset('/stars/star_0.png') }} alt="" />
                            <img src={{ asset('/stars/star_0.png') }} alt="" />
                            <img src={{ asset('/stars/star_0.png') }} alt="" />
                            <img src={{ asset('/stars/star_0.png') }} alt="" />
                            <img src={{ asset('/stars/star_0.png') }} alt="" />
                        </div>
                        <small class="pt-1">(99 {{ $single->likes }})</small>
                    </div>
                    <h3 class="font-weight-semi-bold mb-4">${{ $single->price }}</h3>
                    <p class="mb-4">
                        {{ $single->description }}
                    </p>

                    <div class="d-flex align-items-center mb-4 pt-2">
                        <div class="input-group quantity mr-3" style="width: 130px">
                            <div class="input-group-btn">
                                <button class="btn btn-primary btn-minus">
                                    <i class="fa fa-minus"></i>
                                </button>
                            </div>
                            <input type="text" class="form-control bg-secondary border-0 text-center" value="1" />
                            <div class="input-group-btn">
                                <button class="btn btn-primary btn-plus">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                        <button class="btn btn-primary px-3">
                            <i class="fa fa-shopping-cart mr-1"></i> Add To Cart
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row px-xl-5">
            <!--Nav tab-->
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                        type="button" role="tab" aria-controls="nav-home" aria-selected="true">
                        Description
                    </button>
                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                        type="button" role="tab" aria-controls="nav-profile" aria-selected="false">
                        Review
                    </button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"
                    tabindex="0">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa
                    voluptatum quis vitae ipsum. Accusamus, facere.
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"
                    tabindex="0">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia
                    pariatur saepe aspernatur minus architecto rem.
                </div>
            </div>
            <!--Nav tab end-->
        </div>
    </div>
    <!-- Shop Detail End -->

    <!--Other likes start-->

    <div class="container-fluid px-xl-5 bg-light">
        <h2 class="text-secondary">You may also like</h2>
        <hr />
        <!--Card container start-->
        <div class="row px-xl-5 pb-3">
            <!--Card start-->
            <div class="col-lg-3 col-md-4 col-sm-6" style="padding: 5px">
                <div class="card">
                    <img src="/images/ColdWar.png" alt="" class="rounded-bottom" />
                    <div class="row row-cols-2" style="padding: 5px">
                        <div class="card-body">
                            <h5 class="card-title pt-3 rating">
                                <a href="/product.html">Headphones</a>
                            </h5>
                            <p class="card-text py-0">$15</p>
                            <div class="rating">
                                <img src="/images/icons/Stars/star_0.png" alt="" />
                                <img src="/images/icons/Stars/star_0.png" alt="" />
                                <img src="/images/icons/Stars/star_0.png" alt="" />
                                <img src="/images/icons/Stars/star_0.png" alt="" />
                                <img src="/images/icons/Stars/star_0.png" alt="" />
                            </div>
                        </div>
                        <div class="card-body text-end pt-3">
                            <p>love icon</p>
                            <a href="#" class="btn btn-primary w-75">Buy</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Card end-->

        </div>
        <!--card container end-->
    </div>
    <!--Pagination-->
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled">
                <a class="page-link">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
            <button class="btn btn-primary">More</button>
        </ul>
    </nav>
    <!--Pagination end-->
    <!--Other likes end-->
@endsection
