@extends('layouts.master')
@section('title', 'PUBLIC PROFILE')

@push('styles')
    <link rel="stylesheet" href={{ mix('css/public-profile.css') }}>
@endpush

@section('content')

    @component('components.card-profile.card-profile', [ 'showControls' => false ])
    @endcomponent

    <div class="tabs-timetable">
        @component('components.tabs.tabs', [ 'data_tab' => 'presenciales', 'data_tab2' => 'virtuales', 'tab_text' => 'presenciales', 'tab_text2' => 'virtuales' ])
            @slot('tabs_body')
                @component('components.tabs-timetable.tabs-timetable', [ 'showControl' => false , 'showLegend' => true, 'date' => '16/11/21', 'showDate' => true, 'showArrows' => true])
                @endcomponent    
            @endslot
        @endcomponent
    </div>
    

    <div class="public-attach">
        <div class="public-attach__container bg-white">
            <div class="public-attach__wrapper">
                <h2 class="public-attach__title">Archivos adjuntos</h2>
                <h3 class="public-attach__subtitle">Diplomas y certificaciones</h3>
                <div class="public-attach__info">
                    <div class="public-attach__info--img">
                        <img src="assets/images/certificacion.jpg" alt="Imagen de certificación">
                    </div>
                    <div class="public-attach__info--img">
                        <img src="assets/images/certificacion.jpg" alt="Imagen de certificación">
                    </div>
                    <div class="public-attach__info--img">
                        <img src="assets/images/certificacion.jpg" alt="Imagen de certificación">
                    </div>
                </div>
                <h3 class="public-attach__subtitle">Artículos de investigación</h3>
                <div class="public-attach__info">
                    <div class="public-attach__info--img">
                        <img src="assets/images/certificacion.jpg" alt="Imagen de certificación">
                    </div>
                    <div class="public-attach__info--img">
                        <img src="assets/images/certificacion.jpg" alt="Imagen de certificación">
                    </div>
                    <div class="public-attach__info--img">
                        <img src="assets/images/certificacion.jpg" alt="Imagen de certificación">
                    </div>
                    <div class="public-attach__info--img">
                        <img src="assets/images/certificacion.jpg" alt="Imagen de certificación">
                    </div>
                </div>
                <h3 class="public-attach__subtitle">Fotos</h3>
                <div class="public-attach__info">
                    <div class="public-attach__info--img">
                        <img src="assets/images/certificacion.jpg" alt="Imagen de certificación">
                    </div>
                    <div class="public-attach__info--img">
                        <img src="assets/images/certificacion.jpg" alt="Imagen de certificación">
                    </div>
                    <div class="public-attach__info--img">
                        <img src="assets/images/certificacion.jpg" alt="Imagen de certificación">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')

    
@endpush
