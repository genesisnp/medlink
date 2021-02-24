@push('styles')
    <link rel="stylesheet" href={{ mix('css/form-query-data.css') }}>
@endpush

<form action="#" class="query-data-form">
    <div class="query-data-form__item">
        <label for="agregar1">Motivo de la consulta</label>
        <textarea name="agregar1" id="agregar1" cols="30" rows="5"></textarea>
    </div>
    <div class="query-data-form__item">
        <label for="agregar2">Examen físico / Examen mental</label>
        <textarea name="agregar2" id="agregar2" cols="30" rows="5"></textarea>
    </div>
    <div class="query-data-form__item">
        <label for="agregar3">Examen físico / Examen mental</label>
        <textarea name="agregar3" id="agregar3" cols="30" rows="5"></textarea>
    </div>
    <div class="query-data-form__item">
        <label for="agregar4">Diagnóstico</label>
        <div>
            {{-- Estilos post integracion --}}
        </div>
    </div>
    <div class="query-data-form__item">
        <label for="agregar5">Diagnóstico / Más información</label>
        <textarea name="agrega5r" id="agregar5" cols="30" rows="5"></textarea>
    </div>
    <div class="query-data-form__item">
        <label for="agregar6">Tratamiento</label>
        <textarea name="agregar6" id="agrega6r" cols="30" rows="5"></textarea>
    </div>
    <div class="query-data-form__item">
        <label for="agregar7">Plan de Trabajo</label>
        <textarea name="agregar7" id="agregar7" cols="30" rows="5"></textarea>
    </div>
    <div class="query-data-form__item">
        <label for="agregar8">Observaciones</label>
        <textarea name="agregar8" id="agregar8" cols="30" rows="5"></textarea>
    </div>
</form>