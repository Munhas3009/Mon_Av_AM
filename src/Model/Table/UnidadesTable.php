<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Unidades Model
 *
 * @property \App\Model\Table\ClassificacaosTable|\Cake\ORM\Association\BelongsTo $Classificacaos
 * @property \App\Model\Table\DistritosTable|\Cake\ORM\Association\BelongsTo $Distritos
 * @property \App\Model\Table\CampanhasTable|\Cake\ORM\Association\HasMany $Campanhas
 * @property \App\Model\Table\TratamentosTable|\Cake\ORM\Association\HasMany $Tratamentos
 *
 * @method \App\Model\Entity\Unidade get($primaryKey, $options = [])
 * @method \App\Model\Entity\Unidade newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Unidade[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Unidade|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Unidade saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Unidade patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Unidade[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Unidade findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UnidadesTable extends Table
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

        $this->setTable('unidades');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Classificacaos', [
            'foreignKey' => 'classificacao_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Distritos', [
            'foreignKey' => 'distrito_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Campanhas', [
            'foreignKey' => 'unidade_id'
        ]);
        $this->hasMany('Tratamentos', [
            'foreignKey' => 'unidade_id'
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
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->allowEmptyString('name', false);

        $validator
            ->scalar('slogan')
            ->maxLength('slogan', 255)
            ->allowEmptyString('slogan');

        $validator
            ->scalar('nuit')
            ->maxLength('nuit', 255)
            ->requirePresence('nuit', 'create')
            ->allowEmptyString('nuit', false);

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->allowEmptyString('email', false);

        $validator
            ->date('data_fundacao')
            ->requirePresence('data_fundacao', 'create')
            ->allowEmptyDate('data_fundacao', false);

        $validator
            ->integer('numero_camas')
            ->requirePresence('numero_camas', 'create')
            ->allowEmptyString('numero_camas', false);

        $validator
            ->scalar('endereco')
            ->requirePresence('endereco', 'create')
            ->allowEmptyString('endereco', false);

        $validator
            ->scalar('comentarios')
            ->allowEmptyString('comentarios');

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
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['classificacao_id'], 'Classificacaos'));
        $rules->add($rules->existsIn(['distrito_id'], 'Distritos'));

        return $rules;
    }
}
