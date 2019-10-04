<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Frequence Entity
 *
 * @property int $id
 * @property string $frequence
 *
 * @property \App\Model\Entity\Formation[] $formations
 */
class Frequence extends Entity
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
        'frequence' => true,
        'formations' => true
    ];
}
