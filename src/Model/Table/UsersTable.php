<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \App\Model\Table\RolesTable|\Cake\ORM\Association\BelongsTo $Roles
 * @property \App\Model\Table\CampanhasTable|\Cake\ORM\Association\HasMany $Campanhas
 * @property \App\Model\Table\PartosTable|\Cake\ORM\Association\HasMany $Partos
 * @property \App\Model\Table\TratamentosTable|\Cake\ORM\Association\HasMany $Tratamentos
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UsersTable extends Table {

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) {
        parent::initialize($config);

        $this->setTable('users');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Roles', [
            'foreignKey' => 'role_id'
        ]);
        $this->hasMany('Campanhas', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Partos', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Tratamentos', [
            'foreignKey' => 'user_id'
        ]);
    }

    /**
     * Adds rules for current password
     *
     * @param Validator $validator Cake validator object.
     * @return Validator
     */
    public function validationCurrentPassword(Validator $validator) {
        $validator
                ->notEmpty('current_password');

        return $validator;
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator) {
        $validator
                ->nonNegativeInteger('id')
                ->allowEmptyString('id', 'create');

        $validator
                ->scalar('name')
                ->maxLength('name', 100)
                ->requirePresence('name', 'create')
                ->allowEmptyString('name', false);

        $validator
                ->scalar('apelido')
                ->maxLength('apelido', 100)
                ->requirePresence('apelido', 'create')
                ->allowEmptyString('apelido', false);

        $validator
                ->email('email')
                ->requirePresence('email', 'create')
                ->allowEmptyString('email', false);

        $validator
                ->scalar('username')
                ->maxLength('username', 255)
                ->requirePresence('username', 'create')
                ->allowEmptyString('username', false);

        $validator
                ->scalar('password')
                ->maxLength('password', 255)
                ->requirePresence('password', 'create')
                ->allowEmptyString('password', false)
                ->add('password', [
                    'password_confirm_check' => [
                        'rule' => ['compareWith', 'password_confirm'],
                        'message' => 'A palavra pass e confirmação não são semelhantes. Por favor tente novamente']
        ]);

        $validator
                ->requirePresence('password_confirm', 'create')
                ->allowEmptyString('password_confirm', FALSE);

        $validator
                ->scalar('passkey')
                ->maxLength('passkey', 13)
                ->allowEmptyString('passkey');

        $validator
                ->scalar('photo')
                ->maxLength('photo', 255)
                ->allowEmptyString('photo');

        $validator
                ->scalar('photo_dir')
                ->maxLength('photo_dir', 255)
                ->allowEmptyString('photo_dir');

        $validator
                ->dateTime('timeout')
                ->allowEmptyDateTime('timeout');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules) {
        $rules->add($rules->isUnique(['email']), ['errorField' => 'email',
            'message' => 'Já existe um correio semelhante'
        ]);
        $rules->add($rules->isUnique(['username']), ['errorField' => 'username',
            'message' => 'Já existe um utilizador semelhante'
        ]);
        $rules->add($rules->existsIn(['role_id'], 'Roles'));

        return $rules;
    }

}
