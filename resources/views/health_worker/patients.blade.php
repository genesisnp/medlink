@extends('layouts.master')
@section('title', 'PATIENTS')

@push('styles')
    <link rel="stylesheet" href={{ mix('css/patients.css') }}>
@endpush 

@section('content')
    @component('components.header.header', [ 'title' => 'Mis Pacientes', 'showCenterLogo' => false ])
    @endcomponent

    <div class="patients-page">
        <div class="patients-page__container">
            <div class="patients-page__heading">
                <form action="#" class="patients-page-search">
                    <label for="search" class="hidden-visually">Search</label>
                    <input type="search" id="search" class="patients-page-search__input">
                    <button class="patients-page-search__button">
                        <span>Buscar</span>
                    </button>
                </form>
                <div class="patients-page-controls">
                    <button class="button button--blue-cian button--small">
                        <span class="button__icon icon-add"></span>
                        <span class="button__text button__text--desktop">Registrar Nueva Historia</span>
                        <span class="button__text button__text--mobile">Nueva historia</span>
                    </button>
                    <button class="button button--blue-cian button--small">
                        <span class="button__icon icon-add"></span>
                        <span class="button__text button__text--desktop">Personalizar Historia Clínica</span>
                        <span class="button__text button__text--mobile">Agregar campos</span>
                    </button>
                </div>
            </div>

            <div class="patients-page-table">
                <div class="patients-page-table__container bg-white">
                    <table class="patients-page-table__table">
                        <tr>
                            <th>Nro.</th>
                            <th>Nombre del paciente</th>
                            <th>Email</th>
                            <th>Celular</th>
                            <th>Acciones</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Rodrigo Alfonso Murillo Ruales</td>
                            <td>rodrigomurilloruales@gmail.com</td>
                            <td>908987667</td>
                            <td><button class="button button--blue-cian button--medium"><span class="button__text">Ver Historia</span></button></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Rodrigo Alfonso Murillo Ruales</td>
                            <td>rodrigomurilloruales@gmail.com</td>
                            <td>908987667</td>
                            <td><button class="button button--blue-cian button--medium"><span class="button__text">Ver Historia</span></button></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Rodrigo Alfonso Murillo Ruales</td>
                            <td>rodrigomurilloruales@gmail.com</td>
                            <td>908987667</td>
                            <td><button class="button button--blue-cian button--medium"><span class="button__text">Ver Historia</span></button></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Rodrigo Alfonso Murillo Ruales</td>
                            <td>rodrigomurilloruales@gmail.com</td>
                            <td>908987667</td>
                            <td><button class="button button--blue-cian button--medium"><span class="button__text">Ver Historia</span></button></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Rodrigo Alfonso Murillo Ruales</td>
                            <td>rodrigomurilloruales@gmail.com</td>
                            <td>908987667</td>
                            <td><button class="button button--blue-cian button--medium"><span class="button__text">Ver Historia</span></button></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')

@endpush
