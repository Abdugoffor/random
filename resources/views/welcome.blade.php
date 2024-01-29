@extends('layout')
@section('hed')
    <div class="pricing-header p-0 pb-md-0 mx-auto text-center">
        <a href="/" class="btn btn-primary">Случайный</a>
    </div>
@endsection
@section('con')
    <div class="table-responsive">
        <table class="table text-center">
            <thead>
                <tr>
                    <th style="width: 22%;">Телефон</th>
                    <th style="width: 22%;">Количество</th>
                    <th style="width: 22%;">Функция</th>
                </tr>
            </thead>

            <tbody>
                @if ($models != null)
                    <tr>
                        <th scope="row" class="text-center">
                            <div id="R_N">
                                <b id="c_code" class="num">+998</b>
                                <b id="p_num"><span></span></b>
                                <b id="p_num" class="num"><span></span></b>
                                <b id="p_num"><span></span></b>
                                <b id="p_num"><span></span></b>
                                <b id="p_num" class="num"><span></span></b>
                                <b id="p_num"><span></span></b>
                                <b id="p_num" class="num"><span></span></b>
                                <b id="p_num"><span></span></b>
                                <b id="p_num"><span></span></b>
                            </div>
                        </th>
                        <th scope="row" class="text-center">{{ $models->total }} раза</th>
                        <th scope="row" class="text-center">
                            <a href="{{ route('active', $models->tel) }}" class="btn btn-primary">Актив</a>
                        </th>
                    </tr>
                @else
                <th colspan="3" style="margin-top: 20px; font-size:20pt;color:#0a53be">{{ 'Mijozlar 2 martadan tadan kam Kelgan' }}</th>
                @endif
            </tbody>
        </table>
    </div>
    <script>
        const p_num = document.querySelectorAll("#p_num")
        var users = {{ Js::from($models != null ? $models['tel'] : '') }};
        // console.log(users);
        let phoneNumber = users.split("")

        for (let i = 0; i < phoneNumber.length; i++) {
            setTimeout(() => {
                p_num[i].style = "transform: scale(0);"
            }, 500 * i);
            setTimeout(() => {
                p_num[i].style = ""
                p_num[i].innerHTML = `<p>${phoneNumber[i]}</p>`
            }, 600 * i);
        }
    </script>
@endsection
