@push('styles')
    <link rel="stylesheet" href={{ mix('css/form-profile.css') }}>
@endpush

<div class="form-profile bg-white">
    <div class="form-profile__container ">
        <form action="#" class="form">
            <h2 class="form__title">Información Adicional 
                <div class="button button--blue-cian button--small" id="button-edit">
                    <span class="button__icon icon-edit"></span>
                    <span class="button__text">Editar</span>
                </div>
            </h2>
            <div class="form__item">
                <label for="" class="form__label">Email</label>
                <input type="text" class="form__input" disabled>
            </div>
            <div class="form__item">
                <label for="" class="form__label">Tipo de Documento</label>
                <select name="" id="" class="form__select" disabled>
                    <option value="">Carnet de extrangería</option>
                    <option value="">Dni</option>
                </select>
            </div>
            <div class="form__item">
                <label for="" class="form__label">Número de Documento</label>
                <input type="text" class="form__input" disabled>
            </div>
            <div class="form__item">
                <label for="" class="form__label">Fecha de Nacimiento</label>
                <input type="date" class="form__input" disabled>
                <span class="form__item-icon icon-date"></span>
            </div>
            <div class="form__item">
                <label for="" class="form__label">Número de Celular</label>
                <input type="text" class="form__input" disabled>
            </div>
            <div class="form__item">
                <label for="" class="form__label">Dirección de Consultorio</label>
                <input type="text" class="form__input" disabled>
            </div>
            <div class="form__item">
                <fieldset>
                    <legend>¿Cómo prefieres que te llamemos?</legend>
                    <div>
                        <input type="radio" name="colocar" id="doctora" value="doctora" checked disabled>
                        <label for="doctora">Doctora</label>
                    </div>
                    <div>
                        <input type="radio" name="colocar" id="doctor" value="doctor" disabled>
                        <label for="doctor">Doctor</label>
                    </div>
                    <div>
                        <input type="radio" name="colocar" id="my-name" value="por mi nombre" disabled>
                        <label for="my-name">Por mi nombre</label>
                    </div>
                </fieldset>
            </div>
            <button class="button button--blue-cian button--small" id="button-save">
                <span class="button__icon icon-save"></span>
                <span class="button__text">Guardar</span>
            </button>
        </form>
    </div>
</div>
@push('scripts')
    <script src={{ mix('js/form-profile.js') }}></script>
@endpush