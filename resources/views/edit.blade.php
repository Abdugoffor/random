@extends('layout')
@section('con')
    <div class="support-wrapper py-3">
        @if (session('text'))
            <div class="alert alert-info mt-2">
                <span class="font-weight-semibold">{{ session('text') }}</span>
            </div>
        @endif
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger mt-2">
                    <span class="font-weight-semibold">{{ $error }}</span>
                </div>
            @endforeach
        @endif
        <div class="settings-wrapper py-3">

            <div class="card settings-card">
                <div class="cart-wrapper-area py-3">
                    <div class="card-body">
                        <div class="apply-coupon">
                            <h6 class="mb-0">Изменение номера телефона и пароля</h6>
                            <form action="{{ route('editLogin') }}" method="post">
                                @csrf
                                <div class="coupon-form mt-3">
                                    <label for="Телефон">Телефон</label>
                                    <input class="form-control mt-2" id="Телефон" value="{{ Auth::user()->phone }}" type="text" name="phone" placeholder="Телефон">
                                </div>
                                <div class="coupon-form mt-3">
                                    <label for="Пароль">Пароль</label>
                                    <input class="form-control mt-2" id="Пароль" type="text" name="password" placeholder="Пароль">
                                </div>
                                <div class="card-body d-flex align-items-right justify-content-between">
                                    <h5></h5>
                                    <button class="btn btn-primary" type="submit">Входить</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
