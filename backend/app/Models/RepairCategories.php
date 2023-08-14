<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class RepairCategories extends Model
{
    use HasFactory;

    public function repairExpenses(): HasMany
    {
        return $this->hasMany(RepairExpenses::class);
    }
}
