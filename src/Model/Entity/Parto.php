<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Parto Entity
 *
 * @property int $id
 * @property int|null $unidade_id
 * @property int|null $user_id
 * @property int|null $paciente_id
 * @property string $tipo
 * @property string|null $genero
 * @property float|null $peso
 * @property string|null $obs
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Unidade $unidade
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Paciente $paciente
 */
class Parto extends Entity
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
        'unidade_id' => true,
        'user_id' => true,
        'paciente_id' => true,
        'tipo' => true,
        'genero' => true,
        'peso' => true,
        'obs' => true,
        'created' => true,
        'modified' => true,
        'unidade' => true,
        'user' => true,
        'paciente' => true
    ];
}
