@extends('layout')
@section('hed')
<div class="pricing-header p-0 pb-md-0 mx-auto text-center">
    <a href="/" class="btn btn-primary">Random</a>
</div>
@endsection
@section('con')
<div class="table-responsive">
    <table class="table text-center">
        <thead>
            <tr>
                <th style="width: 22%;">Tel</th>
                <th style="width: 22%;">Soni</th>
                <th style="width: 22%;">Options</th>
            </tr>
        </thead>

        <tbody>
            {{-- @foreach ($models as $model) --}}
            <tr>
                <th scope="row" class="text-center">
                    {{-- Tel : {{ $models->tel }} / --}}
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
                <th scope="row" class="text-center">{{ $models->total }} Marta</th>
                <th scope="row" class="text-center">
                    <a href="{{ route('active', $models->tel) }}" class="btn btn-primary">Acite</a>
                </th>
            </tr>
            {{-- @endforeach --}}
        </tbody>
    </table>
</div>
<script>
    const p_num = document.querySelectorAll("#p_num")
    var users =  {{ Js::from($models['tel']) }};
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
