@extends('layouts.master')
@section('title', 'DIARY AND CALENDAR')

@push('styles')
    <link rel="stylesheet" href={{ mix('css/custom-inputs.css') }}>
@endpush

@section('content')

    @component('components.header.header', [ 'title' => 'Campos de historia', 'showCenterLogo' => false ])
    @endcomponent

    <div class="custom-inputs">
        <div class="custom-inputs__wrapper">
            <div class="custom-inputs__heading">
                <h2>Campos Personalizados</h2>
                <button href="#" class="button button--blue-cian button--small">
                    <span class="button__icon icon-save"></span>
                    <span class="button__text">Guardar</span>
                </button>
            </div>
            <div class="custom-inputs__content">
                <form action="#" class="form">
                    <div class="form__item form__item--50d">
                        <label for="field-title" class="form__label">Título de campo</label>
                        <select name="" class="form__select" id="field-title">
                            <option value="">Carnet de extrangería</option>
                            <option value="">Dni</option>
                        </select>
                    </div>
                    <div class="form__item form__item--50d">
                        <label for="field-type" class="form__label">Tipo de campo</label>
                        <select name="" class="form__select" id="field-type">
                            <option value="">Carnet de extrangería</option>
                            <option value="">Dni</option>
                        </select>
                    </div>
                    <div class="form__item ">
                        <label for="order" class="form__label">Orden</label>
                        <select name="" class="form__select" id="order">
                            <option value="">-------</option>
                            <option value="">---------</option>
                        </select>
                    </div>
                    <div class="form__item">
                        <label for="rsptas" class="form__label">Respuestas</label>
                        <input type="text" class="form__input" id="rsptas">
                    </div>
                    <div class="form__item">
                        <div class="form__item-checkbox">
                            <div class="form__item-checkbox__item">
                                <input type="checkbox" id="opt-1" checked>
                                <label for="opt-1">Esto es un subcampo</label>
                            </div>
                        </div>    
                    </div>
                    <div class="form__item">
                        <label for="associated-fields" class="form__label">Campo asociado</label>
                        <input type="text" class="form__input" id="associated-fields">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
@endpush
