@extends('layouts.app')

@section('title')
    History Penjualan
@endsection

@section('main')
<section id="add-menu">
    <div class="p-4 sm:ml-64 pt-20">
        <div class="page-content space-y-6 p-4">
            <div class="flex w-full items-center justify-between">
                <h4 class="text-2xl font-bold">HISTORY</h4>
            </div>
            <div class="p-2 mb-4 border border-peach-500 rounded-lg bg-white dark:bg-gray-800 dark:border-gray-700">
                <ol class="mt-3 divide-y divider-gray-200 dark:divide-gray-700 ">
                    @foreach ($transactions as $item)
                    <li>
                        <a href="{{route('transactions.show',$item->id)}}"
                            class="items-center flex gap-4 py-4 px-7 text-gray-400 transition duration-75 rounded-lg group hover:bg-peach-100 hover:text-peach-500 dark:text-white dark:hover:bg-gray-700 my-1">
                            <img class="w-12 h-12 aspect-square object-cover rounded-full sm:mb-0"
                                src="{{url('front-end-pos/src/image/Pas Foto2.png')}}" alt="Jese Leos image" />
                            <div
                                class="flex md:items-center md:space-x-4 flex-col md:flex-row justify-start md:justify-between w-full">
                                <div class="text-gray-600 group dark:text-gray-400">
                                    <div class="text-base font-normal">
                                        <span class="font-medium text-gray-900 dark:text-white">Transaction</span>
                                        By
                                        <span class="font-medium text-gray-900 dark:text-white"> {{$item->user->name}}
                                        </span>
                                    </div>
                                    <div class="text-sm font-normal">{{$item->created_at}}</div>
                                </div>
                                <span class="font-medium text-gray-900 dark:text-white">{{$item->transaction_total}}</span>
                            </div>
                        </a>
                    </li>
                    @endforeach
                </ol>
            </div>
            <nav aria-label="Page navigation example">
                <ul class="inline-flex -space-x-px text-sm items-center">
                    <li>
                        <a href="#"
                            class="flex items-center justify-center px-3 h-8 leading-tight text-white bg-peach-500 border border-gray-300 rounded-s-lg hover:bg-peach-600 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-center px-5 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-peach-100 hover:text-peach-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-center px-5 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-peach-100 hover:text-peach-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-center px-5 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-peach-100 hover:text-peach-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">3</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-center px-5 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-peach-100 hover:text-peach-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-center px-5 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-peach-100 hover:text-peach-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-center px-3 h-8 leading-tight text-white bg-peach-500 border border-gray-300 rounded-e-lg hover:bg-peach-600 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
</section>

@endsection