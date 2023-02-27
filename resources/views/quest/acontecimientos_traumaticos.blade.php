@extends('layouts.app')
{{--  Eventos Traumaticos --}}
@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('CUESTIONARIO PARA IDENTIFICAR A LOS TRABAJADORES QUE FUERON SUJETOS A ACONTECIMIENTOS TRAUMÁTICOS SEVEROS') }}</div>
                    <br>
                    <div class="card-header">{{ __('Marque una "Si o No" a la respuesta que se le indica. Si en el inciso I su respuesta es NO, favor de no responder los incisos II, III y IV.') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            
                            <h3>I.- Acontecimiento traumático severo</h3>
                            <h4>¿Ha presenciado o sufrido alguna vez, durante o con motivo del trabajo un acontecimiento como los siguiente</h4>
                            <p>Accidente que tenga como consecuencia la muerte, la pérdida de un miembro o una lesión grave?
                            <br>
                                <input type="radio" name="sec1quest1" value="si" required> Sí
                                <input type="radio" name="sec1quest1" value="no"> No
                            </p>
                            <p>Asaltos?
                            <br>
                                <input type="radio" name="sec1quest2" value="si" required> Sí
                                <input type="radio" name="sec1quest2" value="no"> No
                            </p>
                            <p>Actos violentos que derivaron en lesiones graves?
                            <br>
                                <input type="radio" name="sec1quest3" value="si" required> Sí
                                <input type="radio" name="sec1quest3" value="no"> No
                            </p>
                            <p>Secuestro?
                            <br>
                                <input type="radio" name="sec1quest4" value="si" required> Sí
                                <input type="radio" name="sec1quest4" value="no"> No
                            </p>
                            <p>Amenazas?, o
                            <br>
                                <input type="radio" name="sec1quest5" value="si" required> Sí
                                <input type="radio" name="sec1quest5" value="no"> No
                            </p>
                            <p>Cualquier otro que ponga en riesgo su vida o salud, y/o la de otras personas?
                            <br>
                                <input type="radio" name="sec1quest6" value="si" required> Sí
                                <input type="radio" name="sec1quest6" value="no"> No
                            <hr>
                                <!-- Sección 2 -->
                            <h3>II.- Recuerdos persistentes sobre el acontecimiento (durante el último mes):</h3>
                            <p>¿Ha tenido recuerdos recurrentes sobre el acontecimiento que le provocan malestares?
                            <br>
                                <input type="radio" name="sec2quest1" value="si" required> Sí
                                <input type="radio" name="sec2quest1" value="no"> No
                            </p>
                            <p>¿Ha tenido sueños de carácter recurrente sobre el acontecimiento, que le producen malestar?
                            <br>
                                <input type="radio" name="sec2quest2" value="si" required> Sí
                                <input type="radio" name="sec2quest2" value="no"> No
                            </p>
                            <!-- Otras preguntas de la sección 2 -->
                            <hr>
                                <!-- Sección 3 -->
                            <h3>III.- Esfuerzo por evitar circunstancias parecidas o asociadas al acontecimiento (durante el último mes):</h3>
                            <p>¿Se ha esforzado por evitar todo tipo de sentimientos, conversaciones o situaciones que le puedan recordar el acontecimiento?
                            <br>
                                <input type="radio" name="sec3quest1" value="si" required> Sí
                                <input type="radio" name="sec3quest1" value="no"> No
                            </p>
                            <p>¿Se ha esforzado por evitar todo tipo de actividades, lugares o personas que motivan recuerdos del acontecimiento?
                            <br>
                                <input type="radio" name="sec3quest2" value="si" required> Sí
                                <input type="radio" name="sec3quest2" value="no"> No
                            </p>
                            
                            <p>¿Ha tenido dificultad para recordar alguna parte importante del evento?
                            <br>
                                <input type="radio" name="sec3quest3" value="si" required> Sí
                                <input type="radio" name="sec3quest3" value="no"> No
                            </p>
                            <p>¿Ha disminuido su interés en sus actividades cotidianas?
                            <br>
                                <input type="radio" name="sec3quest4" value="si" required> Sí
                                <input type="radio" name="sec3quest4" value="no"> No
                            </p>
                            <p>¿Se ha sentido usted alejado o distante de los demás?
                            <br>
                                <input type="radio" name="sec3quest5" value="si" required> Sí
                                <input type="radio" name="sec3quest5" value="no"> No
                            </p>
                            <p>¿Ha notado que tiene dificultad para expresar sus sentimientos?
                            <br>
                                <input type="radio" name="sec3quest6" value="si" required> Sí
                                <input type="radio" name="sec3quest6" value="no"> No
                            </p>
                            <p>¿Ha tenido la impresión de que su vida se va a acortar, que va a morir antes que otras personas o que tiene un futuro limitado?
                            <br>
                                <input type="radio" name="sec3quest7" value="si" required> Sí
                                <input type="radio" name="sec3quest7" value="no"> No
                            </p>
                            <!-- Otras preguntas de la sección 2 -->
                            <hr>
                            
                            <!-- Sección 4 -->
                            <h3>IV Afectación (durante el último mes):</h3>
                            <p>¿Ha tenido usted dificultades para dormir?
                            <br>
                                <input type="radio" name="sec4quest1" value="si" required> Sí
                                <input type="radio" name="sec4quest1" value="no"> No
                            </p>
                            <p>¿Ha estado particularmente irritable o le han dado arranques de coraje?
                            <br>
                                <input type="radio" name="sec4quest2" value="si" required> Sí
                                <input type="radio" name="sec4quest2" value="no"> No
                            </p>
                            <p>¿Ha tenido dificultad para concentrarse?
                            <br>
                                <input type="radio" name="sec4quest3" value="si" required> Sí
                                <input type="radio" name="sec4quest3" value="no"> No
                            </p>
                            <p>¿Ha estado nervioso o constantemente en alerta?
                            <br>
                                <input type="radio" name="sec4quest4" value="si" required> Sí
                                <input type="radio" name="sec4quest4" value="no"> No
                            </p>
                            <p>¿Se ha sobresaltado fácilmente por cualquier cosa?
                            <br>
                                <input type="radio" name="sec4quest5" value="si" required> Sí
                                <input type="radio" name="sec4quest5" value="no"> No
                            </p>
                            
                            <!-- Otras preguntas de la sección 2 -->
                            <hr>



                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Guardar') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
