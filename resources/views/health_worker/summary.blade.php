@extends('layouts.master')
@section('title', 'SUMMARY')

@section('content')
    @component('components.header.header')
    @endcomponent

        @component('components.next-appointment.next-appointment')
        @endcomponent

        @component('components.views.views')
        @endcomponent

        @component('components.last-patients.last-patients')
        @endcomponent

        @component('components.table-diary.table-diary')
        @endcomponent

        @component('components.modal.modal')
            @slot('modal_body')
                <div class="modal-form">
                    <form action="#" class="form">
                        <h2 class="form__title">Registrar nueva cita</h2>
                        <div class="form__item form__item--50d">
                            <label for="" class="form__label">Nro de documento paciente</label>
                            <input type="text" class="form__input">
                        </div>
                        <div class="form__item form__item--50d">
                            <label for="" class="form__label">Nombre paciente</label>
                            <input type="text" class="form__input">
                        </div>
                        <div class="form__item form__item--50d">
                            <label for="" class="form__label">Correo electrónico</label>
                            <input type="email" class="form__input">
                        </div>
                        <div class="form__item form__item--50d">
                            <label for="" class="form__label">Número de Celular</label>
                            <input type="text" class="form__input">
                        </div>
                        <div class="form__item form__item--50d">
                            <label for="" class="form__label">Día de la cita</label>
                            <input type="date" class="form__input">
                            <span class="form__item-icon icon-date"></span>
                        </div>
                        <div class="form__item form__item--50d">
                            <label for="" class="form__label">Hora de la cita</label>
                            <input type="time" class="form__input">
                            <span class="form__item-icon icon-time"></span>
                        </div>
                        <div class="form__item form__item--50d">
                            <label for="" class="form__label">Tipo de consulta</label>
                            <select name="" id="" class="form__select">
                                <option value="">Control</option>
                                <option value="">Control 2</option>
                            </select>
                        </div>
                        <div class="form__item form__item--50d">
                            <label for="" class="form__label">Modalidad de consulta</label>
                            <select name="" id="" class="form__select">
                                <option value="">Presencial</option>
                                <option value="">Teleconsulta</option>
                            </select>
                        </div>
                        <div class="form__item form__item--50d">
                            <label for="" class="form__label">Motivo de la consulta</label>
                            <textarea name="" id="" cols="30" rows="10" class="form__textarea"></textarea>
        
                        </div>
                        <div class="form__item form__item--50d">
                            <label for="" class="form__label">Cita Asociada</label>
                            <select name="" id="" class="form__select">
                                <option value="">#8.1 - vie. 15/01 2021 20:00 pm</option>
                                <option value="">#8.2 - vie. 15/01 2021 20:00 pm</option>
                            </select>
                            <div class="form-file">
                                <label for="" class="form-file__label"><span class="form-file__icon icon-attach"></span>Adjuntar archivos</label>
                                <input type="file" class="form-file__input">
                                <ul class="form-file__result">
                                    <li class="form-file__result-item">aca va el archivo <button class="form-file__result-delete"><span>Eliminar</span></button></li>
                                </ul>
                            </div>
        
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
