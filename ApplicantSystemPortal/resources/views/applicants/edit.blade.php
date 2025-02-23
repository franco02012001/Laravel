@extends('layouts.app')

@section('content')
    <h2>Edit Applicant</h2>
    <form action="{{ route('applicants.update', $applicant->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{ $applicant->name }}" required>
        <input type="email" name="email" value="{{ $applicant->email }}" required>
        <input type="text" name="phone" value="{{ $applicant->phone }}" required>
        <input type="url" name="resume_link" value="{{ $applicant->resume_link }}">
        <select name="status">
            @foreach (['Unviewed', 'Interviewed', 'Hired', 'Onboarding', 'Resign'] as $status)
                <option value="{{ $status }}" {{ $applicant->status === $status ? 'selected' : '' }}>
                    {{ $status }}
                </option>
            @endforeach
        </select>
        <button type="submit">Update</button>
    </form>
@endsection
