<?php

namespace App\Http\Controllers;

use App\Models\Students;
use App\Http\Requests\StoreStudentsRequest;
use App\Http\Requests\UpdateStudentsRequest;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('students.data')->with([
            'mahasiswa_alyzar' => Students::all()
        ]);
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
    public function store(StoreStudentsRequest $request)
    {
        $validate = $request->validated();

            $mahasiswa_alyzar = new Students;
            $mahasiswa_alyzar-> idstudents = $request->txtid;
            $mahasiswa_alyzar-> fullname = $request->txtfullname;
            $mahasiswa_alyzar-> address = $request->txtaddress;
            $mahasiswa_alyzar-> gender = $request->txtgender;
            $mahasiswa_alyzar-> email = $request->txtemail;
            $mahasiswa_alyzar-> phone = $request->txtphone;
            $mahasiswa_alyzar-> agama = $request ->txtagama;
            $mahasiswa_alyzar-> nik = $request -> txtnik;
            $mahasiswa_alyzar-> prodi = $request -> txtprodi;
            $mahasiswa_alyzar->save();

            return redirect('mahasiswa_alyzar')->with('msg','Add Success');
    }

    /**
     * Display the specified resource.
     */
    public function show(Students $students, $idstudents)
    {
        $data = $students->find($idstudents);
        return view('students.formedit')->with([
            'txtid' => $idstudents,
            'txtfullname' => $data->fullname,
            'txtaddress' => $data->address,
            'txtemail' => $data->email,
            'txtphone' => $data->phone,
            'txtgender' => $data->gender,
            'txtprodi' => $data->prodi,
            'txtagama' => $data->agama,
            'txtnik' => $data->nik,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Students $students)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudentsRequest $request, Students $students, $idstudents)
    {
        $data = $students->find($idstudents);
        $data-> idstudents = $request->txtid;
        $data-> fullname = $request->txtfullname;
        $data-> address = $request->txtaddress;
        $data-> gender = $request->txtgender;
        $data-> email = $request->txtemail;
        $data-> phone = $request->txtphone;
        $data-> agama = $request-> txtagama;
        $data-> prodi = $request->txtprodi;
        $data -> nik = $request->txtnik;
        $data->save();

        return redirect('mahasiswa_alyzar')->with('msg','Edit Success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Students $students, $idstudents)
    {
        $data = $students->find($idstudents);
        $data->delete();
        return redirect('mahasiswa_alyzar')->with('msg', 'Data Deleted');
    }
}
