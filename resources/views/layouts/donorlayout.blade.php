{{-- TODO: User navbar and footer --}}

@extends('layouts.master')

@section('layoutContent')
<x-donornavbar />
 
@yield('content')

<x-footer />

@endsection