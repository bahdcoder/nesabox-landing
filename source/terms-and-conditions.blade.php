
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
                    Nesabox Terms and conditions
                </h1>

            </div>

            {{-- <p class="mt-8 lg:mt-16 text-xl text-gray-700">
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
            </p> --}}

            <h3 class='text-gray-700'>1. Terms</h3>
            <p class='pt-6'>By accessing the website at <a href="http://nesabox.com">http://nesabox.com</a>, you are agreeing to be bound by these terms of service, all applicable laws and regulations, and agree that you are responsible for compliance with any applicable local laws. If you do not agree with any of these terms, you are prohibited from using or accessing this site. The materials contained in this website are protected by applicable copyright and trademark law.</p>
            <h3>2. Use License</h3>
            <ol type="a">
            <li  class="mt-3">Permission is granted to temporarily download one copy of the materials (information or software) on Nesabox's website for personal, non-commercial transitory viewing only. This is the grant of a license, not a transfer of title, and under this license you may not:
                <ol>
                    <li class="mt-3">- Modify or copy the materials;</li>
                    <li class="mt-3">- Use the materials for any commercial purpose, or for any public display (commercial or non-commercial);</li>
                    <li class="mt-3">- Attempt to decompile or reverse engineer any software contained on Nesabox's website;</li>
                    <li class="mt-3">- Remove any copyright or other proprietary notations from the materials; or</li>
                    <li class="mt-3">- Transfer the materials to another person or "mirror" the materials on any other server.</li>
                </ol>
            </li>
            <li  class="mt-3">This license shall automatically terminate if you violate any of these restrictions and may be terminated by Nesabox at any time. Upon terminating your viewing of these materials or upon the termination of this license, you must destroy any downloaded materials in your possession whether in electronic or printed format.</li>
            </ol>
            <h3 class='text-gray-700'>3. Disclaimer</h3>
            <ul>
            <li class="mt-3">The materials on Nesabox's website are provided on an 'as is' basis. Nesabox makes no warranties, expressed or implied, and hereby disclaims and negates all other warranties including, without limitation, implied warranties or conditions of merchantability, fitness for a particular purpose, or non-infringement of intellectual property or other violation of rights.</li>
            <li class="mt-3">Further, Nesabox does not warrant or make any representations concerning the accuracy, likely results, or reliability of the use of the materials on its website or otherwise relating to such materials or on any sites linked to this site.</li>
            </ul>
            <h3 class='text-gray-700'>4. Limitations</h3>
            <p class='pt-6'>In no event shall Nesabox or its suppliers be liable for any damages (including, without limitation, damages for loss of data or profit, or due to business interruption) arising out of the use or inability to use the materials on Nesabox's website, even if Nesabox or a Nesabox authorized representative has been notified orally or in writing of the possibility of such damage. Because some jurisdictions do not allow limitations on implied warranties, or limitations of liability for consequential or incidental damages, these limitations may not apply to you.</p>
            <h3>5. Accuracy of materials</h3>
            <p class='pt-6'>The materials appearing on Nesabox's website could include technical, typographical, or photographic errors. Nesabox does not warrant that any of the materials on its website are accurate, complete or current. Nesabox may make changes to the materials contained on its website at any time without notice. However Nesabox does not make any commitment to update the materials.</p>
            <h3>6. Links</h3>
            <p class='pt-6'>Nesabox has not reviewed all of the sites linked to its website and is not responsible for the contents of any such linked site. The inclusion of any link does not imply endorsement by Nesabox of the site. Use of any such linked website is at the user's own risk.</p>
            <h3>7. Modifications</h3>
            <p class='pt-6'>Nesabox may revise these terms of service for its website at any time without notice. By using this website you are agreeing to be bound by the then current version of these terms of service.</p>
            <h3>8. Governing Law</h3>
            <p class='pt-6'>These terms and conditions are governed by and construed in accordance with the laws of Lagos, Nigeria and you irrevocably submit to the exclusive jurisdiction of the courts in that State or location.</p>
        </div>
    </div>
@endsection

@section('scripts')

@endsection
