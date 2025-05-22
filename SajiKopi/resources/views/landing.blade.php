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

            {{-- Side-Dish Menu (Hidden by Default) --}}
            <div id="side-menu" class="hidden">
                <h3 class="text-xl font-semibold text-amber-900 mb-6 ml-4">Side Dishes</h3>
                <div class="relative">
                    <button id="side-prev" class="absolute left-0 top-1/2 -translate-y-1/2 bg-white p-2 rounded-full shadow-md z-10 -ml-2 hover:bg-amber-100 transition">
                        <i class="fas fa-chevron-left text-amber-700"></i>
                    </button>
                    <div id="side-carousel" class="carousel flex overflow-x-auto space-x-6 px-2 py-4 scroll-smooth" style="scrollbar-width: none;">
                        {{-- Nanti pake JS --}}
                    </div>
                    <button id="side-next" class="absolute right-0 top-1/2 -translate-y-1/2 bg-white p-2 rounded-full shadow-md z-10 -mr-2 hover:bg-amber-100 transition">
                        <i class="fas fa-chevron-right text-amber-700"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>

    {{-- Gallery Section --}}
    <section id="gallery" class="py-16 px-4">
        <div class="container mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-amber-900 mb-4">Our Gallery</h2>
            </div>
        </div>
    </section>

    {{-- Cart Modal --}}
    <div id="cart-modal" class="fixed inset-0 bg-black/20 z-50 hidden flex items-center justify-center p-4">
        <div class="bg-white rounded-2xl w-full max-w-md max-h-[90vh] overflow-y-auto">
            <div class="p-6">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-xl font-bold text-amber-900">Your Order</h3>
                    <button id="close-cart" class="text-amber-700 hover:text-amber-900">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                
                <div id="cart-items" class="mb-6 space-y-4">
                    <!-- Cart items will be added here by JavaScript -->
                    <p id="empty-cart-message" class="text-center text-amber-800 py-4">Your cart is empty</p>
                </div>
                
                <div class="border-t border-amber-200 pt-4 mb-6">
                    <div class="flex justify-between mb-2">
                        <span class="font-medium">Subtotal</span>
                        <span id="cart-subtotal" class="font-medium">$0.00</span>
                    </div>
                    <div class="flex justify-between mb-2">
                        <span>Tax</span>
                        <span id="cart-tax">$0.00</span>
                    </div>
                    <div class="flex justify-between font-bold text-lg">
                        <span>Total</span>
                        <span id="cart-total">$0.00</span>
                    </div>
                </div>
                
                <button id="checkout-button" class="bg-amber-700 hover:bg-amber-800 text-white px-6 py-3 rounded-full font-medium transition w-full disabled:opacity-50" disabled>
                    Proceed to Checkout
                </button>
            </div>
        </div>
    </div>

    {{-- Script JS --}}
     <script>
        // Menu Data
        const coffeeItems = [
            { id: 1, name: "Espresso", description: "Strong and concentrated coffee", price: 3.50, image: "https://images.unsplash.com/photo-1597318181409-cf64d0b5d8a2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" },
            { id: 2, name: "Americano", description: "Espresso with hot water", price: 4.00, image: "https://images.unsplash.com/photo-1597318181409-cf64d0b5d8a2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" },
            { id: 3, name: "Cappuccino", description: "Espresso with steamed milk foam", price: 4.50, image: "https://images.unsplash.com/photo-1597318181409-cf64d0b5d8a2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" },
            { id: 4, name: "Latte", description: "Espresso with lots of steamed milk", price: 4.75, image: "https://images.unsplash.com/photo-1597318181409-cf64d0b5d8a2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" },
            { id: 5, name: "Mocha", description: "Espresso with chocolate and milk", price: 5.00, image: "https://images.unsplash.com/photo-1597318181409-cf64d0b5d8a2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" },
            { id: 6, name: "Flat White", description: "Espresso with velvety microfoam", price: 4.75, image: "https://images.unsplash.com/photo-1597318181409-cf64d0b5d8a2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" },
            { id: 7, name: "Macchiato", description: "Espresso with a dollop of foam", price: 4.25, image: "https://images.unsplash.com/photo-1597318181409-cf64d0b5d8a2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" },
            { id: 8, name: "Cold Brew", description: "Slow-steeped iced coffee", price: 4.50, image: "https://images.unsplash.com/photo-1597318181409-cf64d0b5d8a2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" }
        ];

        const sideItems = [
            { id: 101, name: "Croissant", description: "Buttery French pastry", price: 3.50, image: "https://images.unsplash.com/photo-1623334044303-241021148842?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" },
            { id: 102, name: "Blueberry Muffin", description: "Fresh blueberries in every bite", price: 3.75, image: "https://images.unsplash.com/photo-1623334044303-241021148842?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" },
            { id: 103, name: "Avocado Toast", description: "Sourdough with smashed avocado", price: 6.50, image: "https://images.unsplash.com/photo-1623334044303-241021148842?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" },
            { id: 104, name: "Bagel with Cream Cheese", description: "Freshly baked with schmear", price: 4.50, image: "https://images.unsplash.com/photo-1623334044303-241021148842?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" },
            { id: 105, name: "Banana Bread", description: "Moist and flavorful", price: 4.00, image: "https://images.unsplash.com/photo-1623334044303-241021148842?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" },
            { id: 106, name: "Yogurt Parfait", description: "Greek yogurt with granola & berries", price: 5.50, image: "https://images.unsplash.com/photo-1623334044303-241021148842?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" }
        ];

        // Cart State
        let cart = [];

        // DOM Elements
        const coffeeCarousel = document.getElementById('coffee-carousel');
        const sideCarousel = document.getElementById('side-carousel');
        const coffeeTab = document.getElementById('coffee-tab');
        const sideTab = document.getElementById('side-tab');
        const coffeeMenu = document.getElementById('coffee-menu');
        const sideMenu = document.getElementById('side-menu');
        const cartButton = document.getElementById('cart-button');
        const cartModal = document.getElementById('cart-modal');
        const closeCart = document.getElementById('close-cart');
        const cartItems = document.getElementById('cart-items');
        const emptyCartMessage = document.getElementById('empty-cart-message');
        const cartCount = document.getElementById('cart-count');
        const cartSubtotal = document.getElementById('cart-subtotal');
        const cartTax = document.getElementById('cart-tax');
        const cartTotal = document.getElementById('cart-total');
        const checkoutButton = document.getElementById('checkout-button');
        const coffeePrev = document.getElementById('coffee-prev');
        const coffeeNext = document.getElementById('coffee-next');
        const sidePrev = document.getElementById('side-prev');
        const sideNext = document.getElementById('side-next');

        // Initialize Menu
        function initializeMenu() {
            // Coffee Items
            coffeeItems.forEach(item => {
                const itemElement = document.createElement('div');
                itemElement.className = 'menu-item flex-shrink-0 w-64 bg-white rounded-2xl overflow-hidden shadow-md';
                itemElement.innerHTML = `
                    <img src="${item.image}" alt="${item.name}" class="w-full h-40 object-cover">
                    <div class="p-4">
                        <h4 class="font-bold text-lg text-amber-900 mb-1">${item.name}</h4>
                        <p class="text-sm text-amber-800 mb-3">${item.description}</p>
                        <div class="flex justify-between items-center">
                            <span class="font-bold text-amber-700">$${item.price.toFixed(2)}</span>
                            <button class="add-to-cart px-3 py-1 rounded-full border border-amber-700 text-amber-700 text-sm font-medium" data-id="${item.id}" data-name="${item.name}" data-price="${item.price}">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                `;
                coffeeCarousel.appendChild(itemElement);
            });

            // Side Items
            sideItems.forEach(item => {
                const itemElement = document.createElement('div');
                itemElement.className = 'menu-item flex-shrink-0 w-64 bg-white rounded-2xl overflow-hidden shadow-md';
                itemElement.innerHTML = `
                    <img src="${item.image}" alt="${item.name}" class="w-full h-40 object-cover">
                    <div class="p-4">
                        <h4 class="font-bold text-lg text-amber-900 mb-1">${item.name}</h4>
                        <p class="text-sm text-amber-800 mb-3">${item.description}</p>
                        <div class="flex justify-between items-center">
                            <span class="font-bold text-amber-700">$${item.price.toFixed(2)}</span>
                            <button class="add-to-cart px-3 py-1 rounded-full border border-amber-700 text-amber-700 text-sm font-medium" data-id="${item.id}" data-name="${item.name}" data-price="${item.price}">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                `;
                sideCarousel.appendChild(itemElement);
            });
        }

        // Tab Switching
        coffeeTab.addEventListener('click', () => {
            coffeeTab.classList.add('bg-amber-700', 'text-white');
            coffeeTab.classList.remove('text-amber-800', 'hover:bg-amber-200');
            sideTab.classList.remove('bg-amber-700', 'text-white');
            sideTab.classList.add('text-amber-800', 'hover:bg-amber-200');
            coffeeMenu.classList.remove('hidden');
            sideMenu.classList.add('hidden');
        });

        sideTab.addEventListener('click', () => {
            sideTab.classList.add('bg-amber-700', 'text-white');
            sideTab.classList.remove('text-amber-800', 'hover:bg-amber-200');
            coffeeTab.classList.remove('bg-amber-700', 'text-white');
            coffeeTab.classList.add('text-amber-800', 'hover:bg-amber-200');
            sideMenu.classList.remove('hidden');
            coffeeMenu.classList.add('hidden');
        });

        // Add to Cart
        function addToCart(id, name, price) {
            // Check if item already in cart
            const existingItem = cart.find(item => item.id === id);
            
            if (existingItem) {
                existingItem.quantity += 1;
            } else {
                cart.push({
                    id,
                    name,
                    price,
                    quantity: 1
                });
            }
            
            // Update UI
            updateCartUI();
            
            // Animation
            cartCount.classList.add('cart-bounce');
            setTimeout(() => {
                cartCount.classList.remove('cart-bounce');
            }, 500);
        }

        // Update Cart UI
        function updateCartUI() {
            // Update count
            const totalItems = cart.reduce((sum, item) => sum + item.quantity, 0);
            cartCount.textContent = totalItems;
            
            // Update modal if open
            if (!cartModal.classList.contains('hidden')) {
                renderCartItems();
            }
        }

        // Render Cart Items
        function renderCartItems() {
            // Clear existing items
            cartItems.innerHTML = '';
            
            if (cart.length === 0) {
                emptyCartMessage.classList.remove('hidden');
                checkoutButton.disabled = true;
            } else {
                emptyCartMessage.classList.add('hidden');
                checkoutButton.disabled = false;
                
                cart.forEach(item => {
                    const cartItemElement = document.createElement('div');
                    cartItemElement.className = 'flex justify-between items-center border-b border-amber-100 pb-4';
                    cartItemElement.innerHTML = `
                        <div>
                            <h4 class="font-medium">${item.name}</h4>
                            <p class="text-sm text-amber-700">$${item.price.toFixed(2)} × ${item.quantity}</p>
                        </div>
                        <div class="flex items-center">
                            <span class="font-medium mr-4">$${(item.price * item.quantity).toFixed(2)}</span>
                            <button class="remove-item text-amber-700 hover:text-amber-900" data-id="${item.id}">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </div>
                    `;
                    cartItems.appendChild(cartItemElement);
                });
                
                // Add event listeners to remove buttons
                document.querySelectorAll('.remove-item').forEach(button => {
                    button.addEventListener('click', (e) => {
                        const id = parseInt(e.currentTarget.getAttribute('data-id'));
                        removeFromCart(id);
                    });
                });
            }
            
            // Calculate totals
            const subtotal = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
            const tax = subtotal * 0.1; // 10% tax
            const total = subtotal + tax;
            
            cartSubtotal.textContent = `$${subtotal.toFixed(2)}`;
            cartTax.textContent = `$${tax.toFixed(2)}`;
            cartTotal.textContent = `$${total.toFixed(2)}`;
        }

        // Remove from Cart
        function removeFromCart(id) {
            cart = cart.filter(item => item.id !== id);
            updateCartUI();
        }

        // Carousel Navigation
        coffeePrev.addEventListener('click', () => {
            coffeeCarousel.scrollBy({ left: -300, behavior: 'smooth' });
        });

        coffeeNext.addEventListener('click', () => {
            coffeeCarousel.scrollBy({ left: 300, behavior: 'smooth' });
        });

        sidePrev.addEventListener('click', () => {
            sideCarousel.scrollBy({ left: -300, behavior: 'smooth' });
        });

        sideNext.addEventListener('click', () => {
            sideCarousel.scrollBy({ left: 300, behavior: 'smooth' });
        });

        // Event Delegation for Add to Cart buttons
        document.addEventListener('click', (e) => {
            if (e.target.classList.contains('add-to-cart') || e.target.parentElement.classList.contains('add-to-cart')) {
                const button = e.target.classList.contains('add-to-cart') ? e.target : e.target.parentElement;
                const id = parseInt(button.getAttribute('data-id'));
                const name = button.getAttribute('data-name');
                const price = parseFloat(button.getAttribute('data-price'));
                
                addToCart(id, name, price);
            }
        });

        // Cart Modal
        cartButton.addEventListener('click', () => {
            cartModal.classList.remove('hidden');
            renderCartItems();
        });

        closeCart.addEventListener('click', () => {
            cartModal.classList.add('hidden');
        });

        // Checkout
        checkoutButton.addEventListener('click', () => {
            alert('Thank you for your order! Your total is ' + cartTotal.textContent);
            cart = [];
            updateCartUI();
            cartModal.classList.add('hidden');
        });

        // Close modal when clicking outside
        cartModal.addEventListener('click', (e) => {
            if (e.target === cartModal) {
                cartModal.classList.add('hidden');
            }
        });

        // Initialize the page
        initializeMenu();
    </script>
@endsection
