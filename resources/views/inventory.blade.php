@extends('layout.sidebar')

<!-- Font Awesome for Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<!-- Custom CSS -->
<link rel="stylesheet" href="{{ asset('css/style_inventory.css') }}">

@section('content')
<h1> INVENTORY MANAGEMENT</h1>

<div class="inventory-container">
    <!-- Top Bar: Search Bar + Shop Status -->
    <div class="top-bar">
        <div class="shop-status">
            <label for="toggleShop">Shop Status</label>
            <input type="checkbox" id="toggleShop" class="toggle" checked>
            <span class="status-label">OPEN</span>
        </div>
        <div class="search-container">
            <input type="text" id="search" placeholder="Search product...">
            <i class="fas fa-search"></i>
        </div>
    </div>

    <!-- Inventory Table -->
    <div class="inventory-list">
        <h2>Inventory (10) 
            <i class="fas fa-plus add-icon" id="openModalBtn"></i>
        </h2>

        <table>
            <thead>
                <tr>
                    <th>Products</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Availability</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="inventoryTable">
                <tr>
                    <td>Americano</td>
                    <td>Coffee</td>
                    <td>P 120</td>
                    <td>In Stock</td>
                    <td>
                        <i class="fas fa-edit edit-icon"></i>
                        <i class="fas fa-trash delete-icon"></i>
                    </td>
                </tr>
                <!-- Other rows -->
            </tbody>
        </table>
    </div>
</div>

<!-- Modal for Adding Product -->
<div id="addProductModal" class="modal">
    <div class="modal-content">
        <span class="close" id="closeModalBtn">&times;</span>
        <h3>Add Products</h3>
        <form id="addProductForm">
            <input type="text" id="productName" placeholder="Product Name" required>
            <input type="text" id="productCategory" placeholder="Category" required>
            <input type="number" id="productPrice" placeholder="Price" required>
            <select id="productAvailability">
                <option value="In Stock">In Stock</option>
                <option value="Out of Stock">Out of Stock</option>
            </select>
            <button type="submit" class="btn-add">Add</button>
        </form>
    </div>
</div>

<!-- Custom JavaScript -->
<script src="{{ asset('js/inventory.js') }}"></script>

@endsection
