<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Todo\TodoRepository;

class TodoController extends Controller
{
    //
    private $todo;
    
    public function __construct( TodoRepository $todo ){
        $this->todo = $todo;
    }

    public function index(){
        return $this->todo->getAll();
    }

    public function show( $id ){
        return $this->todo->getById( $id );
    }

    //Fiz esse create baseado em uma requisição get
    //http://localhost:8000/todo/create/=?text=dasdasdasdasd&user_id=1&completed=1
    public function create( Request $arr ){
        $arr = $arr->query();
        $todo = $this->todo->create( $arr );
        // return $todo;
        return response()->json( $todo );
    }
    public function update( $id , array $attributes ){
        return $this->todo->update( $id , $attributes );
    }

    public function delete( $id ){
        return $this->todo->delete( $id );
    }
}
