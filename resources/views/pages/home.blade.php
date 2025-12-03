{{-- resources/views/pages/home.blade.php --}}

@extends('layouts.app')

@section('content')
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold text-gray-900">
                Lançamentos em Hardware
            </h1>
        </div>
    </header>

<main>
        <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
            <div class="px-4 py-6 sm:px-0">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                    
                    {{-- LOOP DINÂMICO AQUI --}}
                    @foreach ($products as $product)
                        <x-molecules.product-card 
                            title="{{ $product->name }}" 
                            price="R$ {{ number_format($product->price, 2, ',', '.') }}" 
                            description="{{ $product->description }}" 
                            slug="{{ $product->slug }}"
                        />
                    @endforeach
                    {{-- FIM DO LOOP --}}

                </div>
            </div>
        </div>
    </main>
@endsection