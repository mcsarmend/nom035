@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="css/register.css">
<div class="container-2">
    <div class="left">
        <img src="assets/register.png" class="img-left">
    </div>
    <div class="right">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Registro') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nombre') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="lnamep" class="col-md-4 col-form-label text-md-end">{{ __('Apellido Paterno') }}</label>

                                <div class="col-md-6">
                                    <input id="lnamep" type="text" class="form-control @error('lnamep') is-invalid @enderror" name="lnamep" value="{{ old('lnamep') }}" required autocomplete="lnamep" autofocus>

                                    @error('lnamep')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="lnamem" class="col-md-4 col-form-label text-md-end">{{ __('Apellido Materno') }}</label>

                                <div class="col-md-6">
                                    <input id="lnamem" type="text" class="form-control @error('lnamem') is-invalid @enderror" name="lnamem" value="{{ old('lnamem') }}" required autocomplete="lnamem" autofocus>

                                    @error('lnamem')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo Electrónico') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            


                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Contraseña') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirmar contraseña') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label  class="col-md-4 col-form-label text-md-end">{{ __('Sexo') }}</label>
                                
                                <div class="col-md-6">
                                    <select id="gender" class="form-control @error('gender') is-invalid @enderror" name="gender" required>
                                        <option value="">Sin seleccionar</option>
                                        <option value="male" @if(old('gender') == 'male') selected @endif>Masculino</option>
                                        <option value="female" @if(old('gender') == 'female') selected @endif>Femenino</option>
                                    </select>

                                    @error('gender')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label  class="col-md-4 col-form-label text-md-end">{{ __('Fecha de nacimiento') }}</label>
                                
                                <div class="col-md-6">
                                    
                                    <input class="form-control" type="text" id="birthday" name="birthday" value="{{ old('birthday') }}" />
                                    @error('birthday')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label  class="col-md-4 col-form-label text-md-end">{{ __('Estado Civil') }}</label>
                                
                                <div class="col-md-6">
                                    <select id="civil_status" class="form-control @error('civil_status') is-invalid @enderror" name="civil_status" required>
                                        <option value="">Sin seleccionar</option>
                                        <option value="married" @if(old('married') == 'married') selected @endif>Casado</option>
                                        <option value="single" @if(old('single') == 'single') selected @endif>Soltero</option>
                                        <option value="free_union" @if(old('free_union') == 'free_union') selected @endif>Unión libre</option>
                                        <option value="divorced" @if(old('divorced') == 'divorced') selected @endif>Divorciado</option>
                                        <option value="widow" @if(old('widow') == 'widow') selected @endif>Viudo</option>
                                        
                                    </select>
                                    @error('civil_status')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label  class="col-md-4 col-form-label text-md-end">{{ __('Razón Social') }}</label>
                                
                                <div class="col-md-6">
                                    <select id="social_reason" class="form-control @error('social_reason') is-invalid @enderror" name="social_reason" required>
                                        
                                        <option value="jonsusacv" @if(old('jonsusacv') == 'jonsusacv') selected @endif>Be Group</option>
                                        
                                    </select>

                                    @error('social_reason')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label  class="col-md-4 col-form-label text-md-end">{{ __('Cliente') }}</label>
                                
                                <div class="col-md-6">
                                    <select id="client" class="form-control @error('client') is-invalid @enderror" name="client" required>
                                        <option value="">Sin seleccionar</option>
                                        <option value="eddistribution" @if(old('eddistribution') == 'eddistribution') selected @endif>Grupo ED Distribución</option>
                                        <option value="edtransportations" @if(old('eddistribution') == 'edtransportations') selected @endif>Grupo ED Transportes</option>
                                        
                                    </select>

                                    @error('client')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label  class="col-md-4 col-form-label text-md-end">{{ __('Area') }}</label>
                                
                                <div class="col-md-6">
                                    <select id="area" class="form-control @error('area') is-invalid @enderror" name="area" required>
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

                                    @error('area')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label  class="col-md-4 col-form-label text-md-end">{{ __('Puestos') }}</label>
                                
                                <div class="col-md-6">
                                    <select id="position" class="form-control @error('position') is-invalid @enderror" name="position" required>
                                        <option value="">Sin seleccionar</option>
                                        <option value="operations_analist" @if(old('operations_analist') == 'operations_analist') selected @endif>Analistade Operaciones</option>
                                        <option value="direction_assistant" @if(old('direction_assistant') == 'direction_assistant') selected @endif>Asistente de dirección</option>
                                        <option value="inventory_auditor" @if(old('inventory_auditor') == 'inventory_auditor') selected @endif>Auditor de inventarios</option>
                                        <option value="administration_assistant" @if(old('administration_assistant') == 'administration_assistant') selected @endif>Auxiliar administrativo</option>
                                        <option value="warehouse_assistant" @if(old('warehouse_assistant') == 'warehouse_assistant') selected @endif>Auxiliar de almacén</option>
                                        <option value="buy_assistant" @if(old('buy_assistant') == 'buy_assistant') selected @endif>Auxiliar de compras</option>
                                        <option value="clean_assistant" @if(old('clean_assistant') == 'clean_assistant') selected @endif>Auxiliar de Limpieza</option>
                                        <option value="mainteinance_assistant" @if(old('mainteinance_assistant') == 'mainteinance_assistant') selected @endif>Auxiliar de Mantenimiento</option>
                                        <option value="coo" @if(old('coo') == 'coo') selected @endif>Gerente de Operaciones</option>
                                        <option value="maintenance" @if(old('maintenance') == 'maintenance') selected @endif>Mantenimiento</option>
                                        <option value="forklift_operator" @if(old('forklift_operator') == 'forklift_operator') selected @endif>Operador de Montacargas</option>
                                        <option value="rrhh" @if(old('rrhh') == 'rrhh') selected @endif>Recursos Humanos</option>
                                        <option value="operations_supervisor" @if(old('operations_supervisor') == 'operations_supervisor') selected @endif>Supervisor de Operaciones</option>
                                        <option value="operations_supervisor_jr" @if(old('jonsusacv') == 'jonsusacv') selected @endif>Supervisor de Operaciones Jr</option>
                                        
                                        
                                    </select>

                                    @error('position')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label  class="col-md-4 col-form-label text-md-end">{{ __('Tipo de puesto') }}</label>
                                
                                <div class="col-md-6">
                                    <select id="position_type" class="form-control @error('position_type') is-invalid @enderror" name="position_type" required>
                                        <option value="">Sin seleccionar</option>
                                        <option value="operative" @if(old('operative') == 'operative') selected @endif>Operativo</option>
                                        <option value="supervisor" @if(old('supervisor') == 'supervisor') selected @endif>Supervisor</option>
                                        <option value="prof_or_tec" @if(old('prof_or_tec') == 'prof_or_tec') selected @endif>Profesional o técnico</option>
                                        <option value="manager" @if(old('jonsusacv') == 'jonsusacv') selected @endif>Gerente</option>
                                        
                                    </select>

                                    @error('position_type')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label  class="col-md-4 col-form-label text-md-end">{{ __('Tipo de jornada de Trabajo') }}</label>
                                
                                <div class="col-md-6">
                                    <select id="working_day" class="form-control @error('working_day') is-invalid @enderror" name="working_day" required>
                                        <option value="">Sin seleccionar</option>
                                        <option value="night" @if(old('night') == 'night') selected @endif>Fijo nocturno (Entre las 20:00 y 6:00)</option>
                                        <option value="day" @if(old('day') == 'day') selected @endif>Fijo diurno (Entre las 6:00 y las 20:00)</option>
                                        <option value="mixer" @if(old('mixer') == 'mixer') selected @endif>Fijo mixto (Combinación de nocturno y diurno)</option>
                                        
                                    </select>

                                    @error('working_day')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>



                            <div class="row mb-3">
                                <label  class="col-md-4 col-form-label text-md-end">{{ __('Fecha de ingreso') }}</label>
                                
                                <div class="col-md-6">
                                    
                                    <input class="form-control" type="text" id="date_admition" name="date_admition" value="{{ old('date_admition') }}" />
                                    @error('date_admition')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>





                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Registrar') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>

    $(document).ready(function(){  
        $("#birthday").datepicker({
            changeYear: true,
            yearRange: "-100:+0" // permite seleccionar los últimos 100 años hasta el año actual
        });


        $("#date_admition").datepicker({
            changeYear: true,
            yearRange: "-100:+0" // permite seleccionar los últimos 100 años hasta el año actual
        });
        $("#app").css('height', '93vh');
        $("#app").css('width', '99%');
    });  
</script>
@endsection
