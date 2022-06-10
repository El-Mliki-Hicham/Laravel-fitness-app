<header class="header-fitness">
    <a href="#" class="nav-btn">
        <span></span>
        <span></span>
        <span></span>
    </a>
    
    <div class="header-menu">
        <div class="container">
            <div class="header-logo">
                <a href="index.html" class="logo"><img src="{{asset('assets/img/favicon.png')}}"  style="width: 250px;" alt="logo"></a>
            </div>
            <nav class="nav-menu">
                <ul class="nav-list">
                    <li class="dropdown">
                        <a href="{{route('home')}}">ACCUEIL<i class=""></i></a>
                        
                    </li>
                    <li><a href="#a-propos">À propos</a></li>
                    <li><a href="#exercices">Exercices</a></li>
                    <li><a href="#programmes">Programmes</a></li>
                    {{-- <li class="dropdown"> --}}
                        {{-- <a href="#programmes">Programmes <i class="fa fa-caret-down"></i></a> --}}
                        {{-- <ul>
                            <li><a href="program.html">volly-ball</a></li>
                            <li><a href="trainer.html">Basket-ball</a></li>
                        </ul> --}}
                    </li>
                    
                    <li><a href="contacts.html">Contacts</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>