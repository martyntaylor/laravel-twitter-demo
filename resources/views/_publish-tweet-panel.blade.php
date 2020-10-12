<div class="border border-blue-400 rounded-lg py-6 px-8 mb-8">
    <form method="POST" action="/tweets">
        @csrf
        <textarea name="body" class="w-full" required placeholder="What's up doc?"></textarea>
        <hr class="my-4">
        <footer class="flex justify-between">
            <img src="{{ current_user()->avatar }}" alt="{{ auth()->user()->name }}" class="rounded-full mr-2">

            <button type="submit" class="bg-blue-500 rounded-lg shadow p-2 text-white">Tweet-a-roo!</button>
        </footer>

    </form>

    @error('body')
        <p class="text-red-400 text-sm mt-2">{{ $message }}</p>
    @enderror
</div>
