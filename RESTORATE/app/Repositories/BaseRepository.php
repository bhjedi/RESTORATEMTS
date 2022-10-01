<?php

namespace App\Repositories;

use App\Interfaces\BaseRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class BaseRepository implements BaseRepositoryInterface 
{
     // model property on class instances
     protected $model;

     // Constructor to bind model to repo
     public function __construct(Model $model)
     {
         $this->model = $model;
     }
     public function all()
     {
    
         return $this->model->all();
     }
 
     public function create(array $data)
     {
         return $this->model->create($data);
     }
 
     public function update(array $data, $id)
     {
        $record = $this->find($id);
        $record->update($data);
        return $record;
     }
 
     public function delete($id)
     {
         return $this->model->destroy($id);
     }
 
     public function find($id)
     {
         return $this->model->findOrFail($id);
     }

  
}