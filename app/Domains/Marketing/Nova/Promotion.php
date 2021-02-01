<?php

namespace App\Domains\Marketing\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;

class Promotion extends Resource
{
    public static $model = \App\Domains\Marketing\Models\Promotion::class;

    public static $title = 'name';

    public static $search = [
        'id',
    ];

    public function fields(Request $request): array
    {
        return [
            ID::make(__('ID'), 'id')->sortable(),
        ];
    }
}
