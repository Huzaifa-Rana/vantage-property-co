@extends('layouts.app')

@section('title', 'Exclusive Real Estate')

@section('content')
<!-- Hero Slider Section -->
<section class="relative h-[90vh] overflow-hidden group">
    <!-- Swiper -->
    <div class="swiper heroSwiper h-full w-full">
        <div class="swiper-wrapper">
            <!-- Slide 1 -->
            <div class="swiper-slide relative">
                <img src="{{ asset('images/hero.png') }}" alt="Elite Villa" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-b from-slate-900/60 via-slate-900/40 to-slate-900/80"></div>
                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="text-center px-6 max-w-7xl mx-auto">
                        <span class="inline-block px-4 py-1.5 mb-6 glass text-white rounded-full text-sm font-semibold tracking-wider uppercase animate-pulse">
                            Redefining Modern Luxury
                        </span>
                        <h1 class="text-5xl md:text-8xl font-black text-white mb-6 leading-[1.05]">
                            Find Your <span class="text-primary italic">Perfect</span> <br>Living Space
                        </h1>
                        <p class="text-xl text-slate-200 mb-12 max-w-2xl mx-auto font-light">
                            Discover a world of architectural excellence and unparalleled comfort.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="swiper-slide relative">
                <img src="{{ asset('images/hero2.png') }}" alt="Penthouse View" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-b from-slate-900/60 via-slate-900/40 to-slate-900/80"></div>
                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="text-center px-6 max-w-7xl mx-auto">
                        <span class="inline-block px-4 py-1.5 mb-6 glass text-white rounded-full text-sm font-semibold tracking-wider uppercase">
                            Urban Elite Living
                        </span>
                        <h1 class="text-5xl md:text-8xl font-black text-white mb-6 leading-[1.05]">
                            Experience <span class="text-primary">Elegance</span> <br>At Every Turn
                        </h1>
                        <p class="text-xl text-slate-200 mb-12 max-w-2xl mx-auto font-light">
                            Premium city living with views that take your breath away.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Slide 3 -->
            <div class="swiper-slide relative">
                <img src="{{ asset('images/hero3.png') }}" alt="Beachfront Mansion" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-b from-slate-900/60 via-slate-900/40 to-slate-900/80"></div>
                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="text-center px-6 max-w-7xl mx-auto">
                        <span class="inline-block px-4 py-1.5 mb-6 glass text-white rounded-full text-sm font-semibold tracking-wider uppercase">
                            Serene Coastal Retreats
                        </span>
                        <h1 class="text-5xl md:text-8xl font-black text-white mb-6 leading-[1.05]">
                            Your <span class="text-primary italic">Exclusive</span> <br>Island Paradise
                        </h1>
                        <p class="text-xl text-slate-200 mb-12 max-w-2xl mx-auto font-light">
                            Untouched nature meets billionaire-class architecture.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Swiper Navigation -->
        <div class="swiper-button-next !text-white !w-12 !h-12 glass rounded-xl !right-8 opacity-0 group-hover:opacity-100 transition-all duration-300 hover:bg-primary/20 flex items-center justify-center after:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </div>
        <div class="swiper-button-prev !text-white !w-12 !h-12 glass rounded-xl !left-8 opacity-0 group-hover:opacity-100 transition-all duration-300 hover:bg-primary/20 flex items-center justify-center after:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
        </div>
    </div>

</section>

<!-- Enhanced Search Bar Area -->
<div class="relative z-30 px-6 -mt-16">
    <style>
        .custom-select {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%2394a3b8' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e");
            background-position: right 0.5rem center;
            background-repeat: no-repeat;
            background-size: 1.5em 1.5em;
            padding-right: 2.5rem;
        }
    </style>
    <div class="max-w-6xl mx-auto glass p-3 rounded-[2.5rem] shadow-2xl premium-shadow border-white/40">
        <form action="{{ route('properties.index') }}" method="GET" class="flex flex-col lg:flex-row items-center gap-2">
            <!-- Location -->
            <div class="flex-1 w-full lg:w-auto px-6 py-3 border-r border-slate-200/50">
                <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-1 ml-1">Location</label>
                <div class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                    </svg>
                    <input type="text" name="city" placeholder="Which city?" class="w-full bg-transparent border-none text-slate-800 placeholder:text-slate-400 focus:ring-0 font-bold text-lg p-0">
                </div>
            </div>
            <!-- Property Type -->
            <div class="flex-1 w-full lg:w-auto px-6 py-3 border-r border-slate-200/50">
                <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-1 ml-1">Property Type</label>
                <div class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>
                    <select name="type" class="custom-select w-full bg-transparent border-none text-slate-800 focus:ring-0 font-bold text-lg p-0 cursor-pointer appearance-none">
                        <option value="">Any Type</option>
                        @foreach($categories as $cat)
                            <option value="{{ $cat->slug }}">{{ $cat->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <!-- Transaction Type -->
            <div class="flex-1 w-full lg:w-auto px-6 py-3 border-r border-slate-200/50">
                <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-1 ml-1">Listing Type</label>
                <div class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <select name="listing_type" class="custom-select w-full bg-transparent border-none text-slate-800 focus:ring-0 font-bold text-lg p-0 cursor-pointer appearance-none">
                        <option value="">For Sale / Rent</option>
                        <option value="sale">For Sale</option>
                        <option value="rent">For Rent</option>
                    </select>
                </div>
            </div>
            <!-- Button -->
            <div class="p-2 w-full lg:w-auto">
                <button type="submit" class="w-full lg:w-auto bg-primary text-white px-12 py-5 rounded-[2rem] font-black hover:bg-blue-600 transition-all shadow-xl hover:-translate-y-1 flex items-center justify-center gap-3 group">
                    <span class="text-xl">Search</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </button>
            </div>
        </form>
    </div>
</div>

<div class="h-24"></div> <!-- Spacer for section below -->

<!-- Stats Section -->
<section class="py-24 bg-white relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-12 text-center">
            <div data-aos="fade-up">
                <h3 class="text-5xl font-black text-slate-900 mb-2 tabular-nums">12k+</h3>
                <p class="text-slate-500 font-bold uppercase tracking-widest text-xs">World-class Properties</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="100">
                <h3 class="text-5xl font-black text-slate-900 mb-2 tabular-nums">8k+</h3>
                <p class="text-slate-500 font-bold uppercase tracking-widest text-xs">Successful Closings</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="200">
                <h3 class="text-5xl font-black text-slate-900 mb-2 tabular-nums">150+</h3>
                <p class="text-slate-500 font-bold uppercase tracking-widest text-xs">Portfolio Managers</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="300">
                <h3 class="text-5xl font-black text-slate-900 mb-2 tabular-nums">25+</h3>
                <p class="text-slate-500 font-bold uppercase tracking-widest text-xs">Industry Excellence</p>
            </div>
        </div>
    </div>
</section>

<!-- Elite Locations -->
<section class="py-24 bg-white relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="text-primary font-black uppercase tracking-widest text-sm mb-4 block">Global Footprint</span>
            <h2 class="text-4xl md:text-5xl font-black text-slate-900 leading-tight">Elite <span class="text-gradient">Locations</span></h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="group relative h-80 rounded-[3rem] overflow-hidden shadow-xl" data-aos="zoom-in">
                <img src="{{ asset('images/hero.png') }}" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 to-transparent"></div>
                <div class="absolute bottom-8 left-8">
                    <h4 class="text-white text-2xl font-black">Dubai</h4>
                    <p class="text-primary font-bold text-xs uppercase tracking-widest">Skyline Residences</p>
                </div>
            </div>
            <div class="group relative h-80 rounded-[3rem] overflow-hidden shadow-xl" data-aos="zoom-in" data-aos-delay="100">
                <img src="{{ asset('images/hero2.png') }}" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 to-transparent"></div>
                <div class="absolute bottom-8 left-8">
                    <h4 class="text-white text-2xl font-black">Manhattan</h4>
                    <p class="text-primary font-bold text-xs uppercase tracking-widest">Urban Elegance</p>
                </div>
            </div>
            <div class="group relative h-80 rounded-[3rem] overflow-hidden shadow-xl" data-aos="zoom-in" data-aos-delay="200">
                <img src="{{ asset('images/hero3.png') }}" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 to-transparent"></div>
                <div class="absolute bottom-8 left-8">
                    <h4 class="text-white text-2xl font-black">London</h4>
                    <p class="text-primary font-bold text-xs uppercase tracking-widest">Historic Luxury</p>
                </div>
            </div>
            <div class="group relative h-80 rounded-[3rem] overflow-hidden shadow-xl" data-aos="zoom-in" data-aos-delay="300">
                <img src="{{ asset('images/maldives.png') }}" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 to-transparent"></div>
                <div class="absolute bottom-8 left-8">
                    <h4 class="text-white text-2xl font-black">Maldives</h4>
                    <p class="text-primary font-bold text-xs uppercase tracking-widest">Coastal Masterpieces</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Brand Partners -->
<section class="py-20 bg-slate-50 border-y border-slate-100">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex flex-wrap justify-center items-center gap-12 lg:gap-24 opacity-40 grayscale">
            <span class="text-2xl font-black text-slate-400 italic">ARCHITECTURAL DIGEST</span>
            <span class="text-2xl font-black text-slate-400 italic">VOGUE LIVING</span>
            <span class="text-2xl font-black text-slate-400 italic">FORBES ESTATES</span>
            <span class="text-2xl font-black text-slate-400 italic">SOTHEBY'S HUB</span>
        </div>
    </div>
</section>


<!-- Featured Properties -->
<section class="py-24 bg-slate-50 relative">
    <!-- Decorative element -->
    <div class="absolute top-0 right-0 w-1/4 h-full bg-gradient-to-l from-primary/5 to-transparent pointer-events-none"></div>
    
    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="flex flex-col md:flex-row items-end justify-between mb-16 gap-6">
            <div class="max-w-xl" data-aos="fade-right">
                <span class="text-primary font-black uppercase tracking-widest text-sm mb-4 block">Recommended Selection</span>
                <h2 class="text-4xl md:text-6xl font-black text-slate-900 leading-tight">Featured <br>Elite <span class="text-gradient">Residences</span></h2>
            </div>
            <a href="{{ route('properties.index') }}" class="group flex items-center gap-3 font-black text-slate-900 hover:text-primary transition-all text-lg" data-aos="fade-left">
                View Entire Collection
                <div class="w-12 h-12 rounded-full border-2 border-slate-200 flex items-center justify-center group-hover:border-primary group-hover:translate-x-2 transition-all">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </div>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            @foreach($featuredProperties as $property)
            <div class="group bg-white rounded-[3rem] overflow-hidden premium-shadow hover:-translate-y-3 transition-all duration-700" data-aos="fade-up" data-aos-delay="{{ $loop->index * 150 }}">
                <div class="relative h-80 overflow-hidden">
                    <img src="{{ asset($property->image_main ?? 'images/hero.png') }}" alt="{{ $property->title }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-1000">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="absolute top-6 left-6">
                        <span class="bg-white/95 backdrop-blur-md px-5 py-2 rounded-2xl text-[10px] font-black text-slate-900 uppercase tracking-widest shadow-xl">
                            {{ $property->category->name }}
                        </span>
                    </div>
                    <div class="absolute bottom-6 left-6">
                        <div class="bg-white px-6 py-3 rounded-2xl text-slate-900 font-extrabold shadow-2xl flex flex-col">
                            <span class="text-slate-400 text-[10px] uppercase font-black mb-1 leading-none">Price</span>
                            <span class="text-xl">${{ number_format($property->price) }}@if($property->type == 'rent')<span class="text-xs font-medium">/mo</span>@endif</span>
                        </div>
                    </div>
                </div>
                <div class="p-10">
                    <h3 class="text-2xl font-black text-slate-900 mb-3 group-hover:text-primary transition-colors leading-tight">
                        <a href="{{ route('properties.show', $property->slug) }}">{{ $property->title }}</a>
                    </h3>
                    <p class="text-slate-400 font-medium mb-8 flex items-center gap-2">
                        <div class="w-6 h-6 rounded-full bg-primary/10 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        {{ $property->city }}, {{ $property->address }}
                    </p>
                    <div class="flex items-center gap-6 pt-8 border-t border-slate-50 text-slate-600">
                        <div class="flex items-center gap-2">
                            <div class="w-8 h-8 rounded-xl bg-slate-50 flex items-center justify-center">
                                <span class="text-slate-900 font-black text-xs">{{ $property->beds }}</span>
                            </div>
                            <span class="text-[10px] font-black uppercase text-slate-400 tracking-widest">Beds</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <div class="w-8 h-8 rounded-xl bg-slate-50 flex items-center justify-center">
                                <span class="text-slate-900 font-black text-xs">{{ $property->baths }}</span>
                            </div>
                            <span class="text-[10px] font-black uppercase text-slate-400 tracking-widest">Baths</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <div class="w-8 h-8 rounded-xl bg-slate-50 flex items-center justify-center">
                                <span class="text-slate-900 font-black text-[9px]">{{ number_format($property->sqft/1000, 1) }}k</span>
                            </div>
                            <span class="text-[10px] font-black uppercase text-slate-400 tracking-widest">SqFt</span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="py-24 bg-white overflow-hidden relative">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
            <div data-aos="fade-right">
                <span class="text-primary font-black uppercase tracking-widest text-sm mb-4 block">Our Excellence</span>
                <h2 class="text-4xl md:text-5xl font-black text-slate-900 leading-tight mb-8">Elevating Your <br><span class="text-primary italic">Property Journey</span></h2>
                <div class="space-y-8">
                    <div class="flex gap-6">
                        <div class="w-14 h-14 shrink-0 rounded-2xl bg-blue-50 flex items-center justify-center text-primary shadow-inner">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-xl font-black text-slate-900 mb-2">Unmatched Expertise</h4>
                            <p class="text-slate-500">With over 15 years in elite markets, we provide insights you won't find anywhere else.</p>
                        </div>
                    </div>
                    <div class="flex gap-6">
                        <div class="w-14 h-14 shrink-0 rounded-2xl bg-blue-50 flex items-center justify-center text-primary shadow-inner">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-xl font-black text-slate-900 mb-2">Elite Technology</h4>
                            <p class="text-slate-500">AI-driven matching and high-definition immersive tours for every listing.</p>
                        </div>
                    </div>
                    <div class="flex gap-6">
                        <div class="w-14 h-14 shrink-0 rounded-2xl bg-blue-50 flex items-center justify-center text-primary shadow-inner">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-xl font-black text-slate-900 mb-2">Global Network</h4>
                            <p class="text-slate-500">Connecting buyers and sellers across the world's most desired postcodes.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="relative" data-aos="fade-left">
                <div class="aspect-[4/5] rounded-[4rem] overflow-hidden shadow-2xl skew-y-2">
                    <img src="{{ asset('images/hero3.png') }}" class="w-full h-full object-cover">
                </div>
                <div class="absolute -top-10 -right-10 w-48 h-48 bg-primary rounded-full blur-[80px] opacity-20"></div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="py-24 bg-slate-900 text-white relative overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <svg class="h-full w-full" viewBox="0 0 100 100" preserveAspectRatio="none">
            <path d="M0 100 C 20 0 50 0 100 100" fill="none" stroke="white" stroke-width="0.1" />
        </svg>
    </div>
    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="text-primary font-black uppercase tracking-widest text-sm mb-4 block">Echoes of Excellence</span>
            <h2 class="text-4xl md:text-5xl font-black text-white leading-tight">What Our Elite <br>Clients Say</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white/5 backdrop-blur-xl p-10 rounded-[3.5rem] border border-white/10 shadow-2xl" data-aos="fade-up">
                <div class="flex gap-1 mb-6 text-primary">
                    @for($i=0; $i<5; $i++)
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-current" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    @endfor
                </div>
                <p class="text-slate-100 text-lg leading-relaxed italic mb-10">"The attention to detail in their listings and the professionalism of the agents is simply unparalleled. Vantage Properties made my international relocation seamless."</p>
                <div class="flex items-center gap-5">
                    <img src="{{ asset('images/reviewers/reviewer1.png') }}" class="w-14 h-14 rounded-2xl object-cover ring-2 ring-primary shadow-lg">
                    <div>
                        <h5 class="font-bold text-white text-lg">Alexander Sterling</h5>
                        <p class="text-[10px] text-primary uppercase font-black tracking-widest">CEO, Global Tech</p>
                    </div>
                </div>
            </div>
            <div class="bg-white/5 backdrop-blur-xl p-10 rounded-[3.5rem] border border-white/10 shadow-2xl" data-aos="fade-up" data-aos-delay="100">
                <div class="flex gap-1 mb-6 text-primary">
                    @for($i=0; $i<5; $i++)
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-current" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    @endfor
                </div>
                <p class="text-slate-100 text-lg leading-relaxed italic mb-10">"Vantage Properties' focus on high-end architectural masterpieces is what sets them apart. They truly understand what a luxury lifestyle requires."</p>
                <div class="flex items-center gap-5">
                    <img src="{{ asset('images/reviewers/reviewer2.png') }}" class="w-14 h-14 rounded-2xl object-cover ring-2 ring-primary shadow-lg">
                    <div>
                        <h5 class="font-bold text-white text-lg">Isabella Montclaire</h5>
                        <p class="text-[10px] text-primary uppercase font-black tracking-widest">Interior Architect</p>
                    </div>
                </div>
            </div>
            <div class="bg-white/5 backdrop-blur-xl p-10 rounded-[3.5rem] border border-white/10 shadow-2xl" data-aos="fade-up" data-aos-delay="200">
                <div class="flex gap-1 mb-6 text-primary">
                    @for($i=0; $i<5; $i++)
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-current" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    @endfor
                </div>
                <p class="text-slate-100 text-lg leading-relaxed italic mb-10">"I've worked with many agencies globally, but the discretion and network that Vantage offers are unparalleled. They are the only ones I trust."</p>
                <div class="flex items-center gap-5">
                    <img src="{{ asset('images/reviewers/reviewer3.png') }}" class="w-14 h-14 rounded-2xl object-cover ring-2 ring-primary shadow-lg">
                    <div>
                        <h5 class="font-bold text-white text-lg">David Chen</h5>
                        <p class="text-[10px] text-primary uppercase font-black tracking-widest">Venture Capitalist</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Market Insights -->
<section class="py-24 bg-white relative">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex flex-col md:flex-row items-end justify-between mb-16 gap-6">
            <div class="max-w-xl" data-aos="fade-right">
                <span class="text-primary font-black uppercase tracking-widest text-sm mb-4 block">Knowledge Is Power</span>
                <h2 class="text-4xl md:text-5xl font-black text-slate-900 leading-tight">Latest Market <br><span class="text-gradient">Insights</span></h2>
            </div>
            <a href="#" class="text-slate-900 font-black hover:text-primary transition-colors flex items-center gap-2" data-aos="fade-left">
                Read All Articles
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            <div class="group cursor-pointer" data-aos="fade-up">
                <div class="relative h-64 rounded-[2.5rem] overflow-hidden mb-6 shadow-lg">
                    <img src="{{ asset('images/hero2.png') }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute top-6 left-6">
                        <span class="bg-white/90 backdrop-blur-md px-4 py-1.5 rounded-xl text-[10px] font-black uppercase tracking-tighter">Market Trends</span>
                    </div>
                </div>
                <h4 class="text-xl font-black text-slate-900 mb-3 group-hover:text-primary transition-colors">The Rise of Sustainable Luxury in 2026</h4>
                <p class="text-slate-500 text-sm leading-relaxed line-clamp-2">How eco-conscious architecture is becoming the new standard for billionaire-class residences globally.</p>
            </div>
            <div class="group cursor-pointer" data-aos="fade-up" data-aos-delay="100">
                <div class="relative h-64 rounded-[2.5rem] overflow-hidden mb-6 shadow-lg">
                    <img src="{{ asset('images/hero.png') }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute top-6 left-6">
                        <span class="bg-white/90 backdrop-blur-md px-4 py-1.5 rounded-xl text-[10px] font-black uppercase tracking-tighter">Investment</span>
                    </div>
                </div>
                <h4 class="text-xl font-black text-slate-900 mb-3 group-hover:text-primary transition-colors">Digital Twins: Future of Property Viewing</h4>
                <p class="text-slate-500 text-sm leading-relaxed line-clamp-2">Why VR and digital twin technology are closing more ultra-high-net-worth deals than ever before.</p>
            </div>
            <div class="group cursor-pointer" data-aos="fade-up" data-aos-delay="200">
                <div class="relative h-64 rounded-[2.5rem] overflow-hidden mb-6 shadow-lg">
                    <img src="{{ asset('images/hero3.png') }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute top-6 left-6">
                        <span class="bg-white/90 backdrop-blur-md px-4 py-1.5 rounded-xl text-[10px] font-black uppercase tracking-tighter">Architecture</span>
                    </div>
                </div>
                <h4 class="text-xl font-black text-slate-900 mb-3 group-hover:text-primary transition-colors">Top 10 Penthouse Views in Global Hubs</h4>
                <p class="text-slate-500 text-sm leading-relaxed line-clamp-2">A curated look at the most breathtaking horizons available for the discerning eye this season.</p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-24 bg-white relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-6">
        <div class="glass-dark p-16 rounded-[4rem] text-center relative overflow-hidden border-none shadow-2xl bg-slate-900 text-white">
            <div class="absolute inset-0 bg-gradient-to-br from-primary/20 to-transparent"></div>
            <div class="relative z-10" data-aos="zoom-in">
                <h2 class="text-4xl md:text-6xl font-black mb-8 leading-tight">Ready to Find Your <br><span class="text-primary italic">Vantage Point?</span></h2>
                <p class="text-slate-400 text-lg mb-12 max-w-2xl mx-auto">Experience the intersection of luxury and technology. Your dream property is just a consultation away.</p>
                <div class="flex flex-wrap justify-center gap-6">
                    <a href="{{ route('properties.index') }}" class="bg-primary text-white px-12 py-5 rounded-[2rem] font-bold hover:bg-blue-600 transition-all shadow-xl shadow-primary/30">Explore Properties</a>
                    <a href="{{ route('about') }}" class="bg-white/10 backdrop-blur-md text-white border border-white/20 px-12 py-5 rounded-[2rem] font-bold hover:bg-white/20 transition-all">Contact Advisor</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Initialization Script for Swiper -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const swiper = new Swiper('.heroSwiper', {
            loop: true,
            effect: 'fade',
            speed: 1500,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    });
</script>
@endsection
