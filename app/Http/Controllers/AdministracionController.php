<?php

namespace App\Http\Controllers;

use App\Solicitud;
use Illuminate\Http\Request;

class AdministracionController extends Controller
{
    public function index(){
    	$solicitudes = Solicitud::where('estado','espera')->get();
    		return view('administracion')
    						->with('solicitudes',$solicitudes);
    }

    public function revisar($solicitud_id){
    	$solicitud = Solicitud::findOrFail($solicitud_id);
    	$solicitud->estado = 'visto';
    	$solicitud->save();
    	return redirect()->route('administracioin.index');
    }
}
