@extends('layouts.master')
@section('title', 'FINANCES')

@push('styles')
    <link rel="stylesheet" href={{ mix('css/finances.css') }}>
@endpush

@section('content')
    @component('components.header.header', [ 'title' => 'Finanzas', 'showCenterLogo' => false ])
    @endcomponent

    <div class="finances">
        <div class="finances__container">
            <h2 class="finances__title">Métodos de pago</h2>
            <div class="finances__item bg-white">
                <div class="electronic-wallets">
                    <div class="electronic-wallets__content">
                        <h3 class="electronic-wallets__title">Billeteras electrónicas</h3>
                        <div class="electronic-wallets__item">
                            <span>Yape</span>
                            <button class="button button--blue button--small">
                                <span class="button__icon icon-attach"></span>
                                <span class="button__text">Adjuntar código QR</span>
                            </button>
                            <a href="#"><span>Ver código QR</span></a>
                            <button class="button button--green-light button--small">
                                <span class="button__icon icon-check"></span>
                                <span class="button__text">ACTIVAR</span>
                            </button>
                        </div>
                        <div class="electronic-wallets__item">
                            <span>Plin</span>
                            <button class="button button--blue button--small">
                                <span class="button__icon icon-attach"></span>
                                <span class="button__text">Adjuntar código QR</span>
                            </button>
                            <a href="#"><span>Ver código QR</span></a>
                            <button class="button button--red button--small">
                                <span class="button__icon icon-close"></span>
                                <span class="button__text">DESACTIVAR</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="finances__item bg-white">
                <form action="#" class="form">
                    <h2 class="form__title form__title--small">Cuentas bancarias</h2>
                    <div class="form__items">
                        <div class="form__item form__item--50d">
                            <label for="" class="form__label form__label--small">Número de cuenta</label>
                            <input type="text" class="form__input">
                        </div>
                        <div class="form__item form__item--50d">
                            <label for="" class="form__label form__label--small">CCI</label>
                            <input type="text" class="form__input">
                        </div>
                        <div class="form__item form__item--50d">
                            <label for="" class="form__label form__label--small">Titular de la cuenta</label>
                            <input type="text" class="form__input">
                        </div>
                        <div class="form__item form__item--50d">
                            <label for="" class="form__label form__label--small">DNI o RUC del titular de la cuenta</label>
                            <input type="text" class="form__input">
                        </div>
                        <div class="form__item form__item--50d">
                            <label for="" class="form__label form__label--small">Banco de la cuenta</label>
                            <input type="text" class="form__input">
                        </div>
                    </div>
                    
                    <div class="form-controls">
                        <button class="button button--blue-cian button--medium">
                            <span class="button__icon icon-close"></span>
                            <span class="button__text">Añadir otra cuenta</span> 
                        </button>
                        <button class="button button--blue-cian button--medium" type="submit">
                            <span class="button__icon icon-save"></span>
                            <span class="button__text">Guardar</span> 
                        </button>
                    </div>
                </form>
            </div>
    
            <div class="finances__item bg-white">
                <form action="#" class="form">
                    <h2 class="form__title form__title--small">Pagos en línea</h2>
                    <div class="form__items">
                        <div class="form__item form__item--50d">
                            <label for="" class="form__label form__label--small">Número de cuenta</label>
                            <input type="text" class="form__input">
                        </div>
                        <div class="form__item form__item--50d">
                            <label for="" class="form__label form__label--small">CCI</label>
                            <input type="text" class="form__input">
                        </div>
                        <div class="form__item form__item--50d">
                            <label for="" class="form__label form__label--small">Titular de la cuenta</label>
                            <input type="text" class="form__input">
                        </div>
                        <div class="form__item form__item--50d">
                            <label for="" class="form__label form__label--small">DNI o RUC del titular de la cuenta</label>
                            <input type="text" class="form__input">
                        </div>
                        <div class="form__item form__item--50d">
                            <label for="" class="form__label form__label--small">Banco de la cuenta</label>
                            <input type="text" class="form__input">
                        </div>
                    </div>
                    <div class="form-controls">
                        <button class="button button--blue-cian button--medium" type="submit">
                            <span class="button__icon icon-save"></span>
                            <span class="button__text">Guardar</span> 
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    
    
@endpush
