@extends('layouts.app-admin')
@section('content')

<div class="wrapper bg-light2 flex">
    <div class="sidebar">
        @include('partials.sidebar-admin')
    </div>
    <div class="main bg-light2 flex-grow">
        <div class="navbar-custom">
            @include('partials.navbar-admin')
        </div>
        <div class="mt-[120px] p-10 bg-light1 w-1/1 ms-[347px] rounded-lg me-[30px]">
            <form class="mx-auto" action="{{ route('admin.store-ruang')}}" method="POST">
                @csrf
                <div class="relative z-0 w-full mb-5 group">
                    <input type="name" name="kode_ruangan" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-purple-600 peer" placeholder="" required />
                    <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-purple-700 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-purple-700 peer-focus:dark:text-purple-700 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Kode Ruangan</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="name" name="nama_ruangan" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-purple-600 peer" placeholder="" required />
                    <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-purple-700 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-purple-700 peer-focus:dark:text-purple-700 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama Ruangan</label>
                </div>
                <button type="submit" class="text-white bg-gradient-to-br from-pink-600 via-fuchsia-600 to-purple-600 px-5 py-2.5 rounded-lg">Submit</button>
                <button type="submit" class="text-white bg-gradient-to-br from-pink-600 via-fuchsia-600 to-purple-600 px-5 py-2.5 rounded-lg"><a href="{{ route('admin.data-ruang')}}">Back</a></button>
                {{-- <div class="flex justify-center">
                    <button type="submit" class="text-white bg-gradient-to-br from-pink-600 via-fuchsia-600 to-purple-600 px-5 py-2.5 w-[800px] rounded-lg">Submit</button>
                </div> --}}
              </form>
        </div>
    </div>
</div>







