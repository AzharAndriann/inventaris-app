<nav class="navbar navbar-expand px-3 fixed-top w-1/1 ms-[344px]  bg-light1 bg-opacity-70 backdrop-blur-lg  mt-6 border-2 border-slate-200 mx-[28px] rounded-lg backdrop-brightness-150 shadow-md">
    <div class="navbar-collapse navbar">
        <div class="flex flex-col">
            <div class="text-lg text-slate-500">Pages  <span class="text-sm text-slate-700">/</span>  <span class="text-slate-700">Admin</span></div>
        </div>
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0">
                    @auth
                        <div class="text-slate-700 text-md font-bold me-4">{{ Auth::user()->username }}</div>
                    @endauth
                </a>
                <div class="dropdown-menu dropdown-menu-end bg-light1 bg-opacity-70 backdrop-blur-md">
                    <form method="POST" action="{{ route('logout') }}" class="dropdown-item text-slate-900 hover:bg-slate-700 hover:text-slate-300 duration-500 rounded-md hover:opacity-45">
                    @csrf
                    <a :href="route('logout')"
                    onclick="event.preventDefault();
                    this.closest('form').submit();"><i class="bi bi-box-arrow-right me-3 text-md"></i>logout</a>
                    </form>                
                </div>
            </li>
        </ul>
    </div>
</nav>