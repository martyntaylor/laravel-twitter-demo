<x-master>

    <section class="px-8">
        <main class="container mx-auto">
            <div class="lg:flex lg:justify-center">
                <div class="lg:w-32">
                    @include('_sidebar-links')
                </div>

                <div class="lg:flex-1 lg:mx-10" style="max-width:700px;">
                    {{ $slot }}
                </div>

                <div class="bg-gray-200 border border-gray-300 rounded-lg py-4 px-6">
                    @include('friends-list')
                </div>
            </div>

        </main>
    </section>

</x-master>
