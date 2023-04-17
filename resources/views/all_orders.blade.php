@extends('layouts.dashboard')

@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">All Orders</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group mr-2">
                    <a href="create.html" class="btn btn-outline-secondary">Add New Order</a>
                </div>
            </div>
        </div>
        <div class="btn-toolbar mb-2 mb-md-0">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>Customer Name</th>
                        <th>Product</th>
                        <th>Purchase Date</th>
                        <th>Delivery Date</th>
                        <th>Quantity</th>
                        <th width="280px">Actions</th>
                    </tr>
                    @foreach ($orders as $order)
                        <tr>
                            <td>$order->name</td>
                            <td>Dell Laptop 2023</td>
                            <td>5 Mar 2023</td>
                            <td>7 Mar 2023</td>
                            <td>2</td>
                            <td>
                                <a class="btn btn-info" href="">Edit</a>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </main>
@endsection
