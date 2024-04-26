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
                    @include('includes.user-card')
                </div>
                <hr>

                @forelse ($ideas as $idea)
                    <div class="mt-3">
                        @include('includes.idea-card')
                    </div>
                @empty
                    <p class="text-center mt-4">No ideas found.</p>
                @endforelse
                <div class="mt-3">
                    {{ $ideas->withQueryString()->links() }}
                </div>
            </div>
        </div>
        <div class="col-3">
            @include('includes.search-bar')
            @include('includes.follow-box')
        </div>
    </div>
@endsection
