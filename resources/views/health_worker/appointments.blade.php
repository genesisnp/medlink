@extends('layouts.master')
@section('title', 'MY PROFILE')

@push('styles')
    <link rel="stylesheet" href={{ mix('css/appointments.css') }}>
@endpush

@section('content')
    @component('components.header.header', [ 'title' => 'Citas', 'showCenterLogo' => false ])
    @endcomponent

    <div class="tabs-appointment">
        @component('components.tabs.tabs', [ 'data_tab' => 'proximas-citas','data_tab2' => 'citas-previas', 'tab_text' => 'Próximas citas', 'tab_text2' => 'Citas previas' ])
            @slot('tabs_body')
                <div id="proximas-citas" class="tabs-content__item current">
                    <table class="table-appointment">
                        <tr>
                            <th>Nombre del paciente</th>
                            <th>Fecha y Hora</th>
                            <th>Modalidad</th>
                            <th>Acciones</th>
                        </tr>
                        <tr>
                            <td>Rodrigo Alfonso Murillo Ruales</td>
                            <td>31/12/21 - 10:00 am</td>
                            <td>Modalidad</td>
                            <td>
                                <a href="#" class="button button--blue button--medium"><span class="button__text">Historia Clínica</span></a>
                                <button class="button button--green-light button--medium open-modal" data-modal-link="modal-payment"><span class="button__text">Revisar Pago</span></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Rodrigo Alfonso Murillo Ruales</td>
                            <td>31/12/21 - 10:00 am</td>
                            <td>Virtual</td>
                            <td>
                                <a href="#" class="button button--blue button--medium"><span class="button__text">Historia Clínica</span></a>
                                <a href="#" class="button button--red button--medium"><span class="button__text">Rechazada</span></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Rodrigo Alfonso Murillo Ruales</td>
                            <td>31/12/21 - 10:00 am</td>
                            <td>Virtual</td>
                            <td>
                                <a href="#" class="button button--blue button--medium"><span class="button__text">Historia Clínica</span></a>
                                <a href="#" class="button button--blue-whale button--medium"><span class="button__text">Atender</span></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Rodrigo Alfonso Murillo Ruales</td>
                            <td>31/12/21 - 10:00 am</td>
                            <td>Virtual</td>
                            <td>
                                <a href="#" class="button button--blue button--medium"><span class="button__text">Historia Clínica</span></a>
                                <button class="button button--green-light button--medium"><span class="button__text">Revisar Pago</span></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Rodrigo Alfonso Murillo Ruales</td>
                            <td>31/12/21 - 10:00 am</td>
                            <td>Virtual</td>
                            <td>
                                <a href="#" class="button button--blue button--medium"><span class="button__text">Historia Clínica</span></a>
                                <a href="#" class="button button--blue-whale button--medium"><span class="button__text">Atender</span></a>
                            </td>
                        </tr>
                    </table>
                    {{-- mobile --}}
                    <div class="table-appointment-mobile">
                        <div class="table-appointment-mobile__content">
                            <div class="table-appointment-mobile__item">
                                <div class="table-appointment-mobile__info">
                                    <div class="table-appointment-mobile__info--name">Rodrigo Alfonso Murillo Ruales</div>
                                    <span>03/12/21</span>
                                    <span>15:00</span>
                                    <span>Presencial</span>
                                </div>
                                <div class="dropdwn">
                                    <div class="dropdown-container">
                                        <input type="checkbox" id="drop" />
                                        <label for="drop">Acciones</label>
                                        <ul class="content">
                                          <li><a href="#">Historia Médica</a></li>
                                          <li><button>Revisar Pago</button></li>  
                                          <li><a href="#">Atender</a></li>     
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="table-appointment-mobile__item">
                                <div class="table-appointment-mobile__info">
                                    <div class="table-appointment-mobile__info--name">Rodrigo Alfonso Murillo Ruales</div>
                                    <span>03/12/21</span>
                                    <span>15:00</span>
                                    <span>Presencial</span>
                                </div>
                                <div class="dropdwn">
                                    <div class="dropdown-container">
                                        <input type="checkbox" id="drop" />
                                        <label for="drop">Acciones</label>
                                        <ul class="content">
                                          <li><a href="#">Historia Médica</a></li>
                                          <li><a href="#">Revisar Pago</a></li>  
                                          <li><a href="#">Atender</a></li>     
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="citas-previas" class="tabs-content__item">
                    <table class="table-appointment">
                        <tr>
                            <th>Nombre del paciente</th>
                            <th>Fecha y Hora</th>
                            <th>Modalidad</th>
                            <th>Acciones</th>
                        </tr>
                        <tr>
                            <td>Rodrigo Alfonso Murillo Ruales</td>
                            <td>31/12/21 - 10:00 am</td>
                            <td>Modalidad</td>
                            <td>
                                <a href="#" class="button button--blue button--medium"><span class="button__text">Historia Clínica</span></a>
                                <button class="button button--blue button--medium"><span class="button__text">Agendar control</span></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Rodrigo Alfonso Murillo Ruales</td>
                            <td>31/12/21 - 10:00 am</td>
                            <td>Virtual</td>
                            <td>
                                <a href="#" class="button button--blue-whale button--medium"><span class="button__text">Historia Clínica</span></a>
                                <a href="#" class="button button--blue button--medium"><span class="button__text">Agendar control</span></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Rodrigo Alfonso Murillo Ruales</td>
                            <td>31/12/21 - 10:00 am</td>
                            <td>Virtual</td>
                            <td>
                                <a href="#" class="button button--blue-whale button--medium"><span class="button__text">Historia Clínica</span></a>
                                <a href="#" class="button button--blue-whale button--medium"><span class="button__text">Agendar control</span></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Rodrigo Alfonso Murillo Ruales</td>
                            <td>31/12/21 - 10:00 am</td>
                            <td>Virtual</td>
                            <td>
                                <a href="#" class="button button--blue-whale button--medium"><span class="button__text">Historia Clínica</span></a>
                                <button class="button button--blue button--medium"><span class="button__text">Agendar control</span></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Rodrigo Alfonso Murillo Ruales</td>
                            <td>31/12/21 - 10:00 am</td>
                            <td>Virtual</td>
                            <td>
                                <a href="#" class="button button--blue-whale button--medium"><span class="button__text">Historia Clínica</span></a>
                                <a href="#" class="button button--blue button--medium"><span class="button__text">Agendar control</span></a>
                            </td>
                        </tr>
                    </table>
                    {{-- mobile --}}
                    <div class="table-appointment-mobile">
                        <div class="table-appointment-mobile__content">
                            <div class="table-appointment-mobile__item">
                                <div class="table-appointment-mobile__info">
                                    <div class="table-appointment-mobile__info--name">Rodrigo Alfonso Murillo Ruales</div>
                                    <span>03/12/21</span>
                                    <span>15:00</span>
                                    <span>Presencial</span>
                                </div>
                                <div class="dropdwn">
                                    <div class="dropdown-container">
                                        <input type="checkbox" id="drop" />
                                        <label for="drop">Acciones</label>
                                        <ul class="content">
                                            <li><a href="#">Historia Médica</a></li>
                                            <li><a href="#">Enviar receta</a></li>  
                                            <li><a href="#">Agendar control</a></li>      
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="table-appointment-mobile__item">
                                <div class="table-appointment-mobile__info">
                                    <div class="table-appointment-mobile__info--name">Rodrigo Alfonso Murillo Ruales</div>
                                    <span>03/12/21</span>
                                    <span>15:00</span>
                                    <span>Presencial</span>
                                </div>
                                <div class="dropdwn">
                                    <div class="dropdown-container">
                                        <input type="checkbox" id="drop" />
                                        <label for="drop">Acciones</label>
                                        <ul class="content">
                                          <li><a href="#">Historia Médica</a></li>
                                          <li><a href="#">Enviar receta</a></li>  
                                          <li><a href="#">Agendar control</a></li>     
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endslot
        @endcomponent
    </div>
    @component('components.modal.modal', [ 'dataLink' => 'modal-payment' ])
        @slot('modal_body')
            <div class="modal-payment__content">
                <h2>Revisar Pago</h2>
                <p>Revisa el comprobante de pago y apruebalo en caso este todo bien, o rechazalo
                    en caso haya algún problema</p>
                <div class="modal-payment-img">
                    <img src="assets/images/voucher-de-pago.jpg" alt="Voucher de pago">
                </div>
                <div class="modal-payment__controls">
                    <button class="button button--green-light button--small">
                        <span class="button__icon icon-check"></span>
                        <span class="button__text">APROBAR</span>
                    </button>
                    <button class="button button--red button--small">
                        <span class="button__icon icon-close"></span>
                        <span class="button__text">RECHAZAR</span>
                    </button>
                </div>
                <div class="modal-payment-message">
                    <label for="message">Motivo de rechazo</label>
                    <textarea name="message" id="message" cols="30" rows="10"></textarea>
                </div>
                <div class="modal-payment__control">
                    <button class="button button--blue-cian button--small">
                        <span class="button__icon icon-save"></span>
                        <span class="button__text">Guardar</span>
                    </button>
                </div>
            </div>
        @endslot
    @endcomponent

@endsection

@push('scripts')
    
    
@endpush
