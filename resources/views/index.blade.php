@extends('layouts.default')
@section('content')
<div class="content">

    <div id="about">
        @include('content.about')
    </div>

    <div id="projects">
        @include('content.websites')
    </div>

    <div id="contact">
        @include('content.contact')
    </div>

</div>
@endsection
