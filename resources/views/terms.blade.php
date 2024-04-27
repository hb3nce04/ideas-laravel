@extends('layout.layout')

@section('content')
    <div class="row">
        <div class="col-3">
            @include('includes.left-sidebar')
        </div>
        <div class="col-6">
            <h1>Terms</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum augue felis, malesuada id elit non,
                iaculis blandit quam. Phasellus vel diam lectus. Aenean faucibus sed sem vel mattis. Vestibulum a elit
                vitae est tempus vehicula. Praesent cursus, ipsum eget sagittis suscipit, arcu nibh vehicula urna, sed
                molestie diam mauris non lacus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                cubilia curae; Ut metus nulla, maximus eu lacinia sed, consequat ac elit. Aenean efficitur auctor
                consectetur. Praesent mauris odio, euismod sit amet est eget, blandit vulputate magna. Nunc tempor
                venenatis massa, quis dignissim ante cursus vitae. Ut hendrerit libero mi, a hendrerit lacus euismod in.
                Duis blandit mattis bibendum. Fusce eget leo non est vulputate porta.</p>
        </div>
        <div class="col-3">
            @include('includes.search-bar')
            @include('includes.follow-box')
        </div>
    </div>
@endsection
