<div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">

    <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="/" class="navbar-brand ms-4 ms-lg-0">
            <h3 class="text-primary m-0">kr-atomy.ru</h3>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="/" class="nav-item nav-link active">Главное</a>
                <a href="/#about" class="nav-item nav-link">О компании</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Каталог</a>
                    <div class="dropdown-menu border-light m-0">
                        <a href="{{ route('web.products.index') }}"
                           class="dropdown-item">Все товары</a>
                        @foreach($categories as $category)
                            <a href="{{ route('web.products.slug', $category->slug) }}"
                               class="dropdown-item">{{ $category->name }}</a>
                        @endforeach
                    </div>
                </div>
                <a href="/#features" class="nav-item nav-link">Зарабатывать с Atomy</a>
                <a href="/#footer" class="nav-item nav-link">Контакты</a>
            </div>

{{--            @include('web.sections.social')--}}

        </div>
    </nav>
    <!-- alert success -->
    @include('web.sections.alert-success')
    <!-- alert success End -->
</div>
