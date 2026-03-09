@extends('layouts.app')

@section('title', $property->title)

@section('content')
<section class="pt-32 pb-20 px-6">
    <div class="max-w-7xl mx-auto">
        <!-- Breadcrumb & Header -->
        <div class="mb-12" data-aos="fade-down">
            <nav class="flex items-center gap-2 text-sm text-slate-500 mb-6">
                <a href="{{ route('home') }}" class="hover:text-primary">Home</a>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
                <a href="{{ route('properties.index') }}" class="hover:text-primary">Properties</a>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
                <span class="text-slate-900 font-medium">{{ $property->title }}</span>
            </nav>
            <div class="flex flex-col md:flex-row justify-between items-start md:items-end gap-6">
                <div>
                    <span class="bg-primary/10 text-primary px-4 py-1.5 rounded-full text-xs font-bold uppercase mb-4 inline-block">
                        {{ $property->category->name }}
                    </span>
                    <h1 class="text-4xl md:text-6xl font-bold text-slate-900 leading-tight mb-4">{{ $property->title }}</h1>
                    <p class="text-slate-500 flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        {{ $property->address }}, {{ $property->city }}, {{ $property->state }}
                    </p>
                </div>
                <div class="text-right">
                    <span class="text-slate-400 text-sm font-bold uppercase block mb-1">List Price</span>
                    <span class="text-4xl md:text-5xl font-extrabold text-slate-900">
                        ${{ number_format($property->price) }}@if($property->type == 'rent')<span class="text-lg font-light">/mo</span>@endif
                    </span>
                </div>
            </div>
        </div>

        <!-- Main Gallery -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 md:h-[600px] mb-20" data-aos="fade-up">
            <div class="md:col-span-3 rounded-[3rem] overflow-hidden group shadow-2xl">
                <img src="{{ asset($property->image_main ?? 'images/hero.png') }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-1000">
            </div>
            <div class="hidden md:grid grid-rows-2 gap-4">
                <div class="rounded-[2rem] overflow-hidden shadow-xl">
                    <img src="{{ asset('images/hero.png') }}" class="w-full h-full object-cover">
                </div>
                <div class="rounded-[2rem] overflow-hidden shadow-xl relative group">
                    <img src="{{ asset('images/villa.png') }}" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-slate-900/40 flex items-center justify-center text-white font-bold text-xl group-hover:bg-slate-900/60 transition-colors cursor-pointer">
                        +12 Photos
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-16">
            <!-- Left: Description & Features -->
            <div class="lg:col-span-2">
                <div class="glass rounded-[3rem] p-10 md:p-16 mb-12" data-aos="fade-up">
                    <h2 class="text-3xl font-bold text-slate-900 mb-8 pb-8 border-b border-slate-100">About This Property</h2>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mb-12">
                        <div class="bg-slate-50 p-6 rounded-3xl text-center">
                            <span class="block text-2xl font-bold text-slate-900">{{ $property->beds }}</span>
                            <span class="text-slate-500 text-xs font-bold uppercase">Bedrooms</span>
                        </div>
                        <div class="bg-slate-50 p-6 rounded-3xl text-center">
                            <span class="block text-2xl font-bold text-slate-900">{{ $property->baths }}</span>
                            <span class="text-slate-500 text-xs font-bold uppercase">Bathrooms</span>
                        </div>
                        <div class="bg-slate-50 p-6 rounded-3xl text-center">
                            <span class="block text-2xl font-bold text-slate-900">{{ number_format($property->sqft) }}</span>
                            <span class="text-slate-500 text-xs font-bold uppercase">Square Ft</span>
                        </div>
                        <div class="bg-slate-50 p-6 rounded-3xl text-center">
                            <span class="block text-2xl font-bold text-slate-900 uppercase tracking-tighter">{{ $property->type }}</span>
                            <span class="text-slate-500 text-xs font-bold uppercase">Transaction</span>
                        </div>
                    </div>
                    <div class="prose prose-slate max-w-none text-slate-600 leading-relaxed text-lg">
                        {{ $property->description }}
                    </div>
                </div>

                <!-- Features -->
                <div class="p-10" data-aos="fade-up">
                    <h2 class="text-3xl font-bold text-slate-900 mb-8">Key Features</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        @php $features = ['Private Elevator', 'Smart Home Integration', 'Rooftop Terrace', 'Chef\'s Kitchen', 'Infinity Pool', '24/7 Security']; @endphp
                        @foreach($features as $feature)
                        <div class="flex items-center gap-4 p-4 rounded-2xl bg-white premium-shadow">
                            <div class="w-10 h-10 rounded-full bg-green-100 flex items-center justify-center text-green-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <span class="font-bold text-slate-700">{{ $feature }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Right: Agent & Contact -->
            <div class="space-y-8">
                <div class="glass p-8 rounded-[3rem] shadow-2xl border-primary/10" data-aos="fade-left">
                    <div class="flex items-center gap-6 mb-8">
                        <div class="w-16 h-16 rounded-2xl bg-slate-200 overflow-hidden shadow-lg border-2 border-white">
                            <div class="w-full h-full flex items-center justify-center bg-primary text-white font-bold text-xl">
                                {{ substr($property->agent->name, 0, 2) }}
                            </div>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold text-slate-900">{{ $property->agent->name }}</h4>
                            <span class="text-primary font-bold text-xs uppercase tracking-widest">Elite Portfolio Manager</span>
                        </div>
                    </div>
                    <p class="text-slate-500 text-sm mb-8 leading-relaxed italic">"{{ $property->agent->bio }}"</p>
                    
                    <form class="space-y-4">
                        <input type="text" placeholder="Your Name" class="w-full bg-slate-50 border-none rounded-2xl px-6 py-4 focus:ring-2 focus:ring-primary shadow-inner">
                        <input type="email" placeholder="Email Address" class="w-full bg-slate-50 border-none rounded-2xl px-6 py-4 focus:ring-2 focus:ring-primary shadow-inner">
                        <textarea rows="4" placeholder="I'm interested in this property..." class="w-full bg-slate-50 border-none rounded-2xl px-6 py-4 focus:ring-2 focus:ring-primary shadow-inner"></textarea>
                        <button type="button" class="w-full bg-slate-900 text-white py-5 rounded-2xl font-bold hover:bg-slate-800 transition-all shadow-xl hover:-translate-y-1">
                            Schedule a Tour
                        </button>
                    </form>
                </div>

                <div class="bg-primary rounded-[3rem] p-8 text-white text-center" data-aos="fade-left" data-aos-delay="100">
                    <h5 class="text-xl font-bold mb-2">Need Help?</h5>
                    <p class="text-blue-100 text-sm mb-6">Call our 24/7 concierge for elite buyers</p>
                    <a href="tel:{{ $property->agent->phone }}" class="text-2xl font-black block hover:scale-105 transition-transform">{{ $property->agent->phone }}</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
