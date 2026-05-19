<nav class="fixed w-full z-50 transition-all duration-300 bg-transparent py-6 px-8 md:px-16" id="navbar">
    <div class="max-w-7xl mx-auto flex justify-between items-center">
        <div class="flex items-center">
            <span class="text-2xl font-serif font-bold tracking-widest text-gold">GUYA RESI</span>
        </div>
        
        <div class="hidden md:flex space-x-10 items-center text-sm font-medium tracking-widest uppercase">
            <a href="#" class="text-white hover:text-gold transition">Accueil</a>
            <a href="#residences" class="text-white hover:text-gold transition">Nos Résidences</a>
            <a href="#services" class="text-white hover:text-gold transition">Services</a>
            <a href="#contact" class="text-white hover:text-gold transition">Contact</a>
            <a href="https://wa.me/2250799943674?text=Bonjour%20Guya%20Resi,%20je%20souhaite%20obtenir%20des%20informations%20pour%20réserver%20un%20séjour." target="_blank" data-track="navbar_whatsapp" class="bg-gold text-anthracite px-6 py-3 rounded-sm hover:bg-gold-dark transition font-bold shadow-lg">Réserver</a>
        </div>

        <div class="md:hidden">
            <button class="text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
        </div>
    </div>
</nav>

<script>
    window.addEventListener('scroll', () => {
        const navbar = document.getElementById('navbar');
        if (window.scrollY > 50) {
            navbar.classList.add('bg-anthracite/90', 'backdrop-blur-md', 'py-4');
            navbar.classList.remove('bg-transparent', 'py-6');
        } else {
            navbar.classList.add('bg-transparent', 'py-6');
            navbar.classList.remove('bg-anthracite/90', 'backdrop-blur-md', 'py-4');
        }
    });
</script>
