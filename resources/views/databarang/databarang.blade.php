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
        <div class="antialiased font-sans min-h-screen">
            <div class="py-8 px-4 w-1/1 ms-[323px] rounded-lg me-[6px] mt-[80px]">
                <div class="overflow-x-auto bg-light1 bg-opacity-70 backdrop-blur-lg shadow-lg p-2 rounded-lg">
                    <div class="flex justify-between items-center ps-3 pe-3 mt-3 mb-4">
                        <h1 class="text-light7 text-lg font-bold">Data Barang</h1>
                    </div>
                    <table class="min-w-full bg-none text-light9 mb-10">
                        <thead class="bg-none">
                            <tr>
                                <th class="py-2 px-4  border-b border-gray-300">No</th>
                                <th class="py-2 px-4  border-b border-gray-300">Kode Barang</th>
                                <th class="py-2 px-4  border-b border-gray-300">Kode Pembelian</th>
                                <th class="py-2 px-4  border-b border-gray-300">Nama Barang</th>
                                <th class="py-2 px-4  border-b border-gray-300">Merk</th>
                                <th class="py-2 px-4  border-b border-gray-300">Stok</th>
                                <th class="py-2 px-4  border-b border-gray-300">Harga</th>
                                <th class="py-2 px-1  border-b border-gray-300">Total Harga</th>
                                <th class="py-2 px-4  border-b border-gray-300">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                            <tr class="hover:bg-slate-300 duration-500">
                                <td class="py-2 px-4 border-b border-gray-300">{{ $loop->iteration }}</td>
                                <td class="py-2 px-4 border-b border-gray-300">{{$item->kode_barang}}</td>
                                <td class="py-2 px-4 border-b border-gray-300">{{$item->kode_pembelian}}</td>
                                <td class="py-2 px-4 border-b border-gray-300">{{$item->nama_barang}}</td>
                                <td class="py-2 px-4 border-b border-gray-300">{{$item->merk}}</td>
                                <td class="py-2 px-4 border-b border-gray-300">{{$item->jumlah}}</td>
                                <td class="py-2 px-4 border-b border-gray-300">
                                    @php
                                    $harga = $item->harga;
                                    @endphp
                                    Rp. {{$harga_terformat = number_format($harga, 0, ',', '.')}}
                                </td>
                                <td class="py-2 px-1 border-b border-gray-300">
                                    @php
                                    $harga = $item->total;
                                    @endphp
                                    Rp. {{$harga_terformat = number_format($harga, 0, ',', '.')}}
                                </td>
                                <td class="py-2 px-4 border-b border-gray-300">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle link-underline link-underline-opacity-0 text-dark" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                              Option
                                        </a>
                                        <ul class="dropdown-menu bg-light2 bg-opacity-70 backdrop-blur-3xl shadow-lg">  
                                            <li>
                                                <form action="{{ route('admin.delete-data-barang',['kode_barang' => $item->kode_barang])}}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="dropdown-item  text-red-800 hover:bg-slate-300 duration-500 rounded-lg hover:text-red-800">
                                                        <i class="bi bi-trash me-3"></i>Delete
                                                    </button>
                                                </form>
                                            </li>
                                        </ul>
                                  </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



