<!-- dashboard.blade.php -->
@extends('layout.sidebar')
<link rel="stylesheet" href="{{ asset('css/style_order.css') }}">

@section('content')
    <h1>ORDER MANAGEMENT</h1>
    <div class="inventory-container">
    <!-- Top Bar: Search Bar + Shop Status -->
    <div class="top-bar">
        <div class="search-container">
            <input type="text" id="search" placeholder="Search product...">
            <i class="fas fa-search"></i>
        </div>
    </div>

    <!-- Inventory Table -->
    <div class="inventory-list">
        <h2>Orders (10) </h2>
        <table>
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Customer Name</th>
                    <th>Items</th>
                    <th>Payment Status</th>
                    <th>Delivery Status</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
    
@endsection

