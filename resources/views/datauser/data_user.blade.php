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
                    <h1 class="text-light7 text-lg font-bold ps-3 mt-3 mb-4">Data User</h1>
                    <table class="min-w-full bg-light1 bg-opacity-70 backdrop-blur-lg text-light9 mb-10">
                        <thead class="bg-light1 bg-opacity-70 backdrop-blur-lg">
                            <tr>
                                <th class="py-2 px-4  border-b border-gray-300">No</th>
                                <th class="py-2 px-4  border-b border-gray-300">Name</th>
                                <th class="py-2 px-4  border-b border-gray-300">Username</th>
                                <th class="py-2 px-4  border-b border-gray-300">Role</th>
                                <th class="py-2 px-4  border-b border-gray-300">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $item)
                            <tr class="hover:bg-slate-300 duration-500">
                                <td class="py-2 px-4 border-b border-gray-300">{{ $loop->iteration }}</td>
                                <td class="py-2 px-4 border-b border-gray-300">{{$item->name}}</td>
                                <td class="py-2 px-4 border-b border-gray-300">{{$item->username}}</td>
                                <td class="py-2 px-4 border-b border-gray-300">{{$roles = $item->getRoleNames()->join(', ');}}</td>
                                <td class="py-2 px-4 border-b border-gray-300">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle link-underline link-underline-opacity-0 text-dark" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                              Option
                                        </a>
                                        <ul class="dropdown-menu bg-light2 bg-opacity-70 backdrop-blur-3xl shadow-lg">
                                            <li>
                                                <a class="dropdown-item text-light9 hover:bg-slate-300 duration-500 rounded-lg hover:text-light9" href="{{ route('admin.edit-user',['id' => $item->id])}}"><i class="bi bi-person me-3"></i>Edit User</a>
                                            </li>
                                            <li>
                                                <form action="{{ route('admin.delete-user',['id' => $item->id])}}" method="POST">
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



