@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        {{--ToDo: Get all items from db--}}
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Item 1</div>
                <div class="card-body">
                    <p>Foto del item</p>
                    Aquí va el item 1 (último creado)
                    Patrón
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Item 2</div>
                <div class="card-body">
                    <p>Foto del item</p>
                    Aquí va el item 2 Penúltimo creado)
                    Patrón
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Item 3</div>
                <div class="card-body">
                    <p>Foto del item</p>
                    Aquí va el item 3 (etc)
                    Patrón
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
