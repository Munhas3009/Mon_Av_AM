<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Paciente Entity
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $area_trabalho
 * @property string|null $residencia
 * @property string|null $genero
 * @property int|null $idade
 * @property int|null $contacto
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Tratamento[] $tratamentos
 */
class Paciente extends Entity
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
        'name' => true,
        'area_trabalho' => true,
        'residencia' => true,
        'genero' => true,
        'idade' => true,
        'contacto' => true,
        'created' => true,
        'modified' => true,
        'tratamentos' => true
    ];
}
