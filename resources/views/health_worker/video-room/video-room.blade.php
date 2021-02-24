@extends('layouts.video-room')
@section('title', 'VIDEO ROOM')

@push('styles')
    <link rel="stylesheet" href={{ mix('css/video-room.css') }}>
@endpush

@section('content')

    <div class="video-room">
        <div class="video-room__wrapper">
            @component('components.header.header', [ 'title' => 'Teleconsulta con paciente Rodrigo Murillo', 'showCenterLogo' => false ])
            @endcomponent
            <div class="video-room__content">
                <div class="video-room__item">
                    <div class="video-room__video">
                        {{-- aca ira el componente de videollamada --}}
                    </div>
                    <div class="video-room__accordion">
                        @component('components.clinic-history.clinic-history', [ 'showControlHistory' => false, 'showControlQueryData' => true , 'columns' => 1, 'history' => false, 'queryData' => true])
                        @endcomponent
                    </div>
                    <div class="video-room__prescripcion">
                        @component('components.prescription.prescription')
                        @endcomponent
                    </div>
                    <div class="video-room__controls">
                        <a href="#" class="button button--blue-cian button--small">
                            <span class="button__text">Volver al panel de control</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@push('scripts')

@endpush
