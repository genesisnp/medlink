@push('styles')
    <link rel="stylesheet" href={{ mix('css/citation-breakdown.css') }}>
@endpush

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