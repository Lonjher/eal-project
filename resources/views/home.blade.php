@extends('layouts.main')

@section('hero')
				@include('components.home.hero')
@endsection

@section('main')
				<!-- Kelas Start -->
        @include("components.home.kelas")
        <!-- Kelas End -->

        <!-- About Start -->
        @include("components.home.about")
        <!-- About End -->

        <!-- Team Start -->
        @include('components.home.heroes')
        <!-- Team End -->

        <!-- Testimonial Start -->
        @include('components.home.testimonial')
        <!-- Testimonial End -->

        <!-- Comments Start -->
        @include('components.home.comments')
        <!-- Comments End -->
        
        <!-- Back to Top -->
        <a href="#" class="btn rounded-circle btn-primary back-to-top"><i class="bi bi-arrow-up"></i>
        </a>
@endsection