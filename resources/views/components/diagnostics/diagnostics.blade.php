@push('styles')
    <link rel="stylesheet" href={{ mix('css/diagnostics.css') }}>
@endpush

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