@extends('layouts.app-petugas')
@section('content')

<div class="wrapper bg-light2">
    <div class="sidebar">
        @include('partials.sidebar-petugas')
    </div>
    <div class="main bg-light2">
        <div class="navbar-custom">
            @include('partials.navbar-petugas')
        </div>
        <main class="content px-3 py-2 ms-[330px] mt-[100px]">
            <div class="flex gap-3 me-3">
                <div class="flex w-1/4 h-[80px] rounded-xl bg-light1 items-center justify-between px-4 shadow-md">
                    <div class="flex flex-col">
                        <h1 class="text-slate-500 text-md font-semibold">Total User</h1>
                        <h3 class="text-lg font-bold text-light9">90 Users</h3>
                    </div>
                    <div class="bg-gradient-to-br from-pink-600 via-fuchsia-600 to-purple-600 h-[50px] w-[50px] flex items-center justify-center rounded-lg">
                        <i class="bi bi-people text-slate-200 text-2xl"></i>
                    </div>
                </div>
                <div class="flex w-1/4 h-[80px] rounded-xl bg-light1 items-center justify-between px-4 shadow-md">
                    <div class="flex flex-col">
                        <h1 class="text-slate-500 text-md font-semibold">Total Barang</h1>
                        {{-- <h3 class="text-lg font-bold text-light9">{{$dataBarangAll}} Barang</h3> --}}
                    </div>
                    <div class="bg-gradient-to-br from-pink-600 via-fuchsia-600 to-purple-600 h-[50px] w-[50px] flex items-center justify-center rounded-lg">
                        <i class="bi bi-box text-slate-200 text-2xl"></i>
                    </div>
                </div>
                <div class="flex w-1/4 h-[80px] rounded-xl bg-light1 items-center justify-between px-4 shadow-md">
                    <div class="flex flex-col">
                        <h1 class="text-slate-500 text-md font-semibold">Total Pemakaian</h1>
                        <h3 class="text-lg font-bold text-light9">10 Pemakaian</h3>
                    </div>
                    <div class="bg-gradient-to-br from-pink-600 via-fuchsia-600 to-purple-600 h-[50px] w-[50px] flex items-center justify-center rounded-lg">
                        <i class="bi bi-bar-chart text-slate-200 text-2xl"></i>
                    </div>
                </div>
                <div class="flex w-1/4 h-[80px] rounded-xl bg-light1 items-center justify-between px-4 shadow-md">
                    <div class="flex flex-col">
                        <h1 class="text-slate-500 text-md font-semibold">Total Pembelian</h1>
                        {{-- <h3 class="text-lg font-bold text-light9">{{$dataPembelianAll}} Pembelian</h3> --}}
                    </div>
                    <div class="bg-gradient-to-br from-pink-600 via-fuchsia-600 to-purple-600 h-[50px] w-[50px] flex items-center justify-center rounded-lg">
                        <i class="bi bi-cart text-slate-200 text-2xl"></i>
                    </div>
                </div>
            </div>
            <div class="flex mt-4">
                <div class="w-[1000px] h-[500px] bg-light1 shadow-md bg-opacity-70 backdrop-blur-lg rounded-lg me-3 p-4">
                    <h1 class="text-light8 text-2xl font-semibold ">Data Pembelian</h1>
                    <div id="area-chart">

                    </div>
                </div>
            {{-- <div class="flex mt-4 gap-3">
                <div class="w-[1000px] h-[500px] bg-light1 shadow-md bg-opacity-70 backdrop-blur-lg rounded-lg">
                    <div class="flex justify-between content-center">
                        <div class="ms-4 content-center">
                            <h1 class="text-light7 text-xl font-semibold mt-4">Inventaris CV OGAH RUGI</h1>
                            <h2 class="text-light8 text-3xl font-bold">Dashboard Admin</h2>
                            <p class="text-slate-500 text-md me-5 mt-7">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, eveniet!</p>
                        </div>
                        <div class="grid place-items-center justify-center">
                          <div class="w-[250px] h-[250px] my-[125px] bg-gradient-to-br from-pink-600 via-fuchsia-600 to-purple-900 rounded-lg me-8 items-center content-center text-center">
                            <i class="bi bi-boxes text-white text-[120px]"></i>
                          </div>
                        </div>
                      </div>
                </div> --}}

                <div class="flex flex-col bg-opacity-70 backdrop-blur-md  bg-white rounded-lg shadow dark:bg-gray-800 p-4 md:p-6 w-1/2 h-[500px] me-3">
                    <div class="flex flex-col justify-between content-center">
                        <div class="ms-4 content-center">
                            <h1 class="text-light7 text-xl font-semibold mt-2">Inventaris CV OGAH RUGI</h1>
                            <h2 class="text-light8 text-3xl font-bold">Dashboard Petugas</h2>
                        </div>
                        <div class="grid place-items-center mx-auto">
                          <div class="w-[250px] h-[250px] mt-12  bg-gradient-to-br from-pink-600 via-fuchsia-600 to-purple-900 rounded-lg items-center content-center text-center">
                            <i class="bi bi-boxes text-white text-[120px]"></i>
                          </div>
                        </div>
                      </div>
                  </div>          
                </div>
            </main>
        </div>
    </div>




