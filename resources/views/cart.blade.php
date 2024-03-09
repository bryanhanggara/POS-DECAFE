@extends('layouts.app')


@section('main')
<section id="add-menu">
    <div class="p-4 sm:ml-64 pt-20">
        <div class="page-content space-y-6">
            <div class="container">
                <div>
                    <div class="p-4 rounded-lg">
                        <div class="flex w-full items-center justify-between">
                            <ol aria-label="Breadcrumb"
                                class="hidden min-w-0 items-center gap-2 whitespace-nowrap md:flex px-4">
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
                            <div class="rounded-lg">
                                <div class="grid grid-cols-1 xl:grid-cols-3 gap-4 mb-4">
                                    <div class="xl:col-span-2 w-full overflow-hidden border border-gray-200 rounded-lg">
                                        <h4 class="text-lg text-gray-600 font-medium px-6 py-4">Menu</h4>
                                        <table class=" divide-y w-full divide-peach-100 text-left">
                                            <thead class="bg-gray-100 font-bold text-xl">
                                                <th
                                                    class="whitespaces-nowrap px-6 py-2 text-sm font-medium text-gray-400">
                                                    Products</th>
                                                <th
                                                    class="whitespaces-nowrap px-6 py-2 text-sm font-medium text-gray-400">
                                                    Price</th>
                                                <th
                                                    class="whitespaces-nowrap px-6 py-2 text-sm font-medium text-gray-400">
                                                    Quantity</th>
                                                <th
                                                    class="whitespaces-nowrap px-6 py-2 text-sm font-medium text-gray-400">
                                                    Sub-Total</th>
                                                <th
                                                    class="whitespaces-nowrap px-6 py-2 text-sm font-medium text-gray-400">
                                                    Remove</th>
                                            <tbody class="divide-y divide-peach-100 justify-center items-center">
                                                @forelse ($products as $product)
                                                <tr class="hover:bg-peach-100">
                                                    <td
                                                        class="whitespace-nowrap flex items-center justify-start px-6 py-4 gap-x-4 text-sm mx-auto font-medium text-peach-900">
                                                        <div class="h-20 w-20 shrink">
                                                            <img src="{{Storage::url($product->foto_makanan)}}" alt="Apples Roll"
                                                                class="h-full w-full object-cover rounded">
                                                        </div>
                                                        {{$product->nama_makanan}}
                                                    </td>
                                                    <td
                                                        class="whitespace-nowrap px-6 py-4 text-sm font-medium text-black">
                                                        {{$product->harga}}
                                                    </td>
                                                    <td
                                                        class="whitespace-nowrap px-6 py-4 text-sm font-medium text-black">
                                                        {{$product->quantity}}
                                                    </td>
                                                    <td
                                                        class="whitespace-nowrap px-6 py-4 text-sm font-medium text-black">
                                                        {{$product->quantity * $product->harga}}</td>
                                                    <td
                                                        class="whitespace-nowrap px-6 py-4 text-sm font-medium text-black">
                                                        <form action="{{route('cart.remove', $product->id)}}" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="w-7 h-7 flex justify-center items-center border border-gray-500 text-gray-500 rounded-full">
                                                                <ion-icon name="close-outline"></ion-icon>
                                                            </button>
                                                        </form>
                                                </tr>
                                                @empty
                                                <th
                                                class="whitespaces-nowrap px-6 py-2 text-sm font-medium text-gray-400">
                                                Cart Is Empty</th>
                                                @endforelse
                                            </tbody>
                                        </table>
                                        <div
                                            class="whitespace-nowrap p-6 text-sm font-medium text-black">
                                            <a href="{{route('listmenu')}}"
                                                class="border border-peach-500 text-peach-500 px-6 py-3 rounded-md hover:bg-peach-500 hover:text-white duration-300">Shop
                                                More</a>
                                         </div>
                                         
                                    </div>
                                    

                                    <div class="xl:col-span-1 border border-gray-200 rounded-lg px-6 py-4 h-fit">
                                        <h3 class="text-lg pb-6">Cart Total</h3>
                                        <div class="flex justify-between">
                                            <span class="">Sub Total</span>
                                            <span class="text-gray-500">Rp. {{$totalPrice}}</span>
                                        </div>
                                        <div class="flex justify-between border-b border-gray-400 py-4">
                                            <span class="">Discount</span>
                                            <span class="text-gray-500">Rp. 0</span>
                                        </div>
                                        <div class="flex justify-between py-2.5">
                                            <span class="">Total</span>
                                            <span class="text-gray-500">{{$totalPrice}}</span>
                                        </div>
                                        <a href="#"
                                            class="border flex justify-center items-center bg-peach-500 text-white my-4 py-2 rounded-md hover:bg-peach-600 duration-300">Payment Process</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection
