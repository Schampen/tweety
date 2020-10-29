<h3 class="font-bold text-xl mb-4">Following</h3>

<ul>
    @forelse (current_user()->follows as $user)
        <li class="mb-4">
            <div>
                <a href="{{ route('profile', $user) }}" class="flex items-center text-sm">
                    <img src="{{ $user->avatar }}" alt="profile picture" class="rounded-full mr-3" style="width:40px;height:40px;">
                    {{ $user->name }}
                </a>
            </div>
        </li>
    @empty
        <p class="p-4">No follows yet.</p>
    @endforelse
</ul>