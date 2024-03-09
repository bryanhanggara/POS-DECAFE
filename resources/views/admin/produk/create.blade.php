@extends('layouts.app')

@section('title')
    Tambah Data Baru
@endsection

@section('main')
     <section id="main" class="bg-gray-100">
        <section id="add-menu">
            <div class="p-4 pt-20 sm:ml-64">
                <div class="flex items-center justify-between w-full">
                    <h4 class="text-xl font-medium">Add Menu</h4>
                    <ol aria-label="Breadcrumb" class="items-center hidden min-w-0 gap-2 whitespace-nowrap md:flex">
                        <li class="text-sm">
                            <a href="menu-list.html"
                                class="flex items-center gap-2 text-black align-middle transition-all hover:text-peach-500">
                                Menu
                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m9 5 7 7-7 7" />
                                </svg>
                            </a>
                        </li>
                        <li aria-current="page"
                            class="text-sm font-medium truncate text-peach-500 hover:text-primary-500">
                            Edit Menu
                        </li>
                    </ol>
                </div>

                <div class="p-4 mt-6 border-2 border-gray-200 rounded-lg dark:border-gray-700">
                    <form action="{{route('produk.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="grid gap-6 xl:grid-cols-3">
                            <div class="flex items-center justify-center">
                                <div class="p-6 border rounded-lg border-default-200">
                                    <div class="flex flex-col items-center justify-center w-full">
                                        <label for="dropzone-file"
                                            class="relative flex flex-col items-center justify-center w-full h-64 px-4 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                                <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 20 16">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                                </svg>
                                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span
                                                        class="font-semibold">Click to upload</span> or drag and drop</p>
                                                <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF
                                                    (MAX. 800x400px)</p>
                                            </div>
                                            <!-- Preview container -->
                                            <div id="image-preview" class="absolute top-0 right-0 w-full h-full"></div>
                                            <input id="dropzone-file" type="file" class="hidden" name="foto_makanan" />
                                        </label>
                                    </div>
                                    <h4 class="pt-5 mb-4 font-medium text-center text-peach-500">Upload Image Here</h4>
                                </div>
                            </div>
    
                            <div class="xl:col-span-2">
                               
                                <div class="space-y-6">
                                    <div class="p-6 border rounded-lg border-peach-100">
                                        <div class="gap-6 lg:grid-cols-2">
                                            <div class="space-y-6">
                                                <div class="relative max-w-full">
                                                    <label for="MenuName"
                                                        class="block mb-2 text-sm font-medium text-peach-500">Name Of
                                                        Menu</label>
                                                    <div class="relative max-w-full">
                                                        <input type="text" placeholder="Product Name" name="nama_makanan"
                                                            id="productname"
                                                            class="form-input rounded-lg border border-peach-500 px-4 py-2.5 focus:ring-peach-500 focus:border-peach-500 dark:bg-peach-300 w-full"
                                                            value>
                                                    </div>
                                                </div>
                                                <div class="relative max-w-full">
                                                    <label for="MenuName"
                                                        class="block mb-2 text-sm font-medium text-peach-500">Category</label>
                                                    <div class="relative max-w-full">
                                                        <input type="text" placeholder="Product Name" name="category"
                                                            id="productname"
                                                            class="form-input rounded-lg border border-peach-500 px-4 py-2.5 focus:ring-peach-500 focus:border-peach-500 dark:bg-peach-300 w-full"
                                                            value>
                                                    </div>
                                                </div>
                                                <div class="relative max-w-full">
                                                    <label for="MenuName"
                                                        class="block mb-2 text-sm font-medium text-peach-500">Quantity</label>
                                                    <div class="relative max-w-full">
                                                        <input type="text" placeholder="Product Name" name="stok"
                                                            id="productname"
                                                            class="form-input rounded-lg border border-peach-500 px-4 py-2.5 focus:ring-peach-500 focus:border-peach-500 dark:bg-peach-300 w-full"
                                                            value>
                                                    </div>
                                                </div>
                                                <div class="relative max-w-full">
                                                    <label for="MenuName"
                                                        class="block mb-2 text-sm font-medium text-peach-500">Price</label>
                                                    <div class="relative max-w-full">
                                                        <input type="text" placeholder="Product Name" name="harga"
                                                            id="productname"
                                                            class="form-input rounded-lg border border-peach-500 px-4 py-2.5 focus:ring-peach-500 focus:border-peach-500 dark:bg-peach-300 w-full"
                                                            value>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
                               
                                <div class="flex flex-wrap items-center justify-end gap-8 pt-3">
                                    <button type="reset"
                                        class="inline-flex items-center gap-2 px-5 py-2 font-semibold tracking-wide text-center text-red-600 align-middle border rounded-lg border-primary bg-wh duarion-500 hover:bg-red-200">
                                        <svg class="w-6 h-6 text-red-600 dark:text-white" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z" />
                                        </svg>
                                        <span>Clear</span>
                                    </button>
                                    <button type="submit"
                                        class="inline-flex items-center gap-1 px-5 py-2 font-semibold tracking-wide text-center text-white align-middle border rounded-lg border-primary bg-peach-500 duarion-500 hover:bg-peach-700">
                                        <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M9 7V2.2a2 2 0 0 0-.5.4l-4 3.9a2 2 0 0 0-.3.5H9Z" />
                                            <path fill-rule="evenodd"
                                                d="M11 7V2h7a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V9h5a2 2 0 0 0 2-2Zm4.7 5.7a1 1 0 0 0-1.4-1.4L11 14.6l-1.3-1.3a1 1 0 0 0-1.4 1.4l2 2c.4.4 1 .4 1.4 0l4-4Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span>Save</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </section>
    </section>    
@endsection