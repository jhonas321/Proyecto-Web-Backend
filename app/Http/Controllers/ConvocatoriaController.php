<?php

namespace App\Http\Controllers;

use App\Models\Convocatoria;
use App\Models\Relacion_FC;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ConvocatoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $convocatorias = Convocatoria::with(['relacion_fc.facultad'])->get();
        return response()->json($convocatorias);
    }

    /**
     * Al igual que tener una relacion en lugar de realizar un trigger
     * este integra la relacion como $relacion_fc integrando en la tabla
     * el ID_FACULTAD y ID_CONVOCATORIA sacando del objeto relacion_fc
     * del $request->validate
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate_data = $request->validate([
            'ID_ELECCION' => 'required',
            'FECHA_INI' => 'required',
            'FECHA_FIN' => 'required',
            'DIA_ELECCION' => 'required',
            'NOMBRE_CONVOCATORIA' => 'required',
            'ACTIVO'=>'required',
            'URL_PDF_CONVOCATORIA' => 'required',
            'relacion_fc' => 'required']);

        $convocatoria = Convocatoria::create($validate_data);
        
        $relacion_fc = new Relacion_FC([
            'ID_FACULTAD' => $validate_data['relacion_fc']['ID_FACULTAD'],
            'ID_CONVOCATORIA' => $validate_data['relacion_fc']['ID_CONVOCATORIA']]);
        $convocatoria->relacion_fc()->save($relacion_fc);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $convocatoria = Convocatoria::find($id);
        return response()->json($convocatoria);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $convocatoria = Convocatoria::findOrFail($id);
        $convocatoria->ID_ELECCION = $request->ID_ELECCION;
        $convocatoria->FECHA_INI = $request->FECHA_INI;
        $convocatoria->FECHA_FIN = $request->FECHA_FIN;
        $convocatoria->URL_PDF_CONVOCATORIA = $request->URL_PDF_CONVOCATORIA;
        $convocatoria->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $convocatoria = Convocatoria::destroy($id);
        return response()->json($convocatoria);
    }
}
