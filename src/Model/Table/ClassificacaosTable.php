<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Classificacaos Model
 *
 * @property \App\Model\Table\UnidadesTable|\Cake\ORM\Association\HasMany $Unidades
 *
 * @method \App\Model\Entity\Classificacao get($primaryKey, $options = [])
 * @method \App\Model\Entity\Classificacao newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Classificacao[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Classificacao|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Classificacao saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Classificacao patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Classificacao[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Classificacao findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ClassificacaosTable extends Table
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

        $this->setTable('classificacaos');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Unidades', [
            'foreignKey' => 'classificacao_id'
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
            ->scalar('comentarios')
            ->allowEmptyString('comentarios');

        return $validator;
    }
}
