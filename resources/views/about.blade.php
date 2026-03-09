@extends('layouts.app')

@section('title', 'About Vantage Properties')

@section('content')
<section class="relative py-32 overflow-hidden bg-slate-900">
    <div class="absolute inset-0 opacity-20">
        <img src="{{ asset('images/hero2.png') }}" class="w-full h-full object-cover grayscale">
    </div>
    <div class="relative z-10 max-w-7xl mx-auto px-6 text-center" data-aos="fade-up">
        <span class="inline-block px-4 py-1.5 mb-6 glass text-white rounded-full text-xs font-black tracking-widest uppercase">The Vantage Story</span>
        <h1 class="text-5xl md:text-8xl font-black text-white mb-8 leading-tight">Elevating Global <br><span class="text-primary italic">Real Estate</span> Standards</h1>
    </div>
</section>

<section class="py-24 px-6">
    <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
        <div class="relative" data-aos="fade-right">
            <div class="aspect-square rounded-[4rem] overflow-hidden shadow-2xl">
                <img src="{{ asset('images/hero.png') }}" class="w-full h-full object-cover">
            </div>
            <div class="absolute -bottom-10 -right-10 w-64 h-64 glass rounded-[3rem] p-8 shadow-2xl flex flex-col justify-center text-center items-center">
                <span class="text-4xl font-black text-primary mb-1">15+</span>
                <span class="text-slate-400 text-[10px] uppercase font-black tracking-widest">Years of Prestige</span>
            </div>
        </div>
        <div data-aos="fade-left">
            <h2 class="text-4xl md:text-5xl font-black text-slate-900 mb-8 leading-tight">We Don't Just Sell Homes, We Curate <span class="text-gradient">Lifestyles</span></h2>
            <p class="text-slate-500 text-lg mb-8 leading-relaxed">
                Founded on the principles of discretion, architecture, and uncompromising quality, Vantage Properties has grown from a boutique agency into a global powerhouse in high-end real estate.
            </p>
            <p class="text-slate-500 text-lg mb-12 leading-relaxed">
                Our approach combines cutting-edge technology with century-old relationship management practices. We believe that every transaction is a partnership, and every home is a masterpiece.
            </p>
            <div class="grid grid-cols-2 gap-8">
                <div>
                    <h4 class="text-slate-900 font-black mb-2 text-xl italic">Our Mission</h4>
                    <p class="text-slate-500 text-sm">To bridge the gap between architectural marvels and elite visionaries.</p>
                </div>
                <div>
                    <h4 class="text-slate-900 font-black mb-2 text-xl italic">Our Vision</h4>
                    <p class="text-slate-500 text-sm">To be the undisputed global leader in premium real estate experiences.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-24 bg-slate-900 text-white overflow-hidden relative">
    <div class="absolute top-0 left-0 w-96 h-96 bg-primary/20 rounded-full blur-[120px] -translate-x-1/2 -translate-y-1/2"></div>
    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-16">
            <div data-aos="fade-up">
                <div class="w-16 h-16 rounded-3xl bg-primary flex items-center justify-center mb-8 shadow-lg shadow-primary/40">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>
                <h3 class="text-2xl font-black mb-4">Unrivaled Discretion</h3>
                <p class="text-slate-400 leading-relaxed">Your privacy is our highest priority. We handle high-profile transactions with absolute confidentiality.</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="100">
                <div class="w-16 h-16 rounded-3xl bg-primary flex items-center justify-center mb-8 shadow-lg shadow-primary/40">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <h3 class="text-2xl font-black mb-4">Elite Tech Stack</h3>
                <p class="text-slate-400 leading-relaxed">AI-driven market analysis and immersive VR tours ensure you're always ahead of the market.</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="200">
                <div class="w-16 h-16 rounded-3xl bg-primary flex items-center justify-center mb-8 shadow-lg shadow-primary/40">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                    </svg>
                </div>
                <h3 class="text-2xl font-black mb-4">Global Reach</h3>
                <p class="text-slate-400 leading-relaxed">With offices in London, Dubai, and New York, our network spans the world's most desirable locations.</p>
            </div>
        </div>
    </div>
</section>
@endsection
