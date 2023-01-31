@extends('layout')

@section('content')
    <!--Recently uploaded-->
    <div class="container-fluid px-xl-5">

        <hr />
        <!--Card container start-->
        <div class="row px-xl-5 pb-3">
            @foreach ($data as $item)
                <!--Card start-->
                <div class="col-lg-3 col-md-4 col-sm-6" style="padding: 5px">
                    <div class="card">
                        <img src={{ asset('/images/no_image.png') }} alt="" class="rounded-bottom" />
                        <div class="row row-cols-2" style="padding: 5px">
                            <div class="card-body">
                                <h5 class="card-title pt-3 rating">
                                    <a href="/product.html">{{ $item->name }}</a>
                                </h5>
                                <p class="card-text py-0">{{ $item->price }}</p>
                                <div class="rating">
                                    <img src={{ asset('/stars/star_0.png') }} alt="" />
                                    <img src={{ asset('/stars/star_0.png') }} alt="" />
                                    <img src={{ asset('/stars/star_0.png') }} alt="" />
                                    <img src={{ asset('/stars/star_0.png') }} alt="" />
                                    <img src={{ asset('/stars/star_0.png') }} alt="" />
                                </div>
                            </div>
                            <div class="card-body text-end pt-3">
                                <p>love icon</p>
                                <a href="/products/{{ $item->id }}" class="btn btn-primary w-75">Buy</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Card end-->
            @endForeach

        </div>
        <!--card container end-->
    </div>
    <!--Recently uploaded end-->
@endsection
