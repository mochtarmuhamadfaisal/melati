<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mahasiswa extends Model implements Authenticatable
{
    use HasFactory, HasRoles, AuthenticableTrait;
    protected $guarded =[];
    protected $table ='mahasiswas';
    protected $primarykey='nip';
    protected $guard = 'mahasiswas';
    protected $guard_name = 'web';
}
