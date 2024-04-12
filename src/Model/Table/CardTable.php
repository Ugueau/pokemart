<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Card Model
 *
 * @method \App\Model\Entity\Card newEmptyEntity()
 * @method \App\Model\Entity\Card newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Card[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Card get($primaryKey, $options = [])
 * @method \App\Model\Entity\Card findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Card patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Card[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Card|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Card saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Card[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Card[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Card[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Card[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class CardTable extends Table
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

        $this->setTable('card');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');
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
            ->scalar('type')
            ->requirePresence('type', 'create')
            ->notEmptyString('type');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->allowEmptyString('hp');

        $validator
            ->scalar('pokemon_type')
            ->maxLength('pokemon_type', 50)
            ->allowEmptyString('pokemon_type');

        $validator
            ->allowEmptyString('level');

        $validator
            ->scalar('description')
            ->allowEmptyString('description');

        $validator
            ->scalar('weakness')
            ->maxLength('weakness', 255)
            ->allowEmptyString('weakness');

        $validator
            ->scalar('resistance')
            ->maxLength('resistance', 255)
            ->allowEmptyString('resistance');

        $validator
            ->allowEmptyString('retreat_cost');

        $validator
            ->notEmptyString('rarity_index');

        $validator
            ->scalar('rarity_symbol')
            ->maxLength('rarity_symbol', 255)
            ->notEmptyString('rarity_symbol');

        $validator
            ->scalar('image_url')
            ->maxLength('image_url', 255)
            ->notEmptyFile('image_url');

        $validator
            ->scalar('origin_country')
            ->maxLength('origin_country', 255)
            ->notEmptyString('origin_country');

        $validator
            ->notEmptyString('copies');

        $validator
            ->decimal('price')
            ->notEmptyString('price');

        return $validator;
    }
}
