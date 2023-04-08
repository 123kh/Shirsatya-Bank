<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan_application extends Model
{
    use HasFactory;
    Protected $table='loan_application';
    Protected $fillable=[
                         'loan_account_no' ,  
                        'id_of_loan_scheme',
                        'id_of_customer',
                        'id_of_city',
                        'amount',
                        
                        'tenure_type',
                        'tenure_for_days',
                        'whatsapp_number',
                        'email',
                        'intrest',
                        'application_fees',
                        'processing_fees',
                        'valuation_fees',
                        'disburse_amount',
                        'repayment',
                        'expected_date_of_disbursment'
                        ];
}
