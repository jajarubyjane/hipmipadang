@extends('admin.layout')

@section('title', 'Dashboard')

@section('content')
    <section class="p-4">
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-2xl font-bold">Dashboard</h1>
            <hr class="border-t border-gray-400">
        </div>

            <!-- Your Dashboard Content Goes Here -->

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="bg-white p-4 rounded-md shadow-md">
                <h4 class="text-lg">Selamat datang di ruang admin HIPMI Padang!</h4>
            </div>
        </div>
    </section>
@endsection
