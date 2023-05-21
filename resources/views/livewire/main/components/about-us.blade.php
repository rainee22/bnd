<section id="about_us">

    <script src="https://code.responsivevoice.org/responsivevoice.js?key=6AqfGK6s"></script> <!-- replace with KEY-->
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>

    <div class="container-fluid container-lg p-5" data-aos="fade-up">
        <div class="mb-5 text-center" data-aos="zoom-out">
            <h1 id="h00"class="fw-bolder mb-0">About Us</h1>
        </div>

        <div class="row gx-5 justify-content-center align-items-center">
            <div class="col-md-8 col-lg-6 order-2 order-lg-1" data-aos="zoom-out">

                <h3 id="h0" class="mb-4 fw-bold" data-aos="fade-down">
                    Discover our story and join the journey.
                </h3>

                <div class="d-flex align-items-start" data-aos="fade-up" data-aos-delay="100">
                    <div
                        class="bg-primary bg-gradient bg-opacity-75 d-inline-flex align-items-center justify-content-center p-2 flex-shrink-0 me-3 rounded-3">
                        
                        <button class="bg-transparent border-0" onclick="responsiveVoice.speak($('#h1').text()),responsiveVoice.speak($('#text0').text());">
                           <img src="{{ asset('images/icons/book.gif') }}" alt="book.gif">
                        </button>
                    </div>

                    <div>
                        <h1 id= "h1" class="fs-6 fw-bold">Expertise and Knowledge</h1>
                        <p id="text0" class="text-justify">We have extensive expertise and knowledge in the field of information technology, which can give clients confidence in their ability to provide effective solutions.</p>
                    </div>
                </div>

                <div class="d-flex align-items-start" data-aos="fade-up" data-aos-delay="200">
                    <div
                        class="bg-primary bg-gradient bg-opacity-75 d-inline-flex align-items-center justify-content-center p-2 flex-shrink-0 me-3 rounded-3">
                        <button class="bg-transparent border-0" onclick="responsiveVoice.speak($('#h2').text()),responsiveVoice.speak($('#text1').text());">
                           <img src="{{ asset('images/icons/gear.gif') }}" alt="gear.gif">
                        </button>
                        
                    </div>

                    <div>
                        <h1 id = "h2" class="fs-6 fw-bold">System Solutions</h1>
                        <p id="text1" class="text-justify">As a system solutions provider, B&D IT Consultancy focuses on helping clients meet their IT needs, which can include everything from software development to network infrastructure.</p>
                    </div>
                </div>

                <div class="d-flex align-items-start" data-aos="fade-up" data-aos-delay="300">
                    <div
                        class="bg-primary bg-gradient bg-opacity-75 d-inline-flex align-items-center justify-content-center p-2 flex-shrink-0 me-3 rounded-3">
                        <button class="bg-transparent border-0" onclick="responsiveVoice.speak($('#h3').text()),responsiveVoice.speak($('#text2').text());">
                           <img src="{{ asset('images/icons/celebration.gif') }}" alt="celebration.gif">
                        </button>
                    </div>

                    <div>
                        <h1 id="h3" class="fs-6 fw-bold">Established in 2017</h1>
                        <p id = "text2" class="text-justify">While B&D IT Consultancy is a relatively new company, having been founded in 2017, it has already begun establishing itself in the industry and building a reputation for quality work.</p>
                    </div>
                </div>
                {{-- reader --}}

                <button class="btn btn-sm btn-primary btn-icon-animation "
                onclick=
                "responsiveVoice.speak($('#h00').text()),
                responsiveVoice.speak($('#h0').text()),
                responsiveVoice.speak($('#h1').text()),
                responsiveVoice.speak($('#text0').text()),
                responsiveVoice.speak($('#h2').text()),
                responsiveVoice.speak($('#text1').text()),
                responsiveVoice.speak($('#h3').text()),
                responsiveVoice.speak($('#text2').text());"> Read this for me
                  <i class="bi bi-arrow-right-circle"></i>
                </button>

            </div>

            <div class="col-md-10 col-lg-6 order-1 order-lg-2 text-center" data-aos="zoom-in">
                <img class="img-fluid" src="{{ asset('images/about-us.svg') }}" alt="About US" loading="lazy">
            </div>
        </div>

        <div class="row gx-5 justify-content-center align-items-center mt-5">
            <div class="col-md-10 col-lg-6 text-center" data-aos="zoom-in">
                <img class="img-fluid" src="{{ asset('images/connecting-teams.svg') }}" alt="connecting team"
                    loading="lazy">
            </div>
            <div class="col-md-8 col-lg-6" data-aos="zoom-out">
                <h2 id="h000" class="pt-4 mb-4 fw-bold" data-aos="fade-down" data-aos-delay="100">
                    Innovative IT Solutions for Your Business Needs
                </h2>
                <p id='text' class="mb-0 fw-normal mb-4 lh-lg text-justify" data-aos="fade-up" data-aos-delay="200">
                    B&D IT Consultancy provides high-quality, cost-effective software and services to clients in the government, multinational corporations, and private sectors. With a team of highly talented and experienced professionals, we work at a fast pace to develop modern technology solutions that meet the unique needs of our clients. Our company is built on the principles of dependability, ensured quality, and long-term business relationships, making us a trusted partner for all your IT needs.
                </p>
                
                {{-- reader --}}
                <button class="btn btn-sm btn-primary btn-icon-animation" 
                onclick="responsiveVoice.speak($('#h000').text()),responsiveVoice.speak($('#text').text());"> Read this for me
                  <i class="bi bi-arrow-right-circle"></i>
                </button>
            </div>
        </div>
    </div>
    @livewire('main.components.client-reviews')
</section>
