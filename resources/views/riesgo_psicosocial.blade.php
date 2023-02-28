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
                        <form action="/procesarFormularioRP" method="POST">
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
                            <hr>
                            
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
                            <hr>
                            
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
                            <hr>
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
                            <hr>
                            <br>
                            <div class="card-header">{{ __('Las preguntas siguientes están relacionadas con cualquier tipo de cambio que ocurra en su trabajo (considere los últimos cambios realizados).') }}</div>
                            <br>

                            <p>29.- Los cambios que se presentan en mi trabajo dificultan mi labor
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
                            
                            <p>30.- Cuando se presentan cambios en mi trabajo se tienen en cuenta mis ideas o aportaciones
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
                            <hr>
                            <br>
                            <div class="card-header">{{ __('Las preguntas siguientes están relacionadas con la capacitación e información que se le proporciona sobre su trabajo.') }}</div>
                            <br>
                            
                            <p>31.- Me informan con claridad cuáles son mis funciones
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

                            <p>32.- Me explican claramente los resultados que debo obtener en mi trabajo
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

                            <p>33.- Me explican claramente los objetivos de mi trabajo
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

                            <p>34.- Me informan con quién puedo resolver problemas o asuntos de trabajo
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

                            <p>35.- Me permiten asistir a capacitaciones relacionadas con mi trabajo
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

                            <p>36.- Recibo capacitación útil para hacer mi trabajo
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
                            <hr>

                            <br>
                            <div class="card-header">{{ __('Las preguntas siguientes están relacionadas con el o los jefes con quien tiene contacto.') }}</div>
                            <br>

                            <p>37.- Mi jefe ayuda a organizar mejor el trabajo
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

                            <p>38.- Mi jefe tiene en cuenta mis puntos de vista y opiniones
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


                            <p>39.- Mi jefe me comunica a tiempo la información relacionada con el trabajo
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


                            <p>40.- La orientación que me da mi jefe me ayuda a realizar mejor mi trabajo
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

                            <p>41.- Mi jefe ayuda a solucionar los problemas que se presentan en el trabajo
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
                            <hr>
                            <br>
                            <div class="card-header">{{ __('Las preguntas siguientes se refieren a las relaciones con sus compañeros.') }}</div>
                            <br>

                            <p>42.- Puedo confiar en mis compañeros de trabajo
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


                            <p>43.- Entre compañeros solucionamos los problemas de trabajo de forma respetuosa
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

                            <p>44.- En mi trabajo me hacen sentir parte del grupo
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

                            <p>45.- Cuando tenemos que realizar trabajo de equipo los compañeros colaboran
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


                            <p>46.- Mis compañeros de trabajo me ayudan cuando tengo dificultades
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
                            <hr>
                            <br>
                            <div class="card-header">{{ __('Las preguntas siguientes se refieren a las relaciones con sus compañeros.') }}</div>
                            <br>
                            
                            <p>47.- Me informan sobre lo que hago bien en mi trabajo
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

                            <p>48.- La forma como evalúan mi trabajo en mi centro de trabajo me ayuda a mejorar mi desempeño
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

                            <p>49.- En mi centro de trabajo me pagan a tiempo mi salario
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

                            <p>50.- El pago que recibo es el que merezco por el trabajo que realizo
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


                            <p>51.- Si obtengo los resultados esperados en mi trabajo me recompensan o reconocen
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

                            <p>52.- Las personas que hacen bien el trabajo pueden crecer laboralmente
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


                            <p>53.- Considero que mi trabajo es estable
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

                            <p>54.- En mi trabajo existe continua rotación de personal
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

                            <p>55.- Siento orgullo de laborar en este centro de trabajo
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

                            <p>56.- Me siento comprometido con mi trabajo
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
                            <hr>

                            <br>
                            <div class="card-header">{{ __('Las preguntas siguientes se refieren a las relaciones con sus compañeros.') }}</div>
                            <br>

                            <p>57.- En mi trabajo puedo expresarme libremente sin interrupciones
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

                            <p>58.- Recibo críticas constantes a mi persona y/o trabajo
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

                            <p>59.- Recibo burlas, calumnias, difamaciones, humillaciones o ridiculizaciones
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


                            <p>60.- Se ignora mi presencia o se me excluye de las reuniones de trabajo y en la toma de decisiones
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

                            <p>61.- Se manipulan las situaciones de trabajo para hacerme parecer un mal trabajador
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

                            <p>62.- Se ignoran mis éxitos laborales y se atribuyen a otros trabajadores
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

                            <p>63.- Me bloquean o impiden las oportunidades que tengo para obtener ascenso o mejora en mi trabajo
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

                            <p>64.- He presenciado actos de violencia en mi centro de trabajo
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

                                <p>66.- Mi trabajo me exige atender personas muy necesitadas de ayuda o enfermas
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

                                <p>67.- Para hacer mi trabajo debo demostrar sentimientos distintos a los míos
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


                                <p>68.- Mi trabajo me exige atender situaciones de violencia
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

                            </div>



                            <label for="pregunta2">En mi trabajo debo brindar servicio a clientes o usuarios:</label>
                            <select id="pregunta2" name="pregunta1" class="form-select">
                              <option value="si">Sí</option>
                              <option value="no">No</option>
                            </select>
                            <br>
                            
                            <div id="preguntasAdicionales2" style="display:none;">
                              
                                <p>65.- Atiendo clientes o usuarios muy enojados
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

                                <p>66.- Mi trabajo me exige atender personas muy necesitadas de ayuda o enfermas
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

                                <p>67.- Para hacer mi trabajo debo demostrar sentimientos distintos a los míos
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


                                <p>68.- Mi trabajo me exige atender situaciones de violencia
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

                            </div>
                            
                            
                            
                            <br>
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

            $('#preguntasAdicionales').show();
            $('#preguntasAdicionales2').show();



            // Registra el evento 'change' en la pregunta 1
            $('#pregunta1').on('change', function() {
            // Si se selecciona 'si', muestra la sección de preguntas adicionales
            if ($(this).val() === 'si') {
                $('#preguntasAdicionales').show();
            } else {
                // Si se selecciona 'no', oculta la sección de preguntas adicionales
                $('#preguntasAdicionales').hide();
            }
            });

            // Registra el evento 'change' en la pregunta 1
            $('#pregunta2').on('change', function() {
            // Si se selecciona 'si', muestra la sección de preguntas adicionales
            if ($(this).val() === 'si') {
                $('#preguntasAdicionales2').show();
            } else {
                // Si se selecciona 'no', oculta la sección de preguntas adicionales
                $('#preguntasAdicionales2').hide();
            }
            });


        });


    </script>
@endsection
