<?php

namespace App\Repository\Eloquent;

use App;
use App\Repository\Contracts\CategoryInterface as CategoryInterface;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CategoryRepository extends BaseRepository implements CategoryInterface
{

    protected function model()
    {
        return \App\AttendanceRecord::class;
    }

    protected function getRules()
    {
        return \App\AttendanceRecord::rules;
    }
}