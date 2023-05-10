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
                    @if (Str::is($currentRouteName, 'index'))
                    <li class="nav-item me-3">
                        <a class="nav-link px-1" href="#hero">Home</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link px-1" href="#about_us">About Us</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link px-1" href="#services">Services</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link px-1" href="#faq">FAQ</a>
                    </li>

                    <li class="nav-item me-3">
                        <a class="nav-link px-1" href="#contact_us">Contact Us</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link px-1" href="#video">Video</a>
                    </li>
                    @endif

                    @if (Str::is($currentRouteName, 'services'))
                    <li class="nav-item">
                        <a class="nav-link px-1" href="{{ route('index') }}">Home</a>
                    </li>
                    @endif
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