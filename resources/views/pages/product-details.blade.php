{{-- resources/views/pages/product-details.blade.php --}}

@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <h1 class="text-4xl font-bold text-gray-900 mb-6">
            {{ $product->name }}
        </h1>
        
        {{-- Aqui virá o componente de Organismo (Organism) com o layout completo do produto --}}

        <div class="bg-white p-6 shadow rounded-lg">
            <p class="text-3xl font-extrabold text-indigo-600 mb-4">
                R$ {{ number_format($product->price, 2, ',', '.') }}
            </p>
            
            <p class="text-gray-700 leading-relaxed mb-6">
                {{ $product->description }}
            </p>

            <a href="{{ route('home') }}" class="text-indigo-600 hover:text-indigo-800 font-semibold">
                &larr; Voltar para a Home
            </a>
        </div>
    </div>
@endsection