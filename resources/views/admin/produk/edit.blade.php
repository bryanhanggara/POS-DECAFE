@extends('layouts.app')

@section('title')
    Ubah Data {{$produk->nama_makanan}}
@endsection

@section('main')
<section id="main" class="bg-gray-100">
    <section id="add-menu">
        <div class="p-4 sm:ml-64 pt-20">
            <div class="flex w-full items-center justify-between">
                <h4 class="text-xl font-medium">Edit Menu {{$produk->nama_makanan}}</h4>
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
                        Edit Menu
                    </li>
                </ol>
            </div>

            <div class="p-4 border-2 border-gray-200 rounded-lg dark:border-gray-700 mt-6">
                <form action="{{route('produk.update', $produk->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')

                    <div class="grid gap-6 xl:grid-cols-3">
                        <div class="flex items-center justify-center">
                       <div class="rounded-lg border border-default-200 p-6">
                           <div class="flex flex-col items-center justify-center w-full">
                              <label for="dropzone-file">
                                <img src="{{Storage::url($produk->foto_makanan)}}"
                                alt="" id="drop" class="w-full h-64">
                              </label>
                                <input id="dropzone-file" type="file" class="hidden" name="foto_makanan" />
                           </div>
                           <h4 class="mb-4 text-center text-peach-500 font-medium pt-5">Update Image Here</h4>
                       </div>
                   </div>

                   <div class="xl:col-span-2">
                       <div class="space-y-6">
                           <div class="rounded-lg border border-peach-100 p-6">
                               <div class="gap-6 lg:grid-cols-2">
                                   <div class="space-y-6">
                                       <div class="relative max-w-full">
                                           <label for="MenuName"
                                               class="mb-2 block text-sm font-medium text-peach-500">Name Of
                                               Menu</label>
                                           <div class="relative max-w-full">
                                               <input type="text" placeholder="Product Name" name="nama_makanan"
                                                   id="productname"
                                                   class="form-input rounded-lg border border-peach-800 px-4 py-2.5 dark:bg-peach-300 w-full"
                                                   value="{{$produk->nama_makanan}}">
                                           </div>
                                       </div>
                                       <div class="relative max-w-full">
                                           <label for="MenuName"
                                               class="mb-2 block text-sm font-medium text-peach-500">Category</label>
                                           <div class="relative max-w-full">
                                               <input type="text" placeholder="Category Name" name="category"
                                                   id="productname"
                                                   class="form-input rounded-lg border border-peach-800 px-4 py-2.5 dark:bg-peach-300 w-full"
                                                   value="{{$produk->category}}">
                                           </div>
                                       </div>
                                       <div class="relative max-w-full">
                                           <label for="MenuName"
                                               class="mb-2 block text-sm font-medium text-peach-500">Quantity</label>
                                           <div class="relative max-w-full">
                                               <input type="text" placeholder="Stok Makanan" name="stok"
                                                   id="productname"
                                                   class="form-input rounded-lg border border-peach-800 px-4 py-2.5 dark:bg-peach-300 w-full"
                                                   value="{{$produk->stok}}">
                                           </div>
                                       </div>
                                       <div class="relative max-w-full">
                                           <label for="MenuName"
                                               class="mb-2 block text-sm font-medium text-peach-500">Price</label>
                                           <div class="relative max-w-full">
                                               <input type="text" placeholder="Harga" name="harga"
                                                   id="productname"
                                                   class="form-input rounded-lg border border-peach-800 px-4 py-2.5 dark:bg-peach-300 w-full"
                                                   value="{{$produk->harga}}">
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>

                       <div class="flex flex-wrap items-center justify-end gap-8 pt-3">
                           <div class="flex flex-wrap items-center gap-4">
                               <button type="reset"
                                   class="inline-flex items-center gap-1 rounded-lg border border-primary bg-wh px-5 py-2 text-center align-middle text-peach-500 font-semibold tracking-wide duarion-500 hover:bg-peach-100">
                                   <svg class="w-6 h-6 text-peach-500 dark:text-white" aria-hidden="true"
                                       xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                       <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                           stroke-width="2"
                                           d="M14.5 8H11V6.1c0-.9-.9-1.4-1.5-.9L4.4 9.7a1.2 1.2 0 0 0 0 1.8l5 4.4c.7.6 1.6 0 1.6-.8v-2h2a3 3 0 0 1 3 3V19a5.6 5.6 0 0 0-1.5-11Z" />
                                   </svg>
                                   <span>Cancel</span>
                               </button>
                               <button type="submit"
                                   class="inline-flex items-center gap-1 rounded-lg border border-primary bg-peach-500 px-5 py-2 text-center align-middle text-white font-semibold tracking-wide duarion-500 hover:bg-peach-700">
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
                </form>
            </div>
        </div>
    </section>
</section>

@endsection