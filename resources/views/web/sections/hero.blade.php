<div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100 img-fluid" src="{{ asset('web/img/carousel-1.jpg') }}" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-lg-8">
                                <p
                                    class="d-inline-block border border-white rounded text-primary fw-semi-bold py-1 px-3 animated slideInDown">
                                    Добро пожаловать в Atomy</p>
                                <h1 class="display-3 mb-4 animated slideInDown">
                                    Начните зарабатывать с Atomy из любой точки мира!
                                </h1>
                                <a href="#callback" class="btn btn-primary py-3 px-5 animated slideInDown">Начать
                                    Зарабатывать
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100 img-fluid" src="{{ asset('web/img/carousel-2.jpg') }}" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-lg-7">
                                <p
                                    class="d-inline-block border border-white rounded text-primary fw-semi-bold py-1 px-3 animated slideInDown">
                                    Добро пожаловать в Atomy</p>
                                <h1 class="display-3 mb-4 animated slideInDown">
                                    Компания Atomy предлогает продукцию премиум класса по доступной цене.
                                </h1>
                                <a href="{{ route('web.products.index') }}"
                                    class="btn btn-primary py-3 px-5 animated slideInDown">Каталог товаров</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
