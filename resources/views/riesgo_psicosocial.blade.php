@extends('layouts.app')
{{--  Eventos Traumaticos --}}
@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('CUESTIONARIO PARA IDENTIFICAR LOS FACTORES DE RIESGO PSICOSOCIAL Y EVALUAR EL ENTORNO ORGANIZACIONAL EN LOS CENTROS DE TRABAJO') }}</div>
                    <br>
                    

                    <div class="card-body">

                    
                            <div class="card-header">{{ __('Para responder las preguntas siguientes considere las condiciones ambientales de su centro de trabajo.') }}</div>
                            <br>
                            <p id="q1">1.- El espacio donde trabajo me permite realizar mis actividades de manera segura e higiénica
                                <br>
                                <label for="siempre">Siempre:</label>
                                <input type="radio" name="quest1" value="0" id="siempre">
                            
                                <label for="casi-siempre">Casi siempre:</label>
                                <input type="radio" name="quest1" value="1" id="casi-siempre">
                            
                                <label for="algunas-veces">Algunas veces:</label>
                                <input type="radio" name="quest1" value="2" id="algunas-veces">
                            
                                <label for="casi-nunca">Casi nunca:</label>
                                <input type="radio" name="quest1" value="3" id="casi-nunca">
                            
                                <label for="nunca">Nunca:</label>
                                <input type="radio" name="quest1" value="4" id="nunca">
                            </p>
                            

                            <p id="q2">2.- Mi trabajo me exige hacer mucho esfuerzo físico
                                <br>
                                <label for="siempre">Siempre:</label>
                                <input type="radio" name="quest2" value="4" id="siempre">
                            
                                <label for="casi-siempre">Casi siempre:</label>
                                <input type="radio" name="quest2" value="3" id="casi-siempre">
                            
                                <label for="algunas-veces">Algunas veces:</label>
                                <input type="radio" name="quest2" value="2" id="algunas-veces">
                            
                                <label for="casi-nunca">Casi nunca:</label>
                                <input type="radio" name="quest2" value="1" id="casi-nunca">
                            
                                <label for="nunca">Nunca:</label>
                                <input type="radio" name="quest2" value="0" id="nunca">
                            </p>
                            
                            
                            <p id="q3">3.- Me preocupa sufrir un accidente en mi trabajo
                                <br>
                                <label for="siempre">Siempre:</label>
                                <input type="radio" name="quest3" value="4" id="siempre">
                            
                                <label for="casi-siempre">Casi siempre:</label>
                                <input type="radio" name="quest3" value="3" id="casi-siempre">
                            
                                <label for="algunas-veces">Algunas veces:</label>
                                <input type="radio" name="quest3" value="2" id="algunas-veces">
                            
                                <label for="casi-nunca">Casi nunca:</label>
                                <input type="radio" name="quest3" value="1" id="casi-nunca">
                            
                                <label for="nunca">Nunca:</label>
                                <input type="radio" name="quest3" value="0" id="nunca">
                            </p>
                            
                            
                            <p id="q4">4.- Considero que en mi trabajo se aplican las normas de seguridad y salud en el trabajo
                                <br>
                                <label for="siempre">Siempre:</label>
                                <input type="radio" name="quest4" value="0" id="siempre">
                            
                                <label for="casi-siempre">Casi siempre:</label>
                                <input type="radio" name="quest4" value="1" id="casi-siempre">
                            
                                <label for="algunas-veces">Algunas veces:</label>
                                <input type="radio" name="quest4" value="2" id="algunas-veces">
                            
                                <label for="casi-nunca">Casi nunca:</label>
                                <input type="radio" name="quest4" value="3" id="casi-nunca">
                            
                                <label for="nunca">Nunca:</label>
                                <input type="radio" name="quest4" value="4" id="nunca">
                            </p>
                            
                            
                            <p id="q5">5.- Considero que las actividades que realizo son peligrosas
                                <br>
                                <label for="siempre">Siempre:</label>
                                <input type="radio" name="quest5" value="4" id="siempre">
                            
                                <label for="casi-siempre">Casi siempre:</label>
                                <input type="radio" name="quest5" value="3" id="casi-siempre">
                            
                                <label for="algunas-veces">Algunas veces:</label>
                                <input type="radio" name="quest5" value="2" id="algunas-veces">
                            
                                <label for="casi-nunca">Casi nunca:</label>
                                <input type="radio" name="quest5" value="1" id="casi-nunca">
                            
                                <label for="nunca">Nunca:</label>
                                <input type="radio" name="quest5" value="0" id="nunca">
                            </p>
                            
                            <hr>
                            
                            <div class="card-header">{{ __('Para responder a las preguntas siguientes piense en la cantidad y ritmo de trabajo que tiene.') }}</div>
                            
                            <br>
                            <p id="q6">6.- Por la cantidad de trabajo que tengo debo quedarme tiempo adicional a mi turno
                                <br>
                                
                                <label for="siempre">Siempre:</label>
                                <input type="radio" name="quest6" value="4" id="siempre">
                                
                                <label for="casi-siempre">Casi siempre:</label>
                                <input type="radio" name="quest6" value="3" id="casi-siempre">
                                
                                <label for="algunas-veces">Algunas veces:</label>
                                <input type="radio" name="quest6" value="2" id="algunas-veces">
                                
                                <label for="casi-nunca">Casi nunca:</label>
                                <input type="radio" name="quest6" value="1" id="casi-nunca">
                                
                                <label for="nunca">Nunca:</label>
                                <input type="radio" name="quest6" value="0" id="nunca">
                            </p>


                            <p id="q7">7.- Por la cantidad de trabajo que tengo debo trabajar sin parar
                                <br>
                                
                                <label for="siempre">Siempre:</label>
                                <input type="radio" name="quest7" value="4" id="siempre">
                                
                                <label for="casi-siempre">Casi siempre:</label>
                                <input type="radio" name="quest7" value="3" id="casi-siempre">
                                
                                <label for="algunas-veces">Algunas veces:</label>
                                <input type="radio" name="quest7" value="2" id="algunas-veces">
                                
                                <label for="casi-nunca">Casi nunca:</label>
                                <input type="radio" name="quest7" value="1" id="casi-nunca">
                                
                                <label for="nunca">Nunca:</label>
                                <input type="radio" name="quest7" value="0" id="nunca">
                            </p>


                            <p id="q8">8.- Considero que es necesario mantener un ritmo de trabajo acelerado
                                <br>
                                
                                <label for="siempre">Siempre:</label>
                                <input type="radio" name="quest8" value="4" id="siempre">
                                
                                <label for="casi-siempre">Casi siempre:</label>
                                <input type="radio" name="quest8" value="3" id="casi-siempre">
                                
                                <label for="algunas-veces">Algunas veces:</label>
                                <input type="radio" name="quest8" value="2" id="algunas-veces">
                                
                                <label for="casi-nunca">Casi nunca:</label>
                                <input type="radio" name="quest8" value="1" id="casi-nunca">
                                
                                <label for="nunca">Nunca:</label>
                                <input type="radio" name="quest8" value="0" id="nunca">
                            </p>
                            <hr>

                            <div class="card-header">{{ __('Para responder a las preguntas siguientes piense en la cantidad y ritmo de trabajo que tiene.') }}</div>
                            <br>
                            <p id="q9">9.- Mi trabajo exige que esté muy concentrado
                                <br>
                                
                                <label for="siempre">Siempre:</label>
                                <input type="radio" name="quest9" value="4" id="siempre">
                                
                                <label for="casi-siempre">Casi siempre:</label>
                                <input type="radio" name="quest9" value="3" id="casi-siempre">
                                
                                <label for="algunas-veces">Algunas veces:</label>
                                <input type="radio" name="quest9" value="2" id="algunas-veces">
                                
                                <label for="casi-nunca">Casi nunca:</label>
                                <input type="radio" name="quest9" value="1" id="casi-nunca">
                                
                                <label for="nunca">Nunca:</label>
                                <input type="radio" name="quest9" value="0" id="nunca">
                            </p>
                            <p id="q10">10.- Mi trabajo requiere que memorice mucha información
                                <br>
                                
                                <label for="siempre">Siempre:</label>
                                <input type="radio" name="quest10" value="4" id="siempre">
                                
                                <label for="casi-siempre">Casi siempre:</label>
                                <input type="radio" name="quest10" value="3" id="casi-siempre">
                                
                                <label for="algunas-veces">Algunas veces:</label>
                                <input type="radio" name="quest10" value="2" id="algunas-veces">
                                
                                <label for="casi-nunca">Casi nunca:</label>
                                <input type="radio" name="quest10" value="1" id="casi-nunca">
                                
                                <label for="nunca">Nunca:</label>
                                <input type="radio" name="quest10" value="0" id="nunca">
                            </p>
                            <p id="q11">11.- En mi trabajo tengo que tomar decisiones difíciles muy rápido
                                <br>
                                
                                <label for="siempre">Siempre:</label>
                                <input type="radio" name="quest11" value="4" id="siempre">
                                
                                <label for="casi-siempre">Casi siempre:</label>
                                <input type="radio" name="quest11" value="3" id="casi-siempre">
                                
                                <label for="algunas-veces">Algunas veces:</label>
                                <input type="radio" name="quest11" value="2" id="algunas-veces">
                                
                                <label for="casi-nunca">Casi nunca:</label>
                                <input type="radio" name="quest11" value="1" id="casi-nunca">
                                
                                <label for="nunca">Nunca:</label>
                                <input type="radio" name="quest11" value="0" id="nunca">
                            </p>


                            <p id="q12">12.- Mi trabajo exige que atienda varios asuntos al mismo tiempo
                                <br>
                                
                                <label for="siempre">Siempre:</label>
                                <input type="radio" name="quest12" value="4" id="siempre">
                                
                                <label for="casi-siempre">Casi siempre:</label>
                                <input type="radio" name="quest12" value="3" id="casi-siempre">
                                
                                <label for="algunas-veces">Algunas veces:</label>
                                <input type="radio" name="quest12" value="2" id="algunas-veces">
                                
                                <label for="casi-nunca">Casi nunca:</label>
                                <input type="radio" name="quest12" value="1" id="casi-nunca">
                                
                                <label for="nunca">Nunca:</label>
                                <input type="radio" name="quest12" value="0" id="nunca">
                            </p>
                            <hr>
                            
                            <div class="card-header">{{ __('Las preguntas siguientes están relacionadas con las actividades que realiza en su trabajo y las responsabilidades que tiene.') }}</div>
                            <br>
                            <p id="q13">13.- En mi trabajo soy responsable de cosas de mucho valor
                            <br>
                            
                                <label for="siempre">Siempre:</label>
                                <input type="radio" name="quest13" value="4" id="siempre">
                                
                                <label for="casi-siempre">Casi siempre:</label>
                                <input type="radio" name="quest13" value="3" id="casi-siempre">
                                
                                <label for="algunas-veces">Algunas veces:</label>
                                <input type="radio" name="quest13" value="2" id="algunas-veces">
                                
                                <label for="casi-nunca">Casi nunca:</label>
                                <input type="radio" name="quest13" value="1" id="casi-nunca">
                                
                                <label for="nunca">Nunca:</label>
                                <input type="radio" name="quest13" value="0" id="nunca">
                            </p>
                            
                            <br>
                            <p id="q14">14.- Respondo ante mi jefe por los resultados de toda mi área de trabajo
                                <br>
                        
                                <label for="siempre">Siempre:</label>
                                <input type="radio" name="quest14" value="4" id="siempre">
                                
                                <label for="casi-siempre">Casi siempre:</label>
                                <input type="radio" name="quest14" value="3" id="casi-siempre">
                                
                                <label for="algunas-veces">Algunas veces:</label>
                                <input type="radio" name="quest14" value="2" id="algunas-veces">
                                
                                <label for="casi-nunca">Casi nunca:</label>
                                <input type="radio" name="quest14" value="1" id="casi-nunca">
                                
                                <label for="nunca">Nunca:</label>
                                <input type="radio" name="quest14" value="0" id="nunca">
                            </p>

                            <p id="q15">15.- En el trabajo me dan órdenes contradictorias
                                <br>
                            
                                <label for="siempre">Siempre:</label>
                                <input type="radio" name="quest15" value="4" id="siempre">
                                
                                <label for="casi-siempre">Casi siempre:</label>
                                <input type="radio" name="quest15" value="3" id="casi-siempre">
                                
                                <label for="algunas-veces">Algunas veces:</label>
                                <input type="radio" name="quest15" value="2" id="algunas-veces">
                                
                                <label for="casi-nunca">Casi nunca:</label>
                                <input type="radio" name="quest15" value="1" id="casi-nunca">
                                
                                <label for="nunca">Nunca:</label>
                                <input type="radio" name="quest15" value="0" id="nunca">
                            </p>


                            <p id="q16">16.- Considero que en mi trabajo me piden hacer cosas innecesarias
                                <br>
                            
                                <label for="siempre">Siempre:</label>
                                <input type="radio" name="quest16" value="4" id="siempre">
                                
                                <label for="casi-siempre">Casi siempre:</label>
                                <input type="radio" name="quest16" value="3" id="casi-siempre">
                                
                                <label for="algunas-veces">Algunas veces:</label>
                                <input type="radio" name="quest16" value="2" id="algunas-veces">
                                
                                <label for="casi-nunca">Casi nunca:</label>
                                <input type="radio" name="quest16" value="1" id="casi-nunca">
                                
                                <label for="nunca">Nunca:</label>
                                <input type="radio" name="quest16" value="0" id="nunca">
                            </p>
                            <hr>
                            
                            <br>
                            <div class="card-header">{{ __('Las preguntas siguientes están relacionadas con su jornada de trabajo.') }}</div>
                            <br>

                            <p id="q17">17.- Trabajo horas extras más de tres veces a la semana
                                <br>
                            
                                <label for="siempre">Siempre:</label>
                                <input type="radio" name="quest17" value="4" id="siempre">
                                
                                <label for="casi-siempre">Casi siempre:</label>
                                <input type="radio" name="quest17" value="3" id="casi-siempre">
                                
                                <label for="algunas-veces">Algunas veces:</label>
                                <input type="radio" name="quest17" value="2" id="algunas-veces">
                                
                                <label for="casi-nunca">Casi nunca:</label>
                                <input type="radio" name="quest17" value="1" id="casi-nunca">
                                
                                <label for="nunca">Nunca:</label>
                                <input type="radio" name="quest17" value="0" id="nunca">
                            </p>

                            <p id="q18">18.- Mi trabajo me exige laborar en días de descanso, festivos o fines de semana
                                <br>
                            
                                <label for="siempre">Siempre:</label>
                                <input type="radio" name="quest18" value="4" id="siempre">
                                
                                <label for="casi-siempre">Casi siempre:</label>
                                <input type="radio" name="quest18" value="3" id="casi-siempre">
                                
                                <label for="algunas-veces">Algunas veces:</label>
                                <input type="radio" name="quest18" value="2" id="algunas-veces">
                                
                                <label for="casi-nunca">Casi nunca:</label>
                                <input type="radio" name="quest18" value="1" id="casi-nunca">
                                
                                <label for="nunca">Nunca:</label>
                                <input type="radio" name="quest18" value="0" id="nunca">
                            </p>


                            <p id="q19">19.- Considero que el tiempo en el trabajo es mucho y perjudica mis actividades familiares o personales
                                <br>
                            
                                <label for="siempre">Siempre:</label>
                                <input type="radio" name="quest19" value="4" id="siempre">
                                
                                <label for="casi-siempre">Casi siempre:</label>
                                <input type="radio" name="quest19" value="3" id="casi-siempre">
                                
                                <label for="algunas-veces">Algunas veces:</label>
                                <input type="radio" name="quest19" value="2" id="algunas-veces">
                                
                                <label for="casi-nunca">Casi nunca:</label>
                                <input type="radio" name="quest19" value="1" id="casi-nunca">
                                
                                <label for="nunca">Nunca:</label>
                                <input type="radio" name="quest19" value="0" id="nunca">
                            </p>

                            <p id="q20">20.- Debo atender asuntos de trabajo cuando estoy en casa
                                <br>
                            
                                <label for="siempre">Siempre:</label>
                                <input type="radio" name="quest20" value="4" id="siempre">
                                
                                <label for="casi-siempre">Casi siempre:</label>
                                <input type="radio" name="quest20" value="3" id="casi-siempre">
                                
                                <label for="algunas-veces">Algunas veces:</label>
                                <input type="radio" name="quest20" value="2" id="algunas-veces">
                                
                                <label for="casi-nunca">Casi nunca:</label>
                                <input type="radio" name="quest20" value="1" id="casi-nunca">
                                
                                <label for="nunca">Nunca:</label>
                                <input type="radio" name="quest20" value="0" id="nunca">
                            </p>


                            <p id="q21">21.- Pienso en las actividades familiares o personales cuando estoy en mi trabajo
                                <br>
                            
                                <label for="siempre">Siempre:</label>
                                <input type="radio" name="quest21" value="4" id="siempre">
                                
                                <label for="casi-siempre">Casi siempre:</label>
                                <input type="radio" name="quest21" value="3" id="casi-siempre">
                                
                                <label for="algunas-veces">Algunas veces:</label>
                                <input type="radio" name="quest21" value="2" id="algunas-veces">
                                
                                <label for="casi-nunca">Casi nunca:</label>
                                <input type="radio" name="quest21" value="1" id="casi-nunca">
                                
                                <label for="nunca">Nunca:</label>
                                <input type="radio" name="quest21" value="0" id="nunca">
                            </p>


                            <p id="q22">22.- Pienso que mis responsabilidades familiares afectan mi trabajo 
                                <br>
                            
                                <label for="siempre">Siempre:</label>
                                <input type="radio" name="quest22" value="4" id="siempre">
                                
                                <label for="casi-siempre">Casi siempre:</label>
                                <input type="radio" name="quest22" value="3" id="casi-siempre">
                                
                                <label for="algunas-veces">Algunas veces:</label>
                                <input type="radio" name="quest22" value="2" id="algunas-veces">
                                
                                <label for="casi-nunca">Casi nunca:</label>
                                <input type="radio" name="quest22" value="1" id="casi-nunca">
                                
                                <label for="nunca">Nunca:</label>
                                <input type="radio" name="quest22" value="0" id="nunca">
                            </p>
                            <hr>
                            <br>
                            <div class="card-header">{{ __('Las preguntas siguientes están relacionadas con las decisiones que puede tomar en su trabajo.') }}</div>
                            <br>

                            <p id="q23">23.- Mi trabajo permite que desarrolle nuevas habilidades
                                <br>
                            
                                <label for="siempre">Siempre:</label>
                                <input type="radio" name="quest23" value="0" id="siempre">
                                
                                <label for="casi-siempre">Casi siempre:</label>
                                <input type="radio" name="quest23" value="1" id="casi-siempre">
                                
                                <label for="algunas-veces">Algunas veces:</label>
                                <input type="radio" name="quest23" value="2" id="algunas-veces">
                                
                                <label for="casi-nunca">Casi nunca:</label>
                                <input type="radio" name="quest23" value="3" id="casi-nunca">
                                
                                <label for="nunca">Nunca:</label>
                                <input type="radio" name="quest23" value="4" id="nunca">
                            </p>

                            <p id="q24">24.- En mi trabajo puedo aspirar a un mejor puesto
                                <br>
                            
                                <label for="siempre">Siempre:</label>
                                <input type="radio" name="quest24" value="0" id="siempre">
                                
                                <label for="casi-siempre">Casi siempre:</label>
                                <input type="radio" name="quest24" value="1" id="casi-siempre">
                                
                                <label for="algunas-veces">Algunas veces:</label>
                                <input type="radio" name="quest24" value="2" id="algunas-veces">
                                
                                <label for="casi-nunca">Casi nunca:</label>
                                <input type="radio" name="quest24" value="3" id="casi-nunca">
                                
                                <label for="nunca">Nunca:</label>
                                <input type="radio" name="quest24" value="4" id="nunca">
                            </p>

                            <p id="q25">25.- Durante mi jornada de trabajo puedo tomar pausas cuando las necesito
                                <br>
                            
                                <label for="siempre">Siempre:</label>
                                <input type="radio" name="quest25" value="0" id="siempre">
                                
                                <label for="casi-siempre">Casi siempre:</label>
                                <input type="radio" name="quest25" value="1" id="casi-siempre">
                                
                                <label for="algunas-veces">Algunas veces:</label>
                                <input type="radio" name="quest25" value="2" id="algunas-veces">
                                
                                <label for="casi-nunca">Casi nunca:</label>
                                <input type="radio" name="quest25" value="3" id="casi-nunca">
                                
                                <label for="nunca">Nunca:</label>
                                <input type="radio" name="quest25" value="4" id="nunca">
                            </p>
                           
                            <p id="q26">26.- Puedo decidir cuánto trabajo realizo durante la jornada laboral
                                <br>
                            
                                <label for="siempre">Siempre:</label>
                                <input type="radio" name="quest26" value="0" id="siempre">
                                
                                <label for="casi-siempre">Casi siempre:</label>
                                <input type="radio" name="quest26" value="1" id="casi-siempre">
                                
                                <label for="algunas-veces">Algunas veces:</label>
                                <input type="radio" name="quest26" value="2" id="algunas-veces">
                                
                                <label for="casi-nunca">Casi nunca:</label>
                                <input type="radio" name="quest26" value="3" id="casi-nunca">
                                
                                <label for="nunca">Nunca:</label>
                                <input type="radio" name="quest26" value="4" id="nunca">
                            </p>

                            <p id="q27">27.- Puedo decidir la velocidad a la que realizo mis actividades en mi trabajo
                                <br>
                            
                                <label for="siempre">Siempre:</label>
                                <input type="radio" name="quest27" value="0" id="siempre">
                                
                                <label for="casi-siempre">Casi siempre:</label>
                                <input type="radio" name="quest27" value="1" id="casi-siempre">
                                
                                <label for="algunas-veces">Algunas veces:</label>
                                <input type="radio" name="quest27" value="2" id="algunas-veces">
                                
                                <label for="casi-nunca">Casi nunca:</label>
                                <input type="radio" name="quest27" value="3" id="casi-nunca">
                                
                                <label for="nunca">Nunca:</label>
                                <input type="radio" name="quest27" value="4" id="nunca">
                            </p>

                            <p id="q28">28.- Puedo cambiar el orden de las actividades que realizo en mi trabajo
                                <br>
                            
                                <label for="siempre">Siempre:</label>
                                <input type="radio" name="quest28" value="0" id="siempre">
                                
                                <label for="casi-siempre">Casi siempre:</label>
                                <input type="radio" name="quest28" value="1" id="casi-siempre">
                                
                                <label for="algunas-veces">Algunas veces:</label>
                                <input type="radio" name="quest28" value="2" id="algunas-veces">
                                
                                <label for="casi-nunca">Casi nunca:</label>
                                <input type="radio" name="quest28" value="3" id="casi-nunca">
                                
                                <label for="nunca">Nunca:</label>
                                <input type="radio" name="quest28" value="4" id="nunca">
                            </p>
                            <hr>
                            <br>
                            <div class="card-header">{{ __('Las preguntas siguientes están relacionadas con cualquier tipo de cambio que ocurra en su trabajo (considere los últimos cambios realizados).') }}</div>
                            <br>

                            <p id="q29">29.- Los cambios que se presentan en mi trabajo dificultan mi labor
                                <br>
                            
                                <label for="siempre">Siempre:</label>
                                <input type="radio" name="quest29" value="4" id="siempre">
                                
                                <label for="casi-siempre">Casi siempre:</label>
                                <input type="radio" name="quest29" value="3" id="casi-siempre">
                                
                                <label for="algunas-veces">Algunas veces:</label>
                                <input type="radio" name="quest29" value="2" id="algunas-veces">
                                
                                <label for="casi-nunca">Casi nunca:</label>
                                <input type="radio" name="quest29" value="1" id="casi-nunca">
                                
                                <label for="nunca">Nunca:</label>
                                <input type="radio" name="quest29" value="0" id="nunca">
                            </p>
                            
                            <p id="q30">30.- Cuando se presentan cambios en mi trabajo se tienen en cuenta mis ideas o aportaciones
                                <br>
                            
                                <label for="siempre">Siempre:</label>
                                <input type="radio" name="quest30" value="0" id="siempre">
                                
                                <label for="casi-siempre">Casi siempre:</label>
                                <input type="radio" name="quest30" value="1" id="casi-siempre">
                                
                                <label for="algunas-veces">Algunas veces:</label>
                                <input type="radio" name="quest30" value="2" id="algunas-veces">
                                
                                <label for="casi-nunca">Casi nunca:</label>
                                <input type="radio" name="quest30" value="3" id="casi-nunca">
                                
                                <label for="nunca">Nunca:</label>
                                <input type="radio" name="quest30" value="4" id="nunca">
                            </p>
                            <hr>
                            <br>
                            <div class="card-header">{{ __('Las preguntas siguientes están relacionadas con la capacitación e información que se le proporciona sobre su trabajo.') }}</div>
                            <br>
                            
                            <p id="q31">31.- Me informan con claridad cuáles son mis funciones
                                <br>
                            
                                <label for="siempre">Siempre:</label>
                                <input type="radio" name="quest31" value="0" id="siempre">
                                
                                <label for="casi-siempre">Casi siempre:</label>
                                <input type="radio" name="quest31" value="1" id="casi-siempre">
                                
                                <label for="algunas-veces">Algunas veces:</label>
                                <input type="radio" name="quest31" value="2" id="algunas-veces">
                                
                                <label for="casi-nunca">Casi nunca:</label>
                                <input type="radio" name="quest31" value="3" id="casi-nunca">
                                
                                <label for="nunca">Nunca:</label>
                                <input type="radio" name="quest31" value="4" id="nunca">
                            </p>

                            <p id="q32">32.- Me explican claramente los resultados que debo obtener en mi trabajo
                                <br>
                            
                                <label for="siempre">Siempre:</label>
                                <input type="radio" name="quest32" value="0" id="siempre">
                                
                                <label for="casi-siempre">Casi siempre:</label>
                                <input type="radio" name="quest32" value="1" id="casi-siempre">
                                
                                <label for="algunas-veces">Algunas veces:</label>
                                <input type="radio" name="quest32" value="2" id="algunas-veces">
                                
                                <label for="casi-nunca">Casi nunca:</label>
                                <input type="radio" name="quest32" value="3" id="casi-nunca">
                                
                                <label for="nunca">Nunca:</label>
                                <input type="radio" name="quest32" value="4" id="nunca">
                            </p>

                            <p id="q33">33.- Me explican claramente los objetivos de mi trabajo
                                <br>
                            
                                <label for="siempre">Siempre:</label>
                                <input type="radio" name="quest33" value="0" id="siempre">
                                
                                <label for="casi-siempre">Casi siempre:</label>
                                <input type="radio" name="quest33" value="1" id="casi-siempre">
                                
                                <label for="algunas-veces">Algunas veces:</label>
                                <input type="radio" name="quest33" value="2" id="algunas-veces">
                                
                                <label for="casi-nunca">Casi nunca:</label>
                                <input type="radio" name="quest33" value="3" id="casi-nunca">
                                
                                <label for="nunca">Nunca:</label>
                                <input type="radio" name="quest33" value="4" id="nunca">
                            </p>

                            <p id="q34">34.- Me informan con quién puedo resolver problemas o asuntos de trabajo
                                <br>
                            
                                <label for="siempre">Siempre:</label>
                                <input type="radio" name="quest34" value="0" id="siempre">
                                
                                <label for="casi-siempre">Casi siempre:</label>
                                <input type="radio" name="quest34" value="1" id="casi-siempre">
                                
                                <label for="algunas-veces">Algunas veces:</label>
                                <input type="radio" name="quest34" value="2" id="algunas-veces">
                                
                                <label for="casi-nunca">Casi nunca:</label>
                                <input type="radio" name="quest34" value="3" id="casi-nunca">
                                
                                <label for="nunca">Nunca:</label>
                                <input type="radio" name="quest34" value="4" id="nunca">
                            </p>

                            <p id="q35">35.- Me permiten asistir a capacitaciones relacionadas con mi trabajo
                                <br>
                            
                                <label for="siempre">Siempre:</label>
                                <input type="radio" name="quest35" value="0" id="siempre">
                                
                                <label for="casi-siempre">Casi siempre:</label>
                                <input type="radio" name="quest35" value="1" id="casi-siempre">
                                
                                <label for="algunas-veces">Algunas veces:</label>
                                <input type="radio" name="quest35" value="2" id="algunas-veces">
                                
                                <label for="casi-nunca">Casi nunca:</label>
                                <input type="radio" name="quest35" value="3" id="casi-nunca">
                                
                                <label for="nunca">Nunca:</label>
                                <input type="radio" name="quest35" value="4" id="nunca">
                            </p>

                            <p id="q36">36.- Recibo capacitación útil para hacer mi trabajo
                                <br>
                            
                                <label for="siempre">Siempre:</label>
                                <input type="radio" name="quest36" value="0" id="siempre">
                                
                                <label for="casi-siempre">Casi siempre:</label>
                                <input type="radio" name="quest36" value="1" id="casi-siempre">
                                
                                <label for="algunas-veces">Algunas veces:</label>
                                <input type="radio" name="quest36" value="2" id="algunas-veces">
                                
                                <label for="casi-nunca">Casi nunca:</label>
                                <input type="radio" name="quest36" value="3" id="casi-nunca">
                                
                                <label for="nunca">Nunca:</label>
                                <input type="radio" name="quest36" value="4" id="nunca">
                            </p>
                            <hr>

                            <br>
                            <div class="card-header">{{ __('Las preguntas siguientes están relacionadas con el o los jefes con quien tiene contacto.') }}</div>
                            <br>

                            <p id="q37">37.- Mi jefe ayuda a organizar mejor el trabajo
                                <br>
                            
                                <label for="siempre">Siempre:</label>
                                <input type="radio" name="quest37" value="0" id="siempre">
                                
                                <label for="casi-siempre">Casi siempre:</label>
                                <input type="radio" name="quest37" value="1" id="casi-siempre">
                                
                                <label for="algunas-veces">Algunas veces:</label>
                                <input type="radio" name="quest37" value="2" id="algunas-veces">
                                
                                <label for="casi-nunca">Casi nunca:</label>
                                <input type="radio" name="quest37" value="3" id="casi-nunca">
                                
                                <label for="nunca">Nunca:</label>
                                <input type="radio" name="quest37" value="4" id="nunca">
                            </p>

                            <p id="q38">38.- Mi jefe tiene en cuenta mis puntos de vista y opiniones
                                <br>
                            
                                <label for="siempre">Siempre:</label>
                                <input type="radio" name="quest38" value="0" id="siempre">
                                
                                <label for="casi-siempre">Casi siempre:</label>
                                <input type="radio" name="quest38" value="1" id="casi-siempre">
                                
                                <label for="algunas-veces">Algunas veces:</label>
                                <input type="radio" name="quest38" value="2" id="algunas-veces">
                                
                                <label for="casi-nunca">Casi nunca:</label>
                                <input type="radio" name="quest38" value="3" id="casi-nunca">
                                
                                <label for="nunca">Nunca:</label>
                                <input type="radio" name="quest38" value="4" id="nunca">
                            </p>


                            <p id="q39">39.- Mi jefe me comunica a tiempo la información relacionada con el trabajo
                                <br>
                            
                                <label for="siempre">Siempre:</label>
                                <input type="radio" name="quest39" value="0" id="siempre">
                                
                                <label for="casi-siempre">Casi siempre:</label>
                                <input type="radio" name="quest39" value="1" id="casi-siempre">
                                
                                <label for="algunas-veces">Algunas veces:</label>
                                <input type="radio" name="quest39" value="2" id="algunas-veces">
                                
                                <label for="casi-nunca">Casi nunca:</label>
                                <input type="radio" name="quest39" value="3" id="casi-nunca">
                                
                                <label for="nunca">Nunca:</label>
                                <input type="radio" name="quest39" value="4" id="nunca">
                            </p>


                            <p id="q40">40.- La orientación que me da mi jefe me ayuda a realizar mejor mi trabajo
                                <br>
                            
                                <label for="siempre">Siempre:</label>
                                <input type="radio" name="quest40" value="0" id="siempre">
                                
                                <label for="casi-siempre">Casi siempre:</label>
                                <input type="radio" name="quest40" value="1" id="casi-siempre">
                                
                                <label for="algunas-veces">Algunas veces:</label>
                                <input type="radio" name="quest40" value="2" id="algunas-veces">
                                
                                <label for="casi-nunca">Casi nunca:</label>
                                <input type="radio" name="quest40" value="3" id="casi-nunca">
                                
                                <label for="nunca">Nunca:</label>
                                <input type="radio" name="quest40" value="4" id="nunca">
                            </p>

                            <p id="q41">41.- Mi jefe ayuda a solucionar los problemas que se presentan en el trabajo
                                <br>
                            
                                <label for="siempre">Siempre:</label>
                                <input type="radio" name="quest41" value="0" id="siempre">
                                
                                <label for="casi-siempre">Casi siempre:</label>
                                <input type="radio" name="quest41" value="1" id="casi-siempre">
                                
                                <label for="algunas-veces">Algunas veces:</label>
                                <input type="radio" name="quest41" value="2" id="algunas-veces">
                                
                                <label for="casi-nunca">Casi nunca:</label>
                                <input type="radio" name="quest41" value="3" id="casi-nunca">
                                
                                <label for="nunca">Nunca:</label>
                                <input type="radio" name="quest41" value="4" id="nunca">
                            </p>
                            <hr>
                            <br>
                            <div class="card-header">{{ __('Las preguntas siguientes se refieren a las relaciones con sus compañeros.') }}</div>
                            <br>

                            <p id="q42">42.- Puedo confiar en mis compañeros de trabajo
                                <br>
                            
                                <label for="siempre">Siempre:</label>
                                <input type="radio" name="quest42" value="0" id="siempre">
                                
                                <label for="casi-siempre">Casi siempre:</label>
                                <input type="radio" name="quest42" value="1" id="casi-siempre">
                                
                                <label for="algunas-veces">Algunas veces:</label>
                                <input type="radio" name="quest42" value="2" id="algunas-veces">
                                
                                <label for="casi-nunca">Casi nunca:</label>
                                <input type="radio" name="quest42" value="3" id="casi-nunca">
                                
                                <label for="nunca">Nunca:</label>
                                <input type="radio" name="quest42" value="4" id="nunca">
                            </p>


                            <p id="q43">43.- Entre compañeros solucionamos los problemas de trabajo de forma respetuosa
                                <br>
                            
                                <label for="siempre">Siempre:</label>
                                <input type="radio" name="quest43" value="0" id="siempre">
                                
                                <label for="casi-siempre">Casi siempre:</label>
                                <input type="radio" name="quest43" value="1" id="casi-siempre">
                                
                                <label for="algunas-veces">Algunas veces:</label>
                                <input type="radio" name="quest43" value="2" id="algunas-veces">
                                
                                <label for="casi-nunca">Casi nunca:</label>
                                <input type="radio" name="quest43" value="3" id="casi-nunca">
                                
                                <label for="nunca">Nunca:</label>
                                <input type="radio" name="quest43" value="4" id="nunca">
                            </p>

                            <p id="q44">44.- En mi trabajo me hacen sentir parte del grupo
                                <br>
                            
                                <label for="siempre">Siempre:</label>
                                <input type="radio" name="quest44" value="0" id="siempre">
                                
                                <label for="casi-siempre">Casi siempre:</label>
                                <input type="radio" name="quest44" value="1" id="casi-siempre">
                                
                                <label for="algunas-veces">Algunas veces:</label>
                                <input type="radio" name="quest44" value="2" id="algunas-veces">
                                
                                <label for="casi-nunca">Casi nunca:</label>
                                <input type="radio" name="quest44" value="3" id="casi-nunca">
                                
                                <label for="nunca">Nunca:</label>
                                <input type="radio" name="quest44" value="4" id="nunca">
                            </p>

                            <p id="q45">45.- Cuando tenemos que realizar trabajo de equipo los compañeros colaboran
                                <br>
                            
                                <label for="siempre">Siempre:</label>
                                <input type="radio" name="quest45" value="0" id="siempre">
                                
                                <label for="casi-siempre">Casi siempre:</label>
                                <input type="radio" name="quest45" value="1" id="casi-siempre">
                                
                                <label for="algunas-veces">Algunas veces:</label>
                                <input type="radio" name="quest45" value="2" id="algunas-veces">
                                
                                <label for="casi-nunca">Casi nunca:</label>
                                <input type="radio" name="quest45" value="3" id="casi-nunca">
                                
                                <label for="nunca">Nunca:</label>
                                <input type="radio" name="quest45" value="4" id="nunca">
                            </p>


                            <p id="q46">46.- Mis compañeros de trabajo me ayudan cuando tengo dificultades
                                <br>
                            
                                <label for="siempre">Siempre:</label>
                                <input type="radio" name="quest46" value="0" id="siempre">
                                
                                <label for="casi-siempre">Casi siempre:</label>
                                <input type="radio" name="quest46" value="1" id="casi-siempre">
                                
                                <label for="algunas-veces">Algunas veces:</label>
                                <input type="radio" name="quest46" value="2" id="algunas-veces">
                                
                                <label for="casi-nunca">Casi nunca:</label>
                                <input type="radio" name="quest46" value="3" id="casi-nunca">
                                
                                <label for="nunca">Nunca:</label>
                                <input type="radio" name="quest46" value="4" id="nunca">
                            </p>
                            <hr>
                            <br>
                            <div class="card-header">{{ __('Las preguntas siguientes se refieren a las relaciones con sus compañeros.') }}</div>
                            <br>
                            
                            <p id="q47">47.- Me informan sobre lo que hago bien en mi trabajo
                                <br>
                            
                                <label for="siempre">Siempre:</label>
                                <input type="radio" name="quest47" value="0" id="siempre">
                                
                                <label for="casi-siempre">Casi siempre:</label>
                                <input type="radio" name="quest47" value="1" id="casi-siempre">
                                
                                <label for="algunas-veces">Algunas veces:</label>
                                <input type="radio" name="quest47" value="2" id="algunas-veces">
                                
                                <label for="casi-nunca">Casi nunca:</label>
                                <input type="radio" name="quest47" value="3" id="casi-nunca">
                                
                                <label for="nunca">Nunca:</label>
                                <input type="radio" name="quest47" value="4" id="nunca">
                            </p>

                            <p id="q48">48.- La forma como evalúan mi trabajo en mi centro de trabajo me ayuda a mejorar mi desempeño
                                <br>
                            
                                <label for="siempre">Siempre:</label>
                                <input type="radio" name="quest48" value="0" id="siempre">
                                
                                <label for="casi-siempre">Casi siempre:</label>
                                <input type="radio" name="quest48" value="1" id="casi-siempre">
                                
                                <label for="algunas-veces">Algunas veces:</label>
                                <input type="radio" name="quest48" value="2" id="algunas-veces">
                                
                                <label for="casi-nunca">Casi nunca:</label>
                                <input type="radio" name="quest48" value="3" id="casi-nunca">
                                
                                <label for="nunca">Nunca:</label>
                                <input type="radio" name="quest48" value="4" id="nunca">
                            </p>

                            <p id="q49">49.- En mi centro de trabajo me pagan a tiempo mi salario
                                <br>
                            
                                <label for="siempre">Siempre:</label>
                                <input type="radio" name="quest49" value="0" id="siempre">
                                
                                <label for="casi-siempre">Casi siempre:</label>
                                <input type="radio" name="quest49" value="1" id="casi-siempre">
                                
                                <label for="algunas-veces">Algunas veces:</label>
                                <input type="radio" name="quest49" value="2" id="algunas-veces">
                                
                                <label for="casi-nunca">Casi nunca:</label>
                                <input type="radio" name="quest49" value="3" id="casi-nunca">
                                
                                <label for="nunca">Nunca:</label>
                                <input type="radio" name="quest49" value="4" id="nunca">
                            </p>

                            <p id="q50">50.- El pago que recibo es el que merezco por el trabajo que realizo
                                <br>
                            
                                <label for="siempre">Siempre:</label>
                                <input type="radio" name="quest50" value="0" id="siempre">
                                
                                <label for="casi-siempre">Casi siempre:</label>
                                <input type="radio" name="quest50" value="1" id="casi-siempre">
                                
                                <label for="algunas-veces">Algunas veces:</label>
                                <input type="radio" name="quest50" value="2" id="algunas-veces">
                                
                                <label for="casi-nunca">Casi nunca:</label>
                                <input type="radio" name="quest50" value="3" id="casi-nunca">
                                
                                <label for="nunca">Nunca:</label>
                                <input type="radio" name="quest50" value="4" id="nunca">
                            </p>


                            <p id="q51">51.- Si obtengo los resultados esperados en mi trabajo me recompensan o reconocen
                                <br>
                            
                                <label for="siempre">Siempre:</label>
                                <input type="radio" name="quest51" value="0" id="siempre">
                                
                                <label for="casi-siempre">Casi siempre:</label>
                                <input type="radio" name="quest51" value="1" id="casi-siempre">
                                
                                <label for="algunas-veces">Algunas veces:</label>
                                <input type="radio" name="quest51" value="2" id="algunas-veces">
                                
                                <label for="casi-nunca">Casi nunca:</label>
                                <input type="radio" name="quest51" value="3" id="casi-nunca">
                                
                                <label for="nunca">Nunca:</label>
                                <input type="radio" name="quest51" value="4" id="nunca">
                            </p>

                            <p id="q52">52.- Las personas que hacen bien el trabajo pueden crecer laboralmente
                                <br>
                            
                                <label for="siempre">Siempre:</label>
                                <input type="radio" name="quest52" value="0" id="siempre">
                                
                                <label for="casi-siempre">Casi siempre:</label>
                                <input type="radio" name="quest52" value="1" id="casi-siempre">
                                
                                <label for="algunas-veces">Algunas veces:</label>
                                <input type="radio" name="quest52" value="2" id="algunas-veces">
                                
                                <label for="casi-nunca">Casi nunca:</label>
                                <input type="radio" name="quest52" value="3" id="casi-nunca">
                                
                                <label for="nunca">Nunca:</label>
                                <input type="radio" name="quest52" value="4" id="nunca">
                            </p>


                            <p id="q53">53.- Considero que mi trabajo es estable
                                <br>
                            
                                <label for="siempre">Siempre:</label>
                                <input type="radio" name="quest53" value="0" id="siempre">
                                
                                <label for="casi-siempre">Casi siempre:</label>
                                <input type="radio" name="quest53" value="1" id="casi-siempre">
                                
                                <label for="algunas-veces">Algunas veces:</label>
                                <input type="radio" name="quest53" value="2" id="algunas-veces">
                                
                                <label for="casi-nunca">Casi nunca:</label>
                                <input type="radio" name="quest53" value="3" id="casi-nunca">
                                
                                <label for="nunca">Nunca:</label>
                                <input type="radio" name="quest53" value="4" id="nunca">
                            </p>

                            <p id="q54">54.- En mi trabajo existe continua rotación de personal
                                <br>
                            
                                <label for="siempre">Siempre:</label>
                                <input type="radio" name="quest54" value="4" id="siempre">
                                
                                <label for="casi-siempre">Casi siempre:</label>
                                <input type="radio" name="quest54" value="3" id="casi-siempre">
                                
                                <label for="algunas-veces">Algunas veces:</label>
                                <input type="radio" name="quest54" value="2" id="algunas-veces">
                                
                                <label for="casi-nunca">Casi nunca:</label>
                                <input type="radio" name="quest54" value="1" id="casi-nunca">
                                
                                <label for="nunca">Nunca:</label>
                                <input type="radio" name="quest54" value="0" id="nunca">
                            </p>

                            <p id="q55">55.- Siento orgullo de laborar en este centro de trabajo
                                <br>
                            
                                <label for="siempre">Siempre:</label>
                                <input type="radio" name="quest55" value="0" id="siempre">
                                
                                <label for="casi-siempre">Casi siempre:</label>
                                <input type="radio" name="quest55" value="1" id="casi-siempre">
                                
                                <label for="algunas-veces">Algunas veces:</label>
                                <input type="radio" name="quest55" value="2" id="algunas-veces">
                                
                                <label for="casi-nunca">Casi nunca:</label>
                                <input type="radio" name="quest55" value="3" id="casi-nunca">
                                
                                <label for="nunca">Nunca:</label>
                                <input type="radio" name="quest55" value="4" id="nunca">
                            </p>

                            <p id="q56">56.- Me siento comprometido con mi trabajo
                            <br>
                            
                                <label for="siempre">Siempre:</label>
                                <input type="radio" name="quest56" value="0" id="siempre">
                                
                                <label for="casi-siempre">Casi siempre:</label>
                                <input type="radio" name="quest56" value="1" id="casi-siempre">
                                
                                <label for="algunas-veces">Algunas veces:</label>
                                <input type="radio" name="quest56" value="2" id="algunas-veces">
                                
                                <label for="casi-nunca">Casi nunca:</label>
                                <input type="radio" name="quest56" value="3" id="casi-nunca">
                                
                                <label for="nunca">Nunca:</label>
                                <input type="radio" name="quest56" value="4" id="nunca">
                            </p>
                            <hr>

                            <br>
                            <div class="card-header">{{ __('Las preguntas siguientes se refieren a las relaciones con sus compañeros.') }}</div>
                            <br>

                            <p id="q57">57.- En mi trabajo puedo expresarme libremente sin interrupciones
                                <br>
                            
                                <label for="siempre">Siempre:</label>
                                <input type="radio" name="quest57" value="0" id="siempre">
                                
                                <label for="casi-siempre">Casi siempre:</label>
                                <input type="radio" name="quest57" value="1" id="casi-siempre">
                                
                                <label for="algunas-veces">Algunas veces:</label>
                                <input type="radio" name="quest57" value="2" id="algunas-veces">
                                
                                <label for="casi-nunca">Casi nunca:</label>
                                <input type="radio" name="quest57" value="3" id="casi-nunca">
                                
                                <label for="nunca">Nunca:</label>
                                <input type="radio" name="quest57" value="4" id="nunca">
                            </p>

                            <p id="q58">58.- Recibo críticas constantes a mi persona y/o trabajo
                                <br>
                            
                                <label for="siempre">Siempre:</label>
                                <input type="radio" name="quest58" value="4" id="siempre">
                                
                                <label for="casi-siempre">Casi siempre:</label>
                                <input type="radio" name="quest58" value="3" id="casi-siempre">
                                
                                <label for="algunas-veces">Algunas veces:</label>
                                <input type="radio" name="quest58" value="2" id="algunas-veces">
                                
                                <label for="casi-nunca">Casi nunca:</label>
                                <input type="radio" name="quest58" value="1" id="casi-nunca">
                                
                                <label for="nunca">Nunca:</label>
                                <input type="radio" name="quest58" value="0" id="nunca">
                            </p>

                            <p id="q59">59.- Recibo burlas, calumnias, difamaciones, humillaciones o ridiculizaciones
                                <br>
                            
                                <label for="siempre">Siempre:</label>
                                <input type="radio" name="quest59" value="4" id="siempre">
                                
                                <label for="casi-siempre">Casi siempre:</label>
                                <input type="radio" name="quest59" value="3" id="casi-siempre">
                                
                                <label for="algunas-veces">Algunas veces:</label>
                                <input type="radio" name="quest59" value="2" id="algunas-veces">
                                
                                <label for="casi-nunca">Casi nunca:</label>
                                <input type="radio" name="quest59" value="1" id="casi-nunca">
                                
                                <label for="nunca">Nunca:</label>
                                <input type="radio" name="quest59" value="0" id="nunca">
                            </p>


                            <p id="q60">60.- Se ignora mi presencia o se me excluye de las reuniones de trabajo y en la toma de decisiones
                                <br>
                            
                                <label for="siempre">Siempre:</label>
                                <input type="radio" name="quest60" value="4" id="siempre">
                                
                                <label for="casi-siempre">Casi siempre:</label>
                                <input type="radio" name="quest60" value="3" id="casi-siempre">
                                
                                <label for="algunas-veces">Algunas veces:</label>
                                <input type="radio" name="quest60" value="2" id="algunas-veces">
                                
                                <label for="casi-nunca">Casi nunca:</label>
                                <input type="radio" name="quest60" value="1" id="casi-nunca">
                                
                                <label for="nunca">Nunca:</label>
                                <input type="radio" name="quest60" value="0" id="nunca">
                            </p>

                            <p id="q61">61.- Se manipulan las situaciones de trabajo para hacerme parecer un mal trabajador
                                <br>
                            
                                <label for="siempre">Siempre:</label>
                                <input type="radio" name="quest61" value="4" id="siempre">
                                
                                <label for="casi-siempre">Casi siempre:</label>
                                <input type="radio" name="quest61" value="3" id="casi-siempre">
                                
                                <label for="algunas-veces">Algunas veces:</label>
                                <input type="radio" name="quest61" value="2" id="algunas-veces">
                                
                                <label for="casi-nunca">Casi nunca:</label>
                                <input type="radio" name="quest61" value="1" id="casi-nunca">
                                
                                <label for="nunca">Nunca:</label>
                                <input type="radio" name="quest61" value="0" id="nunca">
                            </p>

                            <p id="q62">62.- Se ignoran mis éxitos laborales y se atribuyen a otros trabajadores
                                <br>
                            
                                <label for="siempre">Siempre:</label>
                                <input type="radio" name="quest62" value="4" id="siempre">
                                
                                <label for="casi-siempre">Casi siempre:</label>
                                <input type="radio" name="quest62" value="3" id="casi-siempre">
                                
                                <label for="algunas-veces">Algunas veces:</label>
                                <input type="radio" name="quest62" value="2" id="algunas-veces">
                                
                                <label for="casi-nunca">Casi nunca:</label>
                                <input type="radio" name="quest62" value="1" id="casi-nunca">
                                
                                <label for="nunca">Nunca:</label>
                                <input type="radio" name="quest62" value="0" id="nunca">
                            </p>

                            <p id="q63">63.- Me bloquean o impiden las oportunidades que tengo para obtener ascenso o mejora en mi trabajo
                                <br>
                            
                                <label for="siempre">Siempre:</label>
                                <input type="radio" name="quest63" value="4" id="siempre">
                                
                                <label for="casi-siempre">Casi siempre:</label>
                                <input type="radio" name="quest63" value="3" id="casi-siempre">
                                
                                <label for="algunas-veces">Algunas veces:</label>
                                <input type="radio" name="quest63" value="2" id="algunas-veces">
                                
                                <label for="casi-nunca">Casi nunca:</label>
                                <input type="radio" name="quest63" value="1" id="casi-nunca">
                                
                                <label for="nunca">Nunca:</label>
                                <input type="radio" name="quest63" value="0" id="nunca">
                            </p>

                            <p id="q64">64.- He presenciado actos de violencia en mi centro de trabajo
                                <br>
                            
                                <label for="siempre">Siempre:</label>
                                <input type="radio" name="quest64" value="4" id="siempre">
                                
                                <label for="casi-siempre">Casi siempre:</label>
                                <input type="radio" name="quest64" value="3" id="casi-siempre">
                                
                                <label for="algunas-veces">Algunas veces:</label>
                                <input type="radio" name="quest64" value="2" id="algunas-veces">
                                
                                <label for="casi-nunca">Casi nunca:</label>
                                <input type="radio" name="quest64" value="1" id="casi-nunca">
                                
                                <label for="nunca">Nunca:</label>
                                <input type="radio" name="quest64" value="0" id="nunca">
                            </p>
                            <hr>
                            <br>
                            <div class="card-header">{{ __('Las preguntas siguientes se refieren a las relaciones con sus compañeros.') }}</div>
                            <br>
                        
                         
                            <label for="pregunta1">En mi trabajo debo brindar servicio a clientes o usuarios:</label>
                            <select id="pregunta1" name="pregunta1" class="form-select">
                              <option value="si">Sí</option>
                              <option value="no">No</option>
                            </select>
                            <br>
                            
                            <div id="preguntasAdicionales" style="display:none;">
                              
                                <p>65.- Atiendo clientes o usuarios muy enojados
                                <br>
                            
                                <label for="siempre">Siempre:</label>
                                <input type="radio" name="quest65" value="4" id="siempre">
                                
                                <label for="casi-siempre">Casi siempre:</label>
                                <input type="radio" name="quest65" value="3" id="casi-siempre">
                                
                                <label for="algunas-veces">Algunas veces:</label>
                                <input type="radio" name="quest65" value="2" id="algunas-veces">
                                
                                <label for="casi-nunca">Casi nunca:</label>
                                <input type="radio" name="quest65" value="1" id="casi-nunca">
                                
                                <label for="nunca">Nunca:</label>
                                <input type="radio" name="quest65" value="0" id="nunca">
                                </p>

                                <p>66.- Mi trabajo me exige atender personas muy necesitadas de ayuda o enfermas
                                <br>
                            
                                <label for="siempre">Siempre:</label>
                                <input type="radio" name="quest66" value="4" id="siempre">
                                
                                <label for="casi-siempre">Casi siempre:</label>
                                <input type="radio" name="quest66" value="3" id="casi-siempre">
                                
                                <label for="algunas-veces">Algunas veces:</label>
                                <input type="radio" name="quest66" value="2" id="algunas-veces">
                                
                                <label for="casi-nunca">Casi nunca:</label>
                                <input type="radio" name="quest66" value="1" id="casi-nunca">
                                
                                <label for="nunca">Nunca:</label>
                                <input type="radio" name="quest66" value="0" id="nunca">
                                </p>

                                <p>67.- Para hacer mi trabajo debo demostrar sentimientos distintos a los míos
                                <br>
                            
                                <label for="siempre">Siempre:</label>
                                <input type="radio" name="quest67" value="4" id="siempre">
                                
                                <label for="casi-siempre">Casi siempre:</label>
                                <input type="radio" name="quest67" value="3" id="casi-siempre">
                                
                                <label for="algunas-veces">Algunas veces:</label>
                                <input type="radio" name="quest67" value="2" id="algunas-veces">
                                
                                <label for="casi-nunca">Casi nunca:</label>
                                <input type="radio" name="quest67" value="1" id="casi-nunca">
                                
                                <label for="nunca">Nunca:</label>
                                <input type="radio" name="quest67" value="0" id="nunca">
                                </p>


                                <p>68.- Mi trabajo me exige atender situaciones de violencia
                                <br>
                            
                                <label for="siempre">Siempre:</label>
                                <input type="radio" name="quest68" value="4" id="siempre">
                                
                                <label for="casi-siempre">Casi siempre:</label>
                                <input type="radio" name="quest68" value="3" id="casi-siempre">
                                
                                <label for="algunas-veces">Algunas veces:</label>
                                <input type="radio" name="quest68" value="2" id="algunas-veces">
                                
                                <label for="casi-nunca">Casi nunca:</label>
                                <input type="radio" name="quest68" value="1" id="casi-nunca">
                                
                                <label for="nunca">Nunca:</label>
                                <input type="radio" name="quest68" value="0" id="nunca">
                                </p>

                            </div>



                            <label for="pregunta2">En mi trabajo debo brindar servicio a clientes o usuarios:</label>
                            <select id="pregunta2" name="pregunta1" class="form-select">
                              <option value="si">Sí</option>
                              <option value="no">No</option>
                            </select>
                            <br>
                            
                            <div id="preguntasAdicionales2" style="display:none;">
                              
                                <p>69.- Atiendo clientes o usuarios muy enojados
                                <br>
                            
                                <label for="siempre">Siempre:</label>
                                <input type="radio" name="quest69" value="4" id="siempre">
                                
                                <label for="casi-siempre">Casi siempre:</label>
                                <input type="radio" name="quest69" value="3" id="casi-siempre">
                                
                                <label for="algunas-veces">Algunas veces:</label>
                                <input type="radio" name="quest69" value="2" id="algunas-veces">
                                
                                <label for="casi-nunca">Casi nunca:</label>
                                <input type="radio" name="quest69" value="1" id="casi-nunca">
                                
                                <label for="nunca">Nunca:</label>
                                <input type="radio" name="quest69" value="0" id="nunca">
                                </p>

                                <p>70.- Mi trabajo me exige atender personas muy necesitadas de ayuda o enfermas
                                <br>
                            
                                <label for="siempre">Siempre:</label>
                                <input type="radio" name="quest70" value="4" id="siempre">
                                
                                <label for="casi-siempre">Casi siempre:</label>
                                <input type="radio" name="quest70" value="3" id="casi-siempre">
                                
                                <label for="algunas-veces">Algunas veces:</label>
                                <input type="radio" name="quest70" value="2" id="algunas-veces">
                                
                                <label for="casi-nunca">Casi nunca:</label>
                                <input type="radio" name="quest70" value="1" id="casi-nunca">
                                
                                <label for="nunca">Nunca:</label>
                                <input type="radio" name="quest70" value="0" id="nunca">
                                </p>

                                <p>71.- Para hacer mi trabajo debo demostrar sentimientos distintos a los míos
                                <br>
                            
                                <label for="siempre">Siempre:</label>
                                <input type="radio" name="quest71" value="4" id="siempre">
                                
                                <label for="casi-siempre">Casi siempre:</label>
                                <input type="radio" name="quest71" value="3" id="casi-siempre">
                                
                                <label for="algunas-veces">Algunas veces:</label>
                                <input type="radio" name="quest71" value="2" id="algunas-veces">
                                
                                <label for="casi-nunca">Casi nunca:</label>
                                <input type="radio" name="quest71" value="1" id="casi-nunca">
                                
                                <label for="nunca">Nunca:</label>
                                <input type="radio" name="quest71" value="0" id="nunca">
                                </p>


                                <p>72.- Mi trabajo me exige atender situaciones de violencia
                                <br>
                            
                                <label for="siempre">Siempre:</label>
                                <input type="radio" name="quest72" value="4" id="siempre">
                                
                                <label for="casi-siempre">Casi siempre:</label>
                                <input type="radio" name="quest72" value="3" id="casi-siempre">
                                
                                <label for="algunas-veces">Algunas veces:</label>
                                <input type="radio" name="quest72" value="2" id="algunas-veces">
                                
                                <label for="casi-nunca">Casi nunca:</label>
                                <input type="radio" name="quest72" value="1" id="casi-nunca">
                                
                                <label for="nunca">Nunca:</label>
                                <input type="radio" name="quest72" value="0" id="nunca">
                                </p>

                            </div>
                            
                            
                            
                            <br>
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
    <script>

        

        $(document).ready(function() {
            // Selecciona el botón con la clase 'btn-primary' y cambia su color de fondo a rojo
            $('.btn-primary').css('background-color', 'green');

            $('#preguntasAdicionales').show();
            $('#preguntasAdicionales2').show();


            $('#pregunta1').on('change', function() {
            if ($(this).val() === 'si') {
                $('#preguntasAdicionales').show();
            } else {
                $('#preguntasAdicionales').hide();
            }
           });

            $('#pregunta2').on('change', function() {
            if ($(this).val() === 'si') {
                $('#preguntasAdicionales2').show();
            } else {
                $('#preguntasAdicionales2').hide();
            }
            });


        });


        function saveForm (){

            var q65 = '0';
            var q66 = '0';
            var q67 = '0';
            var q68 = '0';
            var q69 = '0';
            var q70 = '0';
            var q71 = '0';
            var q72 = '0';

            if($("input[name='quest1']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q1").css("color", "red");return;}else{$("#q1").css("color", "black");}
            if($("input[name='quest2']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q2").css("color", "red");return;}else{$("#q2").css("color", "black");}
            if($("input[name='quest3']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q3").css("color", "red");return;}else{$("#q3").css("color", "black");}
            if($("input[name='quest4']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q4").css("color", "red");return;}else{$("#q4").css("color", "black");}
            if($("input[name='quest5']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q5").css("color", "red");return;}else{$("#q5").css("color", "black");}
            if($("input[name='quest6']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q6").css("color", "red");return;}else{$("#q6").css("color", "black");}
            if($("input[name='quest7']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q7").css("color", "red");return;}else{$("#q7").css("color", "black");}
            if($("input[name='quest8']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q8").css("color", "red");return;}else{$("#q8").css("color", "black");}
            if($("input[name='quest9']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q9").css("color", "red");return;}else{$("#q9").css("color", "black");}
            if($("input[name='quest10']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q10").css("color", "red");return;}else{$("#q10").css("color", "black");}
            if($("input[name='quest11']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q11").css("color", "red");return;}else{$("#q11").css("color", "black");}
            if($("input[name='quest12']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q12").css("color", "red");return;}else{$("#q12").css("color", "black");}
            if($("input[name='quest13']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q13").css("color", "red");return;}else{$("#q13").css("color", "black");}
            if($("input[name='quest14']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q14").css("color", "red");return;}else{$("#q14").css("color", "black");}
            if($("input[name='quest15']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q15").css("color", "red");return;}else{$("#q15").css("color", "black");}
            if($("input[name='quest16']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q16").css("color", "red");return;}else{$("#q16").css("color", "black");}
            if($("input[name='quest17']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q17").css("color", "red");return;}else{$("#q17").css("color", "black");}
            if($("input[name='quest18']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q18").css("color", "red");return;}else{$("#q18").css("color", "black");}
            if($("input[name='quest19']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q19").css("color", "red");return;}else{$("#q19").css("color", "black");}
            if($("input[name='quest20']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q20").css("color", "red");return;}else{$("#q20").css("color", "black");}
            if($("input[name='quest21']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q21").css("color", "red");return;}else{$("#q21").css("color", "black");}
            if($("input[name='quest22']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q22").css("color", "red");return;}else{$("#q22").css("color", "black");}
            if($("input[name='quest23']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q23").css("color", "red");return;}else{$("#q23").css("color", "black");}
            if($("input[name='quest24']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q24").css("color", "red");return;}else{$("#q24").css("color", "black");}
            if($("input[name='quest25']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q25").css("color", "red");return;}else{$("#q25").css("color", "black");}
            if($("input[name='quest26']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q26").css("color", "red");return;}else{$("#q26").css("color", "black");}
            if($("input[name='quest27']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q27").css("color", "red");return;}else{$("#q27").css("color", "black");}
            if($("input[name='quest28']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q28").css("color", "red");return;}else{$("#q28").css("color", "black");}
            if($("input[name='quest29']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q29").css("color", "red");return;}else{$("#q29").css("color", "black");}
            if($("input[name='quest30']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q30").css("color", "red");return;}else{$("#q30").css("color", "black");}
            if($("input[name='quest31']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q31").css("color", "red");return;}else{$("#q31").css("color", "black");}
            if($("input[name='quest32']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q32").css("color", "red");return;}else{$("#q32").css("color", "black");}
            if($("input[name='quest33']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q33").css("color", "red");return;}else{$("#q33").css("color", "black");}
            if($("input[name='quest34']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q34").css("color", "red");return;}else{$("#q34").css("color", "black");}
            if($("input[name='quest35']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q35").css("color", "red");return;}else{$("#q35").css("color", "black");}
            if($("input[name='quest36']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q36").css("color", "red");return;}else{$("#q36").css("color", "black");}
            if($("input[name='quest37']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q37").css("color", "red");return;}else{$("#q37").css("color", "black");}
            if($("input[name='quest38']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q38").css("color", "red");return;}else{$("#q38").css("color", "black");}
            if($("input[name='quest39']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q39").css("color", "red");return;}else{$("#q39").css("color", "black");}
            if($("input[name='quest40']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q40").css("color", "red");return;}else{$("#q40").css("color", "black");}
            if($("input[name='quest41']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q41").css("color", "red");return;}else{$("#q41").css("color", "black");}
            if($("input[name='quest42']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q42").css("color", "red");return;}else{$("#q42").css("color", "black");}
            if($("input[name='quest43']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q43").css("color", "red");return;}else{$("#q43").css("color", "black");}
            if($("input[name='quest44']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q44").css("color", "red");return;}else{$("#q44").css("color", "black");}
            if($("input[name='quest45']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q45").css("color", "red");return;}else{$("#q45").css("color", "black");}
            if($("input[name='quest46']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q46").css("color", "red");return;}else{$("#q46").css("color", "black");}
            if($("input[name='quest47']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q47").css("color", "red");return;}else{$("#q47").css("color", "black");}
            if($("input[name='quest48']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q48").css("color", "red");return;}else{$("#q48").css("color", "black");}
            if($("input[name='quest49']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q49").css("color", "red");return;}else{$("#q49").css("color", "black");}
            if($("input[name='quest50']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q50").css("color", "red");return;}else{$("#q50").css("color", "black");}
            if($("input[name='quest51']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q51").css("color", "red");return;}else{$("#q51").css("color", "black");}
            if($("input[name='quest52']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q52").css("color", "red");return;}else{$("#q52").css("color", "black");}
            if($("input[name='quest53']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q53").css("color", "red");return;}else{$("#q53").css("color", "black");}
            if($("input[name='quest54']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q54").css("color", "red");return;}else{$("#q54").css("color", "black");}
            if($("input[name='quest55']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q55").css("color", "red");return;}else{$("#q55").css("color", "black");}
            if($("input[name='quest56']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q56").css("color", "red");return;}else{$("#q56").css("color", "black");}
            if($("input[name='quest57']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q57").css("color", "red");return;}else{$("#q57").css("color", "black");}
            if($("input[name='quest58']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q58").css("color", "red");return;}else{$("#q58").css("color", "black");}
            if($("input[name='quest59']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q59").css("color", "red");return;}else{$("#q59").css("color", "black");}
            if($("input[name='quest60']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q60").css("color", "red");return;}else{$("#q60").css("color", "black");}
            if($("input[name='quest61']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q61").css("color", "red");return;}else{$("#q61").css("color", "black");}
            if($("input[name='quest62']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q62").css("color", "red");return;}else{$("#q62").css("color", "black");}
            if($("input[name='quest63']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q63").css("color", "red");return;}else{$("#q63").css("color", "black");}

            if($('#pregunta1').val()=='si'){
                if($("input[name='quest65']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q65").css("color", "red");return;}else{$("#q65").css("color", "black");q65 =  $("input[name='quest65']:checked").val()}
                if($("input[name='quest66']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q66").css("color", "red");return;}else{$("#q66").css("color", "black");q66 =  $("input[name='quest66']:checked").val()}
                if($("input[name='quest67']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q67").css("color", "red");return;}else{$("#q67").css("color", "black");q67 =  $("input[name='quest67']:checked").val()}
                if($("input[name='quest68']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q68").css("color", "red");return;}else{$("#q68").css("color", "black");q68 =  $("input[name='quest68']:checked").val()}
            }
            if($('#pregunta2').val()=='si'){
                if($("input[name='quest69']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q69").css("color", "red");return;}else{$("#q69").css("color", "black");q69 =  $("input[name='quest69']:checked").val()}
                if($("input[name='quest70']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q70").css("color", "red");return;}else{$("#q70").css("color", "black");q70 =  $("input[name='quest70']:checked").val()}
                if($("input[name='quest71']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q71").css("color", "red");return;}else{$("#q71").css("color", "black");q71 =  $("input[name='quest71']:checked").val()}
                if($("input[name='quest72']:checked").val()== undefined){swal({title:"Faltan preguntas por responder",buttons:true});$("#q72").css("color", "red");return;}else{$("#q72").css("color", "black");q72 =  $("input[name='quest72']:checked").val()}
            }

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
                            "quest1":$("input[name='quest1']:checked").val(),
                            "quest2":$("input[name='quest2']:checked").val(),
                            "quest3":$("input[name='quest3']:checked").val(),
                            "quest4":$("input[name='quest4']:checked").val(),
                            "quest5":$("input[name='quest5']:checked").val(),
                            "quest6":$("input[name='quest6']:checked").val(),
                            "quest7":$("input[name='quest7']:checked").val(),
                            "quest8":$("input[name='quest8']:checked").val(),
                            "quest9":$("input[name='quest9']:checked").val(),
                            "quest10":$("input[name='quest10']:checked").val(),
                            "quest11":$("input[name='quest11']:checked").val(),
                            "quest12":$("input[name='quest12']:checked").val(),
                            "quest13":$("input[name='quest13']:checked").val(),
                            "quest14":$("input[name='quest14']:checked").val(),
                            "quest15":$("input[name='quest15']:checked").val(),
                            "quest16":$("input[name='quest16']:checked").val(),
                            "quest17":$("input[name='quest17']:checked").val(),
                            "quest18":$("input[name='quest18']:checked").val(),
                            "quest19":$("input[name='quest19']:checked").val(),
                            "quest20":$("input[name='quest20']:checked").val(),
                            "quest21":$("input[name='quest21']:checked").val(),
                            "quest22":$("input[name='quest22']:checked").val(),
                            "quest23":$("input[name='quest23']:checked").val(),
                            "quest24":$("input[name='quest24']:checked").val(),
                            "quest25":$("input[name='quest25']:checked").val(),
                            "quest26":$("input[name='quest26']:checked").val(),
                            "quest27":$("input[name='quest27']:checked").val(),
                            "quest28":$("input[name='quest28']:checked").val(),
                            "quest29":$("input[name='quest29']:checked").val(),
                            "quest30":$("input[name='quest30']:checked").val(),
                            "quest31":$("input[name='quest31']:checked").val(),
                            "quest32":$("input[name='quest32']:checked").val(),
                            "quest33":$("input[name='quest33']:checked").val(),
                            "quest34":$("input[name='quest34']:checked").val(),
                            "quest35":$("input[name='quest35']:checked").val(),
                            "quest36":$("input[name='quest36']:checked").val(),
                            "quest37":$("input[name='quest37']:checked").val(),
                            "quest38":$("input[name='quest38']:checked").val(),
                            "quest39":$("input[name='quest39']:checked").val(),
                            "quest40":$("input[name='quest40']:checked").val(),
                            "quest41":$("input[name='quest41']:checked").val(),
                            "quest42":$("input[name='quest42']:checked").val(),
                            "quest43":$("input[name='quest43']:checked").val(),
                            "quest44":$("input[name='quest44']:checked").val(),
                            "quest45":$("input[name='quest45']:checked").val(),
                            "quest46":$("input[name='quest46']:checked").val(),
                            "quest47":$("input[name='quest47']:checked").val(),
                            "quest48":$("input[name='quest48']:checked").val(),
                            "quest49":$("input[name='quest49']:checked").val(),
                            "quest50":$("input[name='quest50']:checked").val(),
                            "quest51":$("input[name='quest51']:checked").val(),
                            "quest52":$("input[name='quest52']:checked").val(),
                            "quest53":$("input[name='quest53']:checked").val(),
                            "quest54":$("input[name='quest54']:checked").val(),
                            "quest55":$("input[name='quest55']:checked").val(),
                            "quest56":$("input[name='quest56']:checked").val(),
                            "quest57":$("input[name='quest57']:checked").val(),
                            "quest58":$("input[name='quest58']:checked").val(),
                            "quest59":$("input[name='quest59']:checked").val(),
                            "quest60":$("input[name='quest60']:checked").val(),
                            "quest61":$("input[name='quest61']:checked").val(),
                            "quest62":$("input[name='quest62']:checked").val(),
                            "quest63":$("input[name='quest63']:checked").val(),
                            "quest64":$("input[name='quest64']:checked").val(),
                            "quest65":q65,
                            "quest66":q66,
                            "quest67":q67,
                            "quest68":q68,
                            "quest69":q69,
                            "quest70":q70,
                            "quest71":q71,
                            "quest72":q72

                        },
                        url: "/procesarFormularioRP",
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
                                        window.location.href = "http://127.0.0.1:8000/terminado";
                                    }
                                });
                            }else{
                                swal("Ocurrió un error al guardar","", "danger");
                            }
                        }
                    })
                }}
            ); 
        }


    </script>
@endsection
