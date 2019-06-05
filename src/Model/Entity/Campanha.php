<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Campanha Entity
 *
 * @property int $id
 * @property int $unidade_id
 * @property int $user_id
 * @property string $desc_campanha
 * @property int $dose
 * @property int $unidade_sanitaria
 * @property int $brigada_movel
 * @property int $agente_comun_saude
 * @property string $interv_idade
 * @property int $mulheres_p_parto
 * @property string $comentario
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Unidade $unidade
 * @property \App\Model\Entity\User $user
 */
class Campanha extends Entity
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
        'desc_campanha' => true,
        'dose' => true,
        'unidade_sanitaria' => true,
        'brigada_movel' => true,
        'agente_comun_saude' => true,
        'interv_idade' => true,
        'mulheres_p_parto' => true,
        'comentario' => true,
        'created' => true,
        'modified' => true,
        'unidade' => true,
        'user' => true
    ];
}
