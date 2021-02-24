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
                    <span class="button__icon icon-add"></span>
                    <span class="button__text">Agregar</span>
                </button>
            </div>
            <div class="custom-inputs__content">
                <table class="custom-inputs__table">
                    <tr>
                        <th>Título</th>
                        <th>Campo principal</th>
                        <th>Orden</th>
                        <th>Acciones</th>
                    </tr>
                    <tr>
                        <td>Tipo de Sangre</td>
                        <td></td>
                        <td><span class="text-mobile">Orden: </span> 1</td>
                        <td><button class="button button--red button--medium">
                                <span class="button__text">Borrar</span></button>
                            <button class="button button--blue-cian button--medium">
                                <span class="button__text">Editar</span></button>
                        </td>
                    </tr>
                    <tr>
                        <td>Enfermedades previas</td>
                        <td></td>
                        <td><span class="text-mobile">Orden: </span>2</td>
                        <td><button class="button button--red button--medium">
                                <span class="button__text">Borrar</span></button>
                            <button class="button button--blue-cian button--medium">
                                <span class="button__text">Editar</span></button>
                        </td>
                    </tr>
                    <tr>
                        <td>Historial de alergias</td>
                        <td>Enfermedades previas</td>
                        <td><span class="text-mobile">Orden: </span>1</td>
                        <td><button class="button button--red button--medium">
                                <span class="button__text">Borrar</span></button>
                            <button class="button button--blue-cian button--medium">
                                <span class="button__text">Editar</span></button>
                        </td>
                    </tr>
                    <tr>
                        <td>Historial de enfermedades</td>
                        <td></td>
                        <td><span class="text-mobile">Orden: </span>3</td>
                        <td><button class="button button--red button--medium">
                                <span class="button__text">Borrar</span></button>
                            <button class="button button--blue-cian button--medium">
                                <span class="button__text">Editar</span></button>
                        </td>
                    </tr>
                    <tr>
                        <td>Fracturas</td>
                        <td>Historial de enfermedades</td>
                        <td><span class="text-mobile">Orden: </span>1</td>
                        <td>
                            <button class="button button--red button--medium">
                                <span class="button__text">Borrar</span></button>
                            <button class="button button--blue-cian button--medium">
                                <span class="button__text">Editar</span></button>
                        </td>
                    </tr>
                   
                </table>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
@endpush
