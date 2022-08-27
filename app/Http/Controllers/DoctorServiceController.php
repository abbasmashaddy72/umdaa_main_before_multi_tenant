<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDoctorServiceRequest;
use App\Http\Requests\UpdateDoctorServiceRequest;
use App\Models\DoctorService;

class DoctorServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreDoctorServiceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDoctorServiceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DoctorService  $doctorService
     * @return \Illuminate\Http\Response
     */
    public function show(DoctorService $doctorService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DoctorService  $doctorService
     * @return \Illuminate\Http\Response
     */
    public function edit(DoctorService $doctorService)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDoctorServiceRequest  $request
     * @param  \App\Models\DoctorService  $doctorService
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDoctorServiceRequest $request, DoctorService $doctorService)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DoctorService  $doctorService
     * @return \Illuminate\Http\Response
     */
    public function destroy(DoctorService $doctorService)
    {
        //
    }
}
