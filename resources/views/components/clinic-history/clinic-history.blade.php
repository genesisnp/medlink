@push('styles')
    <link rel="stylesheet" href={{ mix('css/clinic-history.css') }}>
@endpush 

@php
    $showControlHistory = isset($showControlHistory) ? $showControlHistory : true;
    $showControlQueryData = isset($showControlQueryData) ? $showControlQueryData : false;
    $allowed_columns = [1, 2];
    $columns =  isset($columns) ? $columns : 2;
    $classColumn = $columns === 2 ? '--50d' : '';
    $history = isset($history) ? $history : true;
    $queryData = isset($queryData) ? $queryData : false;
@endphp

<div class="clinic-history">
    <div class="clinic-history__container">
        <ul class="clinic-history__accordion accordion">
            <li>
                <div class="accordion__item">
                    <h2>Información del paciente</h2>
                </div>
                <div class="accordion__info">
                    <form action="#" class="form">
                        <div class="form__item form__item{{ $classColumn }}">
                            <label for="name" class="form__label">Nombre(s)</label>
                            <input type="text" class="form__input" id="name">
                        </div>
                        <div class="form__item form__item{{ $classColumn }}">
                            <label for="last-name" class="form__label">Apellido(s)</label>
                            <input type="text" class="form__input" id="last-name">
                        </div>
                        <div class="form__item form__item{{ $classColumn }}">
                            <label for="email" class="form__label">Email</label>
                            <input type="text" class="form__input" id="email">
                        </div>
                        <div class="form__item form__item{{ $classColumn }}">
                            <label for="occupation" class="form__label">Ocupación</label>
                            <input type="text" class="form__input" id="occupation">
                        </div>
                        <div class="form__item form__item{{ $classColumn }}">
                            <label for="type-document" class="form__label">Tipo de Documento</label>
                            <select name="" class="form__select" id="type-document">
                                <option value="">Carnet de extrangería</option>
                                <option value="">Dni</option>
                            </select>
                        </div>
                        <div class="form__item form__item{{ $classColumn }}">
                            <label for="marital-status" class="form__label">Estado Civil</label>
                            <input type="text" class="form__input" id="marital-status">
                        </div>
                        <div class="form__item form__item{{ $classColumn }}">
                            <label for="number-document" class="form__label">Número de Documento</label>
                            <input type="text" class="form__input" id="number-document">
                        </div>
                        <div class="form__item form__item{{ $classColumn }}">
                            <label for="address" class="form__label">Dirección</label>
                            <input type="text" class="form__input" id="address">
                        </div>
                        <div class="form__item form__item{{ $classColumn }}">
                            <label for="birthday" class="form__label">Fecha de Nacimiento</label>
                            <input type="date" class="form__input" id="birthday">
                            <span class="form__item-icon icon-date"></span>
                        </div>
                        <div class="form__item form__item{{ $classColumn }}">
                            <label for="instruction" class="form__label">Grado de Instrucción</label>
                            <input type="text" class="form__input" id="instruccion">
                        </div>
                        <div class="form__item form__item{{ $classColumn }}">
                            <label for="phone" class="form__label">Phone</label>
                            <input type="text" class="form__input" id="phone">
                        </div>
                        <div class="form__item form__item{{ $classColumn }}">
                            <label for="email" class="form__label">Religión</label>
                            <input type="text" class="form__input" id="email">
                        </div>
                        <div class="form__item form__item{{ $classColumn }}">
                            <fieldset>
                                <legend>¿Cómo prefieres que te llamemos?</legend>
                                <div>
                                    <input type="radio" name="checked" id="yes" value="si" checked >
                                    <label for="yes">Si</label>
                                </div>
                                <div>
                                    <input type="radio" name="checked" id="do-not" value="no">
                                    <label for="do-not">No</label>
                                </div>
                            </fieldset>
                        </div>
                        <div class="form__item form__item{{ $classColumn }}">
                            <label for="last-control" class="form__label">Fecha del último control</label>
                            <input type="date" class="form__input" id="last-control">
                            <span class="form__item-icon icon-date"></span>
                        </div>
                    </form>
                </div>
            </li>
            <li>
                <div class="accordion__item">
                    <h2>Antecedentes Personales</h2>
                </div>
                <div class="accordion__info">
                    <form action="#" class="form">
                        <div class="form__item form__item{{ $classColumn }}">
                            <fieldset>
                                <legend>Alergias a medicamentos o alimentos</legend>
                                <div>
                                    <input type="radio" name="checked" id="yes-allergies" value="si" checked >
                                    <label for="yes-allergies">Si</label>
                                </div>
                                <div>
                                    <input type="radio" name="checked" id="do-not-allergies" value="no">
                                    <label for="do-not-allergies">No</label>
                                </div>
                            </fieldset>
                            <input type="text" class="input-rspta">
                        </div>

                        <div class="form__item form__item{{ $classColumn }}">
                            <fieldset>
                                <legend>Enfermedades previas</legend>
                                <div>
                                    <input type="radio" name="checked" id="yes-previous-illnesses" value="si" checked >
                                    <label for="yes-previous-illnesses">Si</label>
                                </div>
                                <div>
                                    <input type="radio" name="checked" id="do-not-previous-illnesses" value="no">
                                    <label for="do-not-previous-illnesses">No</label>
                                </div>
                            </fieldset>
                        </div>

                        <div class="form__item form__item{{ $classColumn }}">
                            <fieldset>
                                <legend>Medicación habitual</legend>
                                <div>
                                    <input type="radio" name="checked" id="yes-medication" value="si" checked >
                                    <label for="yes-medication">Si</label>
                                </div>
                                <div>
                                    <input type="radio" name="checked" id="do-not-medication" value="no">
                                    <label for="do-not-medication">No</label>
                                </div>
                            </fieldset>
                        </div>

                        <div class="form__item form__item{{ $classColumn }}">
                            <fieldset>
                                <legend>Antecedentes familiares de importancia</legend>
                                <div>
                                    <input type="radio" name="checked" id="yes-background" value="si" checked >
                                    <label for="yes-background">Si</label>
                                </div>
                                <div>
                                    <input type="radio" name="checked" id="do-not-background" value="no">
                                    <label for="do-not-background">No</label>
                                </div>
                            </fieldset>
                            <input type="text" class="input-rspta">
                        </div>
                    </form>
                </div>
            </li>
            @if ($history)
                <li>
                    <div class="accordion__item">
                        <h2>Historial del Paciente</h2>
                        <button href="#" class="button button--small button--blue-cian">
                            <span class="button__icon icon-appointment-previous"></span>
                            <span class="button__text">Registrar Cita Previa</span>
                        </button>
                        <button href="#" class="button button--small button--blue-cian">
                            <span class="button__icon icon-add"></span>
                            <span class="button__text button__text--desktop">Añadir Cita Próxima</span>
                            <span class="button__text button__text--mobile">Añadir Cita</span>
                        </button>
                    </div>
                    <div class="accordion__info">
                        <table class="clinic-history__table">
                            <tr>
                                <th>Nro. de Cita</th>
                                <th>Fecha y Hora</th>
                                <th>Modalidad</th>
                                <th>Receta</th>
                                <th>Acciones</th>
                            </tr>
                            <tr>
                                <td style="height: 20px"></td>
                            </tr>
                            <tr>
                                <td>4.1</td>
                                <td>31/12/21 - 10:00</td>
                                <td>Presencial</td>
                                <td>Enviada</td>
                                <td><a href="#" class="button button--medium button--blue-cian">
                                    <span class="button__text">Ver Cita</span></a></td>
                            </tr>
                            <tr>
                                <td>4.1</td>
                                <td>31/12/21 - 10:00</td>
                                <td>Presencial</td>
                                <td><a href="#"><strong>Enviar</strong></a></td>
                                <td><a href="#" class="button button--medium button--blue-cian">
                                    <span class="button__text">Ver Cita</span></a></td>
                            </tr>
                            <tr>
                                <td>4.1</td>
                                <td>31/12/21 - 10:00</td>
                                <td>Presencial</td>
                                <td><a href="#"><strong>Enviar</strong></a></td>
                                <td><a href="#" class="button button--medium button--blue-cian">
                                    <span class="button__text">Ver Cita</span></a></td>
                            </tr>
                        </table>
                        {{-- mobile --}}
                        <div class="clinic-history__table-mobile">
                            <div class="clinic-history__table-mobile_item">
                                <div class="clinic-history__table-mobile_info">
                                    <h3>Cita 4.1 - 31/12/21</h3>
                                    <span>10:00am</span>
                                    <span>Modalidad</span>
                                    <span>Presencial</span>
                                </div>
                                <div class="dropdwn">
                                    <div class="dropdown-container">
                                        <input type="checkbox" id="drop" />
                                        <label for="drop">Acciones</label>
                                        <ul class="content">
                                        <li><a href="#">Ver Cita</a></li>  
                                        <li><a href="#">Ver Receta</a></li>     
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            @endif

            @if ($queryData)
                <li>
                    <div class="accordion__item">
                        <h2>Datos de la consulta</h2>
                    </div>
                    <div class="accordion__info">
                        @component('components.form-query-data.form-query-data')
                        @endcomponent
                    </div>
                </li>
            @endif
        </ul> 
        <div class="clinic-history__controls">
            @if ($showControlHistory)
                <a href="#" class="button button--small button--gray">
                    <span class="button__icon icon-pdf"></span>
                    <span class="button__text">Exportar PDF</span>
                </a>
                <button class="button button--small button--red">
                    <span class="button__icon icon-close"></span>
                    <span class="button__text">Borrar</span>
                </button>
            @endif
            @if ($showControlQueryData)
                <a href="#" class="button button--small button--blue-cian">
                    <span class="button__text">Ver adjuntos</span>
                </a>
                <form action="#">
                    <div class="form-file">
                        <label for="file" class="button button--small form-file__label"></span>Adjuntar archivos</label>
                        <input type="file" class="form-file__input" id="file">
                    </div>
                </form>
                <button class="button button--small button--blue-cian">
                    <span class="button__icon icon-save"></span>
                    <span class="button__text">Guardar</span>
                </button>
            @endif
        </div>       
    </div>
</div>