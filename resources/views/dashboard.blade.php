<!-- dashboard.blade.php -->
@extends('layout.sidebar')
<link rel="stylesheet" href="{{ asset('css/style_dashboard.css') }}">

@section('content')
    <h1>ADMIN DASHBOARD</h1>
    <div class="summary">
        <div class="card">Today's Sales <br> <span>P 1680</span></div>
        <div class="card">Total Orders Today <br> <span>30</span></div>
        <div class="card">Pending Orders <br> <span>5</span></div>
        <div class="card">Complete Orders Today <br> <span>20</span></div>
        <div class="card">Delivery Orders Today <br> <span>12</span></div>
    </div>
    <div class="charts">
        <div class="chart">Sales Growth - Daily for the Week</div>
        <div class="chart">Sales Growth - Daily for the Week (Americano)</div>
    </div>
    <div class="best-selling">
        <div class="card">Best-Selling Item <br> <span>Americano</span></div>
        <div class="card">Least-Selling Item <br> <span>Espresso</span></div>
    </div>
@endsection

