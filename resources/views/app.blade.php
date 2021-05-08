<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            <div class="container mx-auto">
                <header class="py-6 mb-8">
                    <img src="/images/logo.svg">
                </header>

                <main class="flex">
                    <aside class="w-1/5">
                        <section class="mb-8">
                            <h5 class="uppercase font-bold mb-3">The brand</h5>

                            <ul class="list-unstyled">
                                <li class="text-sm leading-loose-2"><router-link class="black-font" to="/" exact>Logo</router-link></li>
                                <li class="text-sm leading-loose-2"><router-link class="black-font" :to="{ name:'logoSymbol' }">Logo Symbol</router-link></li>
                                <li class="text-sm leading-loose-2"><router-link class="black-font" :to="{ name:'colors' }">Colors</router-link></li>
                                <li class="text-sm leading-loose-2"><router-link class="black-font" :to="{ name:'typography' }">Typography</router-link></li>
                            </ul>
                        </section>

                        <section>
                            <h5 class="uppercase font-bold mb-3">Doodle</h5>

                            <ul class="list-unstyled">
                                <li class="text-sm leading-loose-2"><router-link class="black-font" to="/mascot">Mascot</router-link></li>
                                <li class="text-sm leading-loose-2"><router-link class="black-font" :to="{ name:'illustrations' }">Illustrations</router-link></li>
                                <li class="text-sm leading-loose-2"><router-link class="black-font" :to="{ name:'loaders-and-animations' }">Loaders & Animations</router-link></li>
                                <li class="text-sm leading-loose-2"><router-link class="black-font" :to="{ name:'wallpapers' }">Wallpapers</router-link></li>
                            </ul>
                        </section>
                    </aside>

                    <div class="primary flex-1">
                        <router-view></router-view>
                    </div>
                </main>
            </div>
        </div>
    <script src="/js/app.js"></script>
    </body>
</html>
