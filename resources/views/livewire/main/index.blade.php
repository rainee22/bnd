@section('content')
    {{-- Navbar --}}
    <header class="sticky-top">
        <livewire:main.components.navigation />
    </header>
    
    <main class="min-vh-100">
        <div data-bs-spy="scroll" data-bs-target="#navigation" data-bs-smooth-scroll="true">
            {{-- Hero --}}
            <livewire:main.components.hero />

            {{-- Partners --}}
            <livewire:main.components.partners />

            {{-- About Us --}}
            <livewire:main.components.about-us />
            
            {{-- Client Reviews --}}
            <livewire:main.components.client-reviews />
    
            {{-- Services --}}
            <livewire:main.components.services />

            {{-- Projects --}}
            <livewire:main.components.projects />

            {{--  Frequently Asked Questions --}}
            <livewire:main.components.faq />
    
            {{-- Contact Us --}}
            <livewire:main.components.contact-us />
        </div>
    </main>
    
    <footer>
        {{-- Footer --}}
        <livewire:main.components.footer />
    </footer>
@endsection
