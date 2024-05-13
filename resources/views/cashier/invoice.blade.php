<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- * MAIN CSS -->
    {{-- <link rel="stylesheet" href="src/css/output.css"> --}}
    @vite(['resources/css/app.css','resources/js/app.js'])
    <!-- * TITTLE -->
    <title>Document</title>

    <!-- * GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">

</head>

<body>
    <!-- TODO EDIT HERE BEB -->
    <div class="bg-white rounded-lg shadow-md px-8 py-10 max-w-xl mx-auto my-4 border-2 border-gray-200">
        <div class="flex items-center justify-between mb-8">
            <div class="flex items-center">
                <img class="h-8 w-8 mr-2" src="{{url('front-end-pos/src/image/logo-1.png')}}" alt="Logo" />
                <div class="text-gray-700 font-semibold text-lg">DeCafe</div>
            </div>
            <div class="text-gray-700">
                <div class="font-bold text-xl mb-2">INVOICE</div>
            </div>
        </div>
        <div class="border-b-2 border-gray-300 pb-8 mb-8">
            <div class="max-w-sm">
                <div class="grid grid-cols-2 text-start">
                    <h6 class="font-semibold text-gray-600">Order Date</h6>
                    <p class=" text-gray-400"><span class="font-semibold text-gray-600 pr-4">:</span>{{$transaction->created_at}}</p>
                </div>
                <div class="grid grid-cols-2 text-start">
                    <h6 class="font-semibold text-gray-600">Order Status</h6>
                    <p class=" text-gray-400"><span class="font-semibold text-gray-600 pr-4">:</span> <span
                            class="inline-flex items-center px-2 rounded-full text-sm font-medium bg-green-500 text-white">{{$transaction->transaction_status}}</span>
                    </p>
                </div>
                <div class="grid grid-cols-2 text-start">
                    <h6 class="font-semibold text-gray-600">Order ID</h6>
                    <p class=" text-gray-400"><span class="font-semibold text-gray-600 pr-4">:</span>{{$transaction->id}}</p>
                </div>
                <div class="grid grid-cols-2 text-start">
                    <h6 class="font-semibold text-gray-600">Cashier</h6>
                    <p class=" text-gray-400"><span class="font-semibold text-gray-600 pr-4">:</span>{{$transaction->user->name}}
                    </p>
                </div>
            </div>
        </div>
        <table class="w-full text-left mb-8">
            <thead>
                <tr>
                    <th class="text-gray-700 font-bold py-2">Products</th>
                    <th class="text-gray-700 font-bold py-2">Quantity</th>
                    <th class="text-gray-700 font-bold py-2">Price</th>
                    <th class="text-gray-700 font-bold py-2">Sub Total</th>
                </tr>
            </thead>
            <tbody>
               @foreach ($transactionDetails as $item)
               <tr>
                    <td class="py-4 text-gray-700">{{$item->product->nama_makanan}}</td>
                    <td class="py-4 text-gray-700">{{$item->qty_produk}}</td>
                    <td class="py-4 text-gray-700">Rp {{$item->product->harga}}</td>
                    <td class="py-4 text-gray-700">Rp {{$item->price_produk}}</td>
                </tr>
               @endforeach
            </tbody>
        </table>
        <div class="flex justify-end mb-8">
            <div class="text-gray-700 mr-2">Total:</div>
            <div class="text-gray-700 font-bold text-xl">Rp {{$transaction->transaction_total}}</div>
        </div>
        <div class="border-t-2 border-gray-300 pt-8 mb-8">
            <div class="text-gray-700 mb-2">Struk ini adalah bukti pembayaran yang sah</div>
            <div class="text-gray-700 mb-2">Ada masalah hubungi:</div>
            <div class="text-gray-700">123 Main St., Tamyiz, Indralaya 12345</div>
        </div>
    </div>

    <!-- TODO EDIT HERE BEB END -->

    <!-- * IONICONS -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!-- * SCRIPT LOCAL -->
    <script src="{{url('Front-end-pos/src/js/script.js')}}"></script>
    <script src="{{url('Front-end-pos/src/js/preview.js')}}"></script>

    <!-- * FLOWBITE -->
    <script src="{{url('Front-end-pos/node_modules/flowbite/dist/flowbite.min.js')}}"></script>
</body>

</html>