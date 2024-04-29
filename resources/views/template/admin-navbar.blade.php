<header>
    @if (Auth::guard('admin')->check())
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <div class="navbar-brand">
                <a href="{{ url('/admin') }}">Gatto</a>
            </div>
            <div class="m-0 d-lg-flex col-lg-8 d-none justify-content-center nav-content">
                <a href="/admin/home" class="px-4 fs-4 mt-3">HOME</a>
                <a href="/admin/administrator" class="px-4 fs-4 mt-3">ADMINISTRATOR</a>
                <a href="/admin/user" class="px-4 fs-4 mt-3">USERS</a>
                <a href="/admin/rules" class="px-4 fs-4 mt-3">RULES</a>
                <a href="/admin/symptoms" class="px-4 fs-4 mt-3">SYMPTOMS</a>
                <a href="/admin/diseases" class="px-4 fs-4 mt-3">DISEASES</a>
                <a href="/admin/history" class="px-4 fs-4 mt-3">HISTORY</a>

            </div>
            <form action="/admin/logout" id="logout">
                <button class="navbar-nav login btn" type="button" name="logout" id="logout"> <img src="{{ asset('/image/paw.png')}}"> LOGOUT </button>
            </form>
        </div>
    </nav>

    @else
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <div class="navbar-brand" >
                <a href="{{ url('/') }}">Gatto</a>
            </div>
        </div>
    </nav>
    @endif 
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

