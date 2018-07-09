<?php
namespace App\Controller;

class BoardsController extends AppController{
    public function index($id = null){
        $this->set( 'entity',$this->Boards->newEntity() );
        if($id != null){
            try{
                $entity = $this->Boards->get($id);
                $this->set('entity',$entity);
            } catch(Exception $e){
                Logg::write('debug',$e->getMassage());
            }
        }
        $data = $this->Boards->find('all')->order(['id' => 'DESC']);
        $this->set('data',$data->toArray());
        $this->set('count',$data->count());
    }

    public function  addRecord(){
        if($this->request->is('post')){
            $board = $this->Boards->newEntity($this->request->data);
            $this->Boards->save($board);
        }
        return $this->redirect(['action' => 'index']);
    }

    public function editRecord(){
        if($this->request->is('put')){
            try{
                $entity = $this->Boards->get($this->request->data['id']);
                $this->Boards->patchEntity($entity,$this->request->data);
                $this->Boards->save($entity);
            } catch(Exception $e){
                Loog::write('debug',$e->getMassage());
            }
        }
        return $this->redirect(['action' => 'index']);
    }
}