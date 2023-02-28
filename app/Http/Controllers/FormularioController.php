<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormularioController extends Controller
{
    public function mostrarFormulario()
    {
        return view('formulario');
    }

    public function procesarFormulario(Request $request)
    {
        // Validación de datos
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'mensaje' => 'required|string|max:500',
        ]);

        // Procesamiento de datos
        // Aquí puedes guardar los datos en la base de datos o enviar un correo electrónico, por ejemplo
        // ...

        // Redirección a una página de confirmación
        return redirect()->route('formulario.confirmacion');
    }

    public function mostrarConfirmacion()
    {
        return view('confirmacion');
    }
}