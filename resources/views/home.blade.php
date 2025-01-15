@extends('layouts.app')

@section('title', 'Sangfor Cyber Command')

@section('content')
    <!-- top Section -->
    <nav class="navbar top-bar primary-text py-3">
        <div class="container justify-content-end">
            <a href="#">ID</a>
            <span style='font-size:15px;'>&#9474;</span>
            <a href="#">EN</a>
        </div>
    </nav>
    <!-- Nav Section -->
    <nav class="navbar nav-bar py-3">
        <div class="container justify-content-start">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/logo-helios.png') }}" alt="Helios Logo">
            </a>
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/logo-sangfor.png') }}" alt="sangfor Logo">
            </a>
        </div>
    </nav>
    <!-- jumbotron Section -->
    <div class="jumbotron bg-image p-5 d-flex align-items-center justify-content-start" style="background-image: url({{ asset('images/bg-hero.png') }})">
        <div class="container">
            <div class="text-container text-start primary-text py-5">
                <h1>Cybersecurity Made Simple with Sangfor Cyber Command</h1>
                <h5 class="mt-4">Simplify your cybersecurity with Sangfor Cyber Command's user-friendly interface and comprehensive threat protection.</h5>
                <button class="btn btn-primary-custom text-uppercase mt-4">
                    <span class="btn-text"><a href="#form-trial">Free Trial</a></span>
                    <span class="btn-label"><img src="{{ asset('images/icon-caret.svg') }}" alt="caret"></span>
                </button>    
            </div>
        </div>
    </div>
    <!-- about us & form section -->
    <div class="bg-image p-5" style="background-image: url({{ asset('images/bg-form.png') }})"> 
        <div class="container pt-5 pb-5">
            <div class="row align-items-center">
                <div class="col-md-6"> <!-- about us -->
                    <div class="about-us pt-5">
                        <h2 class="secondary-text mb-3">About Sangfor Cyber Command</h2>
                        <p class="mb-4">
                            Sangfor Cyber Command falls into Network Detection & Response (NDR) Solutions which is a comprehensive security management platform designed to protect businesses from cyber threats.
                        </p>
                        <p class="mb-4">
                            It provides a range of security solutions such as threat detection, incident response, and compliance management. With Sangfor Cyber Command, organizations can monitor their network traffic, analyze security events, and respond to incidents quickly and efficiently.  
                        </p>
                        <p class="mb-4">
                            The platform uses advanced machine learning algorithms and big data analytics to identify and prevent cyber-attacks before they cause damage.  It also offers a user-friendly dashboard that enables businesses to track their security posture in real-time and make informed decisions based on the insights provided.  
                        </p>
                        <p class="mb-4">
                            Overall, Sangfor Cyber Command is a powerful tool for businesses looking to strengthen their cybersecurity defenses and safeguard their assets from modern-day threats. 
                        </p>
                    </div>
                </div>
                <div class="col-md-6"> <!-- form -->
                    <div class="form-container p-5" id="form-trial">
                        <h3 class="secondary-text fw-bold">Dapatkan Free Trial selama 1 bulan,</h3>
                        <h4 class="ghost-color">analisa keamanan network anda dan lihat hasilnya!</h4>
                        <form method="POST" action="{{ route('submit.form') }}">
                            @csrf
                
                            @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="first-name" class="form-label ghost-color ms-3 required">First Name</label>
                                    <input type="text" class="form-control @error('first-name') is-invalid @enderror" placeholder="First name" id="first-name" name="first-name" value="{{ old('first-name') }}">
                                    @error('first-name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label for="last-name" class="form-label ghost-color ms-3 required">Last Name</label>
                                    <input type="text" class="form-control @error('last-name') is-invalid @enderror" placeholder="Last name" id="last-name" name="last-name" value="{{ old('last-name') }}">
                                    @error('last-name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                
                            <div class="mb-3">
                                <label for="corporate-email" class="form-label ghost-color ms-3 required">Corporate Email</label>
                                <input type="email" class="form-control @error('corporate-email') is-invalid @enderror" placeholder="email@mail.com" id="corporate-email" name="corporate-email" value="{{ old('corporate-email') }}">
                                @error('corporate-email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                
                            <div class="mb-3">
                                <label for="job-title" class="form-label ghost-color ms-3 required">Job Title</label>
                                <input type="text" class="form-control @error('job-title') is-invalid @enderror" placeholder="Your job" id="job-title" name="job-title" value="{{ old('job-title') }}">
                                @error('job-title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                
                            <div class="mb-3">
                                <label for="company-name" class="form-label ghost-color ms-3 required">Company Name</label>
                                <input type="text" class="form-control @error('company-name') is-invalid @enderror" placeholder="Your company" id="company-name" name="company-name" value="{{ old('company-name') }}">
                                @error('company-name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                
                            <label for="industry" class="form-label ghost-color ms-3">Industry</label>
                            <select class="form-select mb-3 @error('industry') is-invalid @enderror" name="industry" aria-label="Industry Select" id="industry">
                                <option selected>Industry</option>
                                <option value="One" {{ old('industry') == 'Technology' ? 'selected' : '' }}>One</option>
                                <option value="Two" {{ old('industry') == 'Education' ? 'selected' : '' }}>Two</option>
                                <option value="Three" {{ old('industry') == 'Medication' ? 'selected' : '' }}>Three</option>
                            </select>
                            @error('industry')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                
                            <div class="mb-3">
                                <label for="phone-number" class="form-label ghost-color ms-3 required">Phone Number</label>
                                <input type="text" class="form-control @error('phone-number') is-invalid @enderror" placeholder="Your number" id="phone-number" name="phone-number" value="{{ old('phone-number') }}">
                                @error('phone-number')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input @error('agree') is-invalid @enderror" id="agree" name="agree" {{ old('agree') ? 'checked' : '' }}>
                                <label class="form-check-label ghost-color" for="agree">Click this box to agree to be contacted by our team and get great deals on Sangfor for Helios!</label>
                                @error('agree')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary-custom text-uppercase">Send</button>
                            </div>
                        </form>                
                    </div>
                </div>                
            </div>
        </div>
    </div>
    <!-- advantages Section -->
    <div class="bg-image pb-5 pt-5" style="background-image: url({{ asset('images/bg-adv.png') }})"> 
        <div class="container text-center advantage">
            <div class="row my-5">
                <div class="col-md-12">
                    <h2 class="primary-text">Sangfor Cyber Command Advantages</h2>
                </div>
            </div>
            <div class="row"><!-- row 1 -->
                <div class="col-md-6 pb-5">
                    <div class="card text-center p-5">
                        <img src="{{ asset('images/adv-threat.png') }}" class="card-img-top mx-auto" alt="..." style="height: 185px; width: 185px;">
                        <div class="card-body">
                        <h3 class="card-title secondary-text">Advance Threat Detection</h3>
                        <p class="card-text">Sangfor Cyber Command offers advanced threat detection capabilities that can help users identify and respond to potential security threats in real-time. This includes identifying and blocking malware, ransomware, and other types of cyber threats.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 pb-5">
                    <div class="card text-center p-5">
                        <img src="{{ asset('images/adv-network.png') }}" class="card-img-top mx-auto" alt="..." style="height: 185px; width: 185px;">
                        <div class="card-body">
                            <h3 class="card-title secondary-text">Network Visibility and Control</h3>
                            <p class="card-text">Sangfor Cyber Command provides users with visibility and control over their network infrastructure. This includes monitoring network traffic, controlling access to resources, and managing network policies.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pb-5"><!-- row 2 -->
                <div class="col-md-6 pb-5">
                    <div class="card text-center p-5">
                        <img src="{{ asset('images/adv-cloud.png') }}" class="card-img-top mx-auto" alt="..." style="height: 185px; width: 185px;">
                        <div class="card-body">
                        <h3 class="card-title secondary-text">Cloud Security</h3>
                        <p class="card-text">Sangfor Cyber Command offers cloud security solutions that can help users secure their cloud-based applications and infrastructure. This includes protecting against cloud-specific threats like data breaches, account hijacking, and insider threats.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card text-center p-5">
                        <img src="{{ asset('images/adv-security.png') }}" class="card-img-top mx-auto" alt="..." style="height: 185px; width: 185px;">
                        <div class="card-body">
                        <h3 class="card-title secondary-text">Comprehensive Security Management</h3>
                        <p class="card-text">Sangfor Cyber Command provides users with a comprehensive security management platform that can help them manage and monitor their entire security infrastructure from a single console. This includes managing security policies, tracking security events, and generating reports.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- features Section -->
    <div class="container text-center features mt-5">
        <div class="row p-5">
            <div class="col-12">
                <h2 class="secondary-text">Sangfor Cyber Command Features</h2>
            </div>
        </div>
        <div class="row g-5"><!-- row 1 -->
            <div class="col col-md-4">
                <img src="{{ asset('images/ft-threat.png') }}" class="card-img-top mx-auto" alt="..." style="height: 205px; width: 205px;">
                <div class="justify-content-center d-flex">
                    <h3 class="secondary-text">Threat Intelligence</h3>
                </div>
                <div class="justify-content-center d-flex">
                    <p class="text-container">Advanced AI algorithms and machine learning provide comprehensive threat intelligence to stay ahead of the latest cyber threats.</p>
                </div>
            </div>
            <div class="col col-md-4">
                <img src="{{ asset('images/ft-realtime.png') }}" class="card-img-top mx-auto" alt="..." style="height: 205px; width: 205px;">
                <div class="justify-content-center d-flex">
                    <h3 class="secondary-text">Real-Time Detections</h3>
                </div>
                <div class="justify-content-center d-flex">
                    <p class="text-container">Real-time alert system provides instant notification of potential security incidents.</p>
                </div>
            </div>
            <div class="col col-md-4">
                <img src="{{ asset('images/ft-investigation.png') }}" class="card-img-top mx-auto" alt="..." style="height: 205px; width: 205px;">
                <div class="justify-content-center d-flex">
                    <h3 class="secondary-text">Threats Investigation</h3>
                </div>
                <div class="justify-content-center d-flex">    
                    <p class="text-container">In-depth Threat investigation capabilities identify the root cause of security incidents and take appropriate action to prevent future occurrences.</p>
                </div>
            </div>
        </div>
        <div class="row g-5 mt-1">
            <div class="col col-md-6">
                <img src="{{ asset('images/ft-solution.png') }}" class="card-img-top mx-auto" alt="..." style="height: 205px; width: 205px;">
                <div class="justify-content-center d-flex">
                    <h3 class="secondary-text">Comprehensive Security Solutions</h3>
                </div>   
                <div class="justify-content-center d-flex">
                    <p class="text-container">In-depth Threat investigation capabilities identify the root cause of security incidents and take appropriate action to prevent future occurrences.</p>
                </div>
            </div>
            <div class="col col-md-6">
                <img src="{{ asset('images/ft-response.png') }}" class="card-img-top mx-auto" alt="..." style="height: 205px; width: 205px;">
                <div class="justify-content-center d-flex">
                    <h3 class="secondary-text">Rapid Response</h3>
                </div>
                <div class="justify-content-center d-flex">
                    <p class="text-container">Tight integration with network and endpoint security solutions enables quick response to potential security incidents, minimizing the impact of any attacks.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- value section -->
    <div class="bg-image bg-value value pb-5 pt-5 mt-5" style="background-image: url({{ asset('images/bg-value.png') }})"> 
        <div class="container text-center">
            <div class="justify-content-center d-flex mb-5 mt-5">  
                <h2 class="secondary-text">Sangfor Cyber Command’s Value to Customers</h2>
            </div>
            <div class="justify-content-center d-flex">  
                <div class="text-container text-start">
                    <div class="d-flex mb-3">
                        <div class="flex-shrink-0">
                            <img src="{{ asset('images/value-checkmark.svg') }}" alt="checkmark">
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <p class="ghost-color">Detect known dan unknown threats</p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="flex-shrink-0">
                            <img src="{{ asset('images/value-checkmark.svg') }}" alt="checkmark">
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <p class="ghost-color">Much better visibility of security posture of the entire infrastructure</p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="flex-shrink-0">
                            <img src="{{ asset('images/value-checkmark.svg') }}" alt="checkmark">
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <p class="ghost-color">Business Impact Analysis helps IT to understand what is already compromised and what needs to be prioritized</p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="flex-shrink-0">
                            <img src="{{ asset('images/value-checkmark.svg') }}" alt="checkmark">
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <p class="ghost-color">Faster Response to improve overall security control</p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="flex-shrink-0">
                            <img src="{{ asset('images/value-checkmark.svg') }}" alt="checkmark">
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <p class="ghost-color">Much more cost effective than other solutions such as SIEM</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
<!-- Customer Section -->
<div class="container customer-section">
    <div class="d-flex justify-content-center">
        <div class="overlap-box px-5 py-4">
            <h2>Cyber Command Customers Reference</h2>
        </div>
    </div>
    <div class="customer-logos d-flex align-items-center justify-content-center py-5 mt-3 mb-5 flex-wrap">
        <img src="{{ asset('images/cust-jnt.png') }}" alt="Customer Logo J&T" class="img-fluid">
        <img src="{{ asset('images/cust-jasa.png') }}" alt="Customer Logo 2" class="img-fluid">
        <img src="{{ asset('images/cust-ok.png') }}" alt="Customer Logo 3" class="img-fluid">
        <img src="{{ asset('images/cust-samudera.png') }}" alt="Customer Logo 3" class="img-fluid">
    </div>
</div>
    <!-- explore -->
    <div class="container explore text-center my-5 py-5">
        <div class="row mb-5">
            <div class="col-12">
                <h2 class="secondary-text">Explore Sangfor Cyber Command with Helios</h2>
                <h3 class="ghost-color">Helios Informatika Nusantara as Sangfor Distributor will provide</h3>
            </div>
        </div>
        <div class="row pt-3 pb-5">
            <div class="col-md-4 d-flex justify-content-center pb-5">
                <div class="card text-center py-5 px-2">
                    <img src="{{ asset('images/ex-implementation.png') }}" class="card-img-top mx-auto" alt="..." style="height: 108px; width: 108px;">
                    <div class="card-body">
                    <h3 class="card-title secondary-text">NDR Implementation</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex justify-content-center pb-5">
                <div class="card text-center py-5 px-2">
                    <img src="{{ asset('images/ex-implementation.png') }}" class="card-img-top mx-auto" alt="..." style="height: 108px; width: 108px;">
                    <div class="card-body">
                    <h3 class="card-title secondary-text">Incident Response and Threat Hunting</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex justify-content-center pb-5">
                <div class="card text-center py-5 px-2">
                    <img src="{{ asset('images/ex-implementation.png') }}" class="card-img-top mx-auto" alt="..." style="height: 108px; width: 108px;">
                    <div class="card-body">
                    <h3 class="card-title secondary-text">Device Security Maintenance</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Section -->
    <footer class="primary-text py-5">
        <div class="container-fluid px-5">
            <div class="d-flex  justify-content-md-between align-items-center justify-content-sm-center">
                <!-- Left Section -->
                <div class="left-section">
                    <h3 class="text-white mb-5">PT. Helios Informatika Nusantara</h3>
                    <p class="text-white mb-5">
                        Centennial Tower, 12th Floor,<br>
                        Jl. Jendral Gatot Subroto<br>
                        No. Kav 24-25, Jakarta<br>
                        12930 Indonesia
                    </p>
                    <p class="text-white mb-5">
                        <span>Phone:</span> +62 21 8062 2220 <br>
                        <span>Email:</span> tencent@helios.id
                    </p>
                    <div class="social-icons d-flex justify-content-md-start justify-content-sm-center">
                        <a href="https://www.instagram.com" target="_blank" class="me-3">
                            <img src="{{ asset('images/footer-facebook.svg') }}" alt="Facebook" class="img-fluid">
                        </a>
                        <a href="https://www.instagram.com" target="_blank" class="me-3">
                            <img src="{{ asset('images/footer-ig.svg') }}" alt="Instagram" class="img-fluid">
                        </a>
                        <a href="https://www.instagram.com" target="_blank" class="me-3">
                            <img src="{{ asset('images/footer-Twitter.svg') }}" alt="Twitter" class="img-fluid">
                        </a>
                        <a href="https://www.instagram.com" target="_blank" class="me-3">
                            <img src="{{ asset('images/footer-Youtube.svg') }}" alt="YouTube" class="img-fluid">
                        </a>
                        <a href="https://www.instagram.com" target="_blank" class="me-3">
                            <img src="{{ asset('images/footer-Linkedin.svg') }}" alt="LinkedIn" class="img-fluid">
                        </a>
                    </div>
                </div>
                <!-- Right Section -->
                <div class="right-section">
                    <img class="" src="{{ asset('images/footer-worldmap.svg') }}" alt="World Map">
                </div>
            </div>
        </div>
    </footer>
    <div class="footer-bottom text-center py-4 primary-text">
        <p class="text-white mb-0">© 2023 - PT. Helios Informatika Nusantara - All Rights Reserved</p>
    </div>

@endsection
