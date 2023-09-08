<x-app-layout>
    <x-slot name="header">
        <div class="fixed-top">
            <x-navigation/>
        </div>
    </x-slot>
    <section class="mx-2" id="featured-post">
        <h1><b>Read our most featured posts</b></h1>
        <x-carousel/>
    </section>
    <section class="mx-2 mt-4" id="further-reading">
        <h1><b>For your further reading</b></h1>
        <div class="row row-cols-2 mt-2 gx-5 gy-2">
            <div class="col-sm-6 col-md-3">
                <x-further-reading-card/>
            </div>
            <div class="col-sm-6 col-md-3">
                <x-further-reading-card/>
            </div>
            <div class="col-sm-6 col-md-3">
                <x-further-reading-card/>
            </div>
            <div class="col-sm-6 col-md-3">
                <x-further-reading-card/>
            </div>
        </div>
    </section>
    <x-slot name="footer">

        <x-footer/>

    </x-slot>
</x-app-layout>
