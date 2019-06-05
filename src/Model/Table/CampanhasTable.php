<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Campanhas Model
 *
 * @property \App\Model\Table\UnidadesTable|\Cake\ORM\Association\BelongsTo $Unidades
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\Campanha get($primaryKey, $options = [])
 * @method \App\Model\Entity\Campanha newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Campanha[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Campanha|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Campanha saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Campanha patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Campanha[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Campanha findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CampanhasTable extends Table
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

        $this->setTable('campanhas');
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
            ->integer('id')
            ->allowEmptyString('id', 'create');

        $validator
            ->scalar('desc_campanha')
            ->maxLength('desc_campanha', 255)
            ->requirePresence('desc_campanha', 'create')
            ->allowEmptyString('desc_campanha', false);

        $validator
            ->integer('dose')
            ->requirePresence('dose', 'create')
            ->allowEmptyString('dose', false);

        $validator
            ->integer('unidade_sanitaria')
            ->requirePresence('unidade_sanitaria', 'create')
            ->allowEmptyString('unidade_sanitaria', false);

        $validator
            ->integer('brigada_movel')
            ->requirePresence('brigada_movel', 'create')
            ->allowEmptyString('brigada_movel', false);

        $validator
            ->integer('agente_comun_saude')
            ->requirePresence('agente_comun_saude', 'create')
            ->allowEmptyString('agente_comun_saude', false);

        $validator
            ->scalar('interv_idade')
            ->maxLength('interv_idade', 10)
            ->requirePresence('interv_idade', 'create')
            ->allowEmptyString('interv_idade', false);

        $validator
            ->integer('mulheres_p_parto')
            ->requirePresence('mulheres_p_parto', 'create')
            ->allowEmptyString('mulheres_p_parto', false);

        $validator
            ->scalar('comentario')
            ->requirePresence('comentario', 'create')
            ->allowEmptyString('comentario', false);

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

        return $rules;
    }
}
