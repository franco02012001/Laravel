@extends('layouts.app')

@section('content')
    <h2>Applicants</h2>
    <a href="{{ route('applicants.create') }}">Add New Applicant</a>
    <ul>
        @foreach ($applicants as $applicant)
            <li>
                {{ $applicant->name }} ({{ $applicant->status }})
                <a href="{{ route('applicants.edit', $applicant->id) }}">Edit</a>
                <form action="{{ route('applicants.destroy', $applicant->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
