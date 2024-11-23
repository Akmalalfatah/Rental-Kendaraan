@extends('layouts.app')

@section('content')
    <div class="container mx-auto">

        <h1 class="flex items-center text-5xl font-extrabold dark:text-white ">Rent's
        </h1>

        <div class="p-4">


            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Car
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Start Date
                            </th>
                            <th scope="col" class="px-6 py-3">
                                End Date
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Total Price
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rentals as $rental)
                            <tr
                                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $rental->car->name }} ({{ $rental->car->brand }})
                                </th>
                                <td class="px-6 py-4">
                                    {{ \Carbon\Carbon::parse($rental->start_date)->format('d M Y') }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ \Carbon\Carbon::parse($rental->end_date)->format('d M Y') }} </td>
                                <td class="px-6 py-4">
                                    {{ number_format($rental->total_price, 2) }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>

    </div>
@endsection
