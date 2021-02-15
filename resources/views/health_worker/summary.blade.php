@extends('layouts.master')
@section('title', 'SUMMARY')

@push('styles')
    <link rel="stylesheet" href={{ mix('css/summary.css') }}>
@endpush

@section('content')
    @component('components.header.header')
    @endcomponent

    <div class="next-appointment bg-white">
        <div class="next-appointment__icon">
            <span class="next-appointment__icon-icon icon-appointment"></span>
        </div>
        <div class="next-appointment__content">
            <div class="next-appointment__title heading">
                <h2 class="heading__title heading__title--blue">Tu próxima cita de hoy</h2>
            </div>
            <div class="next-appointment-info">
                <div class="next-appointment-info__item">
                    <div class="next-appointment-info__item--time">
                        <span>10:00 am</span>
                        <span>Hora</span>
                    </div>
                    <div class="next-appointment-info__item--modality">
                        <span>Virtual</span>
                        <span>Modalidad</span>
                    </div>
                </div>
                <div class="next-appointment-info__item">
                    <div class="next-appointment-info__item--name">
                        <span>Rodrigo Alfonso Murillo Ruales</span>
                        <span>Paciente</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="next-appointment__controls">
            <a href="#" class="button button--blue button--big">
                <span class="button__text">Historia Clínica</span>
            </a>
            <a href="#" class="button button--blue button--big">
                <span class="button__text">Atender</span>
            </a>
            
        </div>
        <div class="dropdwn">
            <div class="dropdown-container">
                <input type="checkbox" id="drop" />
                <label for="drop">Acciones</label>
                <ul class="content">
                  <li><a href="#">Historia Médica</a></li>
                  <li><a href="#">Atender</a></li>     
                </ul>
            </div>
        </div>
    </div>

    @component('components.views.views')
    @endcomponent

    <div class="last-patients bg-white">
        <div class="last-patients__title heading">
            <h2 class="heading__title last-patients__title--desktop heading__title--blue"><span class="last-patients__icon icon-patient heading__title--icon"></span>Últimos pacientes</h2>
            <h2 class="heading__title last-patients__title--mobile heading__title--blue">Tus últimos pacientes</h2>
        </div>
    
        <ul class="last-patients-list">
            <li class="last-patients-list__item">
                <span class="last-patients-list__name">Karina Belledone</span>
                <div class="last-patients-list__line"></div>
                <a href="#" class="button button--medium button--blue">
                    <span class="button__text">Ver más</span>
                </a>
            </li>
            <li class="last-patients-list__item">
                <span class="last-patients-list__name">Adriana Cangahuala</span>
                <div class="last-patients-list__line"></div>
                <a href="#" class="button button--medium button--blue">
                    <span class="button__text">Ver más</span>
                </a>
            </li>
            <li class="last-patients-list__item">
                <span class="last-patients-list__name">Pedro Oliveira Cruz</span>
                <div class="last-patients-list__line"></div>
                <a href="#" class="button button--medium button--blue">
                    <span class="button__text">Ver más</span>
                </a>
            </li>
            <li class="last-patients-list__item">
                <span class="last-patients-list__name">Adriana Cangahuala</span>
                <div class="last-patients-list__line"></div>
                <a href="#" class="button button--medium button--blue">
                    <span class="button__text">Ver más</span>
                </a>
            </li>
            <li class="last-patients-list__item">
                <span class="last-patients-list__name">Pedro Oliveira Cruz</span>
                <div class="last-patients-list__line"></div>
                <a href="#" class="button button--medium button--blue">
                    <span class="button__text">Ver más</span>
                </a>
            </li>
            <li class="last-patients-list__item">
                <span class="last-patients-list__name">Adriana Cangahuala</span>
                <div class="last-patients-list__line"></div>
                <a href="#" class="button button--medium button--blue">
                    <span class="button__text">Ver más</span>
                </a>
            </li>
        </ul>
    </div>

    @component('components.table-diary.table-diary')
    @endcomponent

    @component('components.modal.modal', [ 'dataLink' => 'form-appointment' ])
        @slot('modal_body')
            <div class="modal-form form-appointment">
                <form action="#" class="form">
                    <h2 class="form__title">Registrar nueva cita</h2>
                    <div class="form__item form__item--50d">
                        <label for="document-patient" class="form__label">Nro de documento paciente</label>
                        <input type="text" class="form__input" id="document-patient">
                    </div>
                    <div class="form__item form__item--50d">
                        <label for="name" class="form__label">Nombre paciente</label>
                        <input type="text" class="form__input" id="name">
                    </div>
                    <div class="form__item form__item--50d">
                        <label for="email" class="form__label">Correo electrónico</label>
                        <input type="email" class="form__input" id="email">
                    </div>
                    <div class="form__item form__item--50d">
                        <label for="phone" class="form__label">Número de Celular</label>
                        <input type="text" class="form__input" id="phone">
                    </div>
                    <div class="form__item form__item--50d">
                        <label for="day-appointment" class="form__label">Día de la cita</label>
                        <input type="date" class="form__input" id="day-appointment">
                        <span class="form__item-icon icon-date"></span>
                    </div>
                    <div class="form__item form__item--50d">
                        <label for="time-appointment" class="form__label">Hora de la cita</label>
                        <input type="time" class="form__input" id="time-appointment">
                        <span class="form__item-icon icon-time"></span>
                    </div>
                    <div class="form__item form__item--50d">
                        <label for="type" class="form__label">Tipo de consulta</label>
                        <select name="" id="type" class="form__select">
                            <option value="">Control</option>
                            <option value="">Control 2</option>
                        </select>
                    </div>
                    <div class="form__item form__item--50d">
                        <label for="modalidad" class="form__label">Modalidad de consulta</label>
                        <select name="" id="modalidad" class="form__select">
                            <option value="">Presencial</option>
                            <option value="">Teleconsulta</option>
                        </select>
                    </div>
                    <div class="form__item form__item--50d">
                        <label for="motivo" class="form__label">Motivo de la consulta</label>
                        <textarea name="" id="motivo" cols="30" rows="10" class="form__textarea"></textarea>
    
                    </div>
                    <div class="form__item form__item--50d">
                        <label for="cita-asociada" class="form__label">Cita Asociada</label>
                        <select name="" id="cita-asociada" class="form__select">
                            <option value="">#8.1 - vie. 15/01 2021 20:00 pm</option>
                            <option value="">#8.2 - vie. 15/01 2021 20:00 pm</option>
                        </select>
                        <div class="form-file">
                            <label for="file" class="form-file__label"><span class="form-file__icon icon-attach"></span>Adjuntar archivos</label>
                            <input type="file" class="form-file__input" id="file">
                            <ul class="form-file__result">
                                <li class="form-file__result-item">aca va el archivo <button class="form-file__result-delete"><span>Eliminar</span></button></li>
                            </ul>
                        </div>
    
                    </div>
                    <div class="form-controls">
                        <button class="button button--blue-cian button--medium">
                            <span class="button__icon icon-add"></span>
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
