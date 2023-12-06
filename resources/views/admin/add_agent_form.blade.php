<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __(' Admin Dashboard') }}
        </h2>
    </x-slot>


    <div>
        <div class="p-6 text-gray-900">
                        {{ __("Add a new Agent") }}
        </div>
        <form action="{{url('/addagent')}}" method="POST">
            @csrf
            <div>
                <label>Agent Name</label>
                <input type="text" name="name" required="">
            </div>
            <div>
                <label>Email</label>
                <input type="email" name="email" required="">
            </div>
            <div>
                <label>Password</label>
                <input type="password" name="password" required="">
            </div>
            <div>
                <input type="submit" class="button">
            </div>


        </form>
    </div>
</x-app-layout>