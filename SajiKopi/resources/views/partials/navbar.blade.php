<nav class="bg-white bg-opacity-80 sticky top-0 z-50 shadow-sm font-nunito">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
        <div class="flex items-center">
            <div class="w-12 h-12 rounded-full bg-amber-100 flex items-center justify-center mr-3">
                <i class="fas fa-mug-hot text-amber-700 text-xl"></i>
            </div>
            <h1 class="text-2xl font-extrabold text-amber-900">SAJI KOPI</h1>
        </div>
        <nav class="hidden md:flex space-x-8">
            <a href="#home" class="nav-link text-amber-900 font-medium">Home</a>
            <a href="#menu" class="nav-link text-amber-900 font-medium">Menu</a>
            <a href="#gallery" class="nav-link text-amber-900 font-medium">Gallery</a>
            <a href="#contact" class="nav-link text-amber-900 font-medium">Contact</a>
        </nav>
        <div class="flex items-center">
            <button id="cart-button" class="relative p-2 rounded-full hover:bg-amber-100 transition">
                <i class="fas fa-shopping-basket text-amber-700 text-xl"></i>
                <span id="cart-count" class="absolute -top-1 -right-1 bg-amber-600 text-white text-xs rounded-full h-5 w-5 flex items-center justify-center">0</span>
            </button>
            <button class="md:hidden ml-4 p-2 rounded-full hover:bg-amber-100 transition">
                <i class="fas fa-bars text-amber-700 text-xl"></i>
            </button>
        </div>
    </div>
</nav>