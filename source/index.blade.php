
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
    <div class="bg-hero-background relative overflow-hidden">
        <div class="hidden absolute right-0 top-0 bottom-0 flex items-center -mr-10">
            <img style="width: 800px;" src="/assets/images/illustration.svg">
        </div>
        @include('partials.nav')
        <div class="pt-10 lg:pt-32 pb-32 lg:pb-40 max-w-6xl mx-auto px-6 md:px-12">
            <div class="relative flex flex-wrap">
                <div class="hidden lg:flex absolute items-center" style="left: 500px; top: -260px;">
                    <img style="max-width:none; width: 800px;" src="/assets/images/illustration.svg">
                </div>
                <div class="w-full lg:w-1/2 relative">
                    <div class="mx-auto lg:mx-0 max-w-lg text-center lg:text-left">
                        <h1 class="text-3xl sm:text-4xl leading-snug font-bold tracking-tight text-gray-700">
                          Modern <span class='text-svg-green'>server management</span> for your Node.js applications
                        </h1>
                        <div class="mt-3 text-xl md:text-2xl text-gray-700">
                            Provision and deploy unlimited Node.js applications on DigitalOcean, Linode, Vultr, Amazon and more.
                        </div>
                    </div>
                    <div class="lg:hidden mx-auto" style="max-width: 800px;">
                        <img src="/assets/images/illustration.svg">
                    </div>
                    <div class="mt-6 lg:mt-12 lg:block flex flex-col">
                        <a href="https://app.nesabox.com" target='_blank' class="text-center w-full sm:w-auto mb-5 sm:mb-0 bg-svg-green rounded px-5 py-4 shadow text-white hover:bg-svg-green-light">Get started for free</a>
                        <a class="w-full block sm:inline text-center text-lg sm:w-auto sm:ml-5 text-svg-green hover:text-svg-green-light" href="#learn-more">Learn more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-svg-green">
        <div class="container relative mx-auto sm:flex sm:items-center justify-center px-6 md:px-12">
            <img class="modal-open cursor-pointer h-32 md:h-40 w-auto sm:-my-3 -mt-16 mx-auto sm:mx-0 shadow-xl rounded-lg relative" src="assets/images/watch-demo-video.png">
            <div class="ml-6 md:ml-10 text-center sm:text-left py-6">
                <p class="md:text-xl text-white font-semibold">
                    Here's a quick demo to show you around.
                </p>
                <small class="md:text-base text-gray-100">We deploy and secure two applications instantly.</small>
            </div>
        </div>
    </div>

    <div class="w-full bg-hero-background px-3 lg:px-0">
        <div class="pt-12 lg:pt-24 pb-24 lg:pb-24 max-w-3xl mx-auto px-3 md:px-6">
            <div class="w-full text-center">
                <svg class="h-8 -mt-5 rotate-180 inline text-gray-400 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path d="M209 96h-65c-26.4 0-48 21.6-48 48v128c0 26.4 21.6 48 48 48h38.7c4.6 0 8.3 3.9 8 8.6-2.3 35.5-18.8 60.2-31.3 74.1-4.7 5.2-1 13.4 5.9 13.4h39.9c2.5 0 4.8-1.1 6.3-3.1 7.4-9.6 28.5-41.6 28.5-93.9v-192c0-17.8-13.3-31.1-31-31.1zM385 96h-65c-26.4 0-48 21.6-48 48v128c0 26.4 21.6 48 48 48h38.7c4.6 0 8.3 3.9 8 8.6-2.3 35.5-18.8 60.2-31.3 74.1-4.7 5.2-1 13.4 5.9 13.4h39.9c2.5 0 4.8-1.1 6.3-3.1 7.4-9.6 28.5-41.6 28.5-93.9v-192c0-17.8-13.3-31.1-31-31.1z"/>
                </svg>
                <p class="text-2xl inline text-center text-gray-600">
                    Everytime I want to deploy a Node.js application, I find myself configuring Nginx, setting up git hooks, PM2, SSL certificates over and over.
                </p>
                <svg class="h-8 inline -mb-2 text-gray-400 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path d="M209 96h-65c-26.4 0-48 21.6-48 48v128c0 26.4 21.6 48 48 48h38.7c4.6 0 8.3 3.9 8 8.6-2.3 35.5-18.8 60.2-31.3 74.1-4.7 5.2-1 13.4 5.9 13.4h39.9c2.5 0 4.8-1.1 6.3-3.1 7.4-9.6 28.5-41.6 28.5-93.9v-192c0-17.8-13.3-31.1-31-31.1zM385 96h-65c-26.4 0-48 21.6-48 48v128c0 26.4 21.6 48 48 48h38.7c4.6 0 8.3 3.9 8 8.6-2.3 35.5-18.8 60.2-31.3 74.1-4.7 5.2-1 13.4 5.9 13.4h39.9c2.5 0 4.8-1.1 6.3-3.1 7.4-9.6 28.5-41.6 28.5-93.9v-192c0-17.8-13.3-31.1-31-31.1z"/>
                </svg>
            </div>

            <p class="mt-8 lg:mt-16 text-xl text-gray-700">
                We built Nesabox as a tool to make server managements and deployments of small to medium scale Node.js applications so much easier.
            </p>

            <p class="pt-6 text-xl text-gray-700">
                We take care of all the little details so you can focus on building your application.
            </p>

            <p class="pt-6 text-xl text-gray-700">
                To make the process of provisioning servers easier, we integrate with the most popular server providers like <a class="text-svg-green" target="_blank" href="https://m.do.co/c/6f8db1ff34c8">Digital Ocean</a>, <a class="text-svg-green" target="_blank" href="https://linode.com">Linode</a>, <a class="text-svg-green" target="_blank" href="https://www.vultr.com/?ref=7492549">Vultr</a>, and <a class="text-svg-green" target="_blank" href="https://aws.amazon.com">AWS</a>. Connect your preferred provider,
                and we'll take it from there.
            </p>

            <p class="pt-6 text-xl text-gray-700">
                We install <a class="text-svg-green" href="https://nginx.org" target="_blank">nginx</a> as a web server, configure it using modern and most recommended best practices for serving Node.js applications.
            </p>

            <p class="pt-6 text-xl text-gray-700">
                Your applications are served using the most advanced and recommended Node.js production process manager, <a class="text-svg-green" href="https://github.com/Unitech/pm2" target="_blank">PM2</a>.
            </p>

            <p class="pt-6 text-xl text-gray-700">
                We notify you via Slack/Email on critical events that happen on your server and web applications.
            </p>

            <p class="pt-6 text-xl text-gray-700">
                There's so much more done for you behind the scenes. We can't wait for your to save time and become more productive. <a class="text-svg-green" data-formkit-toggle="0125e9bf9b" href="https://witty-trailblazer-4030.ck.page/0125e9bf9b">We'll let you know</a> when we launch.
            </p>
        </div>
    </div>

    <div id="learn-more" class="w-full px-3 lg:px-0">
        <div class="pt-6 lg:pt-16 pb-16 lg:pb-16 max-w-6xl mx-auto px-3 md:px-6">
            <h3 class="text-2xl font-medium md:text-3xl text-center text-blue-900 mb-6 lg:mb-16 leading-tight">
                Features built with your productivity in mind
            </h3>
    
            <div class="flex flex-wrap sm:-mx-6">
                <div class="w-full sm:w-1/2 lg:w-1/3 sm:px-6 mb-12">
                    <svg class="block h-8 mb-6 text-svg-green fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M456.9 242.2l-26.1-4.2c-3.5-.6-6.1-3.3-6.6-6.8-.5-3.2-1-6.4-1.7-9.5-.7-3.4.9-6.9 3.9-8.6l23.1-12.8c3.6-1.8 5.3-6.1 3.9-9.9l-4-11c-1.4-3.8-5.4-6-9.4-5l-25.9 5c-3.4.7-6.9-1-8.6-4.1-1.5-2.8-3.1-5.6-4.8-8.4-1.8-3-1.6-6.8.7-9.5l17.3-19.9c2.8-3 2.9-7.5.3-10.6l-7.5-9c-2.6-3.1-7.1-3.8-10.5-1.5L378.3 130c-3 1.8-6.8 1.4-9.4-.9-2.4-2.1-4.9-4.2-7.4-6.2-2.7-2.2-3.8-5.9-2.5-9.1l9.4-24.7c1.6-3.7.2-8.1-3.3-10.1l-10.2-5.9c-3.5-2-8-1.1-10.4 2.2l-16.6 20.8c-2 2.5-4.9 3.8-8.5 2.5 0 0-5.6-2.3-9.8-3.7-3.3-1.1-5.6-4.2-5.5-7.7l.4-26.4c.2-4.1-2.6-7.7-6.6-8.4l-11.6-2c-4-.7-7.9 1.7-9.1 5.6l-8.6 25c-1.1 3.3-4.3 5.5-7.8 5.4-1.6 0-3.3-.1-4.9-.1s-3.3 0-4.9.1c-3.5.1-6.6-2.1-7.8-5.4l-8.6-25c-1.2-3.9-5.1-6.3-9.1-5.6l-11.6 2c-4 .7-6.8 4.3-6.6 8.4l.4 26.4c.1 3.5-2.1 6.4-5.5 7.7-2.3.9-7.3 2.8-9.7 3.7-2.8 1-6.1.2-8.8-2.9l-16.5-20.3c-2.4-3.3-6.9-4.2-10.4-2.2l-10.2 5.9c-3.5 2-5 6.4-3.3 10.1l9.4 24.7c1.2 3.3.2 7-2.5 9.1-2.5 2-5 4.1-7.4 6.2-2.6 2.3-6.4 2.7-9.4.9L111 116.3c-3.4-2.2-7.9-1.6-10.5 1.5l-7.5 9c-2.6 3.1-2.5 7.7.3 10.6l17.3 19.9c2.3 2.6 2.6 6.5.7 9.5-1.7 2.7-3.3 5.5-4.8 8.4-1.7 3.1-5.1 4.7-8.6 4.1l-25.9-5c-4-.9-8 1.2-9.4 5l-4 11c-1.4 3.8.3 8.1 3.9 9.9L85.6 213c3.1 1.7 4.6 5.2 3.9 8.6-.6 3.2-1.2 6.3-1.7 9.5-.5 3.5-3.2 6.2-6.6 6.8l-26.1 4.2c-4 .5-7.1 3.9-7.1 7.9v11.7c0 4.1 3 7.5 7.1 7.9l26.1 4.2c3.5.6 6.1 3.3 6.6 6.8.5 3.2 1 6.4 1.7 9.5.7 3.4-.9 6.9-3.9 8.6l-23.1 12.8c-3.6 1.8-5.3 6.1-3.9 9.9l4 11c1.4 3.8 5.4 6 9.4 5l25.9-5c3.4-.7 6.9 1 8.6 4.1 1.5 2.8 3.1 5.6 4.8 8.4 1.8 3 1.6 6.8-.7 9.5l-17.3 19.9c-2.8 3-2.9 7.5-.3 10.6l7.5 9c2.6 3.1 7.1 3.8 10.5 1.5l22.7-13.6c3-1.8 6.8-1.4 9.4.9 2.4 2.1 4.9 4.2 7.4 6.2 2.7 2.2 3.8 5.9 2.5 9.1l-9.4 24.7c-1.6 3.7-.2 8.1 3.3 10.1l10.2 5.9c3.5 2 8 1.1 10.4-2.2l16.8-20.6c2.1-2.6 5.5-3.7 8.2-2.6 3.4 1.4 5.7 2.2 9.9 3.6 3.3 1.1 5.6 4.2 5.5 7.7l-.4 26.4c-.2 4.1 2.6 7.7 6.6 8.4l11.6 2c4 .7 7.9-1.7 9.1-5.6l8.6-25c1.1-3.3 4.3-5.5 7.8-5.4 1.6 0 3.3.1 4.9.1s3.3 0 4.9-.1c3.5-.1 6.6 2.1 7.8 5.4l8.6 25c1.2 3.9 5.1 6.3 9.1 5.6l11.6-2c4-.7 6.8-4.3 6.6-8.4l-.4-26.4c-.1-3.5 2.2-6.6 5.5-7.7 4.2-1.4 7-2.5 9.6-3.5 2.6-.9 5.8-1 8.3 2.1l17 20.9c2.4 3.3 6.9 4.2 10.4 2.2l10.2-5.9c3.5-2 5-6.4 3.3-10.1l-9.4-24.7c-1.2-3.3-.2-7 2.5-9.1 2.5-2 5-4.1 7.4-6.2 2.6-2.3 6.4-2.7 9.4-.9l22.7 13.6c3.4 2.2 7.9 1.6 10.5-1.5l7.5-9c2.6-3.1 2.5-7.7-.3-10.6l-17.3-19.9c-2.3-2.6-2.6-6.5-.7-9.5 1.7-2.7 3.3-5.5 4.8-8.4 1.7-3.1 5.1-4.7 8.6-4.1l25.9 5c4 .9 8-1.2 9.4-5l4-11c1.4-3.8-.3-8.1-3.9-9.9l-23.1-12.8c-3.1-1.7-4.6-5.2-3.9-8.6.6-3.2 1.2-6.3 1.7-9.5.5-3.5 3.2-6.2 6.6-6.8l26.1-4.2c4-.5 7.1-3.9 7.1-7.9v-11.7c-.2-3.8-3.2-7.3-7.3-7.7zM181.8 356.9c-5.2 9-17.4 10.7-25 3.6C129.2 334.2 112 297.1 112 256c0-40.9 17.1-77.9 44.5-104.1 7.5-7.2 19.8-5.5 25 3.5l56 96.6c1.4 2.5 1.4 5.5 0 8l-55.7 96.9zM396 289.7C380.9 353 323.9 400 256 400c-14.1 0-27.8-2-40.6-5.8-9.9-2.9-14.5-14.4-9.3-23.3l55.7-96.9c1.4-2.5 4.1-4 6.9-4h111.7c10.4 0 18 9.6 15.6 19.7zM380.5 242H268.7c-2.9 0-5.5-1.5-6.9-4l-56.1-96.7c-5.2-8.9-.7-20.4 9.2-23.4 13-3.9 26.8-5.9 41.1-5.9 67.9 0 124.9 47 140 110.3 2.4 10.1-5.2 19.7-15.5 19.7z"/></svg>
                    <h4 class="text-blue-900 font-semibold mb-3">Cutting edge</h4>
                    <p class="text-gray-700">
                        We install Nginx, Node.js, PM2, MongoDB, Redis and everything you need to go live without the hassle.
                    </p>
                </div>
    
                <div class="w-full sm:w-1/2 lg:w-1/3 sm:px-6 mb-12">
                    <svg class="block h-8 mb-6 text-svg-green fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M437.1 165.8C429 90.6 365.4 32 288 32c-51.2 0-96.3 25.6-123.4 64.7-8.3-3.4-17.4-5.3-26.9-5.3-39.1 0-70.8 34.4-71.4 73.4C26.4 177.5 0 216.5 0 257.5 0 307.7 40.7 352 90.9 352H243V210.1l-47.9 47.2c-5.1 5-13.3 5-18.4-.1-5-5.1-5-13.3.1-18.4l70-69c1.2-1.1 2.5-2.1 4.1-2.7 1.6-.7 3.3-1 5-1 3.4 0 6.6 1.3 9.1 3.7l70 69c5.1 5 5.2 13.3.1 18.4-5 5.1-13.3 5.2-18.4.1L269 210.1V352h152.1c50.2 0 90.9-44.3 90.9-94.5 0-44.7-32.3-84.1-74.9-91.7zM243 467c0 7.2 5.8 13 13 13s13-5.8 13-13V352h-26v115z"/></svg>
                    <h4 class="text-blue-900 font-semibold mb-3">PM2 deployments</h4>
                    <p class="text-gray-700">
                        We deploy your sites using an advanced production process manager for Node.js.
                    </p>
                </div>
    
                <div class="w-full sm:w-1/2 lg:w-1/3 sm:px-6 mb-12">
                    <svg class="block h-8 mb-6 text-svg-green fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M377.4 32c-38.9 0-70.6 31.7-70.6 70.7 0 17.1 6.2 33.7 17.5 46.6 10 11.5 23.5 19.4 38.2 22.5v43.1L256 270.3l-106.4-55.4v-43.1c32.2-6.9 55.7-35.6 55.7-69.1 0-39-31.7-70.7-70.6-70.7S64 63.7 64 102.7c0 17.1 6.2 33.7 17.5 46.6 10 11.5 23.5 19.4 38.2 22.5v57.4c0 2.7 1.5 5.1 3.9 6.3l117.5 60.8v43.9c-32.2 6.9-55.7 35.6-55.7 69.1 0 39 31.7 70.7 70.6 70.7s70.6-31.7 70.6-70.7c0-17.1-6.2-33.7-17.5-46.6-10-11.5-23.5-19.4-38.2-22.5v-43.9l117.5-60.8c2.4-1.2 3.9-3.6 3.9-6.3v-57.4c32.2-6.9 55.7-35.6 55.7-69.1 0-39-31.7-70.7-70.6-70.7zM93.8 102.7c0-22.5 18.3-40.8 40.8-40.8s40.8 18.3 40.8 40.8c0 22.5-18.3 40.8-40.8 40.8s-40.8-18.3-40.8-40.8zm203 306.6c0 22.5-18.3 40.8-40.8 40.8s-40.8-18.3-40.8-40.8c0-22.5 18.3-40.8 40.8-40.8s40.8 18.3 40.8 40.8zm80.6-265.7c-22.5 0-40.8-18.3-40.8-40.8 0-22.5 18.3-40.8 40.8-40.8 22.5 0 40.8 18.3 40.8 40.8 0 22.4-18.3 40.8-40.8 40.8z"/></svg>
                    <h4 class="text-blue-900 font-semibold mb-3">Push to deploy</h4>
                    <p class="text-gray-700">
                        Deployments are made really easy. Simply push your code to Github, Gitlab or Bitbucket and we'll handle the rest.
                    </p>
                </div>
    
                <div class="w-full sm:w-1/2 lg:w-1/3 sm:px-6 mb-12">
                    <svg class="block h-8 mb-6 text-svg-green fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M376 192h-24v-46.7c0-52.7-42-96.5-94.7-97.3-53.4-.7-97.3 42.8-97.3 96v48h-24c-22 0-40 18-40 40v192c0 22 18 40 40 40h240c22 0 40-18 40-40V232c0-22-18-40-40-40zM270 316.8v68.8c0 7.5-5.8 14-13.3 14.4-8 .4-14.7-6-14.7-14v-69.2c-11.5-5.6-19.1-17.8-17.9-31.7 1.4-15.5 14.1-27.9 29.6-29 18.7-1.3 34.3 13.5 34.3 31.9 0 12.7-7.3 23.6-18 28.8zM324 192H188v-48c0-18.1 7.1-35.1 20-48s29.9-20 48-20 35.1 7.1 48 20 20 29.9 20 48v48z"/></svg>
                    <h4 class="text-blue-900 font-semibold mb-3">Free SSL Certificates</h4>
                    <p class="text-gray-700">
                        Secure your nesabox sites with free SSL certificates from Let's Encrypt. It only takes one click.
                    </p>
                </div>
    
                <div class="w-full sm:w-1/2 lg:w-1/3 sm:px-6 mb-12">
                    <svg class="block h-8 mb-6 text-svg-green fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M434.6 272.1c-22.4-1.2-41.6 13.2-48.2 32.9h-38.9l-28.4-85.4c-2.2-6.6-8.3-11-15.2-11h-.3c-7 .1-13.1 4.8-15 11.6l-44.5 155.3-52.3-314.1c-1.2-7.5-7.6-13.1-15.2-13.4-7.6-.3-14.3 4.8-16.2 12.1l-53 244.9H48c-8.8 0-16 7.2-16 16s7.2 16 16 16h72c7.3 0 13.8-5 15.5-12.1l37.4-182.2 51.3 307.9c1.2 7.4 7.4 12.9 14.9 13.3h.9c7.1 0 13.4-4.7 15.4-11.6l49.7-173.6 15.7 47.3c2.2 6.5 8.3 11 15.2 11h51.1c6.9 18 24.4 31 44.9 31 27 0 48.8-22.3 48-49.5-.8-24.8-20.7-45.1-45.4-46.4z"/></svg>
                    <h4 class="text-blue-900 font-semibold mb-3">Server processes</h4>
                    <p class="text-gray-700">
                        Manage your cron jobs and daemon processes right from your dashboard.
                    </p>
                </div>
    
                <div class="w-full sm:w-1/2 lg:w-1/3 sm:px-6 mb-12">
                    <svg class="block h-8 mb-6 text-svg-green fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 48C141.1 48 48 141.1 48 256s93.1 208 208 208 208-93.1 208-208S370.9 48 256 48zm106.5 150.5L228.8 332.8h-.1c-1.7 1.7-6.3 5.5-11.6 5.5-3.8 0-8.1-2.1-11.7-5.7l-56-56c-1.6-1.6-1.6-4.1 0-5.7l17.8-17.8c.8-.8 1.8-1.2 2.8-1.2 1 0 2 .4 2.8 1.2l44.4 44.4 122-122.9c.8-.8 1.8-1.2 2.8-1.2 1.1 0 2.1.4 2.8 1.2l17.5 18.1c1.8 1.7 1.8 4.2.2 5.8z"/></svg>
                    <h4 class="text-blue-900 font-semibold mb-3">Secure by default</h4>
                    <p class="text-gray-700">
                        Password authentication is disabled by default. All nesabox servers require SSH key authentication.
                    </p>
                </div>

                <div class="w-full sm:w-1/2 lg:w-1/3 sm:px-6 mb-12">
                    <svg class="block h-8 mb-6 text-svg-green fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M349.1 334.7c-11.2-4-29.5-4.2-37.6-7.3-5.6-2.2-14.5-4.6-17.4-8.1-2.9-3.5-2.9-28.5-2.9-28.5s7-6.6 9.9-14c2.9-7.3 4.8-27.5 4.8-27.5s6.6 2.8 9.2-10.4c2.2-11.4 6.4-17.4 5.3-25.8-1.2-8.4-5.8-6.4-5.8-6.4s5.8-8.5 5.8-37.4c0-29.8-22.5-59.1-64.6-59.1-42 0-64.7 29.4-64.7 59.1 0 28.9 5.7 37.4 5.7 37.4s-4.7-2-5.8 6.4c-1.2 8.4 3 14.4 5.3 25.8 2.6 13.3 9.2 10.4 9.2 10.4s1.9 20.1 4.8 27.5c2.9 7.4 9.9 14 9.9 14s0 25-2.9 28.5-11.8 5.9-17.4 8c-8 3.1-26.3 3.5-37.6 7.5-11.2 4-45.8 22.2-45.8 67.2h278.3c.1-45.1-34.5-63.3-45.7-67.3z"/><path d="M140 286s23.9-.8 33.4-9.3c-15.5-23.5-7.1-50.9-10.3-76.5-3.2-25.5-17.7-40.8-46.7-40.8h-.4c-28 0-43.1 15.2-46.3 40.8-3.2 25.5 5.7 56-10.2 76.5C69 285.3 93 285 93 285s1 14.4-1 16.8c-2 2.4-7.9 4.7-12 5.5-8.8 1.9-18.1 4.5-25.9 7.2-7.8 2.7-22.6 17.2-22.6 37.2h80.3c2.2-8 17.3-22.3 32-29.8 9-4.6 17.9-4.3 24.7-5.2 0 0 3.8-6-8.7-8.3 0 0-17.2-4.3-19.2-6.7-1.9-2.2-.6-15.7-.6-15.7zM372 286s-23.9-.8-33.4-9.3c15.5-23.5 7.1-50.9 10.3-76.5 3.2-25.5 17.7-40.8 46.7-40.8h.4c28 0 43.1 15.2 46.3 40.8 3.2 25.5-5.7 56 10.2 76.5-9.5 8.6-33.5 8.3-33.5 8.3s-1 14.4 1 16.8c2 2.4 7.9 4.7 12 5.5 8.8 1.9 18.1 4.5 25.9 7.2 7.8 2.7 22.6 17.2 22.6 37.2h-80.3c-2.2-8-17.3-22.3-32-29.8-9-4.6-17.9-4.3-24.7-5.2 0 0-3.8-6 8.7-8.3 0 0 17.2-4.3 19.2-6.7 1.9-2.2.6-15.7.6-15.7z"/></svg>
                    <h4 class="text-blue-900 font-semibold mb-3">
                        Teams
                        <span class="rounded-full bg-svg-green uppercase px-2 py-1 text-white text-xxs font-bold mr-3">Coming soon</span>
                    </h4>
                    <p class="text-gray-700">
                        Want to share your server with your teammates? No problem. Create unlimited teams and invite unlimited collaborators to your server dashboard.
                    </p>
                </div>

                <div class="w-full sm:w-1/2 lg:w-1/3 sm:px-6 mb-12">
                    <svg class="block h-8 mb-6 text-svg-green fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 48C141.1 48 48 141.1 48 256s93.1 208 208 208 208-93.1 208-208S370.9 48 256 48zM76 256c0-48.1 18.7-93.3 52.7-127.3S207.9 76 256 76c48.1 0 93.3 18.7 127.3 52.7 32.2 32.2 50.7 74.5 52.6 119.7-8.8-10.3-24.2-24-43.8-24-27.5 0-41.7 25.7-51 42.7-1.4 2.5-2.7 4.9-3.9 7-11.4 19.2-27.3 30-42.5 28.9-13.4-.9-24.8-11.2-32.2-28.8-9.2-22.1-29.1-45.8-52.9-49.2-11.3-1.6-28.1.8-44.7 21.4-3.2 4-6.9 9.4-11.1 15.6-10.4 15.5-26.2 38.8-38.1 40.8-17.3 2.8-30.9-7.5-36.4-12.3-2.2-11.2-3.3-22.8-3.3-34.5z"/></svg>
                    <h4 class="text-blue-900 font-semibold mb-3">
                        Server monitoring
                        <span class="rounded-full bg-svg-green uppercase px-2 py-1 text-white text-xxs font-bold mr-3">Coming soon</span>
                    </h4>
                    <p class="text-gray-700">
                       Monitor your server vitals, database and nginx from your dashboard in real time. Receive alerts when your custom server alarms are triggered.
                    </p>
                </div>

                <div class="w-full sm:w-1/2 lg:w-1/3 sm:px-6 mb-12">
                    <svg class="block h-8 mb-6 text-svg-green fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M460 120H52c-2.2 0-4-1.8-4-4V96c0-17.7 14.3-32 32-32h352c17.7 0 32 14.3 32 32v20c0 2.2-1.8 4-4 4zM440 146H72c-4.4 0-8 3.6-8 8v262c0 17.6 14.4 32 32 32h320c17.6 0 32-14.4 32-32V154c0-4.4-3.6-8-8-8zM306 288h-99.6c-7.1 0-13.4-5.2-14.3-12.3-1-8.5 5.6-15.7 13.9-15.7h99.6c7.1 0 13.4 5.2 14.3 12.3 1 8.4-5.6 15.7-13.9 15.7z"/></svg>
                    <h4 class="text-blue-900 font-semibold mb-3">
                        Realtime site logs
                        <span class="rounded-full bg-svg-green uppercase px-2 py-1 text-white text-xxs font-bold mr-3">Coming soon</span>
                    </h4>
                    <p class="text-gray-700">
                       Debug your application log files in realtime straight from your dashboard.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="w-full bg-gray-100">
        <div class="pt-6 lg:pt-16 pb-16 lg:pb-16 max-w-3xl mx-auto px-3 md:px-6">
            <h3 class="text-2xl md:text-3xl text-center font-medium text-blue-900 mb-3 lg:mb-8 leading-tight">
                Provision production ready servers in minutes
            </h3>

            <p class="text-center text-gray-700">Connect nesabox to any of our supported providers. We'll deploy and manage your servers seamlessly. You can also connect custom VPS from any provider of your choice.</p>
        </div>
    </div>

    <div class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
    <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>
    
    <div class="modal-container bg-white w-11/12 md:max-w-5xl mx-auto rounded shadow-lg z-50 overflow-y-auto">
      
      <div class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
        <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
          <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
        </svg>
        <span class="text-sm">(Esc)</span>
      </div>

      <!-- Add margin if you want to see some of the overlay behind the modal-->
      <div class="modal-content text-left">
        <div id='nesabox-demo' style="padding:56.25% 0 0 0;position:relative;">
            
        </div>
        <script src="https://player.vimeo.com/api/player.js"></script>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
    <script>
            var openmodal = document.querySelectorAll('.modal-open')

            for (var i = 0; i < openmodal.length; i++) {
                openmodal[i].addEventListener('click', function(event){
                    event.preventDefault()
                    toggleModal()
                })
            }
            
            const overlay = document.querySelector('.modal-overlay')
            overlay.addEventListener('click', toggleModal)
            
            var closemodal = document.querySelectorAll('.modal-close')

            for (var i = 0; i < closemodal.length; i++) {
                closemodal[i].addEventListener('click', toggleModal)
            }
            
            document.onkeydown = function(evt) {
                evt = evt || window.event
                var isEscape = false
                if ("key" in evt) {
                    isEscape = (evt.key === "Escape" || evt.key === "Esc")
                } else {
                    isEscape = (evt.keyCode === 27)
                }
                if (isEscape && document.body.classList.contains('modal-active')) {
                    toggleModal()
                }
            };
            
            
            function toggleModal () {
                var body = document.querySelector('body')
                var modal = document.querySelector('.modal')
                var modalContent = document.getElementById('nesabox-demo')

                if (body.classList.contains('modal-active')) {
                    modalContent.innerHTML = ''
                } else {
                    modalContent.innerHTML = '<iframe src="https://player.vimeo.com/video/360210218?color=6abfc3&title=0&byline=0&portrait=0&autoplay=1" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>'
                }
                
                modal.classList.toggle('opacity-0')
                modal.classList.toggle('pointer-events-none')
                body.classList.toggle('modal-active')
            }
    </script>
@endsection
