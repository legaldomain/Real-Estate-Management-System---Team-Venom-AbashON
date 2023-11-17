<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __(' Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in as administrator!") }}
                </div>

                <div>
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
                            <input type="submit">
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

#<h1>Admin Dashboard</h1>