@extends('layouts.dashboard')

@section('mainPanel')
    <x-form.section-title>Stored CVs</x-form.section-title>
    <hr class="my-2">

    @forelse($cvs as $cv)
    @empty
        You don't have any stored CV
    @endforelse

    <form method="post" id="cvUpload" class="hidden">
        <input type="file" id="fileDialogId"/>
    </form>
@endsection

@section('leftPanel')
    <x-parts.profile-avatar-box/>
@endsection

@section('rightPanel')
    <x-parts.profile-cv-summary :edit-link="false"/>
@endsection


