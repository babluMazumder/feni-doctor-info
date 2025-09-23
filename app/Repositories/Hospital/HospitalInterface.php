<?php
namespace App\Repositories\Hospital;

interface HospitalInterface {
      public function all( );

    public function get($id);

    public function store($request);

    public function update($request,);
    

    public function delete($id);
}







?>
