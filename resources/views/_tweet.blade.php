<div class="flex p-4 border-b border-b-gray-400">
    <div class="mr-2 flex-shrink-0">
    <a href="{{ route('profile', $tweet->user) }}">
            <img src="/images/korby.jpg" alt="Korby" class="rounded-full mr-3" style="width:50px;height:50px;">                        
        </a>  
    </div>

    <div>
        <a href="{{ route('profile', $tweet->user) }}">
            <h5 class="font-bold mb-4">{{ $tweet->user->name }}</h5>
        </a>
        
        <p class="text-sm">
            {{ $tweet->body }}
        </p>
    </div>
</div>
