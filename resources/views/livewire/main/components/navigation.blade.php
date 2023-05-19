<section id="navigation">
    <nav class="navbar navbar-expand-md bg-body-tertiary shadow-sm p-1">
        <div class="container-fluid container-md">
            <a class="navbar-brand pt-2" href="/">
                <h3>B&D IT Consultancy</h3>
            </a>

            <button class="navbar-toggler" 
                    type="button" 
                    data-bs-toggle="collapse" 
                    data-bs-target="#navbar" 
                    aria-controls="navbar" 
                    aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa-solid fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbar">
                <ul class="navbar-nav pe-3 mb-2 mb-lg-0 fw-semibold">
                    {{-- @if (Str::is($currentRouteName, 'index')) --}}
                    <li class="nav-item me-3">
                        <a class="nav-link px-1" href="/">Home</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link px-1" href="{{ route('about-us') }}">About Us</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link px-1" href="{{ route('services') }}">Services</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link px-1" href="{{ route('projects') }}">Projects</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link px-1" href="{{ route('faq') }}">FAQ</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link px-1" href="{{ route('contact') }}">Contact Us</a>
                    </li>
                    {{-- @endif --}}

                    {{-- @if (Str::is($currentRouteName, 'services')) --}}
                    
                    {{-- @endif --}}
                </ul>

                <div>
                    <button class="btn border-0" type="button" wire:click.prevent="changeTheme">
                        <i @class([
                            'fa-regular fs-4',
                            'fa-moon' => $theme == 'light',
                            'fa-sun' => $theme == 'dark',
                        ])></i>
                    </button>   
                </div>
            </div>
        </div>
    </nav>
</section>