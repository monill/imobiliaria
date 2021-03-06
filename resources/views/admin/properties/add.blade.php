@extends('admin.layout.main')

@section('css')
    <style>
        #map {height: 400px; width: 100%;}
    </style>
    <!-- bootstrap-select -->
    <link href="{{ asset('admin/vendor/bootstrap-select/bootstrap-select.min.css') }}" rel="stylesheet" />
    <!-- custom-select -->
    <link rel="stylesheet" href="{{ asset('admin/vendor/custom-select/custom-select.css') }}">
    <!-- summernotes CSS -->
    <link href="{{ asset('admin/vendor/summernote/dist/summernote.css') }}" rel="stylesheet" />
@endsection

@section('content')

    <div class="row bg-title">
        <!-- .page title -->
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Adicionar Propriedade</h4>
        </div>
        <!-- /.page title -->
        <!-- .breadcrumb -->
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ url('properties') }}">Propriedades</a></li>
                <li class="active">Adicionar Propriedade</li>
            </ol>
        </div>
        <!-- /.breadcrumb -->
    </div>
    <!-- .row -->
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                @include('errors.errors')
                {!! Form::open(['url' => 'properties', 'files' => false, 'class' => 'pro-add-form']) !!}
                    <div class="form-group">
                        {!! Form::label('name', 'Nome: *') !!}
                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('purpose', 'Proposito: *') !!}
                        {!! Form::select('purpose', [1 => 'Locação', 2 => 'Venda'], 1, ['class' => 'selectpicker', 'data-style' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('type', 'Tipo: *') !!}
                        {!! Form::select('type', [1 => 'Casa', 2 => 'Apartamento', 3 => 'Terreno', 4 => 'Flat'], 1, ['class' => 'selectpicker', 'data-style' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('address', 'Endereço: *') !!}
                        {!! Form::text('address', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('description', 'Descrição: *') !!}
                        {!! Form::textarea('description', null, ['class' => 'form-control summernote', 'rows' => 6]) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('price', 'Valor: *') !!}
                        {!! Form::text('price', null, ['class' => 'form-control', 'step' => 'any']) !!}
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-4">
                                {!! Form::label('bathrooms', 'Banheiros:') !!}
                                {!! Form::text('bathrooms', null, ['class' => 'form-control', 'data-bts-button-down-class' => 'btn btn-default btn-outline', 'data-bts-button-up-class' => 'btn btn-default btn-outline']) !!}
                            </div>
                            <div class="col-sm-4">
                                {!! Form::label('bedrooms', 'Quartos:') !!}
                                {!! Form::text('bedrooms', null, ['class' => 'form-control', 'data-bts-button-down-class' => 'btn btn-default btn-outline', 'data-bts-button-up-class' => 'btn btn-default btn-outline']) !!}
                            </div>
                            <div class="col-sm-4">
                                {!! Form::label('garage', 'Garagens:') !!}
                                {!! Form::text('garage', null, ['class' => 'form-control', 'data-bts-button-down-class' => 'btn btn-default btn-outline', 'data-bts-button-up-class' => 'btn btn-default btn-outline']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-4">
                                {!! Form::label('city', 'Cidade: *') !!}
                                {!! Form::text('city', null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="col-sm-4">
                                {!! Form::label('area', 'Area: *') !!}
                                {!! Form::text('area', null, ['class' => 'form-control', 'placeholder' => '__x__']) !!}
                            </div>
                            <div class="col-sm-4">
                                {!! Form::label('slider', 'Exibir na Página inicial:') !!}
                                {!! Form::select('slider', [0 => 'Não', 1 => 'Sim'], 0, ['class' => 'selectpicker', 'data-style' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-4">
                                {!! Form::label('year', 'Ano Construção:') !!}
                                {!! Form::number('year', null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="col-sm-4">
                                {!! Form::label('category_id', 'Categoria:') !!}
                                {!! Form::select('category_id', $categories, null, ['class' => 'selectpicker', 'data-style' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h3 class="box-title">Características:</h3>
                    <div class="form-group row">
                        @foreach($features as $feature)
                            <div class="col-sm-4">
                                <div class="checkbox checkbox-info checkbox-circle">
                                    <input type="checkbox" id="feature-{{ $feature->id }}" name="feature[]" value="{{ $feature->id }}">
                                    <label for="feature-{{ $feature->id }}"> {{ $feature->name }} </label>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <hr>
                    <h3 class="box-title">Youtube Video</h3>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-5">
                                {!! Form::label('video1', 'Video 1:') !!}
                                {!! Form::text('video1', null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="col-sm-5">
                                {!! Form::label('video2', 'Video 2:') !!}
                                {!! Form::text('video2', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h3 class="box-title">Localização</h3>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-3">
                                {!! Form::label('latitude', 'Latitude:') !!}
                                {!! Form::text('latitude', null, ['class' => 'form-control', 'readonly']) !!}
                            </div>
                            <div class="col-sm-3">
                                {!! Form::label('longitude', 'Longitude:') !!}
                                {!! Form::text('longitude', null, ['class' => 'form-control', 'readonly']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div id="map"></div>
                    </div>
                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Adicionar</button>
                    <a href="{{ url('properties') }}" class="btn btn-inverse waves-effect waves-light">Cancelar</a>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <!-- .row -->

@endsection

@section('scripts')
    <!-- mask -->
    <script src="{{ asset('admin/vendor/mask/src/jquery.mask.js') }}"></script>
    <!-- bootstrap-select -->
    <script src="{{ asset('admin/vendor/bootstrap-select/bootstrap-select.min.js') }}"></script>
    <!-- custom-select -->
    <script src="{{ asset('admin/vendor/custom-select/custom-select.min.js') }}"></script>
    <!-- summernote -->
    <script src="{{ asset('admin/vendor/summernote/dist/summernote.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/summernote/lang/summernote-pt-BR.js') }}"></script>
    <!-- TouchSpin -->
    <script src="{{ asset('admin/vendor/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $(".select2").select2();

            $('.summernote').summernote({
                height: 350, // set editor height
                lang: 'pt-BR',
                minHeight: null, // set minimum height of editor
                maxHeight: null, // set maximum height of editor
                focus: false // set focus to editable area after initializing summernote
            });

            $("input[name='bathrooms']").TouchSpin();
            $("input[name='bedrooms']").TouchSpin();
            $("input[name='garage']").TouchSpin();

            $('#price').mask('000.000.000.000.000,00', {reverse: true});
        });
    </script>
    <script>
        function initMap() {
            let uluru = {
                lat: -23.082125,
                lng: -46.950334
            };
            let map = new google.maps.Map(document.getElementById('map'), {
                zoom: 14,
                center: uluru
            });
            let marker = new google.maps.Marker({
                position: uluru,
                map: map,
                draggable: true
            });
            google.maps.event.addListener(marker, 'dragend', function ( event ) {
                document.getElementById("latitude").value = this.getPosition().lat();
                document.getElementById("longitude").value = this.getPosition().lng();
            });
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBI6yreMxqsm-wuLrBIdNvawJcbkyAOnj8&callback=initMap"></script>
@endsection
