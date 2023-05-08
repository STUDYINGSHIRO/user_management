<?php

namespace App\Models;

use \DateTimeInterface;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use SoftDeletes;
    use HasFactory;

    public $table = 'transactions';

    protected $dates = [
        'transaction_date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'project_id',
        'transaction_type_id',
        'income_source_id',
        'amount',
        'currency_id',
        'transaction_date',
        'name',
        'description',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id');
    }

    public function transaction_type()
    {
        return $this->belongsTo(TransactionType::class, 'transaction_type_id');
    }

    public function income_source()
    {
        return $this->belongsTo(IncomeSource::class, 'income_source_id');
    }

    public function currency()
    {
        return $this->belongsTo(Currency::class, 'currency_id');
    }

    public function getTransactionDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setTransactionDateAttribute($value)
    {
        $this->attributes['transaction_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
