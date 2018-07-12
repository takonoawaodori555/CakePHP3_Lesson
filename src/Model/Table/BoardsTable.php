<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\ORM\RulesCheker;
use Cake\Validation\Validator;
use Cake\ORM\Query;

class BoardsTable extends Table {
    public function initialize( array $config){
        $this->belongsTo('people');
    }
    public function validationDefault(Validator $validator){
        $validator->integer('id');
        $validator->integer('person_id')
                   ->requirePresence('person_id');
        $validator->notEmpty('name','必須項目です。');
        $validator->notEmpty('title','必須項目です。');
        $validator->notEmpty('content','必須項目です。');

        return $validator;
    }
}
