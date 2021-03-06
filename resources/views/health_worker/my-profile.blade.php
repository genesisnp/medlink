@extends('layouts.master')
@section('title', 'MY PROFILE')

@push('styles')
    <link rel="stylesheet" href={{ mix('css/my-profile.css') }}>
@endpush

@section('content')
    @component('components.header.header', [ 'title' => 'Mi Perfil', 'showCenterLogo' => false ])
    @endcomponent

    @component('components.card-profile.card-profile')
    @endcomponent

    <div class="progress">
        <div class="progress__container">
            <div class="progress__img">
                <img src="/assets/images/icon/icon-trophy.svg" alt="Illustration of a trophy">
            </div>
            <div class="progress__text">
                <p>¡Felicidades Doctora Frances!</p>
                <span>Su perfil ha sido completado a un 100%</span>
            </div>
            <div class="progress__img">
                <img src="/assets/images/icon/icon-trophy.svg" alt="Illustration of a trophy">
            </div>
        </div>
    </div>

    @component('components.form-profile.form-profile')
    @endcomponent

    <div class="card-digital">
        <div class="card-digital__container">
            <h3 class="card-digital__title">Digitaliza tu gestión</h3>
            <div class="card-digital__content">
                @component('components.card-digital.card-digital', [ 'title' => 'Tu firma digital', 'name' => 'firma'])
                @endcomponent
                <p class="card-digital__text">Recomendamos que la firma sea escaneada en una impresora. También puedes enviar una foto de la firma, en este caso recomendamos tomar la foto con adecuada iluminación.</p>
            </div>
            <div class="card-digital__content">
                @component('components.card-digital.card-digital', [ 'title' => 'Logo de Centro Médico', 'name' => 'logo'])
                @endcomponent
                <p class="card-digital__text">Quiero que mi logo aparezca en los siguientes casos:</p>
                <div class="card-digital-checkbox">
                    <div class="card-digital-checkbox__item">
                        <input type="checkbox" id="opt-1" checked>
                        <label for="opt-1">En mi perfil público</label>
                    </div>
                    <div class="card-digital-checkbox__item">
                        <input type="checkbox" id="opt-2">
                        <label for="opt-2">En mis recetas médicas</label>
                    </div>
                    <div class="card-digital-checkbox__item">
                        <input type="checkbox" id="opt-3">
                        <label for="opt-3">En los correos que envío por Medlink</label>
                    </div>
                </div>    
            </div>
        </div>
    </div>

    @component('components.modal.modal', [ 'dataLink' => 'form-appointment' ])
        @slot('modal_body')
            <div class="modal-form">
                <form action="#" class="form">
                    <div class="form__item form__item--50d">
                        <label for="name" class="form__label">Nombre(s)</label>
                        <input type="text" class="form__input" id="name">
                    </div>
                    <div class="form__item form__item--50d">
                        <label for="last-name" class="form__label">Apellido(s)</label>
                        <input type="text" class="form__input" id="last-name">
                    </div>
                    <div class="form__item form__item--50d">
                        <label for="specialty" class="form__label">Especialidad</label>
                        <select name="" id="" class="form__select" id="specialty">
                            <option value="">Carnet de extrangería</option>
                            <option value="">Dni</option>
                        </select>
                    </div>
                    <div class="form__item form__item--50d">
                        <label for="cmp" class="form__label">CMP</label>
                        <input type="text" class="form__input" id="cmp">
                    </div>
                    <div class="form__item form__item--50d">
                        <label for="rne" class="form__label">RNE</label>
                        <input type="text" class="form__input" id="rne">
                    </div>
                    <div class="form__item form__item--50d">
                        <label for="page-facebook" class="form__label">Página de Facebook</label>
                        <input type="text" class="form__input" id="page-facebook">
                    </div>
                    <div class="form__item form__item--50d">
                        <label for="page-instagram" class="form__label">Página de Instagram</label>
                        <input type="text" class="form__input" id="page-instagram">
                    </div>
                    <div class="form__item form__item--50d">
                        <label for="page-linkedin" class="form__label">Página de Linkedin</label>
                        <input type="text" class="form__input" id="page-linkedin">
                    </div>
                    <div class="form__item form__item--50d">
                        <label for="page-web" class="form__label">Página Web</label>
                        <input type="text" class="form__input" id="page-web">
                    </div>
                    <div class="form__item form__item--50d">
                        <label for="page-youtube" class="form__label">Página de Youtube</label>
                        <input type="text" class="form__input" id="page-youtube">
                    </div>
                    <div class="form__item form__item--50d">
                        <label for="page-instagram" class="form__label">Página de Instagram</label>
                        <input type="text" class="form__input" id="page-instagram">
                    </div>
                    <div class="form__item form__item--50d">
                        <label for="costs-presencial" class="form__label">Costo de cita presencial</label>
                        <input type="text" class="form__input" id="costs-presencial">
                    </div>
                    <div class="form__item form__item--50d">
                        <label for="costs-virtual" class="form__label">Costo de cita virtual</label>
                        <input type="text" class="form__input" id="costs-virtual">
                    </div>
                    <div class="form__item">
                        <label for="my-summary" class="form__label">Mi resumen</label>
                        <textarea name="" id="my-summary" cols="30" rows="10" class="form__textarea"></textarea>
                    </div>
                    <div class="form-controls form-controls__right">
                        <button class="button button--red button--medium">
                            <span class="button__icon icon-close"></span>
                            <span class="button__text">Cancelar</span> 
                        </button>
                        <button class="button button--blue-cian button--medium">
                            <span class="button__icon icon-save"></span>
                            <span class="button__text">Guardar</span> 
                        </button>
                    </div>
                </form>
            </div>
        @endslot
    @endcomponent

    @component('components.modal.modal', [ 'dataLink' => 'modal-attach' ])
        @slot('modal_body')
            <div class="form-attach">
                <form action="#" class="form">
                    <div class="form__item">
                        <div class="form-file">
                            <label for="adjuntar" class="form-file__label"><span class="form-file__icon icon-attach"></span>Adjuntar archivos</label>
                            <input type="file" class="form-file__input" id="adjuntar">
                        </div>
                    </div>
                    
                    <div class="form-attach-list">
                        <span class="form-attach-list__title">Nombre del adjunto</span>
                        <ul>
                            <li><a href="#" target='_blank'>Imagen.jpg</a><button><span>eliminar</span></button></li>
                            <li><a href="#" target='_blank'>Imagen.jpg</a><button><span>eliminar</span></button></li>
                            <li><a href="#" target='_blank'>Imagen.jpg</a><button><span>eliminar</span></button></li>
                        </ul>
                    </div>

                    <div class="form__item form__item--50d">
                        <label for="tipo-de-adjunto" class="form__label">Tipo de adjunto</label>
                        <select name="tipo-de-adjunto" id="tipo-de-adjunto" class="form__select">
                            <option value="">Carnet de extrangería</option>
                            <option value="">Foto</option>
                            <option value="">Artículo de investigación</option>
                        </select>
                        <label for="tipo-de-adjunto2" class="form__label hidden-visually">Tipo de adjunto</label>
                        <select name="" id="tipo-de-adjunto2" class="form__select">
                            <option value="">Foto</option>
                            <option value="">Carnet de extrangería</option>
                            <option value="">Artículo de investigación</option>
                        </select>
                        <label for="tipo-de-adjunto3" class="form__label hidden-visually">Tipo de adjunto</label>
                        <select name="" id="tipo-de-adjunto3" class="form__select">
                            <option value="">Artículo de investigación</option>
                            <option value="">Carnet de extrangería</option>
                            <option value="">Foto</option>
                        </select>
                    </div>
                    
                </form>
            </div>
        @endslot
    @endcomponent

@endsection

@push('scripts')
    <link rel="stylesheet" href={{ mix('js/social-networks.js') }}>
@endpush
