@extends('layouts.app')

@section('content')
    <h2>Add Applicant</h2>
    <form action="{{ route('applicants.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="phone" placeholder="Phone" required>
        <input type="url" name="resume_link" placeholder="Resume Link">
        <select name="status">
            <option value="Unviewed">Unviewed</option>
            <option value="Interviewed">Interviewed</option>
            <option value="Hired">Hired</option>
            <option value="Onboarding">Onboarding</option>
            <option value="Resign">Resign</option>
        </select>
        <button type="submit">Save</button>
    </form>
@endsection
