<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    public function index()
    {
        $applicants = Applicant::all();
        return view('applicants.index', compact('applicants'));
    }

    public function create()
    {
        return view('applicants.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:applicants,email',
            'phone' => 'required',
            'resume_link' => 'nullable|url',
            'status' => 'required|in:Unviewed,Interviewed,Hired,Onboarding,Resign',
        ]);

        Applicant::create($request->all());
        return redirect()->route('applicants.index')->with('success', 'Applicant created successfully.');
    }

    public function edit(Applicant $applicant)
    {
        return view('applicants.edit', compact('applicant'));
    }

    public function update(Request $request, Applicant $applicant)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:applicants,email,' . $applicant->id,
            'phone' => 'required',
            'resume_link' => 'nullable|url',
            'status' => 'required|in:Unviewed,Interviewed,Hired,Onboarding,Resign',
        ]);

        $applicant->update($request->all());
        return redirect()->route('applicants.index')->with('success', 'Applicant updated successfully.');
    }

    public function destroy(Applicant $applicant)
    {
        $applicant->delete();
        return redirect()->route('applicants.index')->with('success', 'Applicant deleted successfully.');
    }
}
