@push('styles')
    <link rel="stylesheet" href={{ mix('css/line-progress.css') }}>
@endpush

<div class="progress">
    <div class="progress__container bg-white">
        <h3 class="progress__title">¡Tu perfil está completado a un 80%!</h3>
        <div class="progress-percentage">
            <ul class="progress-percentage__list">
                <li class="progress-percentage__item">
                    <span>Perfil<br>completo</span>
                    <div>20%</div>
                </li>
                <li class="progress-percentage__item">
                    <span>Firma<br>digital</span>
                    <div>40%</div>
                </li>
                <li class="progress-percentage__item">
                    <span>Métodos<br>de Pago</span>
                    <div>60%</div>
                </li>
                <li class="progress-percentage__item">
                    <span>Horarios<br>configurados</span>
                    <div>80%</div>
                </li>
                <li class="progress-percentage__item">
                    <span>Primera cita<br>realizada</span>
                    <div class="disabled">100%</div>
                </li>
            </ul>
        </div>
    </div>
</div>