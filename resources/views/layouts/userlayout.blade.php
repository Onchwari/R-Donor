{{-- TODO: User navbar and footer --}}

@extends('layouts.master')

@section('layoutContent')
<x-usernavbar />
 
@yield('content')

<x-footer />

@endsection