<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tratamentos Model
 *
 * @property \App\Model\Table\UnidadesTable|\Cake\ORM\Association\BelongsTo $Unidades
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\EspecialidadesTable|\Cake\ORM\Association\BelongsTo $Especialidades
 * @property \App\Model\Table\PacientesTable|\Cake\ORM\Association\BelongsTo $Pacientes
 * @property \App\Model\Table\DiagnosticosTable|\Cake\ORM\Association\BelongsTo $Diagnosticos
 *
 * @method \App\Model\Entity\Tratamento get($primaryKey, $options = [])
 * @method \App\Model\Entity\Tratamento newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Tratamento[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tratamento|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tratamento saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tratamento patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Tratamento[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tratamento findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TratamentosTable extends Table
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

        $this->setTable('tratamentos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Unidades', [
            'foreignKey' => 'unidade_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Especialidades', [
            'foreignKey' => 'especialidade_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Pacientes', [
            'foreignKey' => 'paciente_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Diagnosticos', [
            'foreignKey' => 'diagnostico_id'
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
            ->scalar('estado')
            ->maxLength('estado', 255)
            ->requirePresence('estado', 'create')
            ->allowEmptyString('estado', false);

        $validator
            ->scalar('tratamento')
            ->maxLength('tratamento', 255)
            ->allowEmptyString('tratamento');

        $validator
            ->scalar('svacinacao')
            ->maxLength('svacinacao', 255)
            ->allowEmptyString('svacinacao');

        $validator
            ->scalar('obs')
            ->maxLength('obs', 255)
            ->allowEmptyString('obs');

        $validator
            ->integer('contador')
            ->requirePresence('contador', 'create')
            ->allowEmptyString('contador', false);

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
        $rules->add($rules->existsIn(['especialidade_id'], 'Especialidades'));
        $rules->add($rules->existsIn(['paciente_id'], 'Pacientes'));
        $rules->add($rules->existsIn(['diagnostico_id'], 'Diagnosticos'));

        return $rules;
    }



public function isOwnedBy($tratamentoId, $userId)
{
return $this->exists(['id' => $tratamentoId, 'user_id' => $userId]);
}

}
