<?php

namespace App\Http\Controllers;

use App\Models\aanwezigheid;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\date_absence;


class AanwezigheidController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aanwezigheids = Student::all();
        return view('aanwezigheid.index', ['aanwezigheids' => $aanwezigheids]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $statuses = $request->input('status', []);
        $currentDate = now()->addDay()->toDateString();

        foreach ($statuses as $id => $status) {
            if ($status === 'afwezig') {
                // Save the date for the afwezig status
                date_absence::create([
                    'student_id' => $id,
                    'date' => $currentDate
                ]);
            } else {
                // Create a record with a null date for aanwezig status
                date_absence::create([
                    'student_id' => $id,
                    'date' => null
                ]);
            }
        }

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(aanwezigheid $aanwezigheid)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(aanwezigheid $aanwezigheid)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, aanwezigheid $aanwezigheid)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(aanwezigheid $aanwezigheid)
    {
        //
    }
}
