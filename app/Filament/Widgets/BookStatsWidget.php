<?php

namespace App\Filament\Widgets;

use App\Models\Author;
use App\Models\Book;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class BookStatsWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Books', Book::count())
                ->description('Total buku dalam database'),

            Stat::make('Total Authors', Author::count())
                ->description('Jumlah penulis'),

            Stat::make('Books Available', Book::where('status', 'available')->count())
                ->description('Buku yang sedang tersedia'),

            Stat::make('Books Borrowed', Book::where('status', 'borrowed')->count())
                ->description('Buku yang dipinjam'),
        ];
    }
}
