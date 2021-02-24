@push('styles')
    <link rel="stylesheet" href={{ mix('css/share.css') }}>
@endpush

@php
    $title = isset($title) ? $title : 'Compartir';
    $showFacebook = isset($showFacebook) ? $showFacebook : true;

@endphp

<div class="share">
    <div>
        <span class="icon-share"></span>
        <span>{{ $title }}</span>
    </div>
    <nav>
        @if ($showFacebook)
            <a href="#"><span class="icon-facebook share__icon"></span><span class="share__text">Facebook</span></a>
        @endif
        <a href="#"><span class="icon-whatsapp share__icon"></span><span class="share__text">Whatsapp</span></a>
        <a href="#"><span class="icon-link share__icon"></span><span class="share__text">Copiar enlace</span></a>
    </nav>
</div>