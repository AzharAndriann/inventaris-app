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
            <form class="mx-auto space-y-5" action="{{ route('admin.update-data-pembelian',['kode_pembelian' => $data->kode_pembelian])}}" method="POST">
                @method('PUT')
                @csrf
                <div class="flex flex-wrap -mx-3">
                    <div class="w-full md:w-1/2 px-3 mb-5">
                        <div class="relative z-0 w-full group">
                            <input type="text" name="kode_barang" id="kode_barang" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-purple-600 peer" placeholder=" " value="{{ $data->kode_pembelian }}" readonly />
                            <label for="kode_barang" class="peer-focus:font-medium absolute text-sm text-purple-700 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-purple-700 peer-focus:dark:text-purple-700 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Kode Pembelian</label>
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 px-3 mb-5">
                        <div class="relative z-0 w-full group">
                            <input type="text" name="nama_barang" id="nama_barang" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-purple-600 peer" placeholder=" " value="{{ $data->nama_barang }}" />
                            <label for="nama_barang" class="peer-focus:font-medium absolute text-sm text-purple-700 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-purple-700 peer-focus:dark:text-purple-700 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama Barang</label>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3">
                    <div class="w-full md:w-1/2 px-3 mb-5">
                        <div class="relative z-0 w-full group">
                            <input type="text" name="merk" id="merk" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-purple-600 peer" placeholder=" " value="{{ $data->merk }}" />
                            <label for="merk" class="peer-focus:font-medium absolute text-sm text-purple-700 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-purple-700 peer-focus:dark:text-purple-700 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Merk</label>
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 px-3 mb-5">
                        <div class="relative z-0 w-full group">
                            <input type="number" name="jumlah" id="jumlah" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-purple-600 peer" placeholder=" " value="{{ $data->jumlah }}" readonly/>
                            <label for="jumlah" class="peer-focus:font-medium absolute text-sm text-purple-700 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-purple-700 peer-focus:dark:text-purple-700 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Jumlah</label>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3">
                    <div class="w-full md:w-1/2 px-3 mb-5">
                        <div class="relative z-0 w-full group">
                            <input type="number" name="harga" id="harga" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-purple-600 peer" placeholder=" " value="{{ $data->harga }}" readonly/>
                            <label for="harga" class="peer-focus:font-medium absolute text-sm text-purple-700 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-purple-700 peer-focus:dark:text-purple-700 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Harga</label>
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 px-3 mb-5">
                        <div class="w-full md:w-1/2 px-3 mb-5">
                            <div class="relative z-0 w-full group">
                                <input type="date" name="tanggal_pembelian" id="bulan" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-purple-600 peer" placeholder=" " />
                                <label for="bulan" class="peer-focus:font-medium absolute text-sm text-purple-700 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-purple-700 peer-focus:dark:text-purple-700 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Tanggal Pembelian</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3">
                <div class="flex space-x-3">
                    <button type="submit" class="text-white bg-gradient-to-br from-pink-600 via-fuchsia-600 to-purple-600 px-5 py-2.5 rounded-lg">Submit</button>
                    <a href="{{ route('admin.data-pembelian') }}" class="text-white bg-gradient-to-br from-pink-600 via-fuchsia-600 to-purple-600 px-5 py-2.5 rounded-lg inline-block text-center">Back</a>
                </div>
            </form>
            
        </div>
    </div>
</div>