<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan_scheme extends Model
{
    use HasFactory;
    Protected $table='loan_scheme';
    Protected $fillable=[ 
                        'loan_scheme_name',
                        'type_of_value_in_intrest',
                        'value_of_intrest',
                        'application_fees',
                        'processing_fees',
                        'valuation_fees'];
}
