
@extends('adminlte::page')

@section('content')
<div class="container">
    <h1>Thống kê đơn hàng</h1>
    
    <!-- Form lọc -->
    <div class="card mb-4">
    <div class="card-body">
        <form method="GET" id="filterForm">
            <div class="row g-3 align-items-end">
                <!-- Phần chọn loại lọc -->
                <div class="col-md-2">
                    <label>Loại lọc</label>
                    <select name="filter_type" class="form-control" id="filterType">
                        <option value="day" {{ $filterType == 'day' ? 'selected' : '' }}>Theo ngày</option>
                        <option value="month" {{ $filterType == 'month' ? 'selected' : '' }}>Theo tháng</option>
                        <option value="year" {{ $filterType == 'year' ? 'selected' : '' }}>Theo năm</option>
                    </select>
                </div>

                <!-- Phần chọn thời gian -->
                <div class="col-md-3">
                    <div id="dayFilter" class="filter-input" style="{{ $filterType != 'day' ? 'display:none' : '' }}">
                        <label>Chọn ngày</label>
                        <input type="date" name="selected_date" class="form-control" 
                               value="{{ $selectedDate }}" max="{{ now()->format('Y-m-d') }}">
                    </div>

                    <div id="monthFilter" class="filter-input" style="{{ $filterType != 'month' ? 'display:none' : '' }}">
                        <label>Chọn tháng</label>
                        <input type="month" name="selected_month" class="form-control" 
                               value="{{ $selectedMonth }}" max="{{ now()->format('Y-m') }}">
                    </div>

                    <div id="yearFilter" class="filter-input" style="{{ $filterType != 'year' ? 'display:none' : '' }}">
                        <label>Chọn năm</label>
                        <input type="number" name="selected_year" class="form-control" 
                               value="{{ $selectedYear }}" min="2000" max="{{ now()->year }}">
                    </div>
                </div>

                <!-- Phần chọn trạng thái -->
                <div class="col-md-3">
                    <label>Trạng thái</label>
                    <select name="status" class="form-control">
                        <option value="">Tất cả trạng thái</option>
                        @foreach(['processing', 'completed', 'cancelled'] as $status)
                            <option value="{{ $status }}" {{ $selectedStatus == $status ? 'selected' : '' }}>
                                {{ ucfirst($status) }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Nút tìm kiếm -->
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary w-100">
                        <i class="fas fa-search"></i> Tìm kiếm
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

    <!-- Thống kê chính -->
    <div class="row mb-4">
        <div class="col-md-2">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Tổng đơn</h6>
                    <h3>{{ number_format($mainStats->total_orders) }}</h3>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Doanh thu</h6>
                    <h3>{{ number_format($mainStats->total_revenue) }}₫</h3>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">TB đơn hàng</h6>
                    <h3>{{ number_format($mainStats->avg_order_value) }}₫</h3>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Sản phẩm</h6>
                    <h3>{{ number_format($mainStats->total_items) }}</h3>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Khách hàng</h6>
                    <h3>{{ number_format($mainStats->total_customers) }}</h3>
                </div>
            </div>
        </div>
    </div>

    <!-- Biểu đồ và thống kê phụ -->
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Phân bổ trạng thái</h5>
                    <canvas id="statusChart"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Phương thức thanh toán</h5>
                    <canvas id="paymentChart"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Biểu đồ trạng thái
    new Chart(document.getElementById('statusChart'), {
        type: 'doughnut',
        data: {
            labels: @json($statusStats->pluck('status')),
            datasets: [{
                data: @json($statusStats->pluck('count')),
                backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56']
            }]
        }
    });

    // Biểu đồ phương thức thanh toán
    new Chart(document.getElementById('paymentChart'), {
        type: 'pie',
        data: {
            labels: @json($paymentStats->pluck('payment_method')),
            datasets: [{
                data: @json($paymentStats->pluck('total')),
                backgroundColor: ['#4BC0C0', '#9966FF', '#FF9F40']
            }]
        }
    });
</script>
@endsection