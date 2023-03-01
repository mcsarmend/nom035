@extends('layouts.app')
{{--  Eventos Traumaticos --}}
@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">{{ __('CUESTIONARIO PARA IDENTIFICAR LOS FACTORES DE RIESGO PSICOSOCIAL Y EVALUAR EL ENTORNO ORGANIZACIONAL EN LOS CENTROS DE TRABAJO') }}</div>
                            <br>
                            
        
                            <div class="card-body">
        
                                  
                                    <h3>I.- Acontecimiento traumático severo</h3>
                                    <h4>¿Ha presenciado o sufrido alguna vez, durante o con motivo del trabajo un acontecimiento como los siguiente</h4>
                                    <p id="q1">Accidente que tenga como consecuencia la muerte, la pérdida de un miembro o una lesión grave?
                                    <br>
                                        <input type="radio" name="sec1quest1"  value="si" required><label for="si">Sí</label>
                                        <input type="radio" name="sec1quest1"  value="no"> <label for="no">No</label>
                                    </p>
                                    <p id ="q2">Asaltos?
                                    <br>
                                        <input type="radio" name="sec1quest2" value="si" required> Sí
                                        <input type="radio" name="sec1quest2" value="no"> No
                                    </p>
                                    <p id ="q3">Actos violentos que derivaron en lesiones graves?
                                    <br>
                                        <input type="radio" name="sec1quest3" value="si" required> Sí
                                        <input type="radio" name="sec1quest3" value="no"> No
                                    </p>
                                    <p id = "q4">Secuestro?
                                    <br>
                                        <input type="radio" name="sec1quest4" value="si" required> Sí
                                        <input type="radio" name="sec1quest4" value="no"> No
                                    </p>
                                    <p id = q5>Amenazas?, o
                                    <br>
                                        <input type="radio" name="sec1quest5" value="si" required> Sí
                                        <input type="radio" name="sec1quest5" value="no"> No
                                    </p>
                                    <p id= "q6">Cualquier otro que ponga en riesgo su vida o salud, y/o la de otras personas?
                                    <br>
                                        <input type="radio" name="sec1quest6" value="si" required> Sí
                                        <input type="radio" name="sec1quest6" value="no"> No
                                    <hr>
                                        <!-- Sección 2 -->
                                    <h3>II.- Recuerdos persistentes sobre el acontecimiento (durante el último mes):</h3>
                                    <p id="q7">¿Ha tenido recuerdos recurrentes sobre el acontecimiento que le provocan malestares?
                                    <br>
                                        <input type="radio" name="sec2quest1" value="si" required> Sí
                                        <input type="radio" name="sec2quest1" value="no"> No
                                    </p>
                                    <p id="q8">¿Ha tenido sueños de carácter recurrente sobre el acontecimiento, que le producen malestar?
                                    <br>
                                        <input type="radio" name="sec2quest2" value="si" required> Sí
                                        <input type="radio" name="sec2quest2" value="no"> No
                                    </p>
                                    <!-- Otras preguntas de la sección 2 -->
                                    <hr>
                                        <!-- Sección 3 -->
                                    <h3>III.- Esfuerzo por evitar circunstancias parecidas o asociadas al acontecimiento (durante el último mes):</h3>
                                    <p id="q9">¿Se ha esforzado por evitar todo tipo de sentimientos, conversaciones o situaciones que le puedan recordar el acontecimiento?
                                    <br>
                                        <input type="radio" name="sec3quest1" value="si" required> Sí
                                        <input type="radio" name="sec3quest1" value="no"> No
                                    </p>
                                    <p id="q10">¿Se ha esforzado por evitar todo tipo de actividades, lugares o personas que motivan recuerdos del acontecimiento?
                                    <br>
                                        <input type="radio" name="sec3quest2" value="si" required> Sí
                                        <input type="radio" name="sec3quest2" value="no"> No
                                    </p>
                                    
                                    <p id="q11">¿Ha tenido dificultad para recordar alguna parte importante del evento?
                                    <br>
                                        <input type="radio" name="sec3quest3" value="si" required> Sí
                                        <input type="radio" name="sec3quest3" value="no"> No
                                    </p>
                                    <p id="q12">¿Ha disminuido su interés en sus actividades cotidianas?
                                    <br>
                                        <input type="radio" name="sec3quest4" value="si" required> Sí
                                        <input type="radio" name="sec3quest4" value="no"> No
                                    </p>
                                    <p id="q13">¿Se ha sentido usted alejado o distante de los demás?
                                    <br>
                                        <input type="radio" name="sec3quest5" value="si" required> Sí
                                        <input type="radio" name="sec3quest5" value="no"> No
                                    </p>
                                    <p id="q14">¿Ha notado que tiene dificultad para expresar sus sentimientos?
                                    <br>
                                        <input type="radio" name="sec3quest6" value="si" required> Sí
                                        <input type="radio" name="sec3quest6" value="no"> No
                                    </p>
                                    <p id="q15">¿Ha tenido la impresión de que su vida se va a acortar, que va a morir antes que otras personas o que tiene un futuro limitado?
                                    <br>
                                        <input type="radio" name="sec3quest7" value="si" required> Sí
                                        <input type="radio" name="sec3quest7" value="no"> No
                                    </p>
                                    <!-- Otras preguntas de la sección 2 -->
                                    <hr>
                                    
                                    <!-- Sección 4 -->
                                    <h3>IV Afectación (durante el último mes):</h3>
                                    <p id="q16">¿Ha tenido usted dificultades para dormir?
                                    <br>
                                        <input type="radio" name="sec4quest1" value="si" required> Sí
                                        <input type="radio" name="sec4quest1" value="no"> No
                                    </p>
                                    <p id="q17">¿Ha estado particularmente irritable o le han dado arranques de coraje?
                                    <br>
                                        <input type="radio" name="sec4quest2" value="si" required> Sí
                                        <input type="radio" name="sec4quest2" value="no"> No
                                    </p>
                                    <p id="q18">¿Ha tenido dificultad para concentrarse?
                                    <br>
                                        <input type="radio" name="sec4quest3" value="si" required> Sí
                                        <input type="radio" name="sec4quest3" value="no"> No
                                    </p>
                                    <p id="q19">¿Ha estado nervioso o constantemente en alerta?
                                    <br>
                                        <input type="radio" name="sec4quest4" value="si" required> Sí
                                        <input type="radio" name="sec4quest4" value="no"> No
                                    </p>
                                    <p id="20">¿Se ha sobresaltado fácilmente por cualquier cosa?
                                    <br>
                                        <input type="radio" name="sec4quest5" value="si" required> Sí
                                        <input type="radio" name="sec4quest5" value="no"> No
                                    </p>
                                    
                                    <!-- Otras preguntas de la sección 2 -->
                                    <hr>
        
        
                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button  class="btn btn-primary"  onclick="saveForm();" >
                                                Guardar
                                            </button>
                                        </div>
                                    </div>
        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
           
        </div>
    </div>
    <script>
        
                
        
        $(document).ready(function() {
            // Selecciona el botón con la clase 'btn-primary' y cambia su color de fondo a rojo
            $('.btn-primary').css('background-color', 'green');

           
            $('#boton').click(function() {
  var respuesta = $('input[name="respuesta"]:checked').val();
  console.log(respuesta); // Imprime "si" o "no", dependiendo de la opción seleccionada
});





        });
        function saveForm (){
            if($("input[name='sec1quest1']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q1").css("color", "red");return;}else{$("#q1").css("color", "black");}
            if($("input[name='sec1quest2']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q2").css("color", "red");return;}else{$("#q2").css("color", "black");}
            if($("input[name='sec1quest3']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q3").css("color", "red");return;}else{$("#q3").css("color", "black");}
            if($("input[name='sec1quest4']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q4").css("color", "red");return;}else{$("#q4").css("color", "black");}
            if($("input[name='sec1quest5']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q5").css("color", "red");return;}else{$("#q5").css("color", "black");}
            if($("input[name='sec1quest6']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q6").css("color", "red");return;}else{$("#q6").css("color", "black");}
            if($("input[name='sec2quest1']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q7").css("color", "red");return;}else{$("#q7").css("color", "black");}
            if($("input[name='sec2quest2']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q8").css("color", "red");return;}else{$("#q8").css("color", "black");}
            if($("input[name='sec3quest1']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q9").css("color", "red");return;}else{$("#q9").css("color", "black");}
            if($("input[name='sec3quest2']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q10").css("color", "red");return;}else{$("#q10").css("color", "black");}
            if($("input[name='sec3quest3']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q11").css("color", "red");return;}else{$("#q11").css("color", "black");}
            if($("input[name='sec3quest4']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q12").css("color", "red");return;}else{$("#q12").css("color", "black");}
            if($("input[name='sec3quest5']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q13").css("color", "red");return;}else{$("#q13").css("color", "black");}
            if($("input[name='sec3quest6']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q14").css("color", "red");return;}else{$("#q14").css("color", "black");}
            if($("input[name='sec3quest7']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q15").css("color", "red");return;}else{$("#q15").css("color", "black");}
            if($("input[name='sec4quest1']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q16").css("color", "red");return;}else{$("#q16").css("color", "black");}
            if($("input[name='sec4quest2']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q17").css("color", "red");return;}else{$("#q17").css("color", "black");}
            if($("input[name='sec4quest3']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q18").css("color", "red");return;}else{$("#q18").css("color", "black");}
            if($("input[name='sec4quest4']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q19").css("color", "red");return;}else{$("#q19").css("color", "black");}
            if($("input[name='sec4quest5']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q20").css("color", "red");return;}else{$("#q20").css("color", "black");} 
            console.log("Todas las preguntas validadas");
            swal({
                title: "¿Estás seguro de querer terminar el formulario?",
                text: "Los datos se guardarán en el sistema",
                icon: "warning",
                buttons: true,
                
                dangerMode: true,
                }).then((save) => {

                if (save) {
                    $.ajax({
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "sec1quest1":$("input[name='sec1quest1']:checked").val(),
                        "sec1quest2":$("input[name='sec1quest2']:checked").val(),
                        "sec1quest3":$("input[name='sec1quest3']:checked").val(),
                        "sec1quest4":$("input[name='sec1quest4']:checked").val(),
                        "sec1quest5":$("input[name='sec1quest5']:checked").val(),
                        "sec1quest6":$("input[name='sec1quest6']:checked").val(),
                        "sec2quest1":$("input[name='sec2quest1']:checked").val(),
                        "sec2quest2":$("input[name='sec2quest2']:checked").val(),
                        "sec3quest1":$("input[name='sec3quest1']:checked").val(),
                        "sec3quest2":$("input[name='sec3quest2']:checked").val(),
                        "sec3quest3":$("input[name='sec3quest3']:checked").val(),
                        "sec3quest4":$("input[name='sec3quest4']:checked").val(),
                        "sec3quest5":$("input[name='sec3quest5']:checked").val(),
                        "sec3quest6":$("input[name='sec3quest6']:checked").val(),
                        "sec3quest7":$("input[name='sec3quest7']:checked").val(),
                        "sec4quest1":$("input[name='sec4quest1']:checked").val(),
                        "sec4quest2":$("input[name='sec4quest2']:checked").val(),
                        "sec4quest3":$("input[name='sec4quest3']:checked").val(),
                        "sec4quest4":$("input[name='sec4quest4']:checked").val(),
                        "sec4quest5":$("input[name='sec4quest5']:checked").val(),
                    },
                    url: "/procesarFormularioAT",
                    type: "POST",
                    dataType: 'json',
                        success: function (data) {
                        if (data.success) {
                            swal({
                                title: "Formulario llenado correctamente",
                                text: "Gracias por llenar el primer formulario",
                                icon: 'success',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'OK!!!!'
                            }).then((result) => {
                                if (result== true) {
                                    window.location.href = "http://127.0.0.1:8000/riesgo_psicosocial";
                                }
                            });
  
                        }else{
                            swal("Ocurrió un error al guardar","", "danger");
                        }
                    
                    }})
                }}
                
                ); 

        }

    </script> 
@endsection
