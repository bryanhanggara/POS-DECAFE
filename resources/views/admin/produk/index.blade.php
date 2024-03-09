@extends('layouts.app')

@section('title')
    List Menu
@endsection

@section('main')
<section id="main" class="bg-gray-100">
    <section id="menu-list">
        <div class="p-4 sm:ml-64 pt-20">
            <div class="p-4 border-2 border-gray-200 rounded-lg dark:border-gray-700 mt-14">

                <div class="flex w-full items-center justify-between">
                    <h4 class="text-xl font-medium">Menu</h4>
                    <ol aria-label="Breadcrumb" class="hidden min-w-0 items-center gap-2 whitespace-nowrap md:flex">
                        <li class="text-sm">
                            <a href="menu-list.html"
                                class="flex items-center gap-2 align-middle text-black transition-all hover:text-peach-500">
                                Menu
                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m9 5 7 7-7 7" />
                                </svg>
                            </a>
                        </li>
                        <li aria-current="page"
                            class="truncate text-sm font-medium text-peach-500 hover:text-primary-500">
                            List Menu
                        </li>
                    </ol>
                </div>

                <div class="grid grid-cols-1 pt-5">
                    <div class="rounded-lg border border-default-200">
                        <div class="overflow-hidden px-6 py-4 justify-between gap-10">
                            <div class="flex items-center justify-between">
                                <h2 class="text-2xl text-black font-bold">List Menu</h2>
                                <div class="flex items-center justify-between">
                                    <a href="{{route('produk.create')}}"
                                        class="inline-flex rounded-xl bg-peach-500 px-6 py-2.5 text-l text-white hover:bg-peach-600 font-semibold">
                                        <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5" />
                                        </svg>
                                        <span>Add Menu</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols gap-4 mb-4">
                            <div class="relative overflow-x-auto">
                                <div class="inline-block min-w-full align-middle">
                                    <div class="overflow-hidden">
                                        <!-- TABEL YOH -->
                                        <table
                                            class="min-w-full divide-y divide-peach-100 justify-center text-center">
                                            <thead class="bg-gray-100 font-bold text-xl ">
                                                <th
                                                    class="whitespaces-nowrap px-6 py-3 text-sm font-bold text-peach-500">
                                                    Image</th>
                                                <th
                                                    class="whitespaces-nowrap px-6 py-3 text-sm font-bold text-peach-500">
                                                    Name of Menu</th>
                                                <th
                                                    class="whitespaces-nowrap px-6 py-3 text-sm font-bold text-peach-500">
                                                    Category</th>
                                                <th
                                                    class="whitespaces-nowrap px-6 py-3 text-sm font-bold text-peach-500">
                                                    Price</th>
                                                <th
                                                    class="whitespaces-nowrap px-6 py-3 text-sm font-bold text-peach-500">
                                                    Quantity</th>
                                                <th
                                                    class="whitespaces-nowrap px-6 py-3 text-sm font-bold text-peach-500">
                                                    Action</th>
                                                </th>
                                            <tbody class="divide-y divide-peach-100 justify-center items-center">
                                                @foreach ($produks as $produk)
                                                <tr class="hover:bg-peach-100">
                                                    <td
                                                        class="whitespace-nowrap flex items-center justify-center px-6 py-4 text-sm mx-auto font-medium text-peach-900">
                                                        <div class="h-20 w-20 shrink">
                                                            <img src="{{ Storage::url($produk->foto_makanan) }}" alt="Apples Roll" class="h-full w-full object-cover rounded">

                                                        </div>
                                                    </td>
                                                    <td
                                                        class="whitespace-nowrap px-6 py-4 text-sm font-medium text-black">
                                                        {{$produk->nama_makanan}}
                                                    </td>
                                                    <td
                                                        class="whitespace-nowrap px-6 py-4 text-sm font-medium text-black">
                                                        {{$produk->category}}</td>
                                                    <td
                                                        class="whitespace-nowrap px-6 py-4 text-sm font-medium text-black">
                                                        Rp {{$produk->harga}}</td>
                                                    <td
                                                        class="whitespace-nowrap px-6 py-4 text-sm font-medium text-black">
                                                        {{$produk->stok}}</td>
                                                    <td
                                                        class="whitespace-nowrap px-6 py-4 text-sm font-medium text-black">
                                                        <div class="flex justify-center gap-3">
                                                            <a href="{{route('produk.edit', $produk->id)}}">
                                                                <svg class="w-6 h-6 text-gray-800 dark:text-white hover:text-peach-500"
                                                                    aria-hidden="true"
                                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24">
                                                                    <path stroke="currentColor"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" stroke-width="2"
                                                                        d="m14.3 4.8 2.9 2.9M7 7H4a1 1 0 0 0-1 1v10c0 .6.4 1 1 1h11c.6 0 1-.4 1-1v-4.5m2.4-10a2 2 0 0 1 0 3l-6.8 6.8L8 14l.7-3.6 6.9-6.8a2 2 0 0 1 2.8 0Z" />
                                                                </svg>
                                                            </a>
                                                           <form action="{{route('produk.destroy', $produk->id)}}" method="post">
                                                                @csrf
                                                                @method('delete')
                                                                <button type="submit">
                                                                    <svg class="w-6 h-6 text-gray-800 dark:text-white hover:text-peach-500"
                                                                        aria-hidden="true"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        fill="currentColor" viewBox="0 0 24 24">
                                                                        <path fill-rule="evenodd"
                                                                            d="M8.6 2.6A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4c0-.5.2-1 .6-1.4ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
                                                                            clip-rule="evenodd" />
                                                                    </svg>
                                                                </button>
                                                            </form>
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
                </div>
            </div>
        </div>
    </section>
</section>
@endsection