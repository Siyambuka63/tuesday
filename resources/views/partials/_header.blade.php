<header id="main-header">
            <div class="account">
                <figure>
                    <div class="avatar">
                        <img src = "{{ asset('images/avatar/man/23.jpg')}}" alt="" class="w-100 h-100">
                        <div class="effect"></div>
                    </div>
                    <figcaption>
                        <h2 class="text-md">{{ $username }}</h2>
                    </figcaption>
                </figure>
            </div>
            <div class="search">
                <span class="icon flaticon-search color-fff"></span>
                <input type="text" placeholder="Search" name="search" id="search">
            </div>
        </header>