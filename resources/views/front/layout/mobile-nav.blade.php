<div class="mobile-sticky-link d-xl-none">

    <ul class="">
        <li>
            <a class="toggle-menu" href="#" onclick="toggleMenu(this)">
                <div class="icon open-icon">
                    <img src="{{ asset('front/img/hamburger-menu.svg') }}" alt="Menu">
                </div>
                <div class="icon close-icon d-none">
                    <img src="{{ asset('front/img/close.svg') }}" alt="Close">
                </div>
                Menu
            </a>
        </li>
        <li>
            <a href="#">
                <div class="icon">
                    <img src="{{ asset('front/img/doctor.svg') }}" alt="Doctor">
                </div>
                Doctor
            </a>
        </li>
        <li>
            <a href="#">
                <div class="icon">
                    <img src="{{ asset('front/img/calendar-tick.svg') }}" alt="Appointment">
                </div>
                Book Apt.
            </a>
        </li>
        <li>
            <a href="#">
                <div class="icon">
                    <img src="{{ asset('front/img/chat.svg') }}" alt="Chat">
                </div>
                Chat
            </a>
        </li>
        <li>
            <a href="#">
                <div class="icon">
                    <img src="{{ asset('front/img/call.svg') }}" alt="Call">
                </div>
                Call Back
            </a>
        </li>

    </ul>

</div>

<script>
    var isMenuOpen = false;
    function toggleMenu(ele) {
        isMenuOpen = !isMenuOpen;
    }
</script>
