<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Exception;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return response()->json($students);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required|integer',
            'age' => 'required',
        ]);

        try{
            $student = new Student($request->all());
/* 
        $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;
        $student->age = $request->age;
        $student->cell_phone = $request->cell_phone;
        $student->address = $request->address; */

        $student->save();

        return response()->json(['message'=> 'Estudiante registrado']);

        }catch(Exception $e){
            return response()->json(['message'=>'Error en la transacción ' . $e]);
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::find($id);
        return response()->json($student);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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

        $validate = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required|integer',
            'age' => 'required',
        ]);

        try{
            $student = Student::find($id);

            $student->first_name = $request->first_name;
            $student->last_name = $request->last_name;
            $student->age = $request->age;
            $student->cell_phone = $request->cell_phone;
            $student->address = $request->address;
    
            $student->save();
    
            return response()->json(['message'=>'El estudiante actualizado ahora se llama '.$student->first_name]);

        }catch(Exception $e){
            return response()->json(['message'=>'Error en la transacción ' . $e]);
        }  

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $student = Student::find($id);
            $student->delete();

            return response()->json(['message'=>'Registro eliminado correctamente']);

        }catch(Exception $e){
            return response()->json(['message'=>'Error en la transacción ' . $e]);
        }
    }
}
