@extends('layouts.app')

@section('content')
    <x-navbarx />

    <div class="bg container py-5">
        @if (Auth::user()->admin == false)
            <x-dashboard :users='$users' />
        @else
            <x-dashboard-admin :users='$users' :lastUser='$lastUser' :sessions='$sessions' :toggle='$toggle' :sessionsfalse='$sessionsfalse' />
        @endif


    </div>
@endsection



<style>
    body {
        background-color: darkorange;
    }
</style>
