@extends('_layouts.master')

@php $level = $level ?? 0 @endphp

@section('content')
    @include('partials.nav')

    <div class="w-full flex lg:hidden justify-end myt-3 mb-5 pr-6">
        <button onclick='toggleDocsMenu()' class='px-2 py-1 border border-gray-500 text-xs' id='toggle-menu-button'>
            Docs Menu
        </button>
    </div>

    <div class="container mx-auto w-full flex flex-wrap mb-16 text-gray-700 mb-4">
        <div class="px-6 lg:px-0 w-full lg:w-1/5 hidden lg:block flex flex-col lg:flex-row" id='docs-menu'>
            <div class="w-full bg-hero-background px-5 py-6">
                <span class='border-b-2 border-gray-500 text-gray-700 font-medium text-sm w-full block pb-2 mb-3'>DOCUMENTATION</span>

                <ul class="list-reset mt-5">
                    @foreach($page->navigation as $label => $item)
                        <li>
                            <span class='font-bold text-gray-800 text-sm'>
                                {{ $label }}
                            </span>

                            <ul class="mt-3 pl-3 border-l-2 border-gray-500">
                                @foreach($item as $link => $url)
                                    <li class='mb-3 text-gray-700 text-sm hover:text-svg-green @if($page->getPath() === '/' . $url) text-svg-green font-medium @endif'>
                                        <a href="{{ $page->url($url) }}">
                                            {{ $link }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="w-full lg:w-3/5 px-6 lg:px-12 docs-content">
            {{-- {!! $currentPage->content !!} --}}
            @yield('docs')

            <hr class='mt-6 lg:mt-12' />
            {{-- <div class="w-full flex justify-between mt-4">
                <a href="">Previous page</a>
                <a href="">Next page</a>
            </div> --}}
        </div>

        <div class="hidden lg:block w-1/5">
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        function toggleDocsMenu() {
            var menu = document.getElementById('docs-menu')
            var menu_toggle_button = document.getElementById('toggle-menu-button')

            if (! menu) return

            if (! menu_toggle_button) return

            menu.classList.toggle('hidden')
            menu_toggle_button.classList.toggle('open')

            if (menu_toggle_button.classList.contains('open')) {
                menu_toggle_button.innerText = 'Hide Docs Menu'
            } else {
                menu_toggle_button.innerText = 'Docs Menu'
            }
        }
    </script>
@endpush
