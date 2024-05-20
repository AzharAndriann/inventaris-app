
<aside class="fixed w-[300px] h-full bg-light1 text-slate-800 backdrop-blur-3xl opacity-80 mt-6 ms-3 rounded-lg shadow-lg">
    <div class="pt-5 text-lg font-semibold text-center">Inventaris</div> 
    <ul class="p-4 space-y-2">
        <li data-id="dashboard">
            <a href="{{ route('admin.dashboard')}}" class="flex items-center p-2 space-x-2 text-slate-900 hover:bg-slate-300 duration-500 hover:text-slate-600 rounded-md{{ Route::is('admin.dashboard') ? 'active': ''}}">
                <i class="bi bi-house text-lg me-3 bg-gradient-to-br from-pink-600 via-fuchsia-600 to-purple-600 p-2 rounded-lg text-white"></i><span class="text-lg">Dashboard</span>
            </a>
        </li>
        <li data-id="data-user">
            <a href="{{ route('admin.data-user')}}" class="flex items-center p-2 space-x-2 text-slate-900 hover:bg-slate-300 duration-500 hover:text-slate-600 rounded-md{{ Route::is('admin.dashboard') ? 'active': ''}}">
                <i class="bi bi-people text-lg me-3 bg-gradient-to-br from-pink-600 via-fuchsia-600 to-purple-600 p-2 rounded-lg text-white"></i><span class="text-lg">Data User</span>
            </a>
        </li>
        <li data-id="data-barang">
            <a href="#" class="flex items-center p-2 space-x-2 text-slate-900 hover:bg-slate-300 duration-500 hover:text-slate-600 rounded-md">
                <i class="bi bi-box text-lg me-3 bg-gradient-to-br from-pink-600 via-fuchsia-600 to-purple-600 p-2 rounded-lg text-white"></i><span class="text-lg">Data Barang</span>
            </a>
        </li>
        <li data-id="data-pemakaian">
            <a href="#" class="flex items-center p-2 space-x-2 text-slate-900 hover:bg-slate-300 duration-500 hover:text-slate-600 rounded-md">
                <i class="bi bi-bar-chart text-lg me-3 bg-gradient-to-br from-pink-600 via-fuchsia-600 to-purple-600 p-2 rounded-lg text-white"></i><span class="text-lg">Data Pemakaian</span>
            </a>
        </li>
        <li data-id="data-pembelian">
            <a href="#" class="flex items-center p-2 space-x-2 text-slate-900 hover:bg-slate-300 duration-500 hover:text-slate-600 rounded-md">
                <i class="bi bi-cart text-lg me-3 bg-gradient-to-br from-pink-600 via-fuchsia-600 to-purple-600 p-2 rounded-lg text-white"></i><span class="text-lg">Data Pembelian</span>
            </a>
        </li>
        <li data-id="data-inventaris">
            <a href="#" class="flex items-center p-2 space-x-2 text-slate-900 hover:bg-slate-300 duration-500 hover:text-slate-600 rounded-md">
                <i class="bi bi-clipboard text-lg me-3 bg-gradient-to-br from-pink-600 via-fuchsia-600 to-purple-600 p-2 rounded-lg text-white"></i><span class="text-lg">Data Inventaris</span>
            </a>
        </li>
    </ul>
</aside>

