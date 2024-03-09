<div>
    <section id="search" class="pt-6">
        <div class="px-8 sm:ml-64">
            <form class="flex flex-col mx-4">
                <label for="default-search"
                    class="pl-4 mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 flex items-center pointer-events-none start-0 ps-6">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="search" id="default-search" wire:model.live="search"
                        class="block w-full py-2 text-base text-gray-600 border border-gray-300 rounded-full ps-12 bg-gray-50 focus:ring-blue-00 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Search Menu..."  />
                </div>
            </form>
        </div>
    </section>
    <section id="category" class="pt-6">
        <div class="px-8 sm:ml-64">
            <div class="flex flex-row flex-wrap justify-center gap-3 ">
                @foreach ($categories as $item)
                <button wire:click="updateCategory('{{ $item }}')"
                class="flex items-center justify-center gap-3 px-6 py-2 text-base text-gray-500 bg-white border-2 border-white rounded-lg shadow-md focus:border-2 focus:border-peach-500">
                <svg class="h-7" viewBox="0 0 1024 1024" class="icon" version="1.1"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M426.666667 128L128 896l768-298.666667z" fill="#FFD54F" />
                    <path
                        d="M320.021333 682.666667A106.666667 106.666667 0 0 0 213.333333 789.312c0 24.469333 8.576 46.762667 22.464 64.768l189.952-73.877333C421.056 725.653333 375.786667 682.666667 320.021333 682.666667z"
                        fill="#FF3D00" />
                    <path d="M437.354667 394.666667m-96 0a96 96 0 1 0 192 0 96 96 0 1 0-192 0Z"
                        fill="#FF3D00" />
                    <path
                        d="M597.333333 426.666667c-35.306667 0-64 28.693333-64 64.042666C533.333333 525.994667 562.026667 554.666667 597.333333 554.666667s64-28.672 64-63.957334A64.064 64.064 0 0 0 597.333333 426.666667z m0 96a32 32 0 1 1-0.021333-63.978667A32 32 0 0 1 597.333333 522.666667zM341.333333 533.333333c-35.306667 0-64 28.693333-64 64.042667C277.333333 632.661333 306.026667 661.333333 341.333333 661.333333s64-28.672 64-63.957333A64.064 64.064 0 0 0 341.333333 533.333333z m0 96a32 32 0 1 1-0.021333-63.978666A32 32 0 0 1 341.333333 629.333333z"
                        fill="#3E2723" />
                    <path
                        d="M637.269333 693.802667a42.666667 42.666667 0 0 0-54.933333-24.96c-22.058667 8.277333-133.12 70.314667-124.864 92.373333 0.725333 1.962667 2.666667 3.413333 5.077333 4.672l175.68-68.330667c-0.32-1.237333-0.490667-2.517333-0.96-3.754666z"
                        fill="#8D6E63" />
                    <path
                        d="M537.365333 731.264c-10.368-32.426667-6.549333-61.717333-6.549333-61.717333 0.704-0.917333 0.725333-2.005333 0.64-3.114667a20.586667 20.586667 0 0 0-0.341333-12.608 21.333333 21.333333 0 0 0-34.752-7.850667 96.512 96.512 0 0 0-38.869334 115.242667c0.725333 1.962667 1.813333 3.669333 2.666667 5.568l79.04-30.72c-0.576-1.6-1.28-3.114667-1.834667-4.8z"
                        fill="#8D6E63" />
                    <path
                        d="M554.666667 610.026667s-11.434667-114.602667-128-73.450667c12.565333 119.232 128 73.450667 128 73.450667zM716.693333 533.333333s-114.624 11.413333-73.450666 128c119.232-12.586667 73.450667-128 73.450666-128z"
                        fill="#689F38" />
                    <path
                        d="M892.970667 580.010667c-19.776-46.485333-65.642667-182.208-166.101334-282.645334-97.728-97.792-227.008-151.552-284.394666-167.125333-17.898667-4.821333-21.866667-5.802667-28.885334 12.010667-5.717333 14.421333-21.973333 63.722667-29.994666 86.805333a58.026667 58.026667 0 0 0-2.581334 10.026667 705.962667 705.962667 0 0 1 404.288 404.8c0.533333-0.128 1.002667-0.021333 1.578667-0.213334 14.826667-4.714667 74.048-25.386667 89.770667-30.634666 15.722667-5.333333 24.277333-14.357333 16.32-33.024z"
                        fill="#FF9800" />
                </svg>

                {{$item}}
                </button>
                @endforeach
            </div>
        </div>

    </section>
    <section id="list-menu" class="pt-8">
        <div class="px-8 sm:ml-64">
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-4 gap-y-6">
                <!-- TODO BACKEND: KEEP -->
                <!-- TODO ID quantity tiap menu kan beda jadi untuk id quantity permenu ntar bikin sesuai id menu yee, mirip list bujang bgt yan, jan lupp -->
                @foreach ($produks as $produk)
                <div class="flex flex-col bg-white rounded-lg shadow-md">
                    <div class="w-full overflow-hidden rounded-t-lg h-36">
                        <img src="{{ Storage::url($produk->foto_makanan) }}" alt="">
                    </div>
                    <div class="px-3 py-4 space-y-2">
                        <h3 class="text-xl font-medium">{{ $produk->nama_makanan }}</h3>
                        <h3 class="text-sm font-thin">Stok {{ $produk->stok }}</h3>
                        <div class="flex flex-row items-center justify-between">
                            <h4 class="text-lg font-bold text-peach-500">Rp. <span>{{ $produk->harga }}</span></h4>
                            <!--ID QUANTITY-->
                            
                        </div>
                        <!-- Tombol "Add" -->
                        <form action="{{route('cart.add', $produk->id)}}" method="post">
                            @csrf
                            <div class="flex flex-row items-center space-x-3">
                                <button onclick="decreaseQuantity('{{ $produk->id }}')"
                                    class="flex items-center justify-center p-2 duration-300 border-2 rounded-full border-peach-500 text-peach-500 hover:bg-peach-500 hover:text-white">
                                    <ion-icon name="remove-outline"></ion-icon>
                                </button>
                                <span id="quantity_{{ $produk->id }}" class="text-gray-500">0</span>
                                <button onclick="increaseQuantity('{{ $produk->id }}')"
                                    class="flex items-center justify-center p-2 duration-300 border-2 rounded-full border-peach-500 text-peach-500 hover:bg-peach-500 hover:text-white">
                                    <ion-icon name="add-outline"></ion-icon>
                                </button>
                            </div>
                            <button  onclick="addToCart('{{ $produk->id }}', '{{ $produk->nama_makanan }}', '{{ $produk->harga }}')"
                            class="hidden inline-flex items-center gap-1 px-5 py-2 font-semibold tracking-wide text-center text-white align-middle border rounded-lg border-primary bg-peach-500 duration-500 hover:bg-peach-700">
                            <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.3L19 7h-1M8 7h-.7M13 5v4m-2-2h4" />
                            </svg>
                            <span>Add</span>
                            </button>
                        </form>
                    </div>
                </div>
                @endforeach
                
                <!-- JavaScript untuk menambahkan barang ke keranjang belanja -->
                <script>
                    function addToCart(productId, productName, productPrice) {
                        var quantity = document.getElementById('quantity_' + productId).textContent;
                        
                        alert('Added ' + quantity + ' ' + productName + ' to cart. Price: Rp. ' + (quantity * productPrice));
                    }
                </script>
                
                <!-- JavaScript untuk mengubah kuantitas -->
                <script>
                    var quantities = {};
                
                    function increaseQuantity(id) {
                        if (!quantities[id]) {
                            quantities[id] = 0;
                        }
                        quantities[id]++;
                        document.getElementById('quantity_' + id).textContent = quantities[id];
                    }
                
                    function decreaseQuantity(id) {
                        if (quantities[id] && quantities[id] > 0) {
                            quantities[id]--;
                            document.getElementById('quantity_' + id).textContent = quantities[id];
                        }
                    }
                </script>
                
                <!-- TODO KEEP END -->
            </div>
        </div>
    </section>
</div>
