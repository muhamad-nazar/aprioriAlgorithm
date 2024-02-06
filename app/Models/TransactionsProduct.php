<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionsProduct extends Model
{
    use HasFactory;

    protected $fillable = ['transaction_id', 'product_id', 'quantity'];

    // Jika Anda memilih untuk menggunakan model untuk tabel pivot (optional)
    protected $table = 'transactions_products';
}
