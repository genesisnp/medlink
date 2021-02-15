@extends('layouts.master')
@section('title', 'INDICATOR')

@push('styles')
    <link rel="stylesheet" href={{ mix('css/indicators.css') }}>
@endpush

@section('content')
    @component('components.header.header', [ 'title' => 'Indicadores', 'showCenterLogo' => false ])
    @endcomponent

    @component('components.patients-attended.patients-attended')
    @endcomponent

    @component('components.views.views')
    @endcomponent

    <div class="line-progress">
        <div class="line-progress__container bg-white">
            <h3 class="line-progress__title">¡Tu perfil está completado a un 80%!</h3>
            <div class="line-progress-percentage">
                <ul class="line-progress-percentage__list">
                    <li class="line-progress-percentage__item">
                        <span>Perfil<br>completo</span>
                        <div>20%</div>
                    </li>
                    <li class="line-progress-percentage__item">
                        <span>Firma<br>digital</span>
                        <div>40%</div>
                    </li>
                    <li class="line-progress-percentage__item">
                        <span>Métodos<br>de Pago</span>
                        <div>60%</div>
                    </li>
                    <li class="line-progress-percentage__item">
                        <span>Horarios<br>configurados</span>
                        <div>80%</div>
                    </li>
                    <li class="line-progress-percentage__item">
                        <span>Primera cita<br>realizada</span>
                        <div class="disabled">100%</div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="citation-breakdown">
        <div class="citation-breakdown__container bg-white">
            <div class="citation-breakdown__title heading">
                <div class="heading__title heading__title--flex-column">
                    <span class="icon-clock heading__title--icon"></span>
                    <h2 class="heading__title--blue">
                        Desglose de citas</h2>
                </div>
            </div>
            <div class="citation-breakdown__content">
                <div class="citation-breakdown__item">
                    <span class="citation-breakdown__number">25</span>
                    <p class="citation-breakdown__text">Citas de tu última semana fueron <strong>virtuales</strong></p>
                </div>
                <div class="citation-breakdown__item">
                    <span class="citation-breakdown__number">33</span>
                    <p class="citation-breakdown__text">Citas de tu última semana fueron <strong>presenciales</strong></p>
                </div>
            </div>
        </div>
    </div>

    <div class="effectiveness-rate">
        <div class="effectiveness-rate__container bg-white">
            <h3 class="effectiveness-rate__title">Tu perfil tiene una efectividad del 50%</h3>
            <p class="effectiveness-rate__text">200 personas lo vieron y 100 sacaron una cita contigo</p>
            <p class="effectiveness-rate__text--blue">Nuestros doctores con mejor efectividad tienen 80% en promedio</p>
        </div>
    </div>

    <div class="diagnostics">
        <div class="diagnostics__container bg-white">
            <div class="diagnostics__title heading">
                <div class="heading__title">
                    <span class="icon-appointment heading__title--icon"></span>
                    <h2 class="heading__title--blue">Diagnosticos más comunes</h2>
                </div>
            </div>
            <ul class="diagnostics__list">
                <li class="diagnostics__item"><strong>A001 Cólera: </strong>22 pacientes</li>
                <li class="diagnostics__item"><strong>A0012 Colón Irritable: </strong>20 pacientes</li>
                <li class="diagnostics__item"><strong>A0021 Hipertensión: </strong>12 pacientes</li>
                <li class="diagnostics__item"><strong>A0012 Asma: </strong>10 pacientes</li>
            </ul>
        </div>
    </div>

@endsection

@push('scripts')
    
    
@endpush
