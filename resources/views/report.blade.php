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

                        <h1>Reporte de cuestionario 1 </h1>
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
                                        <option value="penafiel" @if(old('penafiel') == 'penafiel') selected @endif>Peñafiel</option>
                                        <option value="jj" @if(old('jj') == 'jj') selected @endif>J&J</option>
                                        <option value="jj" @if(old('transportation') == 'transportation') selected @endif>Transportes</option>
                                    </select>
                                  </div>
                                </div>


                                <div class="col-sm-3">
                                  <div class="form-group">
                                    <label>Puesto</label>
                                    <select class="form-control" id="position">
                                        <option value="">Sin seleccionar</option>
                                        <option value="operations_analist" @if(old('operations_analist') == 'operations_analist') selected @endif>Analista de operaciones</option>
                                        <option value="direction_assistant" @if(old('direction_assistant') == 'direction_assistant') selected @endif>Asistente de dirección</option>
                                        <option value="inventory_auditor" @if(old('inventory_auditor') == 'inventory_auditor') selected @endif>Auditor de inventarios</option>
                                        <option value="administration_assistant" @if(old('administration_assistant') == 'administration_assistant') selected @endif>Auxiliar administrativo</option>
                                        <option value="warehouse_assistant" @if(old('warehouse_assistant') == 'warehouse_assistant') selected @endif>Auxiliar de almacén</option>
                                        <option value="buy_assistant" @if(old('buy_assistant') == 'buy_assistant') selected @endif>Auxiliar de compras</option>
                                        <option value="clean_assistant" @if(old('clean_assistant') == 'clean_assistant') selected @endif>Auxiliar de limpieza</option>
                                        <option value="mainteinance_assistant" @if(old('mainteinance_assistant') == 'mainteinance_assistant') selected @endif>Auxiliar de mantenimiento</option>
                                        <option value="operations_assistant" @if(old('operations_assistant') == 'operations_assistant') selected @endif>Auxiliar de operaciones</option>
                                        <option value="private_driver" @if(old('private_driver') == 'private_driver') selected @endif>Chofer particular</option>
                                        <option value="coo" @if(old('coo') == 'coo') selected @endif>Gerente de operaciones</option>
                                        <option value="maintenance" @if(old('maintenance') == 'maintenance') selected @endif>Mantenimiento</option>
                                        <option value="monitoring" @if(old('monitoring') == 'monitoring') selected @endif>Monitorista</option>
                                        <option value="forklift_operator" @if(old('forklift_operator') == 'forklift_operator') selected @endif>Operador de montacargas</option>
                                        <option value="rrhh" @if(old('rrhh') == 'rrhh') selected @endif>Recursos humanos</option>
                                        <option value="operations_supervisor" @if(old('operations_supervisor') == 'operations_supervisor') selected @endif>Supervisor de operaciones</option>
                                        
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
                            Esta gráfica muestra los resultados de la evaluación del seguindo exámen.
                          </p>
{{--                           <div class="table-responsive" style="width:100%;">
                          <table  id="idTable" class="table table-condensed table-hover" style="width:100%;overflow-x: auto;">
                            <thead>

                                <th scope="col">name</th>
                                <th scope="col">quest1</th>
                                <th scope="col">quest2</th>
                                <th scope="col">quest3</th>
                                <th scope="col">quest4</th>
                                <th scope="col">quest5</th>
                                <th scope="col">quest6</th>
                                <th scope="col">quest7</th>
                                <th scope="col">quest8</th>
                                <th scope="col">quest9</th>
                                <th scope="col">quest10</th>
                                <th scope="col">quest11</th>
                                <th scope="col">quest12</th>
                                <th scope="col">quest13</th>
                                <th scope="col">quest14</th>
                                <th scope="col">quest15</th>
                                <th scope="col">quest16</th>
                                <th scope="col">quest17</th>
                                <th scope="col">quest18</th>
                                <th scope="col">quest19</th>
                                <th scope="col">quest20</th>
                                <th scope="col">quest21</th>
                                <th scope="col">quest22</th>
                                <th scope="col">quest23</th>
                                <th scope="col">quest24</th>
                                <th scope="col">quest25</th>
                                <th scope="col">quest26</th>
                                <th scope="col">quest27</th>
                                <th scope="col">quest28</th>
                                <th scope="col">quest29</th>
                                <th scope="col">quest30</th>
                                <th scope="col">quest31</th>
                                <th scope="col">quest32</th>
                                <th scope="col">quest33</th>
                                <th scope="col">quest34</th>
                                <th scope="col">quest35</th>
                                <th scope="col">quest36</th>
                                <th scope="col">quest37</th>
                                <th scope="col">quest38</th>
                                <th scope="col">quest39</th>
                                <th scope="col">quest40</th>
                                <th scope="col">quest41</th>
                                <th scope="col">quest42</th>
                                <th scope="col">quest43</th>
                                <th scope="col">quest44</th>
                                <th scope="col">quest45</th>
                                <th scope="col">quest46</th>
                                <th scope="col">quest47</th>
                                <th scope="col">quest48</th>
                                <th scope="col">quest49</th>
                                <th scope="col">quest50</th>
                                <th scope="col">quest51</th>
                                <th scope="col">quest52</th>
                                <th scope="col">quest53</th>
                                <th scope="col">quest54</th>
                                <th scope="col">quest55</th>
                                <th scope="col">quest56</th>
                                <th scope="col">quest57</th>
                                <th scope="col">quest58</th>
                                <th scope="col">quest59</th>
                                <th scope="col">quest60</th>
                                <th scope="col">quest61</th>
                                <th scope="col">quest62</th>
                                <th scope="col">quest63</th>
                                <th scope="col">quest64</th>
                                <th scope="col">quest65</th>
                                <th scope="col">quest66</th>
                                <th scope="col">quest67</th>
                                <th scope="col">quest68</th>
                                <th scope="col">quest69</th>
                                <th scope="col">quest70</th>
                                <th scope="col">quest71</th>
                                <th scope="col">quest72</th>
                            
							</thead>
								<tbody id="idTbody" style = "background-color: white;">
								</tbody>
                            </table>
                        </div> --}}
                        </figure>

                        <div class="container">
                            
                        </div>
                        
                        
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
    body {
        font-family: 'Open Sans', sans-serif;
    }

    footer {
        margin: 5px;
        background-color: #0068A5;
        padding: 5px;
        text-align: center;
        font-size: 18px;
        color: #9BD2F0;
    }
    .container {
    text-align: center;
    justify-content: center; /* Alinear horizontalmente */
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
        
    });

    function quest1(){
        window.location.href = "http://127.0.0.1:8000/home";
    }
    function quest2(){
        window.location.href = "http://127.0.0.1:8000/report2";
    }
    function filtrar(){
        var dataForTable = [];
        var names = [];
        $.ajax({
            data: {
                "gender": $('#gender').val(),
                "civil_status": $('#civil_status').val(),
                "social_reason": $('#social_reason').val(),
                "area": $('#area').val(),
                "position": $('#position').val(),
                "position_type": $('#position_type').val(),
                "working_day": $('#working_day').val()

            },
            url: "/getinfoform1_sec1",
            type: "GET",
            dataType: 'json',
                success: function (data) {
                console.log(data);
                var names=[];
                var dataT = [];
                var sec1quest1 = [];
                var sec1quest2 = [];
                var sec1quest3 = [];
                var sec1quest4 = [];
                var sec1quest5 = [];
                var sec1quest6 = [];
                // Cada uno de los asesores
                var value = 50;
                var minValue = 0;
                var maxValue = 100;
                // genera el color secuencial
                var nameVal ="";
                var h = 0;
                data.forEach(element => {
                    var i = 0;
                    for (let prop in element) {    
                        if (prop == 'name' ){
                            nameVal = element[prop];
                            }else{
                            switch (prop) {
                                case "sec1quest1":
                                    if(element[prop] == 'si'){
                                        sec1quest1.push(1);
                                    }else{
                                        sec1quest1.push(0);
                                    }
                                break;
                                case "sec1quest2":
                                    if(element[prop] == 'si'){
                                        sec1quest2.push(1);
                                    }else{
                                        sec1quest2.push(0);
                                    }
                                break;
                                case "sec1quest3":
                                    if(element[prop] == 'si'){
                                        sec1quest3.push(1);
                                    }else{
                                        sec1quest3.push(0);
                                    }
                                break;
                                case "sec1quest4":
                                    if(element[prop] == 'si'){
                                        sec1quest4.push(1);
                                    }else{
                                        sec1quest4.push(0);
                                    }
                                break;
                                case "sec1quest5":
                                    if(element[prop] == 'si'){
                                        sec1quest5.push(1);
                                    }else{
                                        sec1quest5.push(0);
                                    }
                                break;
                                case "sec1quest6":
                                    if(element[prop] == 'si'){
                                        sec1quest6.push(1);
                                    }else{
                                        sec1quest6.push(0);
                                    }
                                break;
                            }
                        }
                        i++;
                    }
                    // Se arma la data
                    jsonDat = {
                        name: nameVal,
                        data: [sec1quest1[h],sec1quest2[h],sec1quest3[h],sec1quest4[h],sec1quest5[h],sec1quest6[h]]
                    };
                    dataT.push(jsonDat);

                    h++;

                });
                names = ["Acontecimientos Muerte","Asaltos","Actos violentos","Secuestro","Amenazas","Otro"];





                startGraph(dataT,names);
                //startReport(data);
        }})
    }


    function startGraph(dataTable,names){
        Highcharts.chart('container', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Resultados de la primera seccion'
        },
        subtitle: {
            text: 'Devolp By Mcsarmend'
        },
        xAxis: {
            categories: names,
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Rainfall (mm)'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y}</b></td></tr>',
            
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: dataTable
    });
    }


    function sequentialColor(value, minValue, maxValue) {
        // define los colores inicial y final
        var startColor = '#ffffff';
        var endColor = '#0077c9';
        // define la escala de color
        var colorScale = chroma.scale([startColor, endColor]).mode('lab').domain([minValue, maxValue]);
        // convierte el valor numérico en un valor de color
        var color = colorScale(value).hex();
        return color;
    }

    function startReport(data){
        // Array de objetos con los datos
        var datos = [
            { id: 1, nombre: "Juan", edad: 25 },
            { id: 2, nombre: "Ana", edad: 30 },
            { id: 3, nombre: "Pedro", edad: 20 }
        ];
        
        // Crear la tabla
        var miTabla = $("#idTable").DataTable({
            dom: 'Bfrtip',
            buttons: [
            'excelHtml5',
            'pdfHtml5',
            'print'
            ],
            data: data,
            columns: [
                { data:"name"},
                { data:"quest1"},
                { data:"quest2"},
                { data:"quest3"},
                { data:"quest4"},
                { data:"quest5"},
                { data:"quest6"},
                { data:"quest7"},
                { data:"quest8"},
                { data:"quest9"},
                { data:"quest10"},
                { data:"quest11"},
                { data:"quest12"},
                { data:"quest13"},
                { data:"quest14"},
                { data:"quest15"},
                { data:"quest16"},
                { data:"quest17"},
                { data:"quest18"},
                { data:"quest19"},
                { data:"quest20"},
                { data:"quest21"},
                { data:"quest22"},
                { data:"quest23"},
                { data:"quest24"},
                { data:"quest25"},
                { data:"quest26"},
                { data:"quest27"},
                { data:"quest28"},
                { data:"quest29"},
                { data:"quest30"},
                { data:"quest31"},
                { data:"quest32"},
                { data:"quest33"},
                { data:"quest34"},
                { data:"quest35"},
                { data:"quest36"},
                { data:"quest37"},
                { data:"quest38"},
                { data:"quest39"},
                { data:"quest40"},
                { data:"quest41"},
                { data:"quest42"},
                { data:"quest43"},
                { data:"quest44"},
                { data:"quest45"},
                { data:"quest46"},
                { data:"quest47"},
                { data:"quest48"},
                { data:"quest49"},
                { data:"quest50"},
                { data:"quest51"},
                { data:"quest52"},
                { data:"quest53"},
                { data:"quest54"},
                { data:"quest55"},
                { data:"quest56"},
                { data:"quest57"},
                { data:"quest58"},
                { data:"quest59"},
                { data:"quest60"},
                { data:"quest61"},
                { data:"quest62"},
                { data:"quest63"},
                { data:"quest64"},
                { data:"quest65"},
                { data:"quest66"},
                { data:"quest67"},
                { data:"quest68"},
                { data:"quest69"},
                { data:"quest70"},
                { data:"quest71"},
                { data:"quest72"},

            ],
        });
    }

    
    
</script>
@endsection