@extends('layout')
@section('hed')
<div class="pricing-header p-0 pb-md-0 mx-auto text-center">
    <h3 class="">Mijozlar</h3>
</div>
@endsection
@section('con')
<form action="{{ route('mijozadd') }}" method="post">
    @csrf
    <div class="input-group">
        {{-- <span class="input-group-text">Mijov Nomi va Telefoni</span> --}}
        <input type="text" name="name" aria-label="First name" placeholder="Name" class="form-control">
        <input type="number" name="tel"  aria-label="Last name" placeholder="Tel : 99 999 99 99" class="form-control">
        <input type="submit" name="ok" value="Saqlash" aria-label="Last name" class="btn btn-primary">
    </div>
</form>
<div class="table-responsive">
    <table class="table text-center table-hover">
        <thead>
            <tr>
                <th style="width: 10%;">#</th>
                <th style="width: 22%;">Name</th>
                <th style="width: 22%;">Tel</th>
                <th style="width: 22%;">Time</th>
                <th style="width: 22%;">Delete</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($models as $model)
            <tr>
                <th scope="row" class="text-center">{{ $model->id }}</th>
                <td scope="row" class="text-center">{{ $model->name }}</td>
                <td scope="row" class="text-center">{{ $model->tel }}</td>
                <td scope="row" class="text-center">{{ $model->created_at }}</td>
                <td scope="row" class="text-center">
                    <form action="{{ route('delete', $model->id) }}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $models->links() }}
</div>
@endsection
