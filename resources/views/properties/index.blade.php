@extends('layouts.app')

@section('title', 'Property Portfolio')

@section('content')
<section class="bg-slate-900 py-32 px-6">
    <div class="max-w-7xl mx-auto text-center" data-aos="fade-down">
        <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">Discover Your <span class="text-primary italic">Next</span> Space</h1>
        <p class="text-slate-400 text-lg max-w-2xl mx-auto">Browse through our curated selection of properties. From modern city apartments to serene suburban villas.</p>
    </div>
</section>

<!-- Filter & Listings -->
<section class="py-20 px-6 -mt-16 relative z-10">
    <div class="max-w-7xl mx-auto">
        <!-- Filter Bar -->
        <div class="glass shadow-2xl rounded-3xl p-8 mb-16" data-aos="fade-up">
            <form action="{{ route('properties.index') }}" method="GET" class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <label class="block text-xs font-bold text-slate-500 uppercase mb-2 ml-1">Search Keywords</label>
                    <input type="text" name="search" placeholder="Modern, pool, etc..." class="w-full bg-slate-50 border-none rounded-xl px-4 py-3 focus:ring-2 focus:ring-primary">
                </div>
                <div>
                    <label class="block text-xs font-bold text-slate-500 uppercase mb-2 ml-1">Category</label>
                    <select name="category" class="w-full bg-slate-50 border-none rounded-xl px-4 py-3 focus:ring-2 focus:ring-primary cursor-pointer">
                        <option value="">All Categories</option>
                        @foreach($categories as $cat)
                            <option value="{{ $cat->slug }}">{{ $cat->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label class="block text-xs font-bold text-slate-500 uppercase mb-2 ml-1">Price Range</label>
                    <select name="price" class="w-full bg-slate-50 border-none rounded-xl px-4 py-3 focus:ring-2 focus:ring-primary cursor-pointer">
                        <option value="">Any Price</option>
                        <option value="0-500000">Under $500k</option>
                        <option value="500000-1000000">$500k - $1M</option>
                        <option value="1000000-5000000">$1M - $5M</option>
                        <option value="5000000+">$5M+</option>
                    </select>
                </div>
                <div class="flex items-end">
                    <button type="submit" class="w-full bg-primary text-white py-3.5 rounded-xl font-bold hover:bg-blue-600 transition-all shadow-lg flex items-center justify-center gap-2">
                        Apply Filters
                    </button>
                </div>
            </form>
        </div>

        <!-- Property Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($properties as $property)
            <div class="group bg-white rounded-[2rem] overflow-hidden premium-shadow hover:-translate-y-2 transition-all duration-500" data-aos="fade-up" data-aos-delay="{{ $loop->index * 50 }}">
                <div class="relative h-64 overflow-hidden">
                    <img src="{{ asset($property->image_main ?? 'images/hero.png') }}" alt="{{ $property->title }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute top-6 left-6 flex gap-2">
                        <span class="bg-white/90 backdrop-blur-md px-4 py-1.5 rounded-full text-[10px] font-bold text-slate-900 uppercase">
                            {{ $property->category->name }}
                        </span>
                        @if($property->is_featured)
                        <span class="bg-amber-400 text-white px-4 py-1.5 rounded-full text-[10px] font-bold uppercase shadow-lg">
                            Featured
                        </span>
                        @endif
                    </div>
                </div>
                <div class="p-8">
                    <h3 class="text-xl font-bold text-slate-900 mb-2 group-hover:text-primary transition-colors">
                        <a href="{{ route('properties.show', $property->slug) }}">{{ $property->title }}</a>
                    </h3>
                    <p class="text-slate-500 text-sm mb-6 flex items-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        {{ $property->city }}
                    </p>
                    <div class="flex items-center gap-6 pb-6 border-b border-slate-100 text-slate-600 mb-6">
                        <span class="flex items-center gap-1.5 text-sm">
                            <i class="font-bold text-slate-900">{{ $property->beds }}</i> beds
                        </span>
                        <span class="flex items-center gap-1.5 text-sm">
                            <i class="font-bold text-slate-900">{{ $property->baths }}</i> baths
                        </span>
                        <span class="flex items-center gap-1.5 text-sm">
                            <i class="font-bold text-slate-900">{{ number_format($property->sqft) }}</i> ft²
                        </span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-2xl font-bold text-slate-900">
                            ${{ number_format($property->price) }}
                        </span>
                        <a href="{{ route('properties.show', $property->slug) }}" class="text-primary font-bold text-sm hover:underline">View Details</a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-span-full py-20 text-center">
                <div class="bg-slate-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 text-slate-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 9.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-slate-900 mb-2">No properties found</h3>
                <p class="text-slate-500">Try adjusting your filters or search terms.</p>
            </div>
            @endforelse
        </div>

        <!-- Pagination -->
        <div class="mt-20">
            {{ $properties->links() }}
        </div>
    </div>
</section>
@endsection
