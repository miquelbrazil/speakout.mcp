<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MobilizerEvent Entity
 *
 * @property int $id
 * @property int $campaign_id
 * @property string $event_name
 * @property \Cake\I18n\Time $event_date
 * @property int $region_id
 * @property string $location_city
 * @property string $location_state
 * @property string $event_description
 * @property int $total_participants
 * @property int $user_id
 * @property \Cake\I18n\Time $_created
 * @property \Cake\I18n\Time $_updated
 *
 * @property \App\Model\Entity\Campaign $campaign
 * @property \App\Model\Entity\Region $region
 * @property \App\Model\Entity\User $user
 */
class Event extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
