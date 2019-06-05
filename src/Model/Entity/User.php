<?php

namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $name
 * @property string $apelido
 * @property string $email
 * @property string $username
 * @property string $password
 * @property string $passkey
 * @property string|null $photo
 * @property string|null $photo_dir
 * @property \Cake\I18n\FrozenTime|null $timeout
 * @property int $role_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Role $role
 * @property \App\Model\Entity\Campanha[] $campanhas
 * @property \App\Model\Entity\Tratamento[] $tratamentos
 */
class User extends Entity {

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
        'apelido' => true,
        'email' => true,
        'username' => true,
        'password' => true,
        'passkey' => true,
        'photo' => true,
        'photo_dir' => true,
        'timeout' => true,
        'role_id' => true,
        'created' => true,
        'modified' => true,
        'role' => true,
        'campanhas' => true,
        'tratamentos' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];

    // Encripta as senhas de acesso
    protected function _setPassword($password) {
        if (strlen($password) > 0) {
            return (new DefaultPasswordHasher)->hash($password);
        }
    }

    public function parentNode() {
        if (!$this->id) {
            return null;
        }
        if (isset($this->role_id)) {
            $roleId = $this->role_id;
        } else {
            $Users = TableRegistry::get('Users');
            $user = $Users->find('all', ['fields' => ['role_id']])->where(['id' => $this->id])->first();
            $roleId = $user->role_id;
        }
        if (!$roleId) {
            return null;
        }
        return ['Roles' => ['id' => $roleId]];
    }

}
