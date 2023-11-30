@extends('master')

@section('content')
    <main class="py-3 bg-light">
        <div class="container">
            <h1>Products</h1>
            <hr>
            <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                            @foreach ($myOrder as $order)
                            @php
                            $total = 0;
                            foreach($order->orderLines as $orderLines){
                                foreach($orderLines->products as $item){
                                    $total += $item->price * $orderLines->quantity;
                                }
                            }
                            @endphp
                            <div>
                                <h4>Order ID : {{$order->id}}</h3>
                                <h4>address : {{$order->address}}</h3>
                                <h4>Total: Rp.{{number_format($total, 2, ',', '.')}}</h4>
                            </div>
                                <table class="table table-striped table-hover table align-middle">
                                    <thead>
                                        <tr>
                                            <th>Product Name</th>
                                            <th></th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Total</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($order->orderLines as $orderLines)
                                    @foreach($orderLines->products as $item)
                                            <tr>
                                                <td> {{$item->title}} </td>
                                                <td><img src="{{ asset('storage/images/' . $item->picture) }}"
                                                        alt="" width="100" class="rounded"></td>
                                                <td>Rp.{{number_format($item->price, 2, ',', '.')}}</td>
                                                <td>{{$orderLines->quantity}}</td>
                                                <td>Rp.{{number_format($item->price * $orderLines->quantity, 2, ',', '.')}}</td>
                                                
                                            </tr>
                                    @endforeach
                                    @endforeach
                                    </tbody>
                                </table>
                                
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="{{ asset('assets/js/datatables.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            // DataTable Initialization
            $('.table').DataTable();

            // Delete Button On Click
            $('.delete-product button.deleteButton').click((e) => {
                e.preventDefault();

                const productId = $(e.target).data('product-id');

                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $(`#deleteForm_${productId}`).submit();
                    }
                });
            });
        });
    </script>

    @if (session('message'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire("{{ session('message') }}", '', 'success');
            });
        </script>
    @endif
@endsection
