<?php

namespace App\Repositories\Todo;
use App\Models\Todo;
use Illuminate\Http\Request;

class EloquentTodo implements TodoRepository
{
    private $model;

    //Construtor
    public function __construct( Todo $model )
    {
        $this->model = $model;
    }

    //Index
    public function getAll()
    {
        return $this->model->all();
    }

    //Show
    public function getById( $id )
    {
        return $this->model->find( $id );
    }

    //Create
    public function create( array $arr )
    {
        return $this->model->create( $arr );
    }

    //Update
    public function update( $id , array $attributes )
    {
        $todo = $this->model->findOrFail( $id , $attributes );
        $todo->update( $attributes );
        return $todo;
    }

    //Delete
    public function delete( $id )
    {
        $this->getById( $id )->delete();
        return true;
    }

}