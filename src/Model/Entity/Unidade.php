<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Unidade Entity
 *
 * @property int $id
 * @property string $name
 * @property string|null $slogan
 * @property string $nuit
 * @property string $email
 * @property \Cake\I18n\FrozenDate $data_fundacao
 * @property int $classificacao_id
 * @property int $distrito_id
 * @property int $numero_camas
 * @property string $endereco
 * @property string|null $comentarios
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Classificacao $classificacao
 * @property \App\Model\Entity\Distrito $distrito
 * @property \App\Model\Entity\Campanha[] $campanhas
 * @property \App\Model\Entity\Tratamento[] $tratamentos
 */
class Unidade extends Entity
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
        'slogan' => true,
        'nuit' => true,
        'email' => true,
        'data_fundacao' => true,
        'classificacao_id' => true,
        'distrito_id' => true,
        'numero_camas' => true,
        'endereco' => true,
        'comentarios' => true,
        'created' => true,
        'modified' => true,
        'classificacao' => true,
        'distrito' => true,
        'campanhas' => true,
        'tratamentos' => true
    ];
}
