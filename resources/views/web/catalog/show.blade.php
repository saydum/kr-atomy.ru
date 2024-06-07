@extends('web.layout')

@section('content')
    <div class="container-xxl feature py-5 mt-5">
        <div class="container">
            <div class="row g-5 align-items-center justify-content-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">
                        @isset($product->category->name)
                            Категория {{ $product->category->name }}
                        @endisset
                    </p>
                    <h1 class="display-5 mb-4">
                        {{ $product->name }}
                    </h1>
                    <p class="mb-4">
                        {!! $product->description !!}
                    </p>
                    <a class="btn btn-primary py-3 px-5" href="{{ redirect()->back()->getTargetUrl() }}">
                        Вернутся назад
                    </a>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">

                    <div class="feature-box border rounded">
                        <img class="img-fluid rounded" src="{{ asset('storage/' . $product->image) }}"
                            alt="{{ $product->name }}">
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
