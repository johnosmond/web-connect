<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Customers') }}
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">

                <div class="flex justify-between items-center mb-6">
                    <h1 class="text-2xl font-bold text-gray-700 dark:text-gray-200">Customers</h1>
                    <a href="{{ route('customers.create') }}"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Add New Customer
                    </a>
                </div>

                @if (session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4"
                        role="alert">
                        {{ session('success') }}
                    </div>
                @endif

                <!-- Customers List -->
                <div class="space-y-4">
                    <!-- Header -->
                    <div class="grid grid-cols-1 sm:grid-cols-5 gap-4 px-3 sm:px-6 py-3 bg-gray-50 dark:bg-gray-700 text-xs sm:text-sm font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                        <div>Name</div>
                        <div>Phone</div>
                        <div>Address</div>
                        <div>Website</div>
                        <div class="text-right">Actions</div>
                    </div>
                    
                    <!-- Customers -->
                    @foreach ($customers as $customer)
                        <div class="grid grid-cols-1 sm:grid-cols-5 gap-4 px-3 sm:px-6 py-4 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
                            <div class="text-sm font-medium text-gray-900 dark:text-gray-200">
                                {{ $customer->customer_name }}
                            </div>
                            <div class="text-sm text-gray-900 dark:text-gray-200">
                                {{ $customer->customer_phone }}
                            </div>
                            <div class="text-sm text-gray-900 dark:text-gray-200">
                                {{ $customer->address }}
                            </div>
                            <div class="text-sm text-gray-900 dark:text-gray-200 break-words">
                                {{ $customer->website }}
                            </div>
                            <div class="text-sm font-medium text-right">
                                <a href="{{ route('customers.edit', $customer) }}" class="text-indigo-600 dark:text-indigo-300 hover:text-indigo-900">
                                    Edit
                                </a>
                                <!-- Add more actions like delete, view, etc. here if needed -->
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
