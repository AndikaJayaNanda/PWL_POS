<<<<<<< HEAD
@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Welcome')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Welcome')

{{-- Content body: main page content --}}
=======
@extends('layout.app')

{{-- Customize layout section --}}

@section('subtitle', 'welcome')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Welcome')

{{-- Content body: main pae content --}}
>>>>>>> 7cd952757b355d9a864ab43598fb9aebd6201b6a

@section('content_body')
    <p>Welcome to this beautiful admin panel.</p>
@stop

<<<<<<< HEAD
{{-- Push extra CSS --}}

@push('css')

{{-- Add here extra stylesheets --}}
  
{{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@endpush

{{-- Push extra scripts --}}
@push('js')
=======
{{-- push extra css --}}

@push('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@endpush

{{-- Push exttra scripts --}}

@push('js')
    <script>
        console.log('Hi, i`m using the Laravel.AdminLTE package!');
    </script>
>>>>>>> 7cd952757b355d9a864ab43598fb9aebd6201b6a
@endpush