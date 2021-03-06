@push('styles')
    <link rel="stylesheet" href={{ mix('css/patients-attended.css') }}>
@endpush

<div class="patients-attended">
    <div class="patients-attended__container bg-white">
        <div class="patients-attended__heading heading">
            <div class="heading__title">
                <span class="icon-patient heading__title--icon"></span>
                <h2 class="heading__title--blue">Pacientes atendidos</h2>
            </div>
            
        </div>
        <div class="patients-attended__content">
            <div class="patients-attended__item">
                <p class="patients-attended__text"><strong>Elige el periodo en el que deseas visualizar la data</strong></p>
                <div class="patients-attended__input">
                    <input type="date" placeholder="Fecha inicio">
                    <input type="date" placeholder="Fecha Fin">
                </div>
            </div>
            <div class="patients-attended__item">
                <span class="patients-attended__number">999</span>
                <p class="patients-attended__text">Pacientes se han atendido contigo</p>
                <p class="patients-attended__text--blue">Nuestros doctores con más atenciones tienen 999 pacientes en promedio mensual</p>
            </div>
            <div class="patients-attended__item">
                <span class="patients-attended__number">S/ 600</span>
                <p class="patients-attended__text">De ingresos recibidos en el periodo escogido</p>
                <p class="patients-attended__text--blue">Nuestros doctores con más ingresos tienen S/1000 de ganancias en promedio mensual</p>
            </div>
        </div>
        
    </div>
</div>