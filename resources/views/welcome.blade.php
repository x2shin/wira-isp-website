@extends('layouts.main')

@section('title', 'Solusi Internet Terdepan')

@section('content')
    @include('sections.hero')
    
    @include('sections.fitur')
    @include('sections.promo')
    @include('sections.mitra')
    @include('sections.teknologi')
    @include('sections.layanan')
    @include('sections.paket')
    
    @include('sections.tentang')
    @include('sections.kontak')
@endsection