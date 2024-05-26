
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
            <form class="mx-auto space-y-5" action="{{ route('admin.store-laporan')}}" method="POST">
                @csrf
                <div class="flex flex-wrap -mx-3">
                    <div class="w-full md:w-1/2 px-3 mb-5">
                        <div class="relative z-0 w-full group">
                            <label for="exampleFormControlInput1" class="peer-focus:font-medium absolute text-sm text-purple-700 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-purple-700 peer-focus:dark:text-purple-700 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6" style="font-size: 15px">Nama Barang</label><br>
                            <select name="nama_barang" style="font-size: 14px" class="block py-2.5 px-0 w-full text-sm text-gray-900 border-0 border-b-2 bg-transparent border-purple-700 appearance-none focus:outline-none focus:ring-0 focus:border-purple-600 peer">
                                <option value="">Pilih Nama Barang</option>
                                  @foreach ($barang as $item)
                                  <option class="form-label fw-bolder text-secondary hover:bg-purple-600">{{$item->nama_barang}}</option>
                                  @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 px-3 mb-5">
                        <div class="relative z-0 w-full group">
                            <input type="date" name="tanggal_pembelian" id="nama_barang" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-purple-600 peer" placeholder=" " />
                            <label for="nama_barang" class="peer-focus:font-medium absolute text-sm text-purple-700 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-purple-700 peer-focus:dark:text-purple-700 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Tanggal Pembelian</label>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3">
                    <div class="w-full md:w-1/2 px-3 mb-5">
                        <div class="relative z-0 w-full group">
                            <input type="date" name="tanggal_pemakaian" id="nama_barang" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-purple-600 peer" placeholder=" " />
                            <label for="nama_barang" class="peer-focus:font-medium absolute text-sm text-purple-700 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-purple-700 peer-focus:dark:text-purple-700 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Tanggal Pemakaian</label>
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 px-3 mb-5">
                        <div class="relative z-0 w-full group">
                            <label for="exampleFormControlInput1" class="peer-focus:font-medium absolute text-sm text-purple-700 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-purple-700 peer-focus:dark:text-purple-700 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6" style="font-size: 15px">Ruangan</label><br>
                            <select name="ruangan" style="font-size: 14px" class="block py-2.5 px-0 w-full text-sm text-gray-900 border-0 border-b-2 bg-transparent border-purple-700 appearance-none focus:outline-none focus:ring-0 focus:border-purple-600 peer">
                                <option value="">Pilih Ruangan</option>
                                  @foreach ($ruang as $item)
                                  <option class="form-label fw-bolder text-secondary hover:bg-purple-600">{{$item->nama_ruangan}}</option>
                                  @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3">
                    <div class="w-full md:w-1/2 px-3 mb-5">
                        <div class="relative z-0 w-full group">
                            <input type="text" name="nama_pemakai" id="nama_barang" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-purple-600 peer" placeholder=" " value="{{ Auth::user()->username }}" readonly />
                            <label for="nama_barang" class="peer-focus:font-medium absolute text-sm text-purple-700 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-purple-700 peer-focus:dark:text-purple-700 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama_pemakai</label>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3">
                <div class="flex space-x-3">
                    <button type="submit" class="text-white bg-gradient-to-br from-pink-600 via-fuchsia-600 to-purple-600 px-5 py-2.5 rounded-lg">Submit</button>
                    <a href="{{ route('admin.dashboard') }}" class="text-white bg-gradient-to-br from-pink-600 via-fuchsia-600 to-purple-600 px-5 py-2.5 rounded-lg inline-block text-center">Back</a>
                </div>
            </form>
            
        </div>
    </div>
</div>

@if(session('failed'))

@endif







