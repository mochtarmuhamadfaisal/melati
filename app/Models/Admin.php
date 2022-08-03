<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Admin extends Model implements Authenticatable
{
    use HasFactory, HasRoles, AuthenticableTrait;
    protected $primaryKey = 'nip';
    protected $guarded =[];
    protected $table ='admins';
    protected $primarykey='nip';
    protected $guard = 'admin';
    protected $guard_name = 'web';
}
