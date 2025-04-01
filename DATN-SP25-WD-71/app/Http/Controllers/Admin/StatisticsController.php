<?php
// app/Http/Controllers/StatisticsController.php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use Carbon\Carbon;

class StatisticsController extends Controller
{
    public function index(Request $request)
    {
        // Xử lý bộ lọc
        $filterType = $request->input('filter_type', 'day');
        $selectedDate = $request->input('selected_date', now()->format('Y-m-d'));
        $selectedMonth = $request->input('selected_month', now()->format('Y-m'));
        $selectedYear = $request->input('selected_year', now()->format('Y'));
        $selectedStatus = $request->input('status');

        // Khởi tạo query
        $query = Order::query();

        // Lọc theo thời gian
        switch ($filterType) {
            case 'day':
                $query->whereDate('created_at', $selectedDate);
                break;
            case 'month':
                $query->whereYear('created_at', Carbon::parse($selectedMonth)->year)
                      ->whereMonth('created_at', Carbon::parse($selectedMonth)->month);
                break;
            case 'year':
                $query->whereYear('created_at', $selectedYear);
                break;
        }

        // Lọc theo trạng thái
        if ($selectedStatus) {
            $query->where('status', $selectedStatus);
        }

        // Thống kê chính
        $mainStats = $query->clone()->selectRaw('
            COUNT(*) as total_orders,
            SUM(quantity * price) as total_revenue,
            AVG(quantity * price) as avg_order_value,
            SUM(quantity) as total_items,
            COUNT(DISTINCT user_id) as total_customers
        ')->first();

        // Thống kê theo trạng thái
        $statusStats = $query->clone()
            ->selectRaw('status, COUNT(*) as count')
            ->groupBy('status')
            ->get();

        // Thống kê phương thức thanh toán
        $paymentStats = $query->clone()
            ->selectRaw('payment_method, SUM(quantity * price) as total')
            ->groupBy('payment_method')
            ->get();

        return view('admin.statistics.index', compact(
            'mainStats',
            'statusStats',
            'paymentStats',
            'filterType',
            'selectedDate',
            'selectedMonth',
            'selectedYear',
            'selectedStatus'
        ));
    }
}