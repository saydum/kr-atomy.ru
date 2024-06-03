@extends('web.layout')

@section('content')
    <div class="container mt-5 mb-5">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="display-5 mb-5 mt-5">Каталог товаров</h1>
        </div>
        <div class="d-flex justify-content-center row">
            <div class="col-md-10">
                @foreach($products as $product)
                    <div class="row p-2 mb-4 bg-white border rounded">
                        <div class="col-md-4 mt-1">
                            <img
                                    class="img-fluid img-responsive rounded product-image"
                                    src="{{ asset('storage/'.$product->image) }}" alt="{{ $product->name }}">
                        </div>
                        <div class="col-md-6 mt-1">
                            <h5 class="pt-5">{{ $product->name }}</h5>
                            <div class="mt-1 mb-1 spec-1">
                                <p class="text-black-50 text-justify para mb-0">
                                    @words($product->description, 40, '...')
                                </p>
                            </div>
                            <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                                <a
                                    href="{{ route('web.products.show', $product->id) }}"
                                    class="btn btn-primary py-3 px-5">
                                    Подробнее
                                </a>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
