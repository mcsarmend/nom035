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
                        <form action="/riesgo_psicosocial_quest" method="POST">
                            @csrf
                    
                            <div class="card-header">{{ __('Para responder las preguntas siguientes considere las condiciones ambientales de su centro de trabajo.') }}</div>
                            <br>
                            <p>1.- El espacio donde trabajo me permite realizar mis actividades de manera segura e higiénica
                            <br>
                            <label for="siempre">Siempre:</label>
                            <input type="radio" name="secc1quest1" value="0" id="siempre">
                          
                            <label for="casi-siempre">Casi siempre:</label>
                            <input type="radio" name="secc1quest1" value="1" id="casi-siempre">
                          
                            <label for="algunas-veces">Algunas veces:</label>
                            <input type="radio" name="secc1quest1" value="2" id="algunas-veces">
                          
                            <label for="casi-nunca">Casi nunca:</label>
                            <input type="radio" name="secc1quest1" value="3" id="casi-nunca">
                          
                            <label for="nunca">Nunca:</label>
                            <input type="radio" name="secc1quest1" value="4" id="nunca">
                            </p>
                            

                            <p>2.- Mi trabajo me exige hacer mucho esfuerzo físico
                            <br>
                            <label for="siempre">Siempre:</label>
                            <input type="radio" name="secc1quest2" value="4" id="siempre">
                          
                            <label for="casi-siempre">Casi siempre:</label>
                            <input type="radio" name="secc1quest2" value="3" id="casi-siempre">
                          
                            <label for="algunas-veces">Algunas veces:</label>
                            <input type="radio" name="secc1quest2" value="2" id="algunas-veces">
                          
                            <label for="casi-nunca">Casi nunca:</label>
                            <input type="radio" name="secc1quest2" value="1" id="casi-nunca">
                          
                            <label for="nunca">Nunca:</label>
                            <input type="radio" name="secc1quest2" value="0" id="nunca">
                            </p>
                            
                            
                            <p>3.- Me preocupa sufrir un accidente en mi trabajo
                            <br>
                            <label for="siempre">Siempre:</label>
                            <input type="radio" name="secc1quest3" value="4" id="siempre">
                          
                            <label for="casi-siempre">Casi siempre:</label>
                            <input type="radio" name="secc1quest3" value="3" id="casi-siempre">
                          
                            <label for="algunas-veces">Algunas veces:</label>
                            <input type="radio" name="secc1quest3" value="2" id="algunas-veces">
                          
                            <label for="casi-nunca">Casi nunca:</label>
                            <input type="radio" name="secc1quest3" value="1" id="casi-nunca">
                          
                            <label for="nunca">Nunca:</label>
                            <input type="radio" name="secc1quest3" value="0" id="nunca">
                            </p>
                            
                            
                            <p>4.- Considero que en mi trabajo se aplican las normas de seguridad y salud en el trabajo
                            <br>
                            <label for="siempre">Siempre:</label>
                            <input type="radio" name="secc1quest4" value="0" id="siempre">
                          
                            <label for="casi-siempre">Casi siempre:</label>
                            <input type="radio" name="secc1quest4" value="1" id="casi-siempre">
                          
                            <label for="algunas-veces">Algunas veces:</label>
                            <input type="radio" name="secc1quest4" value="2" id="algunas-veces">
                          
                            <label for="casi-nunca">Casi nunca:</label>
                            <input type="radio" name="secc1quest4" value="3" id="casi-nunca">
                          
                            <label for="nunca">Nunca:</label>
                            <input type="radio" name="secc1quest4" value="4" id="nunca">
                            </p>
                            
                            
                            <p>5.- Considero que las actividades que realizo son peligrosas
                            <br>
                            <label for="siempre">Siempre:</label>
                            <input type="radio" name="secc1quest5" value="4" id="siempre">
                          
                            <label for="casi-siempre">Casi siempre:</label>
                            <input type="radio" name="secc1quest5" value="3" id="casi-siempre">
                          
                            <label for="algunas-veces">Algunas veces:</label>
                            <input type="radio" name="secc1quest5" value="2" id="algunas-veces">
                          
                            <label for="casi-nunca">Casi nunca:</label>
                            <input type="radio" name="secc1quest5" value="1" id="casi-nunca">
                          
                            <label for="nunca">Nunca:</label>
                            <input type="radio" name="secc1quest5" value="0" id="nunca">
                            </p>
                            
                            <hr>
                            
                            <div class="card-header">{{ __('Para responder a las preguntas siguientes piense en la cantidad y ritmo de trabajo que tiene.') }}</div>
                            
                            <br>
                            <p>6.- Por la cantidad de trabajo que tengo debo quedarme tiempo adicional a mi turno
                            <br>
                            
                            <label for="siempre">Siempre:</label>
                            <input type="radio" name="secc2quest6" value="4" id="siempre">
                            
                            <label for="casi-siempre">Casi siempre:</label>
                            <input type="radio" name="secc2quest6" value="3" id="casi-siempre">
                            
                            <label for="algunas-veces">Algunas veces:</label>
                            <input type="radio" name="secc2quest6" value="2" id="algunas-veces">
                            
                            <label for="casi-nunca">Casi nunca:</label>
                            <input type="radio" name="secc2quest6" value="1" id="casi-nunca">
                            
                            <label for="nunca">Nunca:</label>
                            <input type="radio" name="secc2quest6" value="0" id="nunca">
                            </p>


                            <p>7.- Por la cantidad de trabajo que tengo debo trabajar sin parar
                            <br>
                            
                            <label for="siempre">Siempre:</label>
                            <input type="radio" name="secc2quest7" value="4" id="siempre">
                            
                            <label for="casi-siempre">Casi siempre:</label>
                            <input type="radio" name="secc2quest7" value="3" id="casi-siempre">
                            
                            <label for="algunas-veces">Algunas veces:</label>
                            <input type="radio" name="secc2quest7" value="2" id="algunas-veces">
                            
                            <label for="casi-nunca">Casi nunca:</label>
                            <input type="radio" name="secc2quest7" value="1" id="casi-nunca">
                            
                            <label for="nunca">Nunca:</label>
                            <input type="radio" name="secc2quest7" value="0" id="nunca">
                            </p>


                            <p>8.- Considero que es necesario mantener un ritmo de trabajo acelerado
                            <br>
                            
                            <label for="siempre">Siempre:</label>
                            <input type="radio" name="secc2quest8" value="4" id="siempre">
                            
                            <label for="casi-siempre">Casi siempre:</label>
                            <input type="radio" name="secc2quest8" value="3" id="casi-siempre">
                            
                            <label for="algunas-veces">Algunas veces:</label>
                            <input type="radio" name="secc2quest8" value="2" id="algunas-veces">
                            
                            <label for="casi-nunca">Casi nunca:</label>
                            <input type="radio" name="secc2quest8" value="1" id="casi-nunca">
                            
                            <label for="nunca">Nunca:</label>
                            <input type="radio" name="secc2quest8" value="0" id="nunca">
                            </p>
                            <hr>

                            <div class="card-header">{{ __('Para responder a las preguntas siguientes piense en la cantidad y ritmo de trabajo que tiene.') }}</div>
                            <br>
                            <p>9.- Mi trabajo exige que esté muy concentrado
                            <br>
                            
                            <label for="siempre">Siempre:</label>
                            <input type="radio" name="secc3quest9" value="4" id="siempre">
                            
                            <label for="casi-siempre">Casi siempre:</label>
                            <input type="radio" name="secc3quest9" value="3" id="casi-siempre">
                            
                            <label for="algunas-veces">Algunas veces:</label>
                            <input type="radio" name="secc3quest9" value="2" id="algunas-veces">
                            
                            <label for="casi-nunca">Casi nunca:</label>
                            <input type="radio" name="secc3quest9" value="1" id="casi-nunca">
                            
                            <label for="nunca">Nunca:</label>
                            <input type="radio" name="secc3quest9" value="0" id="nunca">
                            </p>
                            <p>10.- Mi trabajo requiere que memorice mucha información
                            <br>
                            
                            <label for="siempre">Siempre:</label>
                            <input type="radio" name="secc3quest10" value="4" id="siempre">
                            
                            <label for="casi-siempre">Casi siempre:</label>
                            <input type="radio" name="secc3quest10" value="3" id="casi-siempre">
                            
                            <label for="algunas-veces">Algunas veces:</label>
                            <input type="radio" name="secc3quest10" value="2" id="algunas-veces">
                            
                            <label for="casi-nunca">Casi nunca:</label>
                            <input type="radio" name="secc3quest10" value="1" id="casi-nunca">
                            
                            <label for="nunca">Nunca:</label>
                            <input type="radio" name="secc3quest10" value="0" id="nunca">
                            </p>
                            <p>11.- En mi trabajo tengo que tomar decisiones difíciles muy rápido
                            <br>
                            
                            <label for="siempre">Siempre:</label>
                            <input type="radio" name="secc3quest11" value="4" id="siempre">
                            
                            <label for="casi-siempre">Casi siempre:</label>
                            <input type="radio" name="secc3quest11" value="3" id="casi-siempre">
                            
                            <label for="algunas-veces">Algunas veces:</label>
                            <input type="radio" name="secc3quest11" value="2" id="algunas-veces">
                            
                            <label for="casi-nunca">Casi nunca:</label>
                            <input type="radio" name="secc3quest11" value="1" id="casi-nunca">
                            
                            <label for="nunca">Nunca:</label>
                            <input type="radio" name="secc3quest11" value="0" id="nunca">
                            </p>


                            <p>12.- Mi trabajo exige que atienda varios asuntos al mismo tiempo
                            <br>
                            
                            <label for="siempre">Siempre:</label>
                            <input type="radio" name="secc3quest12" value="4" id="siempre">
                            
                            <label for="casi-siempre">Casi siempre:</label>
                            <input type="radio" name="secc3quest12" value="3" id="casi-siempre">
                            
                            <label for="algunas-veces">Algunas veces:</label>
                            <input type="radio" name="secc3quest12" value="2" id="algunas-veces">
                            
                            <label for="casi-nunca">Casi nunca:</label>
                            <input type="radio" name="secc3quest12" value="1" id="casi-nunca">
                            
                            <label for="nunca">Nunca:</label>
                            <input type="radio" name="secc3quest12" value="0" id="nunca">
                            </p>

                            <div class="card-header">{{ __('Las preguntas siguientes están relacionadas con las actividades que realiza en su trabajo y las responsabilidades que tiene.') }}</div>
                            <br>
                            <p>13.- En mi trabajo soy responsable de cosas de mucho valor
                            <br>
                        
                            <label for="siempre">Siempre:</label>
                            <input type="radio" name="secc3quest12" value="4" id="siempre">
                            
                            <label for="casi-siempre">Casi siempre:</label>
                            <input type="radio" name="secc3quest12" value="3" id="casi-siempre">
                            
                            <label for="algunas-veces">Algunas veces:</label>
                            <input type="radio" name="secc3quest12" value="2" id="algunas-veces">
                            
                            <label for="casi-nunca">Casi nunca:</label>
                            <input type="radio" name="secc3quest12" value="1" id="casi-nunca">
                            
                            <label for="nunca">Nunca:</label>
                            <input type="radio" name="secc3quest12" value="0" id="nunca">
                            </p>
                            
                            <br>
                            <p>14.- Respondo ante mi jefe por los resultados de toda mi área de trabajo
                            <br>
                        
                            <label for="siempre">Siempre:</label>
                            <input type="radio" name="secc3quest12" value="4" id="siempre">
                            
                            <label for="casi-siempre">Casi siempre:</label>
                            <input type="radio" name="secc3quest12" value="3" id="casi-siempre">
                            
                            <label for="algunas-veces">Algunas veces:</label>
                            <input type="radio" name="secc3quest12" value="2" id="algunas-veces">
                            
                            <label for="casi-nunca">Casi nunca:</label>
                            <input type="radio" name="secc3quest12" value="1" id="casi-nunca">
                            
                            <label for="nunca">Nunca:</label>
                            <input type="radio" name="secc3quest12" value="0" id="nunca">
                            </p>

                            <p>15.- En el trabajo me dan órdenes contradictorias
                            <br>
                        
                            <label for="siempre">Siempre:</label>
                            <input type="radio" name="secc3quest12" value="4" id="siempre">
                            
                            <label for="casi-siempre">Casi siempre:</label>
                            <input type="radio" name="secc3quest12" value="3" id="casi-siempre">
                            
                            <label for="algunas-veces">Algunas veces:</label>
                            <input type="radio" name="secc3quest12" value="2" id="algunas-veces">
                            
                            <label for="casi-nunca">Casi nunca:</label>
                            <input type="radio" name="secc3quest12" value="1" id="casi-nunca">
                            
                            <label for="nunca">Nunca:</label>
                            <input type="radio" name="secc3quest12" value="0" id="nunca">
                            </p>


                            <p>16.- Considero que en mi trabajo me piden hacer cosas innecesarias
                            <br>
                        
                            <label for="siempre">Siempre:</label>
                            <input type="radio" name="secc3quest12" value="4" id="siempre">
                            
                            <label for="casi-siempre">Casi siempre:</label>
                            <input type="radio" name="secc3quest12" value="3" id="casi-siempre">
                            
                            <label for="algunas-veces">Algunas veces:</label>
                            <input type="radio" name="secc3quest12" value="2" id="algunas-veces">
                            
                            <label for="casi-nunca">Casi nunca:</label>
                            <input type="radio" name="secc3quest12" value="1" id="casi-nunca">
                            
                            <label for="nunca">Nunca:</label>
                            <input type="radio" name="secc3quest12" value="0" id="nunca">
                            </p>
                            
                            <br>
                            <div class="card-header">{{ __('Las preguntas siguientes están relacionadas con su jornada de trabajo.') }}</div>
                            <br>

                            <p>17.- Trabajo horas extras más de tres veces a la semana
                            <br>
                        
                            <label for="siempre">Siempre:</label>
                            <input type="radio" name="secc3quest12" value="4" id="siempre">
                            
                            <label for="casi-siempre">Casi siempre:</label>
                            <input type="radio" name="secc3quest12" value="3" id="casi-siempre">
                            
                            <label for="algunas-veces">Algunas veces:</label>
                            <input type="radio" name="secc3quest12" value="2" id="algunas-veces">
                            
                            <label for="casi-nunca">Casi nunca:</label>
                            <input type="radio" name="secc3quest12" value="1" id="casi-nunca">
                            
                            <label for="nunca">Nunca:</label>
                            <input type="radio" name="secc3quest12" value="0" id="nunca">
                            </p>

                            <p>18.- Mi trabajo me exige laborar en días de descanso, festivos o fines de semana
                            <br>
                        
                            <label for="siempre">Siempre:</label>
                            <input type="radio" name="secc3quest12" value="4" id="siempre">
                            
                            <label for="casi-siempre">Casi siempre:</label>
                            <input type="radio" name="secc3quest12" value="3" id="casi-siempre">
                            
                            <label for="algunas-veces">Algunas veces:</label>
                            <input type="radio" name="secc3quest12" value="2" id="algunas-veces">
                            
                            <label for="casi-nunca">Casi nunca:</label>
                            <input type="radio" name="secc3quest12" value="1" id="casi-nunca">
                            
                            <label for="nunca">Nunca:</label>
                            <input type="radio" name="secc3quest12" value="0" id="nunca">
                            </p>


                            <p>19.- Considero que el tiempo en el trabajo es mucho y perjudica mis actividades familiares o personales
                            <br>
                        
                            <label for="siempre">Siempre:</label>
                            <input type="radio" name="secc3quest12" value="4" id="siempre">
                            
                            <label for="casi-siempre">Casi siempre:</label>
                            <input type="radio" name="secc3quest12" value="3" id="casi-siempre">
                            
                            <label for="algunas-veces">Algunas veces:</label>
                            <input type="radio" name="secc3quest12" value="2" id="algunas-veces">
                            
                            <label for="casi-nunca">Casi nunca:</label>
                            <input type="radio" name="secc3quest12" value="1" id="casi-nunca">
                            
                            <label for="nunca">Nunca:</label>
                            <input type="radio" name="secc3quest12" value="0" id="nunca">
                            </p>

                            <p>20.- Debo atender asuntos de trabajo cuando estoy en casa
                            <br>
                        
                            <label for="siempre">Siempre:</label>
                            <input type="radio" name="secc3quest12" value="4" id="siempre">
                            
                            <label for="casi-siempre">Casi siempre:</label>
                            <input type="radio" name="secc3quest12" value="3" id="casi-siempre">
                            
                            <label for="algunas-veces">Algunas veces:</label>
                            <input type="radio" name="secc3quest12" value="2" id="algunas-veces">
                            
                            <label for="casi-nunca">Casi nunca:</label>
                            <input type="radio" name="secc3quest12" value="1" id="casi-nunca">
                            
                            <label for="nunca">Nunca:</label>
                            <input type="radio" name="secc3quest12" value="0" id="nunca">
                            </p>


                            <p>21.- Pienso en las actividades familiares o personales cuando estoy en mi trabajo
                            <br>
                        
                            <label for="siempre">Siempre:</label>
                            <input type="radio" name="secc3quest12" value="4" id="siempre">
                            
                            <label for="casi-siempre">Casi siempre:</label>
                            <input type="radio" name="secc3quest12" value="3" id="casi-siempre">
                            
                            <label for="algunas-veces">Algunas veces:</label>
                            <input type="radio" name="secc3quest12" value="2" id="algunas-veces">
                            
                            <label for="casi-nunca">Casi nunca:</label>
                            <input type="radio" name="secc3quest12" value="1" id="casi-nunca">
                            
                            <label for="nunca">Nunca:</label>
                            <input type="radio" name="secc3quest12" value="0" id="nunca">
                            </p>


                            <p>22.- Pienso que mis responsabilidades familiares afectan mi trabajo 
                            <br>
                        
                            <label for="siempre">Siempre:</label>
                            <input type="radio" name="secc3quest12" value="4" id="siempre">
                            
                            <label for="casi-siempre">Casi siempre:</label>
                            <input type="radio" name="secc3quest12" value="3" id="casi-siempre">
                            
                            <label for="algunas-veces">Algunas veces:</label>
                            <input type="radio" name="secc3quest12" value="2" id="algunas-veces">
                            
                            <label for="casi-nunca">Casi nunca:</label>
                            <input type="radio" name="secc3quest12" value="1" id="casi-nunca">
                            
                            <label for="nunca">Nunca:</label>
                            <input type="radio" name="secc3quest12" value="0" id="nunca">
                            </p>

                            <br>
                            <div class="card-header">{{ __('Las preguntas siguientes están relacionadas con las decisiones que puede tomar en su trabajo.') }}</div>
                            <br>

                            <p>23.- Mi trabajo permite que desarrolle nuevas habilidades
                            <br>
                        
                            <label for="siempre">Siempre:</label>
                            <input type="radio" name="secc3quest12" value="0" id="siempre">
                            
                            <label for="casi-siempre">Casi siempre:</label>
                            <input type="radio" name="secc3quest12" value="1" id="casi-siempre">
                            
                            <label for="algunas-veces">Algunas veces:</label>
                            <input type="radio" name="secc3quest12" value="2" id="algunas-veces">
                            
                            <label for="casi-nunca">Casi nunca:</label>
                            <input type="radio" name="secc3quest12" value="3" id="casi-nunca">
                            
                            <label for="nunca">Nunca:</label>
                            <input type="radio" name="secc3quest12" value="4" id="nunca">
                            </p>

                            <p>24.- En mi trabajo puedo aspirar a un mejor puesto
                            <br>
                        
                            <label for="siempre">Siempre:</label>
                            <input type="radio" name="secc3quest12" value="0" id="siempre">
                            
                            <label for="casi-siempre">Casi siempre:</label>
                            <input type="radio" name="secc3quest12" value="1" id="casi-siempre">
                            
                            <label for="algunas-veces">Algunas veces:</label>
                            <input type="radio" name="secc3quest12" value="2" id="algunas-veces">
                            
                            <label for="casi-nunca">Casi nunca:</label>
                            <input type="radio" name="secc3quest12" value="3" id="casi-nunca">
                            
                            <label for="nunca">Nunca:</label>
                            <input type="radio" name="secc3quest12" value="4" id="nunca">
                            </p>

                            <p>25.- Durante mi jornada de trabajo puedo tomar pausas cuando las necesito
                            <br>
                        
                            <label for="siempre">Siempre:</label>
                            <input type="radio" name="secc3quest12" value="0" id="siempre">
                            
                            <label for="casi-siempre">Casi siempre:</label>
                            <input type="radio" name="secc3quest12" value="1" id="casi-siempre">
                            
                            <label for="algunas-veces">Algunas veces:</label>
                            <input type="radio" name="secc3quest12" value="2" id="algunas-veces">
                            
                            <label for="casi-nunca">Casi nunca:</label>
                            <input type="radio" name="secc3quest12" value="3" id="casi-nunca">
                            
                            <label for="nunca">Nunca:</label>
                            <input type="radio" name="secc3quest12" value="4" id="nunca">
                            </p>
                           
                            <p>26.- Puedo decidir cuánto trabajo realizo durante la jornada laboral
                            <br>
                        
                            <label for="siempre">Siempre:</label>
                            <input type="radio" name="secc3quest12" value="0" id="siempre">
                            
                            <label for="casi-siempre">Casi siempre:</label>
                            <input type="radio" name="secc3quest12" value="1" id="casi-siempre">
                            
                            <label for="algunas-veces">Algunas veces:</label>
                            <input type="radio" name="secc3quest12" value="2" id="algunas-veces">
                            
                            <label for="casi-nunca">Casi nunca:</label>
                            <input type="radio" name="secc3quest12" value="3" id="casi-nunca">
                            
                            <label for="nunca">Nunca:</label>
                            <input type="radio" name="secc3quest12" value="4" id="nunca">
                            </p>

                            <p>27.- Puedo decidir la velocidad a la que realizo mis actividades en mi trabajo
                            <br>
                        
                            <label for="siempre">Siempre:</label>
                            <input type="radio" name="secc3quest12" value="0" id="siempre">
                            
                            <label for="casi-siempre">Casi siempre:</label>
                            <input type="radio" name="secc3quest12" value="1" id="casi-siempre">
                            
                            <label for="algunas-veces">Algunas veces:</label>
                            <input type="radio" name="secc3quest12" value="2" id="algunas-veces">
                            
                            <label for="casi-nunca">Casi nunca:</label>
                            <input type="radio" name="secc3quest12" value="3" id="casi-nunca">
                            
                            <label for="nunca">Nunca:</label>
                            <input type="radio" name="secc3quest12" value="4" id="nunca">
                            </p>

                            <p>28.- Puedo cambiar el orden de las actividades que realizo en mi trabajo
                            <br>
                        
                            <label for="siempre">Siempre:</label>
                            <input type="radio" name="secc3quest12" value="0" id="siempre">
                            
                            <label for="casi-siempre">Casi siempre:</label>
                            <input type="radio" name="secc3quest12" value="1" id="casi-siempre">
                            
                            <label for="algunas-veces">Algunas veces:</label>
                            <input type="radio" name="secc3quest12" value="2" id="algunas-veces">
                            
                            <label for="casi-nunca">Casi nunca:</label>
                            <input type="radio" name="secc3quest12" value="3" id="casi-nunca">
                            
                            <label for="nunca">Nunca:</label>
                            <input type="radio" name="secc3quest12" value="4" id="nunca">
                            </p>

                            <button type="submit" class="btn btn-primary" id = "send_2"   >Enviar</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>

        

        $(document).ready(function() {
            // Selecciona el botón con la clase 'btn-primary' y cambia su color de fondo a rojo
            $('.btn-primary').css('background-color', 'green');
        });


    </script>
@endsection
