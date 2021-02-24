@push('styles')
    <link rel="stylesheet" href={{ mix('css/prescription.css') }}>
@endpush

<div class="prescription">
    <div class="prescription_container">
        <div class="prescription__heading">
            <h2>Receta Médica</h2>
            <button class="button button--blue-cian button--small">
                <span class="button__text"><span>Enviar receta</span></span>
            </button>
            <button class="button button--blue-cian button--small">
                <span class="button__text"><span>Vista previa</span></span>
            </button>
        </div>
        <p class="prescription__text">Ingrese los datos del medicamento a prescribir, luego, de click en “Añadir a la receta”. Repita la acción por cada fármaco a recetar.</p>
        <form class="prescription-form form">
            <div class="form__item form__item--50d form__item--33d">
                <label for="medicine" class="form__label">Nombre del medicamento</label>
                <select name="" id="medicine" class="form__select">
                    <option value="">Presencial</option>
                    <option value="">Teleconsulta</option>
                </select>
            </div>
            <div class="form__item form__item--50d form__item--33d">
                <label for="laboratory" class="form__label">Laboratorio</label>
                <select name="" id="laboratory" class="form__select">
                    <option value="">Presencial</option>
                    <option value="">Teleconsulta</option>
                </select>
            </div>
            <div class="form__item form__item--50d form__item--33d">
                <label for="presentations" class="form__label">Presentaciones</label>
                <select name="" id="presentations" class="form__select">
                    <option value="">Presencial</option>
                    <option value="">Teleconsulta</option>
                </select>
            </div>
            <div class="form__item form__item--50d">
                <label for="frequency" class="form__label">Frecuencia de Uso</label>
                <select name="" id="frequency" class="form__select">
                    <option value="">Presencial</option>
                    <option value="">Teleconsulta</option>
                </select>
            </div>
            <div class="form__item form__item--50d">
                <label for="observations" class="form__label">Observaciones</label>
                <input type="text" class="form__input" id="observations">
            </div>
            <div class="form__item">
                <div class="form__controls">
                    <a href="#" class="button button--blue-cian button--small">
                        <span class="button__text">Añadir medicamento a la receta</span>
                    </a>
                </div>
            </div>
            <div class="form__item">
                <h3 class="prescription__title">Medicamentos añadidos</h3>
                <div class="prescription-card">
                    <ul class="accordion">
                        <li>
                            <div class="accordion__item">
                                <h2>SILDENAFILO</h2>
                            </div>
                            <div class="accordion__info">
                                <ul>
                                    <li>
                                        <strong>Laboratorio: </strong>Genfar
                                    </li>
                                    <li>
                                        <strong>Presentación: </strong>SILDENAFILO-TEV TABL 100 MG x 1
                                    </li>
                                    <li>
                                        <strong>Frecuencia de uso: </strong>03 veces por semana, en la
                                        mañana, tarde y noche.
                                    </li><li>
                                        <strong>Observaciones: </strong>Solo con el estómago lleno y
                                        no comer grasas
                                    </li>
                                </ul>
                            </div>
                            <button class="accordion__delete">
                                <span class="accordion__delete--icon icon-close"></span>
                                <span class="accordion__delete--text">Eliminar</span>
                            </button>
                        </li>
                        <li>
                            <div class="accordion__item">
                                <h2>SILDENAFILO</h2>
                            </div>
                            <div class="accordion__info">
                                <ul>
                                    <li>
                                        <strong>Laboratorio: </strong>Genfar
                                    </li>
                                    <li>
                                        <strong>Presentación: </strong>SILDENAFILO-TEV TABL 100 MG x 1
                                    </li>
                                    <li>
                                        <strong>Frecuencia de uso: </strong>03 veces por semana, en la
                                        mañana, tarde y noche.
                                    </li><li>
                                        <strong>Observaciones: </strong>Solo con el estómago lleno y
                                        no comer grasas
                                    </li>
                                </ul>
                            </div>
                            <button class="accordion__delete">
                                <span class="accordion__delete--icon icon-close"></span>
                                <span class="accordion__delete--text">Eliminar</span>
                            </button>
                        </li>
                        
                    </ul> 
                </div>
            </div>
            <div class="form__item">
                <label class="form__label">Pruebas de Laboratorio</label>
                <div class="form__div"></div>
            </div>
            <div class="form__item">
                <label for="lab-sug" class="form__label">Laboratorio sugerido</label>
                <input type="text" class="form__input" id="lab-sug">
            </div>

            <div class="form__controls--add">
                <button class="button button--blue-cian button--small">
                    <span class="button__text">Añadir procedimiento</span>
                </button>
                <button class="button button--blue-cian button--small">
                    <span class="button__text">Añadir recomendaciones generales</span>
                </button>
                <button class="button button--blue-cian button--small">
                    <span class="button__text">Enviar receta</span>
                </button>
                <button class="button button--blue-cian button--small">
                    <span class="button__text">Vista previa</span>
                </button>
            </div>
        </form>
    </div>
</div>
@push('scripts')
    {{-- <link rel="stylesheet" href={{ mix('js/prescription.js') }}> --}}
@endpush