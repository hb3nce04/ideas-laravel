@extends('layout.layout')

@section('content')
    <div class="row">
        <div class="col-3">
            @include('includes.left-sidebar')
        </div>
        <div class="col-6">
            @include('includes.success-message')
            @include('includes.error-message')
            <div class="mt-3">
                <div class="mt-3">
                    @include('includes.user-edit-card')
                </div>
            </div>
        </div>
        <div class="col-3">
            @include('includes.search-bar')
            @include('includes.follow-box')
        </div>
    </div>
@endsection
