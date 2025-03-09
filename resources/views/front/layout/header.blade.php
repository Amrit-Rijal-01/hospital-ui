<header class="site-header" id="site-header">
    <div class="main-container">
        <a href="#"><img src="{{ asset('front/img/logo.png') }}" class="logo" alt=""></a>
        <nav class="navbar navbar-expand-xl p-0">
            <div class="navbar-collapse collapse">
                <ul class="nav-ul">
                    <li class="navbar-item dropdown">
                        <a href="#" class="navbar-link" data-bs-toggle="dropdown">
                            Locations <x-down class="down-icon"></x-down>
                        </a>
                        <ul class="drop-menu">
                            <li>
                                <a href="#" class="drop-item">Location 1</a>
                            </li>
                            <li>
                                <a href="#" class="drop-item">Location 2</a>
                            </li>
                            <li>
                                <a href="#" class="drop-item">Location 3</a>
                            </li>
                        </ul>
                    </li>
                    <li class="navbar-item dropdown">
                        <a href="#" class="navbar-link" data-bs-toggle="dropdown">
                            Speciality <i class="bi bi-chevron-down"></i>
                        </a>
                        <ul class="drop-menu">
                            <li>
                                <a href="#" class="drop-item">Speciality 1</a>
                            </li>
                            <li>
                                <a href="#" class="drop-item">Speciality 2</a>
                            </li>
                            <li>
                                <a href="#" class="drop-item">Speciality 3</a>
                            </li>
                        </ul>
                    </li>
                    <li class="navbar-item dropdown">
                        <a href="#" class="navbar-link" data-bs-toggle="dropdown">
                            Health Library <i class="bi bi-chevron-down"></i>
                        </a>
                        <ul class="drop-menu">
                            <li>
                                <a href="#" class="drop-item">Health Library 1</a>
                            </li>
                            <li>
                                <a href="#" class="drop-item">Health Library 2</a>
                            </li>
                            <li>
                                <a href="#" class="drop-item">Health Library 3</a>
                            </li>
                        </ul>
                    </li>
                    <li class="navbar-item dropdown">
                        <a href="#" class="navbar-link" data-bs-toggle="dropdown">
                            Services <i class="bi bi-chevron-down"></i>
                        </a>
                        <ul class="drop-menu">
                            <li>
                                <a href="#" class="drop-item">Services 1</a>
                            </li>
                            <li>
                                <a href="#" class="drop-item">Services 2</a>
                            </li>
                            <li>
                                <a href="#" class="drop-item">Services 3</a>
                            </li>
                        </ul>
                    </li>
                    <li class="navbar-item">
                        <a href="#" class="navbar-link ">Career</a>
                    </li>
                    <li class="navbar-item dropdown">
                        <a href="#" class="navbar-link" data-bs-toggle="dropdown">
                            Contact Us <i class="bi bi-chevron-down"></i>
                        </a>
                        <ul class="drop-menu">
                            <li>
                                <a href="mailto:hello@example.com" class="drop-item">Mail</a>
                            </li>
                            <li>
                                <a href="tel:+9779876543210" class="drop-item">number</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="feedback-contact d-flex">
            <a href="#" class="feedback-btn navbar-link">
                <img src="{{ asset('front/img/write-message.png') }}" class="feedback-image" alt="Feedback">
            </a>
            <a href="#" class="whatsapp-link">
                <img src="{{ asset('front/img/whatsapp.png') }}" alt="WhatsApp" class="whatsapp-image">
                <span>WhatsApp</span>
            </a>
            <a class="emergency-btn" href="tel:1068">
                <img src="{{ asset('front/img/emergency.png') }}" alt="Emergency" width="50" height="50">
            </a>
            <a class="md-emergency-btn" href="tel:1068">
                <img src="{{ asset('front/img/emergency.png') }}" alt="Emergency" width="50" height="50">
                <span>Emergency</span>
            </a>

            <a href="#" class="call-back navbar-link">
                <img src="{{ asset('front/img/phone-icon.png') }}" alt="Call Back" class="call-back-image me-1">
                <small>Request Call Back</small>
            </a>
            <a href="#" class="md-contact-us">
                <img src="{{ asset('front/img/phone-grey-icon.png') }}" alt="Call Back" class="call-back-image me-1">
                <span>Contact</span>
            </a>
        </div>
    </div>
</header>
