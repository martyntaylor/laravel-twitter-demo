<div class="border border-blue-400 rounded-lg py-6 px-8 mb-8">
    <form method="POST" action="/tweets">
        @csrf
        <textarea name="body" class="w-full" required placeholder="What's up doc?" required autofocus></textarea>
        <hr class="my-4">
        <footer class="flex justify-between  items-center">
            <img src="{{ current_user()->avatar }}" alt="{{ auth()->user()->name }}" class="rounded-full mr-2" width="50">

            <button type="submit" class="bg-blue-500 hover:bg-blue-600 rounded-lg shadow px-10 text-sm text-white h-10">Tweet-a-roo!</button>
        </footer>

    </form>

    @error('body')
        <p class="text-red-400 text-sm mt-2">{{ $message }}</p>
    @enderror
</div>
