@push('styles')
    <link rel="stylesheet" href={{ mix('css/header.css') }}>
@endpush

@php
    $title = isset($title) ? $title : 'Resúmen';
    $showCenterLogo = isset($showCenterLogo) ? $showCenterLogo : true;
    $showButtonModal = isset($showButtonModal) ? $showButtonModal : false;
@endphp

<div class="header">
    <div class="header__title">
        <h1 class="header__title-text">{{ $title }}</h1>
        @if ($showButtonModal)
            <button class="button button--blue-cian button--small open-modal" data-modal-link="form-appointment">
                <span class="button__icon icon-add"></span>
                <span class="button__text">Crear nueva cita</span>
            </button>
        @endif
        <div class="share">
            <div>
                <span class="icon-share"></span>
                <span>Compartir</span>
            </div>
            <nav>
              <a href="#"><span class="icon-facebook share__icon"></span><span class="share__text">Facebook</span></a>
              <a href="#"><span class="icon-whatsapp share__icon"></span><span class="share__text">Whatsapp</span></a>
              <a href="#"><span class="icon-link share__icon"></span><span class="share__text">Copiar enlace</span></a>
            </nav>
        </div>
    </div>
    @if ($showCenterLogo)
        <div class="header__logo">
            <img src="/assets/images/logo-medlink.png" alt="MedLink Logo">
        </div>
    @endif
    <div class="header__info">
        <p>Martes, 20 de octubre de 2021 <span>05:00 PM</span></p>
        <p>Tu plan vence el 21/12/21</p>
    </div>

</div>
