<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MobilizerEvents Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Campaigns
 * @property \Cake\ORM\Association\BelongsTo $Regions
 * @property \Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\MobilizerEvent get($primaryKey, $options = [])
 * @method \App\Model\Entity\MobilizerEvent newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MobilizerEvent[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MobilizerEvent|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MobilizerEvent patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MobilizerEvent[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MobilizerEvent findOrCreate($search, callable $callback = null)
 */
class EventsTable extends Table
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

        $this->table( 'events' );
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Campaigns', [
            'foreignKey' => 'campaign_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Regions', [
            'foreignKey' => 'region_id'
        ]);

        $this->belongsTo( 'Users' , [
            'foreignKey' => 'user_id',
        ]);

        $this->hasMany( 'Media' , [
            'className' => 'Media',
            'foreignKey' => 'event_id',
            'propertyName' => 'media'
        ]);

        $this->addBehavior( 'Timestamp' , [
            'events' => [
                'Model.beforeSave' => [
                    'created' => 'new',
                    'updated' => 'always'
                ]
            ]
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
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('event_name', 'create')
            ->notEmpty('event_name');

        $validator
            ->date('event_date')
            ->requirePresence('event_date', 'create')
            ->notEmpty('event_date');

        $validator
            ->requirePresence('location_city', 'create')
            ->notEmpty('location_city');

        $validator
            ->requirePresence('location_state', 'create')
            ->notEmpty('location_state');

        $validator
            ->requirePresence('event_description', 'create')
            ->notEmpty('event_description');

        $validator
            ->integer('total_participants')
            ->allowEmpty('total_participants');

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
        //$rules->add($rules->existsIn(['campaign_id'], 'Campaigns'));
        //$rules->add($rules->existsIn(['region_id'], 'Regions'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
