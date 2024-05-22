<div id="callback" class="container-fluid callback my-5 pt-5 mb-5 pb-5">
    <div class="container pt-5">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="bg-white border rounded p-4 p-sm-5 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="text-center mx-auto wow fadeInUp mb-4" data-wow-delay="0.1s" style="max-width: 600px;">
                        <h1 class="display-4 mb-3">Заполните анкету</h1>
                        <p class="d-inline-block border rounded text-danger fw-semi-bold py-1 px-3">
                            После того как вы заполните анкету в ближайшее время с вами свяжется один из наших
                            дистрибьюторов для регистрации личного кабинета,
                            а так же для оформления заказа.
                        </p>
                    </div>

                    <form action="{{ route('web.employee.save') }}" method="post">

                        @csrf
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Имя" name="name"
                                           value="{{ old('name') }}">
                                    <label for="name">Имя</label>
                                    @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="mobile" placeholder="Номер телефона"
                                           name="phone" value="{{ old('phone') }}">
                                    <label for="mobile">Номер телефона</label>
                                    @error('phone')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <select class="form-select select-center-text"
                                        aria-label="Выберите способ связаться с вами." name="type_soc_network">
                                    <option value="" selected>Выберите способ связаться с вами.</option>
                                    <option
                                        value="whatsapp" {{ old('type_soc_network') == 'whatsapp' ? 'selected' : '' }}>
                                        WhatsApp
                                    </option>
                                    <option
                                        value="telegram" {{ old('type_soc_network') == 'telegram' ? 'selected' : '' }}>
                                        Telegram
                                    </option>
                                </select>
                                @error('type_soc_network')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-sm-6">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="agree" name="agree"
                                           value="1" {{ old('agree') ? 'checked' : '' }}>
                                    <label for="agree">
                                        Я даю своё согласие на регистрацию личного кабинета
                                    </label>
                                    @error('agree')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12 text-center">
                                <button class="btn btn-primary w-100 py-3" type="submit">Отправить</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
