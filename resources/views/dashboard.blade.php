{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div>
</x-app-layout> --}}

@extends('layouts.main')

@section('content')
    <section class="cart container mt-2 my-3 py-5">

        <div class="container mt-2 text-center">
            <h4>Your profile</h4>

            <p style="margin-bottom: 10px">{{ Auth::user()->name }}</p>
            <p>{{ Auth::user()->email }}</p>

            <form action="{{route('logout')}}" method="post">
                @csrf
                <input type="submit" class="btn btn-danger" value="Logout" />
            </form>

            <div class="mt-3" style="margin-top: 20px">
                <a href="{{route('user_orders')}}" class="btn btn-primary">Your Orders</a>
            </div>

        </div>

    </section>
@endsection
