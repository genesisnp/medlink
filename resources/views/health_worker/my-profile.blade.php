@extends('layouts.master')
@section('title', 'MY PROFILE')

@push('styles')
    <link rel="stylesheet" href={{ mix('css/my-profile.css') }}>
@endpush

@section('content')
    @component('components.header.header', [ 'title' => 'Mi Perfil', 'showCenterLogo' => false ])
    @endcomponent

    @component('components.card-profile.card-profile')
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

    @component('components.modal.modal', [ 'dataLink' => 'form-appointment' ])
        @slot('modal_body')
            <div class="modal-form">
                <form action="#" class="form">
                    <div class="form__item form__item--50d">
                        <label for="" class="form__label">Nombre(s)</label>
                        <input type="text" class="form__input">
                    </div>
                    <div class="form__item form__item--50d">
                        <label for="" class="form__label">Apellido(s)</label>
                        <input type="text" class="form__input">
                    </div>
                    <div class="form__item form__item--50d">
                        <label for="" class="form__label">Especialidad</label>
                        <select name="" id="" class="form__select">
                            <option value="">Carnet de extrangería</option>
                            <option value="">Dni</option>
                        </select>
                    </div>
                    <div class="form__item form__item--50d">
                        <label for="" class="form__label">CMP</label>
                        <input type="text" class="form__input">
                    </div>
                    <div class="form__item form__item--50d">
                        <label for="" class="form__label">RNE</label>
                        <input type="text" class="form__input">
                    </div>
                    <div class="form__item form__item--50d">
                        <label for="" class="form__label">Página de Facebook</label>
                        <input type="text" class="form__input">
                    </div>
                    <div class="form__item form__item--50d">
                        <label for="" class="form__label">Página de Instagram</label>
                        <input type="text" class="form__input">
                    </div>
                    <div class="form__item form__item--50d">
                        <label for="" class="form__label">Página de Linkedin</label>
                        <input type="text" class="form__input">
                    </div>
                    <div class="form__item form__item--50d">
                        <label for="" class="form__label">Página Web</label>
                        <input type="text" class="form__input">
                    </div>
                    <div class="form__item form__item--50d">
                        <label for="" class="form__label">Página de Youtube</label>
                        <input type="text" class="form__input">
                    </div>
                    <div class="form__item form__item--50d">
                        <label for="" class="form__label">Página de Instagram</label>
                        <input type="text" class="form__input">
                    </div>
                    <div class="form__item form__item--50d">
                        <label for="" class="form__label">Costo de cita presencial</label>
                        <input type="text" class="form__input">
                    </div>
                    <div class="form__item form__item--50d">
                        <label for="" class="form__label">Costo de cita virtual</label>
                        <input type="text" class="form__input">
                    </div>
                    <div class="form__item">
                        <label for="" class="form__label">Mi resumen</label>
                        <textarea name="" id="" cols="30" rows="10" class="form__textarea"></textarea>
                    </div>
                    <div class="form-controls">
                        <button class="button button--blue-cian button--medium">
                            <span class="button__icon icon-close"></span>
                            <span class="button__text">Añadir otra cita</span> 
                        </button>
                        <button class="button button--blue-cian button--medium">
                            <span class="button__icon icon-save"></span>
                            <span class="button__text">Añadir otra cita</span> 
                        </button>
                    </div>
                </form>
            </div>
        @endslot
    @endcomponent

@endsection

@push('scripts')
    
    
@endpush
