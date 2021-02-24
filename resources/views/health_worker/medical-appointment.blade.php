@extends('layouts.master')
@section('title', 'DIARY AND CALENDAR')

@push('styles')
    <link rel="stylesheet" href={{ mix('css/medical-appointment.css') }}>
@endpush

@section('content')

    @component('components.header.header', [ 'title' => 'Cita Médica 8.1', 'showCenterLogo' => false ])
    @endcomponent

    <div class="medical-appointment">
        <div class="medical-appointment__item">
            <div class="medical-appointment-info">
                <div class="medical-appointment-info__item">
                    <p>03/02/21 - 10:00 am</p>
                    <span>Fecha y hora</span>
                </div>
                <div class="medical-appointment-info__item">
                    <p>Virtual</p>
                    <span>Modalidad</span>
                </div>
                <div class="medical-appointment-info__item">
                    <p>Rodrigo Alfonso Murillo Ruales</p>
                    <span>Paciente</span>
                </div>
                <div class="medical-appointment-info__item">
                    <p>Confirmado</p>
                    <span>Estado</span>
                </div>
                <div class="medical-appointment-info__item">
                    <p>Nueva Consulta</p>
                    <span>Tipo</span>
                </div>
            </div>
        </div>

        <div class="medical-appointment__item medical-appointment__item--border">
            <div class="medical-appointment-heading">
                <h2 class="medical-appointment-heading__title">Gestión</h2>
            </div>
            <div class="medical-appointment__controls">
                <button class="button button--blue-cian button--small">
                    <span class="button__icon icon-view-2"></span>
                    <span class="button__text">Revisar pago</span>
                </button>
                <button class="button button--green-light button--small button-opacity">
                    <span class="button__icon icon-check"></span>
                    <span class="button__text">Aprobar cita</span>
                </button>
                <button class="button button--red button--small">
                    <span class="button__icon icon-close"></span>
                    <span class="button__text">Rechazar cita</span>
                </button>
                <button class="button button--blue-cian button--small">
                    <span class="button__icon icon-calendar"></span>
                    <span class="button__text">Reprogramar cita</span>
                </button>
            </div>
        </div>

        <div class="medical-appointment__item medical-appointment__item--border">
            <div class="medical-appointment-heading">
                <h2 class="medical-appointment-heading__title">Atención médica</h2>
            </div>
            <div class="medical-appointment__controls">
                <a href="#" class="button button--blue-cian button--small">
                    <span class="button__icon icon-video"></span>
                    <span class="button__text">Ingresar a la teleconsulta</span>
                </a>
                <a href="#" class="button button--blue-cian button--small">
                    <span class="button__icon icon-clinic-history"></span>
                    <span class="button__text button__text--mobile">Ver Historia</span>
                    <span class="button__text button__text--desktop">Ver Historia Clínica</span>
                </a>
                <div class="medical-appointment__share">
                    @component('components.share.share', [ 'title' => 'Compartir enlace de teleconsulta', 'showFacebook' => false ])
                    @endcomponent
                </div>
            </div>
        </div>

        <div class="medical-appointment__item medical-appointment__item--border">
            <div class="medical-appointment-heading">
                <h2 class="medical-appointment-heading__title">Fotos y documentos</h2>
            </div>
            <div class="medical-appointment__controls">
                <ul class="medical-appointment__dropdown">
                    <li class="">
                        <button class="button button--blue-cian button--small js-dropdown">
                            <span class="button__icon icon-view-2"></span>
                            <span class="button__text">Ver archivos adjuntos</span>
                        </button>
                        <ul>
                            <li>
                                <a href="#"><span>EXAMENDELAB1.jpg</span></a>
                            </li>
                            <li>
                                <a href="#"><span>EXAMENDELAB2.jpg</span></a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <form action="#">
                    <div class="form-file">
                        <label for="file" class="button button--small form-file__label"><span class="form-file__icon icon-attach"></span>Adjuntar archivos</label>
                        <input type="file" class="form-file__input" id="file">
                    </div>
                </form>
            </div>
            
        </div>

        <div class="medical-appointment__item medical-appointment__item--border">
            <div class="medical-appointment-heading">
                <h2 class="medical-appointment-heading__title">Datos médicos</h2>
                <button class="button button--blue-cian button--small">
                    <span class="button__icon icon-edit"></span>
                    <span class="button__text">Editar</span>
                </button>
            </div>
            @component('components.form-query-data.form-query-data')
            @endcomponent
        </div>
    </div>
    
    @component('components.prescription.prescription')
    @endcomponent

@endsection

@push('scripts')
    <link rel="stylesheet" href={{ mix('js/medical-appointment.js') }}>
@endpush
