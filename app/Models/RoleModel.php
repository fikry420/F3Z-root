<?php
namespace App\Models;

use CodeIgniter\Model;

class RoleModel extends Model
{
    protected $table = 'role';
    protected $primaryKey = 'IdRole';
    protected $allowedFields = ['nama_role'];
}
