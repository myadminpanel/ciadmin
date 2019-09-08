<?php 
namespace Illuminate\Support\Contracts;

interface ModelInterface
{
   public function save(array $attributes);
   public function find($id);
   public function all();
   public function lastInsertId();
}