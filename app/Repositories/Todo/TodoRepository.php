<?php

namespace App\Repositories\Todo;

interface TodoRepository
{

    public function getAll();

    public function getById( $id );

    public function create( array $arr );

    public function update( $id , array $attributes );

    public function delete( $id );

}