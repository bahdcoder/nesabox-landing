
@extends('_layouts.master')

@section('styles')
<style>
    .modal {
        transition: opacity 0.25s ease;
    }

    body.modal-active {
        overflow-x: hidden;
        overflow-y: visible !important;
    }
</style>
@endsection

@section('content')
    @include('partials.nav')

    <div class="w-full bg-hero-background px-3 lg:px-0">
        <div class="pt-12 lg:pt-24 pb-24 lg:pb-24 max-w-3xl mx-auto px-3 md:px-6 text-xl text-gray-700">
            <div class="w-full text-center">

                <h1 class="text-4xl inline text-center text-gray-600">
                    Nesabox Privacy Policy
                </h1>

            </div>
            <iframe style="width: 100%; min-height: 200vh;" src="https://app.termly.io/document/privacy-policy/440a2702-6082-4041-a65b-1e1eaec4b207" frameborder="0"></iframe>
        </div>
    </div>
@endsection

@section('scripts')

@endsection
