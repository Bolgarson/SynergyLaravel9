@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Личный кабинет') }}</div>
                <h4> ФИО: {{ auth()->user()->Surname }} {{ auth()->user()->name }} {{ auth()->user()->MiddleName }}</h4>

                <h4> Ваш паспорт: {{ auth()->user()->Passport }}</h4>

                <h4> Ваша почта: {{ auth()->user()->email }}</h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
