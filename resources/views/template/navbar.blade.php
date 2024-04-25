<!-- <header>
    @guest
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <div class="navbar-brand">
                <a href="{{ url('/') }}">Gatto</a>
            </div>
        <btn>
            <a href="{{ url('/login') }}"  class="login"> <img src="{{ asset('/image/paw.png')}}">LOGIN</a>
        </btn>
        </div>
    </nav> 
    @else
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <div class="navbar-brand">
                <a href="{{ url('/logout') }}">Gatto</a>
            </div>
            <form action="/logout" id="logout">
                <button class="navbar-nav login btn" type="button" name="logout" id="logout"> <img src="{{ asset('/image/paw.png')}}"> LOGOUT </button>
            </form>
        </div>
    </nav>
    @endguest
</header> -->

<header>
    @guest 
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <div class="navbar-brand" >
                <a href="{{ url('/') }}">Gatto</a>
            </div>
        </div>
    </nav>
    @else
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <div class="navbar-brand">
                <a href="{{ url('/') }}" style="color: white;">Gatto</a>
            </div>
            <div class="m-0 d-lg-flex col-lg-8 d-none justify-content-center nav-content">
                <a href="/home" class="px-4 fs-4 mt-3">HOME</a>
                <a href="/diagnose" class="px-4 fs-4 mt-3">DIAGNOSE</a>
                <a href="/diseases" class="px-4 fs-4 mt-3">DISEASES</a>
                <a href="/history" class="px-4 fs-4 mt-3">HISTORY</a>
                <a href="/profile" class="px-4 fs-4 mt-3">PROFILE</a>
            </div>
            <form action="/logout" id="logout">
                <button class="navbar-nav login btn" type="button" name="logout" id="logout"> <img src="{{ asset('/image/paw.png')}}"> LOGOUT </button>
            </form>
        </div>
    </nav>
    @endguest
</header>

<script>
    if($('#logout').click(function(){
        Swal.fire({
            title: 'Are you sure?',
            text: "You will be logged out!",
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, log me out!'
        }).then((result) => {
            if (result.isConfirmed) {
                $('#logout').submit()
            }
        })
    }));
</script>

