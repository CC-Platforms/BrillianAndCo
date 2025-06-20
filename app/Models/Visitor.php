<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Visitor extends Model
{
    use HasFactory;

    protected $fillable = [
        'ip_address',
        'page_url',
        'session_id',
        'user_agent',
        'referrer',
        'visited_at',
    ];

    protected $casts = [
        'visited_at' => 'datetime',
    ];

    /**
     * Get unique visitors count for today
     */
    public static function getTodayUniqueCount(): int
    {
        return static::whereDate('visited_at', Carbon::today())
            ->distinct('ip_address')
            ->count('ip_address');
    }

    /**
     * Get total page views for today
     */
    public static function getTodayTotalCount(): int
    {
        return static::whereDate('visited_at', Carbon::today())->count();
    }

    /**
     * Get unique visitors count for this week
     */
    public static function getWeekUniqueCount(): int
    {
        return static::whereBetween('visited_at', [
                Carbon::now()->startOfWeek(),
                Carbon::now()->endOfWeek()
            ])
            ->distinct('ip_address')
            ->count('ip_address');
    }

    /**
     * Get unique visitors count for this month
     */
    public static function getMonthUniqueCount(): int
    {
        return static::whereMonth('visited_at', Carbon::now()->month)
            ->whereYear('visited_at', Carbon::now()->year)
            ->distinct('ip_address')
            ->count('ip_address');
    }

    /**
     * Get daily visitor counts for the last 7 days
     */
    public static function getDailyCountsLast7Days(): array
    {
        $data = [];
        for ($i = 6; $i >= 0; $i--) {
            $date = Carbon::now()->subDays($i);
            $count = static::whereDate('visited_at', $date)
                ->distinct('ip_address')
                ->count('ip_address');
            
            $data[] = [
                'date' => $date->format('M j'),
                'count' => $count
            ];
        }
        return $data;
    }

    /**
     * Get most visited pages
     */
    public static function getTopPages($limit = 5): array
    {
        return static::selectRaw('page_url, COUNT(*) as views')
            ->groupBy('page_url')
            ->orderByDesc('views')
            ->limit($limit)
            ->get()
            ->map(function ($item) {
                return [
                    'url' => $item->page_url,
                    'views' => $item->views
                ];
            })
            ->toArray();
    }

    /**
     * Track a visitor
     */
    public static function track($request): void
    {
        // Don't track admin routes
        if (str_starts_with($request->path(), 'admin')) {
            return;
        }

        static::create([
            'ip_address' => $request->ip(),
            'page_url' => $request->fullUrl(),
            'session_id' => $request->session()->getId(),
            'user_agent' => $request->userAgent(),
            'referrer' => $request->header('referer'),
            'visited_at' => Carbon::now(),
        ]);
    }
}
