<?php

namespace College;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $fillable = [
        'bookName',
        'authorName',
        'facultyId',
        'status',
        'publisher',
        'price',
        'entryDate',
        'bookCode',
        'isbnCode',
        'quantity'

    ];


    //
}
