@extends('layouts.master')
@section('title', 'MY PROFILE')

@push('styles')
    <link rel="stylesheet" href={{ mix('css/my-profile.css') }}>
@endpush

@section('content')
    @component('components.header.header', [ 'title' => 'Mi Perfil', 'showCenterLogo' => false ])
    @endcomponent

    <div class="progress">
        <div class="progress__container">
            <div class="progress__img">
                <img src="/assets/images/icon/icon-trophy.svg" alt="Illustration of a trophy">
            </div>
            <div class="progress__text">
                <p>¡Felicidades Doctora Frances!</p>
                <span>Su perfil ha sido completado a un 100%</span>
            </div>
            <div class="progress__img">
                <img src="/assets/images/icon/icon-trophy.svg" alt="Illustration of a trophy">
            </div>
        </div>
    </div>

    @component('components.form-profile.form-profile')
    @endcomponent

    <div class="card-digital">
        <div class="card-digital__container">
            <h3 class="card-digital__title">Digitaliza tu gestión</h3>
            <div class="card-digital__content">
                @component('components.card-digital.card-digital', [ 'title' => 'Tu firma digital', 'name' => 'firma'])
                @endcomponent
                <p class="card-digital__text">Recomendamos que la firma sea escaneada en una impresora. También puedes enviar una foto de la firma, en este caso recomendamos tomar la foto con adecuada iluminación.</p>
            </div>
            <div class="card-digital__content">
                @component('components.card-digital.card-digital', [ 'title' => 'Logo de Centro Médico', 'name' => 'logo'])
                @endcomponent
                <p class="card-digital__text">Quiero que mi logo aparezca en los siguientes casos:</p>
                <div class="card-digital-checkbox">
                    <div class="card-digital-checkbox__item">
                        <input type="checkbox" id="opt-1" checked>
                        <label for="opt-1">En mi perfil público</label>
                    </div>
                    <div class="card-digital-checkbox__item">
                        <input type="checkbox" id="opt-2">
                        <label for="opt-2">En mis recetas médicas</label>
                    </div>
                    <div class="card-digital-checkbox__item">
                        <input type="checkbox" id="opt-3">
                        <label for="opt-3">En los correos que envío por Medlink</label>
                    </div>
                </div>    
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    
    
@endpush
