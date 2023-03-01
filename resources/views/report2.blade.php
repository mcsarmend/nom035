@extends('layouts.app')
{{--  Eventos Traumaticos --}}
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <br>
                            <div class ="container"> 
                                <div class="row">
                                    <div class="col-sm-3">
                                        <button class="btn btn-secondary" onclick="quest1()">Cuestionario 1 </button>
                                    </div>
                                    <div class="col-sm-3">
                                        <button class="btn btn-secondary" onclick="quest2()">Cuestionario 2 </button>
                                    </div>
                                    
                                    
                                </div>
                            </div>
                        <br>

                        <h1>Reporte de cuestionario 2 </h1>
                        <div class="container">
                            <div class="row">
                                
                                <div class="col-sm-3">
                                  <div class="form-group">
                                    <label>Sexo</label>
                                    <select class="form-control" id="gender">
                                        <option value="">Sin seleccionar</option>
                                        <option value="male" @if(old('gender') == 'male') selected @endif>Masculino</option>
                                        <option value="female" @if(old('gender') == 'female') selected @endif>Femenino</option>
                                    </select>
                                  </div>
                                </div>

                                <div class="col-sm-3">
                                  <div class="form-group">
                                    <label>Estado Civil</label>
                                    <select class="form-control" id="civil_status">
                                        <option value="">Sin seleccionar</option>
                                        <option value="married" @if(old('married') == 'married') selected @endif>Casado</option>
                                        <option value="single" @if(old('single') == 'single') selected @endif>Soltero</option>
                                        <option value="free_union" @if(old('free_union') == 'free_union') selected @endif>Unión libre</option>
                                        <option value="divorced" @if(old('divorced') == 'divorced') selected @endif>Divorciado</option>
                                        <option value="widow" @if(old('widow') == 'widow') selected @endif>Viudo</option>
                                    </select>
                                  </div>
                                </div>

                                <div class="col-sm-3">
                                  <div class="form-group">
                                    <label>Razón social</label>
                                    <select class="form-control" id="social_reason">
                                        <option value="jonsusacv" @if(old('jonsusacv') == 'jonsusacv') selected @endif>Be Group</option>
                                    </select>
                                  </div>
                                </div>

                                <div class="col-sm-3">
                                  <div class="form-group">
                                    <label>Cliente</label>
                                    <select class="form-control" id="area">
                                        <option value="">Sin seleccionar</option>
                                        <option value="administration" @if(old('administration') == 'administration') selected @endif>Administración</option>
                                        <option value="guadalajara" @if(old('guadalajara') == 'guadalajara') selected @endif>Guadalajara</option>
                                        <option value="monterrey" @if(old('monterrey') == 'monterrey') selected @endif>Monterrey</option>
                                        <option value="queretaro" @if(old('queretaro') == 'queretaro') selected @endif>Querétaro</option>
                                        <option value="telmex" @if(old('telmex') == 'telmex') selected @endif>Telmex</option>
                                        <option value="control_tower" @if(old('control_tower') == 'control_tower') selected @endif>Torre de control</option>
                                        <option value="yelloy_team" @if(old('yelloy_team') == 'yelloy_team') selected @endif>Equipo Amarillo</option>
                                        <option value="blue_team" @if(old('blue_team') == 'blue_team') selected @endif>EquipoAzul</option>
                                        <option value="read_team" @if(old('read_team') == 'read_team') selected @endif>Equipo Rojo</option>
                                        <option value="green_team" @if(old('green_team') == 'green_team') selected @endif>EquipoVerde</option>
                                        <option value="tultitlan" @if(old('tultitlan') == 'tultitlan') selected @endif>Tultitlán 2</option>
                                    </select>
                                  </div>
                                </div>


                                <div class="col-sm-3">
                                  <div class="form-group">
                                    <label>Tipo de puesto</label>
                                    <select class="form-control" id="position_type">
                                        <option value="">Sin seleccionar</option>
                                        <option value="operative" @if(old('operative') == 'operative') selected @endif>Operativo</option>
                                        <option value="supervisor" @if(old('supervisor') == 'supervisor') selected @endif>Supervisor</option>
                                        <option value="prof_or_tec" @if(old('prof_or_tec') == 'prof_or_tec') selected @endif>Profesional o técnico</option>
                                        <option value="manager" @if(old('jonsusacv') == 'jonsusacv') selected @endif>Gerente</option>
                                    </select>
                                  </div>
                                </div>


                                <div class="col-sm-3">
                                  <div class="form-group">
                                    <label>Tipo de jornada de trabajo</label>
                                    <select class="form-control" id="working_day">
                                        <option value="">Sin seleccionar</option>
                                        <option value="night" @if(old('night') == 'night') selected @endif>Fijo nocturno (Entre las 20:00 y 6:00)</option>
                                        <option value="day" @if(old('day') == 'day') selected @endif>Fijo diurno (Entre las 6:00 y las 20:00)</option>
                                        <option value="mixer" @if(old('mixer') == 'mixer') selected @endif>Fijo mixto (Combinación de nocturno y diurno)</option>    
                                    </select>
                                  </div>
                                </div>



                              </div>  
                          </div>
                        <br>
                       
                        <div class = "container">
                        <button type="submit" class="btn btn-primary" style ="padding: 10px 20px; width: 200px" onclick="filtrar()">Filtrar</button>
                        </div>
                        

                        <figure class="highcharts-figure">
                          <div id="container"></div>
                          <p class="highcharts-description">
                            All color options in Highcharts can be defined as gradients or patterns.
                            In this chart, a gradient fill is used for decorative effect in a pie
                            chart.
                          </p>
                        </figure>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<style>
    .container {
    text-align: center; /* Alinear horizontalmente */
    }

    .box {
    width: 100px;
    height: 100px;
    display: inline-block; /* Mostrar los divs en línea */
    margin: 0 10px; /* Agregar un margen */
    }
    .filters {
    width: 200px;
    height: 100px;
    display: inline-block; /* Mostrar los divs en línea */
    margin: 0 10px; /* Agregar un margen */
    }

    .red {
    background-color: red;
    }

    .green {
    background-color: green;
    }

    .blue {
    background-color: blue;
    }
    .highcharts-figure,
    .highcharts-data-table table {
    min-width: 320px;
    max-width: 660px;
    margin: 1em auto;
    }

    .highcharts-data-table table {
    font-family: Verdana, sans-serif;
    border-collapse: collapse;
    border: 1px solid #ebebeb;
    margin: 10px auto;
    text-align: center;
    width: 100%;
    max-width: 500px;
    }

    .highcharts-data-table caption {
    padding: 1em 0;
    font-size: 1.2em;
    color: #555;
    }

    .highcharts-data-table th {
    font-weight: 600;
    padding: 0.5em;
    }

    .highcharts-data-table td,
    .highcharts-data-table th,
    .highcharts-data-table caption {
    padding: 0.5em;
    }

    .highcharts-data-table thead tr,
    .highcharts-data-table tr:nth-child(even) {
    background: #f8f8f8;
    }

    .highcharts-data-table tr:hover {
    background: #f1f7ff;
    }
</style>
<script>
    $(document).ready(function() {
        startGraph();
    });

    function quest1(){
        window.location.href = "http://127.0.0.1:8000/home";
    }
    function quest2(){
        window.location.href = "http://127.0.0.1:8000/report2";
    }
    function filtrar(){
        $.ajax({
            data: {
                "gender": $('#gender').val(),
                "civil_status": $('#civil_status').val(),
                "social_reason": $('#social_reason').val(),
                "area": $('#area').val(),
                "position_type": $('#position_type').val(),
                "working_day": $('#working_day').val()

            },
            url: "/getinfoform2",
            type: "GET",
            dataType: 'json',
                success: function (data) {
                if (data.success) {
                    console.log(data)
                }else{
                    swal("Ocurrio un problema al solicitar la información","","error");
                }
            
        }})
    }

    function startGraph(){
        // Data retrieved from https://netmarketshare.com/
        // Radialize the colors
        Highcharts.setOptions({
        colors: Highcharts.map(Highcharts.getOptions().colors, function (color) {
            return {
            radialGradient: {
                cx: 0.5,
                cy: 0.3,
                r: 0.7
            },
            stops: [
                [0, color],
                [1, Highcharts.color(color).brighten(-0.3).get('rgb')] // darken
            ]
            };
        })
        });

        // Build the chart
        Highcharts.chart('container', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Browser market shares in April, 2022',
            align: 'left'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        accessibility: {
            point: {
            valueSuffix: '%'
            }
        },
        plotOptions: {
            pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                connectorColor: 'silver'
            }
            }
        },
        series: [{
            name: 'Share',
            data: [
            { name: 'Chrome', y: 73.24 },
            { name: 'Edge', y: 12.93 },
            { name: 'Firefox', y: 4.73 },
            { name: 'Safari', y: 2.50 },
            { name: 'Internet Explorer', y: 1.65 },
            { name: 'Other', y: 4.93 }
            ]
        }]
        });
    }
    
</script>
@endsection