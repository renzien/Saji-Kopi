@extends('layouts.main')
@section('title', 'Landing Page')
@section('container')
    {{-- Hero Section --}}
    <section id="home" class="py-20 px-4">
        <div class="container mx-auto flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 mb-10 md:mb-0">
                <h2 class="text-4xl md:text-5xl font-bold text-amber-900 mb-6">Take a Sip, Relax, Repeat</h2>
                <p class="text-lg text-amber-800 mb-8">Handmade coffee with a unique flavour in every cup. Our beans are ethically sourced and roasted to perfection</p>
                <div class="flex space-x-4">
                    <a href="#menu" class="bg-amber-700 hover:bg-amber-800 text-white px-6 py-3 rounded-full font-medium transition">View Menu</a>
                    <a href="#contact" class="border-2 border-amber-700 text-amber-700 hover:bg-amber-50 px-6 py-3 rounded-full font-medium transition">Find Us</a>
                </div>
            </div>
            <div class="md:w-1/2 relative">
                <div class="bg-amber-100 rounded-3xl p-8 w-full max-w-md mx-auto image-container">
                    <img src="https://images.unsplash.com/photo-1517705008128-361805f42e86?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" alt="Gambar Kopi" class="rounded-2xl shadow-lg w-full">
                    {{-- Doodle Elements --}}
                    <div class="doodle-corner doodle-top-left">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" fill="#c7a17a">
                            <path d="M30,50 Q50,30 70,50 T90,50" stroke="#c7a17a" fill="none" stroke-width="4" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <div class="doodle-corner doodle-top-right">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" fill="#c7a17a">
                            <circle cx="50" cy="50" r="15" fill="none" stroke="#c7a17a" stroke-width="4"/>
                            <circle cx="50" cy="50" r="5" fill="#c7a17a"/>
                        </svg>
                    </div>
                    <div class="doodle-corner doodle-bottom-left">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" fill="#c7a17a">
                            <path d="M20,50 L80,50 M50,20 L50,80" stroke="#c7a17a" stroke-width="4"/>
                        </svg>
                    </div>
                    <div class="doodle-corner doodle-bottom-right">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" fill="#c7a17a">
                            <path d="M30,30 L70,70 M70,30 L30,70" stroke="#c7a17a" stroke-width="4"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Menu Section --}}
    <section id="menu" class="py-16 px-4 bg-white bg-opacity-80">
        <div class="container mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-amber-900 mb-4">Our Menu</h2>
                <p class="text-amber-800 max-w-2xl mx-auto">From classic Espresso to Creative Seasonal Specials.</p>
            </div>

            {{-- Menu Tabs --}}
            <div class="flex justify-center mb-8">
                <div class="inline-flex rounded-full p-1 bg-amber-100">
                    <button id="coffee-tab" class="px-6 py-2 rounded-full font-medium bg-amber-700 text-white">Coffee</button>
                    <button id="side-tab" class="px-6 py-2 rounded-full font-medium text-amber-800 hover:bg-amber-200 transition">Side-Dishes</button>
                </div>
            </div>

            {{-- Coffee Menu --}}
            <div id="coffee-menu" class="mb-16">
                <h3 class="text-xl font-semibold text-amber-900 mb-6 ml-4">Coffee Selection</h3>
                <div class="relative">
                    <button id="coffee-prev" class="absolute left-0 top-1/2 -translate-y-1/2 bg-white p-2 rounded-full shadow-md z-10 -ml-2 hover:bg-amber-100 transition">
                        <i class="fas fa-chevron-left text-amber-700"></i>
                    </button>
                    <div id="coffee-carousel" class="carousel flex overflow-x-auto space-x-6 px-2 py-4 scroll-smooth" style="scrollbar-width: none;">
                        {{-- Nanti pake JS --}}
                    </div>
                    <button id="coffee-next" class="absolute right-0 top-1/2 -translate-y-1/2 bg-white p-2 rounded-full shadow-md z-10 -mr-2 hover:bg-amber-100 transition">
                        <i class="fas fa-chevron-right text-amber-700"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>
@endsection
