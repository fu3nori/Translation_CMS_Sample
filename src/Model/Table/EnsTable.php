<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ens Model
 *
 * @method \App\Model\Entity\En get($primaryKey, $options = [])
 * @method \App\Model\Entity\En newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\En[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\En|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\En saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\En patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\En[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\En findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EnsTable extends Table
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

        $this->setTable('ens');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('text')
            ->maxLength('text', 1024)
            ->requirePresence('text', 'create')
            ->notEmptyString('text');

        return $validator;
    }
}
