{{-- resources/views/components/molecules/product-card.blade.php --}}

@props(['title', 'price', 'description', 'slug'])

<div class="bg-white rounded-lg shadow-lg overflow-hidden">
    
    {{-- Imagem/Placeholder --}}
    <div class="p-4 flex items-center justify-center bg-gray-200">
        {{-- Você pode adicionar uma imagem aqui, se quiser, no futuro --}}
        [Image Placeholder]
    </div>

    <div class="p-6">
        {{-- Título --}}
        <h3 class="text-xl font-bold text-gray-900 mb-2">{{ $title }}</h3>
        
        {{-- Descrição --}}
        <p class="text-gray-600 text-sm mb-4">{{ $description }}</p>
        
        <div class="flex justify-between items-center mt-4">
            
            {{-- Preço --}}
            <span class="text-2xl font-extrabold text-indigo-600">{{ $price }}</span>
            
            {{-- Botão/Link de Detalhes --}}
            {{-- Usamos a tag <a> para navegação e aplicamos as classes do Atom diretamente --}}
            <a href="{{ route('product.show', $slug) }}" 
               class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:border-indigo-900 focus:ring ring-indigo-300 disabled:opacity-25 transition ease-in-out duration-150 ml-4">
                Ver Detalhes
            </a>
        </div>
    </div>
</div>