<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Modality Entity
 *
 * @property int $id
 * @property int $modality
 *
 * @property \App\Model\Entity\Formation[] $formations
 */
class Modality extends Entity
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
        'modality' => true,
        'formations' => true
    ];
}