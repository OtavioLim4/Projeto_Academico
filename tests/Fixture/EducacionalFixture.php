<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EducacionalFixture
 */
class EducacionalFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'educacional';
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
                'curso' => 'Lorem ipsum dolor sit amet',
                'instituicao' => 'Lorem ipsum dolor sit amet',
                'datainicio' => '2023-12-08',
                'dataconclusao' => '2023-12-08',
                'certificados' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'user_id' => 1,
                'created' => 1702043028,
                'modified' => 1702043028,
            ],
        ];
        parent::init();
    }
}
