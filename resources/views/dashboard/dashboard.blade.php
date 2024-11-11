<x-app-layout>
    
    <ul class="flex space-x-2 rtl:space-x-reverse">
        {{-- <li>
            <a href="javascript:;" class="text-primary hover:underline">Dashboard</a>
        </li> --}}
        <span>Dashboard</span>
    </ul>
    <div class="pt-5">
        <div class="panel h-full w-full">
            <div class="flex items-center justify-between mb-5">
                <h5 class="font-semibold text-lg dark:text-white-light">Recent Orders</h5>
            </div>
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th class="ltr:rounded-l-md rtl:rounded-r-md">Customer</th>
                            <th>Product</th>
                            <th>Invoice</th>
                            <th>Price</th>
                            <th class="ltr:rounded-r-md rtl:rounded-l-md">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-white-dark hover:text-black dark:hover:text-white-light/90 group py-4">
                            <td class="text-black dark:text-white">
                                <div class="flex items-center">
                                    <span class="whitespace-nowrap">Luke Ivory</span>
                                </div>
                            </td>
                            <td class="text-primary">Headphone</td>
                            <td><a href="/apps/invoice/preview">#46894</a></td>
                            <td>$56.07</td>
                            <td><span class="badge bg-success shadow-md dark:group-hover:bg-transparent">Paid</span>
                            </td>
                        </tr>
                        <tr class="text-white-dark hover:text-black dark:hover:text-white-light/90 group ">
                            <td class="text-black dark:text-white">
                                <div class="flex items-center">
                                    <span class="whitespace-nowrap">Andy King</span>
                                </div>
                            </td>
                            <td class="text-info">Nike Sport</td>
                            <td><a href="/apps/invoice/preview">#76894</a></td>
                            <td>$126.04</td>
                            <td><span
                                    class="badge bg-secondary shadow-md dark:group-hover:bg-transparent">Shipped</span>
                            </td>
                        </tr>
                        <tr class="text-white-dark hover:text-black dark:hover:text-white-light/90 group ">
                            <td class="text-black dark:text-white">
                                <div class="flex items-center">
                                    <span class="whitespace-nowrap">Laurie Fox</span>
                                </div>
                            </td>
                            <td class="text-warning">Sunglasses</td>
                            <td><a href="/apps/invoice/preview">#66894</a></td>
                            <td>$56.07</td>
                            <td><span class="badge bg-success shadow-md dark:group-hover:bg-transparent">Paid</span>
                            </td>
                        </tr>
                        <tr class="text-white-dark hover:text-black dark:hover:text-white-light/90 group ">
                            <td class="text-black dark:text-white">
                                <div class="flex items-center">
                                    <span class="whitespace-nowrap">Ryan Collins</span>
                                </div>
                            </td>
                            <td class="text-danger">Sport</td>
                            <td><a href="/apps/invoice/preview">#75844</a></td>
                            <td>$110.00</td>
                            <td><span
                                    class="badge bg-secondary shadow-md dark:group-hover:bg-transparent">Shipped</span>
                            </td>
                        </tr>
                        <tr class="text-white-dark hover:text-black dark:hover:text-white-light/90 group ">
                            <td class="text-black dark:text-white">
                                <div class="flex items-center">
                                    <span class="whitespace-nowrap">Irene Collins</span>
                                </div>
                            </td>
                            <td class="text-secondary">Speakers</td>
                            <td><a href="/apps/invoice/preview">#46894</a></td>
                            <td>$56.07</td>
                            <td><span class="badge bg-success shadow-md dark:group-hover:bg-transparent">Paid</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
