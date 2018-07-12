<?php
namespace App\Model\Table;

use Cake\Event\Event;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * People Model
 *
 * @property \App\Model\Table\BoardsTable|\Cake\ORM\Association\HasMany $Boards
 *
 * @method \App\Model\Entity\Person get($primaryKey, $options = [])
 * @method \App\Model\Entity\Person newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Person[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Person|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Person|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Person patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Person[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Person findOrCreate($search, callable $callback = null, $options = [])
 */
class PeopleTable extends Table {

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config){
        $this->hasMany('Boards');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator){
        $validator->integer('id');
        $validator->notEmpty('name','必須項目です。');
        $validator->notEmpty('password','必須項目です。');
        $validator->notEmpty('comment','必須項目です。');

        return $validator;
    }

    public function buildRules(RulesChecker $rules){
        $rules->inUnique(['name'],'既に登録済みです。');
        return $rules;
    }

    public function checkNameAndPass($data){
        $n = $this->find()
                  ->where([ 'name' => $data['name'] ])
                  ->andWhere([ 'password' => $data['password'] ])
                  ->count();
        return $n > 0 ? true : false;
    }
}
