@extends('layouts.app')

@section('title', 'Meet Our Agents')

@section('content')
<section class="bg-slate-900 py-32 px-6">
    <div class="max-w-7xl mx-auto text-center" data-aos="fade-down">
        <h1 class="text-4xl md:text-6xl font-black text-white mb-6">World-Class <span class="text-primary italic">Advisors</span></h1>
        <p class="text-slate-400 text-lg max-w-2xl mx-auto">Our agents are selected for their deep market knowledge, professional integrity, and commitment to excellence.</p>
    </div>
</section>

<section class="py-24 px-6 relative z-10 -mt-20">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            @foreach($agents as $agent)
            <div class="group bg-white rounded-[3rem] overflow-hidden premium-shadow hover:-translate-y-3 transition-all duration-700" data-aos="fade-up" data-aos-delay="{{ $loop->index * 150 }}">
                <div class="relative h-96 overflow-hidden">
                    <div class="w-full h-full flex items-center justify-center bg-slate-100 group-hover:scale-110 transition-transform duration-1000">
                        @if($agent->profile_image)
                            <img src="{{ asset($agent->profile_image) }}" alt="{{ $agent->name }}" class="w-full h-full object-cover">
                        @else
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-32 w-32 text-slate-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        @endif
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 to-transparent"></div>
                    <div class="absolute bottom-8 left-8 right-8">
                        <h3 class="text-2xl font-black text-white mb-1">{{ $agent->name }}</h3>
                        <p class="text-primary font-bold text-xs uppercase tracking-widest">Elite Portfolio Manager</p>
                    </div>
                </div>
                <div class="p-10">
                    <p class="text-slate-500 mb-8 leading-relaxed italic line-clamp-3">"{{ $agent->bio }}"</p>
                    <div class="flex items-center justify-between pt-8 border-t border-slate-50">
                        <div class="text-slate-900 font-black">
                            {{ $agent->properties->count() }} <span class="text-slate-400 text-[10px] uppercase block leading-none">Listings</span>
                        </div>
                        <div class="flex gap-2">
                            <a href="mailto:{{ $agent->email }}" class="w-12 h-12 rounded-2xl bg-slate-50 flex items-center justify-center text-slate-400 hover:bg-primary hover:text-white transition-all">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </a>
                            <a href="tel:{{ $agent->phone }}" class="w-12 h-12 rounded-2xl bg-primary flex items-center justify-center text-white shadow-lg hover:shadow-primary/50 transition-all">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="py-24 bg-slate-50">
    <div class="max-w-5xl mx-auto px-6 text-center">
        <h2 class="text-4xl font-black text-slate-900 mb-8" data-aos="fade-up">Ready to List Your Property?</h2>
        <p class="text-slate-500 text-lg mb-12" data-aos="fade-up" data-aos-delay="100">Join elite homeowners who trust Vantage Properties to showcase their assets to the world's most qualified buyers.</p>
        <div class="flex flex-wrap justify-center gap-4" data-aos="fade-up" data-aos-delay="200">
            <a href="#" class="bg-slate-900 text-white px-12 py-5 rounded-[2rem] font-bold hover:bg-slate-800 transition-all shadow-xl">Register as Agent</a>
            <a href="{{ route('about') }}" class="bg-white text-slate-900 border border-slate-200 px-12 py-5 rounded-[2rem] font-bold hover:bg-slate-50 transition-all">Learn Our Process</a>
        </div>
    </div>
</section>
@endsection
