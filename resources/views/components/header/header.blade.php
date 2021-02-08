@php
    $title = isset($title) ? $title : 'Resúmen';
    $showCenterLogo = isset($showCenterLogo) ? $showCenterLogo : true;
@endphp

<div class="header">
    <h1 class="header__title">{{ $title }}</h1>
    @if ($showCenterLogo)
        <div class="header__logo">
            <img src="/assets/images/logo-medlink.svg" alt="MedLink Logo">
        </div>
    @endif
    <div class="header__info">
        <p>Martes, 20 de octubre de 2021 <span>05:00 PM</span></p>
        <p>Tu plan vence el 21/12/21</p>
    </div>

</div>
