<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Partos Model
 *
 * @property \App\Model\Table\UnidadesTable|\Cake\ORM\Association\BelongsTo $Unidades
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\PacientesTable|\Cake\ORM\Association\BelongsTo $Pacientes
 *
 * @method \App\Model\Entity\Parto get($primaryKey, $options = [])
 * @method \App\Model\Entity\Parto newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Parto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Parto|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Parto saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Parto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Parto[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Parto findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PartosTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('partos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Unidades', [
            'foreignKey' => 'unidade_id'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id'
        ]);
        $this->belongsTo('Pacientes', [
            'foreignKey' => 'paciente_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->nonNegativeInteger('id')
            ->allowEmptyString('id', 'create');

        $validator
            ->scalar('tipo')
            ->maxLength('tipo', 50)
            ->requirePresence('tipo', 'create')
            ->allowEmptyString('tipo', false);

        $validator
            ->scalar('genero')
            ->maxLength('genero', 100)
            ->allowEmptyString('genero');

        $validator
            ->numeric('peso')
            ->allowEmptyString('peso');

        $validator
            ->scalar('obs')
            ->maxLength('obs', 255)
            ->allowEmptyString('obs');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['unidade_id'], 'Unidades'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['paciente_id'], 'Pacientes'));

        return $rules;
    }

    public function isOwnedBy($partoId, $userId)
{
return $this->exists(['id' => $partoId, 'user_id' => $userId]);
}

}
