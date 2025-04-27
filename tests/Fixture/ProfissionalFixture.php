<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProfissionalFixture
 */
class ProfissionalFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'profissional';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'empresa' => 'Lorem ipsum dolor sit amet',
                'cargo' => 'Lorem ipsum dolor sit amet',
                'datainicio' => '2023-09-28',
                'user_id' => 1,
                'created' => 1695917286,
                'modified' => 1695917286,
            ],
        ];
        parent::init();
    }
}
