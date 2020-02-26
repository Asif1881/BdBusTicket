<div id="main-menu">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{ route('bd-bus.index') }}">
                <img src="assets/images/logo/logo.png" alt="..">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('bd-bus.index') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="contact-us.html">Contact</a>
                    </li>


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle
                                                         " href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false">Booking                            </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                            <a class="dropdown-item" href="login.html">টিকেট ক্যানসেল</a>
                            <a class="dropdown-item" href="ticket-print.html">প্রিন্ট ডাউনলোড</a>
                        </div>
                    </li>
                </ul>
                <a class="mamunur_rashid_top_book_btn" href="search.html">Buy Ticket</a>
                <a class="mamunur_rashid_top_book_btn" href="{{ route('login') }}">সাইন ইন</a>
            </div>
        </div>
    </nav>
</div>