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

    <div class="diary-table bg-white">
        <div class="diary-table__title heading">
            <h2 class="heading__title diary-table__title--desktop heading__title--blue"><span class="icon-patient heading__title--icon"></span>Agenda</h2>
            <h2 class="heading__title diary-table__title--mobile heading__title--blue"><span class="icon-patient heading__title--icon"></span>Agenda de hoy</h2>
            <div class="diary-table__controls heading__controls">
                <a href="#" class="button button--medium button--blue">
                    <span>Ver Calendario</span>
                </a>
                <button class="button button--medium button--blue show-modal open-modal" data-modal-link="form-appointment">
                    <span>Nueva Cita</span>
                </button>
            </div>
        </div>
        <table class="diary-table__table">
            <tr>
                <th class="hidden-visually">Time</th>
                <th>Lun 11</th>
                <th>Mar 12</th>
                <th>Mie 13</th>
                <th>Jue 14</th>
                <th>Vie 15</th>
                <th>Sab 16</th>
                <th>Dom 17</th>
            </tr>
            <tr>
                <td>10:00</td>
                <td>Rodrigo Murillo</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>11:00</td>
                <td></td>
                <td>Adriana Gamarra</td>
                <td></td>
                <td></td>
                <td>Valeria Arica</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>12:00</td>
                <td>Erick Mendoza</td>
                <td></td>
                <td>Anibal Ventura</td>
                <td></td>
                <td></td>
                <td>Rodrigo Murillo</td>
                <td></td>
            </tr>
            <tr>
                <td>13:00</td>
                <td></td>
                <td></td>
                <td>Katherine Chuco</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>
        {{-- mobile --}}
        <div class="diary-table-list">
            <ul class="diary-table-list-content">
                <li class="diary-table-list__item">
                    <span class="diary-table-list__time">10:00 - </span>
                    <span class="diary-table-list__name">Erick Mendoza</span>
                </li>
                <li class="diary-table-list__item">
                    <span class="diary-table-list__time">11:00 - </span>
                    <span class="diary-table-list__name">Adriana Gamarra</span>
                </li>
                <li class="diary-table-list__item">
                    <span class="diary-table-list__time">15:00 - </span>
                    <span class="diary-table-list__name">Anibal Ventura</span>
                </li>
                <li class="diary-table-list__item">
                    <span class="diary-table-list__time">18:00 - </span>
                    <span class="diary-table-list__name">Katherine Chuco</span>
                </li>
            </ul>
        </div>
    </div>    

    @component('components.modal-appointment.modal-appointment')
       
    @endcomponent

@endsection

@push('scripts')

    
@endpush
