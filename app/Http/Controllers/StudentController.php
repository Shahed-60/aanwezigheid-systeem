<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function StudentToevoegen(Request $request){
        //de producten in de database stoppen
        Student::create([
            'id' => $request->id,
            'name' => $request->name,
            'lastname' => $request->lastname,
            'birthdate' => $request->birthdate,
            'created_at' => Carbon::now()
        ]);
        return redirect('/');
    }

}
