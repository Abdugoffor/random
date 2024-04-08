@extends('layout')
@section('hed')
    <div class="pricing-header p-0 pb-md-0 mx-auto text-center">
        <h3 class="">Клиенты</h3>
    </div>
@endsection
@section('con')
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">
                <span class="font-weight-semibold">{{ $error }}!</span>
            </div>
        @endforeach
    @endif
    <form action="{{ route('mijozadd') }}" method="post">
        @csrf
        <div class="input-group">
            {{-- <span class="input-group-text">Mijov Nomi va Telefoni</span> --}}
            <input type="text" name="name" aria-label="First name" placeholder="Имя" required class="form-control">
            <input type="number" name="tel" aria-label="Last name" required placeholder="Телефон : 94 100 00 00"
                class="form-control">
            <input type="submit" name="ok" value="Сохранять" aria-label="Last name" class="btn btn-outline-primary">
        </div>
    </form>
    <div class="table-responsive">
        <table class="table text-center table-hover">
            <thead>
                <tr>
                    <th style="width: 10%;">#</th>
                    <th style="width: 22%;">Имя</th>
                    <th style="width: 22%;">Телефон</th>
                    <th style="width: 22%;">Время</th>
                    <th style="width: 22%;">Удалить</th>
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
                                <button type="submit" class="btn btn-danger">Удалить</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $models->links() }}
    </div>
@endsection
