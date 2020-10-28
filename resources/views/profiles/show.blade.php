@extends('layouts.app')

@section('content')
    <header class="mb-6 relative">
        <img src="/images/banner.jpg" alt="Banner" class="mb-2 rounded-lg" style="max-height:200px; width:100%;">

        <div class="flex justify-between items-center mb-4">
            <div>
                <h2 class="font-bold text-2xl">{{ $user->name }}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>
            <div>
                <a href="" class="rounded-full border border-gray-300 py-2 px-4 text-xs mr-2">Edit Profile</a>
                <a href="" class="bg-blue-500 rounded-full shadow py-2 px-4 text-white text-xs">Follow Me</a>
            </div>
        </div>
        <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id dolorum corporis optio consequuntur nihil rerum eaque nisi! Minus, praesentium corrupti! Iste provident quo blanditiis, vero expedita commodi pariatur ipsum ex.</p>
        <img src="/images/korby.jpg" alt="Korby" class="rounded-full mr-2 absolute" style="width:150px; left: calc(50% - 75px); top:38%">
    </header>

    @include('_timeline', ['tweets' => $user->tweets])
@endsection
