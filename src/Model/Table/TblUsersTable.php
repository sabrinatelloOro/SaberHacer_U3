<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TblUsers Model
 *
 * @method \App\Model\Entity\TblUser newEmptyEntity()
 * @method \App\Model\Entity\TblUser newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\TblUser[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TblUser get($primaryKey, $options = [])
 * @method \App\Model\Entity\TblUser findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\TblUser patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TblUser[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\TblUser|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TblUser saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TblUser[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\TblUser[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\TblUser[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\TblUser[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class TblUsersTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('tbl_users');
        $this->setDisplayField('Id_user');
        $this->setPrimaryKey('Id_user');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('Name_user')
            ->maxLength('Name_user', 70)
            ->requirePresence('Name_user', 'create')
            ->notEmptyString('Name_user');

        $validator
            ->scalar('Email_user')
            ->maxLength('Email_user', 60)
            ->requirePresence('Email_user', 'create')
            ->notEmptyString('Email_user');

        $validator
            ->scalar('Num_empleado')
            ->maxLength('Num_empleado', 13)
            ->requirePresence('Num_empleado', 'create')
            ->notEmptyString('Num_empleado');

        $validator
            ->integer('Edad_user')
            ->requirePresence('Edad_user', 'create')
            ->notEmptyString('Edad_user');

        $validator
            ->scalar('Num_contacto')
            ->maxLength('Num_contacto', 10)
            ->requirePresence('Num_contacto', 'create')
            ->notEmptyString('Num_contacto');

        return $validator;
    }
}
