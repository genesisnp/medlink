@extends('layouts.master')
@section('title', 'DIARY AND CALENDAR')

@push('styles')
    <link rel="stylesheet" href={{ mix('css/calendar.css') }}>
@endpush

@section('content')

    @component('components.header.header', [ 'title' => 'Agenda y Calendario', 'showCenterLogo' => false ])
    @endcomponent

    <div class="diary bg-white">
        <h2 class="diary__title">Duración de la cita</h2>
        <p class="diary__text">Por favor selecciona un tiempo de duración para personalizar tu horario.</p>
        <p class="diary__text"><strong>Recuerda que si no seleccionas el tiempo de duración de tu cita, no podrás ver la parrilla de horarios.</strong></p>
        <div class="diary__select">
            <select name="select-duration" id="select-duration" aria-label="Seleccionar duración de consulta">
                <option value="">15 minutos</option>
                <option value="">30 minutos</option>
                <option value="">45 minutos</option>
                <option value="">1 hora</option>
            </select>
        </div>
    
        <h2 class="diary__title">Tiempo mínimo para agendar una consulta.</h2>
        <p class="diary__text"><strong>Recomendamos un mínimo de 6 horas para garantizar una buena experiencia para el paciente.</strong></p>
        <div class="diary__input">
            <input type="text" aria-label="Ingresar tiempo minimo para agendar consulta">
        </div>
    </div>
    
    @component('components.tabs.tabs', [ 'data_tab' => 'presenciales', 'data_tab2' => 'virtuales', 'tab_text' => 'presenciales', 'tab_text2' => 'virtuales' ])
        @slot('tabs_body')
            @component('components.tabs-timetable.tabs-timetable')
            @endcomponent    
        @endslot
    @endcomponent
    
@endsection

@push('scripts')
    
    
@endpush
