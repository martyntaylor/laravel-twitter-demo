<h3 class="font-bold text-xl mb-4">Following</h3>
<ul>
    @forelse (current_user()->follows as $user)
        <li class="mb-4">
            <div>
                <a href="{{ $user->path() }}" class=" flex items-center text-sm">
                    <img src="{{ $user->avatar }}" alt="{{ $user->name }}" class="rounded-full mr-2">
                    {{ $user->name }}
                </a>
            </div>
        </li>
    @empty
        <li>No friends yet!</li>
    @endforelse
</ul>
