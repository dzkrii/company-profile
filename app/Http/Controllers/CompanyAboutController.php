<?php

namespace App\Http\Controllers;

use App\Models\CompanyAbout;
use Illuminate\Http\Request;

class CompanyAboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $abouts = CompanyAbout::orderByDesc('id')->paginate(10);
        return view('company.abouts.index', compact('abouts'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CompanyAbout $companyAbout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CompanyAbout $companyAbout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CompanyAbout $companyAbout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CompanyAbout $companyAbout)
    {
        //
    }
}
