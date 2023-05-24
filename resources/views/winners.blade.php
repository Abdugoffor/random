@extends('layout')
@section('hed')
<div class="pricing-header p-0 pb-md-0 mx-auto text-center">
    <h3 class="">G'oliblar</h3>
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
            @foreach ($winners as $winner)
            <tr>
                <th scope="row" class="text-center">Tel : {{ $winner->tel }}</th>
                <th scope="row" class="text-center">{{ $winner->total }} Marta</th>
                <th scope="row" class="text-center">
                    <a href="{{ route('active', $winner->tel) }}" class="btn btn-primary">Acite</a>
                </th>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
