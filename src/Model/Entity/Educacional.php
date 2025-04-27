<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Educacional Entity
 *
 * @property int $id
 * @property string|null $curso
 * @property string|null $instituicao
 * @property \Cake\I18n\FrozenDate|null $datainicio
 * @property \Cake\I18n\FrozenDate|null $dataconclusao
 * @property string|null $certificados
 * @property int|null $user_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\User $user
 */
class Educacional extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'curso' => true,
        'instituicao' => true,
        'datainicio' => true,
        'dataconclusao' => true,
        'certificados' => true,
        'user_id' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
    ];
}
