<?php

namespace Modules\Icontact\Models;

use Illuminate\Database\Eloquent\Model;

class NotebookTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['title'];
    protected $table = 'icontact__notebook_translations';
}
