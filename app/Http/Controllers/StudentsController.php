<?php

namespace App\Http\Controllers;

use App\Models\Student as ModelsStudent;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $students = DB::table('students')->get();
        $students = ModelsStudent::all();
        return view('students.index', ['students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $student = new ModelsStudent();
        // $student->nama = $request->nama;
        // $student->nrp = $request->nrp;
        // $student->email = $request->email;
        // $student->jurusan = $request->jurusan;

        // $student->save();

        // ModelsStudent::create([
        //     'nama' => $request->nama,
        //     'nrp' => $request->nrp,
        //     'email' => $request->email,
        //     'jurusan' => $request->jurusan
        // ]);
        $request->validate([
            'nama' => 'required|min:3',
            'nrp' => 'required|unique:students|size:9',
            'email' => 'required|unique:students',
            'jurusan' => 'required',
        ]);
        ModelsStudent::create($request->all());

        return redirect('/students')->with('status', 'data added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int 
     * @return \Illuminate\Http\Response
     */
    public function show(ModelsStudent $student)
    {
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int
     * @return \Illuminate\Http\Response
     */
    public function edit(ModelsStudent $student)
    {
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ModelsStudent $student)
    {
        $request->validate([
            'nama' => 'required|min:3',
            'nrp' => 'required|size:9',
            'email' => 'required',
            'jurusan' => 'required',
        ]);

        ModelsStudent::where('id', $student->id)
            ->update([
                'nama' => $request->nama,
                'nrp' => $request->nrp,
                'email' => $request->email,
                'jurusan' => $request->jurusan
            ]);
        return redirect('/students')->with('status', 'data edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  
     * @return \Illuminate\Http\Response
     */
    public function destroy(ModelsStudent $student)
    {
        ModelsStudent::destroy($student->id);
        return redirect('/students')->with('status', 'data deleted successfully');
    }
}
