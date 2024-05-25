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
                        <h1 class="text-light7 text-lg font-bold">Data Pembelian</h1>
                        <a href="{{ route('admin.add-pembelian') }}" class="bg-gradient-to-br from-pink-600 via-fuchsia-600 to-purple-600 text-white px-4 py-2 rounded-lg hover:bg-gradient-to-bl">Tambah Pembelian</a>
                    </div>
                    <table class="min-w-full bg-none text-light9 mb-10">
                        <thead class="bg-none">
                            <tr>
                                <th class="py-2 px-4  border-b border-gray-300">No</th>
                                <th class="py-2 px-4  border-b border-gray-300">Kode Pembelian</th>
                                <th class="py-2 px-4  border-b border-gray-300">Kode Barang</th>
                                <th class="py-2 px-4  border-b border-gray-300">Nama Barang</th>
                                <th class="py-2 px-4  border-b border-gray-300">Merk</th>
                                <th class="py-2 px-4  border-b border-gray-300">Jumlah</th>
                                <th class="py-2 px-3  border-b border-gray-300">Harga</th>
                                <th class="py-2 px-1  border-b border-gray-300">Total Harga</th>
                                <th class="py-2 px-1  border-b border-gray-300">Tanggal Pembelian</th>
                                <th class="py-2 px-4  border-b border-gray-300">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                            <tr class="hover:bg-slate-300 duration-500">
                                <td class="py-2 px-4 border-b border-gray-300">{{ $loop->iteration }}</td>
                                <td class="py-2 px-4 border-b border-gray-300">{{$item->kode_pembelian}}</td>
                                <td class="py-2 px-4 border-b border-gray-300">{{$item->kode_barang}}</td>
                                <td class="py-2 px-4 border-b border-gray-300">{{$item->nama_barang}}</td>
                                <td class="py-2 px-4 border-b border-gray-300">{{$item->merk}}</td>
                                <td class="py-2 px-4 border-b border-gray-300">{{$item->jumlah}}</td>
                                <td class="py-2 px-3 border-b border-gray-300 text-sm">
                                    @php
                                    $harga = $item->harga;
                                    @endphp
                                    Rp. {{$harga_terformat = number_format($harga, 0, ',', '.')}}
                                </td>
                                <td class="py-2 px-1 border-b border-gray-300 text-sm">
                                    @php
                                    $harga = $item->total;
                                    @endphp
                                    Rp. {{$harga_terformat = number_format($harga, 0, ',', '.')}}
                                </td>
                                <td class="py-2 px-1 border-b border-gray-300">{{$item->tanggal_pembelian}}</td>
                                <td class="py-2 px-4 border-b border-gray-300">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle link-underline link-underline-opacity-0 text-dark" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                              Option
                                        </a>
                                        <ul class="dropdown-menu bg-light2 bg-opacity-70 backdrop-blur-3xl shadow-lg">
                                            <li>
                                                <a class="dropdown-item text-light9 hover:bg-slate-300 duration-500 rounded-lg hover:text-light9" href="{{ route('admin.edit-data-pembelian',['kode_pembelian' => $item->kode_pembelian])}}"><i class="bi bi-person me-3"></i>Edit</a>
                                            </li>
                                            <li>
                                                <form action="{{ route('admin.delete-data-pembelian',['kode_pembelian' => $item->kode_pembelian])}}" method="POST">
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



