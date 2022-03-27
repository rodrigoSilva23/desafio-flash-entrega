<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;
   

    public function getByCouriersAll(): array{
        $db      = \Config\Database::connect();
        $builder = $db->table('couriers');
        $query   = $builder->get();
        return $query->getResult();
    }
    public function getByCourier($id){
      $db      = \Config\Database::connect();
      $builder = $db->table('couriers');
      $query   = $builder->getWhere(['id'=>$id]);
      return $query->getResult();
  }

    public function registerCourier($data){
      $db      = \Config\Database::connect();
      $builder = $db->table('couriers');
      $builder->insert($data);
    }
    public function updateCourier($id,$data){
      $db      = \Config\Database::connect();
      $builder = $db->table('couriers');
      $builder->where('id', $id);
      $builder->update($data);
    }
    public function deleteCourier($id){
      $db      = \Config\Database::connect();
      $builder = $db->table('couriers');
      $builder->delete(['id' => $id]);
    }

   
}
