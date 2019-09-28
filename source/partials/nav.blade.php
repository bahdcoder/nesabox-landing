<nav class="{{ $page->getPath() === '/' ? 'pt-6 max-w-6xl md:px-12' : 'container lg:px-0 py-6' }} mx-auto md:pt-12 px-6 flex relative justify-between items-center z-10">
    <a href='/' class="font-bold text-svg-green text-xl lg:block hidden">NESABOX</a>
    <a href='/' class="font-bold text-svg-green text-xl lg:hidden">N</a>

    {{-- @include('_nav.search-input') --}}

    <div class="text-sm md:text-lg font-semibold">
        <a class="ml-10 text-gray-700" href="{{ $page->url('docs/getting-started') }}">Guides</a>
        {{-- <a class="ml-10 text-gray-700" href="">Pricing</a> --}}
        <a class="ml-10 text-gray-700" href="https://app.nesabox.com" target='_blank'>Login</a>
    </div>
</nav>
