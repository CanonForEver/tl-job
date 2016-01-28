<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Com extends Model
{
    protected $fillable = [
        'name',
        'kana',
        'zip',
        'jusho1',
        'jusho2',
        'jusho3',
        'tel',
        'tantoname',
        'tantokana',
        'mail',
        'web',
        'ceo',
        'select_plan_id',

        'honsha',
        'setup_year',
        'setup_month',
        'capital',
        'workers',
        'business',
        'torihiki',
        'sales_year1',
        'sales_month1',
        'sales_type1',
        'sales1',
        'sales_year2',
        'sales_month2',
        'sales_type2',
        'sales2',
        'category',
        'license_category1',
        'license_number1',
    ];
}
