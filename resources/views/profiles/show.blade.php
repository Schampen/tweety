<x-app>
    <div>
        <header class="mb-6 relative">
            <div class="relative">
                <img src="/images/banner.jpg" alt="Banner" class="mb-2 rounded-lg" style="max-height:200px; width:100%;">
                <img src="/images/korby.jpg" alt="Korby" class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2" width="150" style="left:50%">
            </div>
                
        
            <div class="flex justify-between items-center mb-6">
                <div>
                    <h2 class="font-bold text-2xl">{{ $user->name }}</h2>
                    <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
                </div>
                <div class="flex">
                    <a href="" class="rounded-full border border-gray-300 py-2 px-4 text-xs mr-2">Edit Profile</a>
                    <x-follow-button :user="$user"></x-follow-button>
                </div>
            </div>
            <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id dolorum corporis optio consequuntur nihil rerum eaque nisi! Minus, praesentium corrupti! Iste provident quo blanditiis, vero expedita commodi pariatur ipsum ex.</p>
        </header>
        
        @include('_timeline', ['tweets' => $user->tweets])
    </div>
</x-app>
