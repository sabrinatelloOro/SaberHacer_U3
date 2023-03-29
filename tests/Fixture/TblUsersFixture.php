<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TblUsersFixture
 */
class TblUsersFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'Id_user' => 1,
                'Name_user' => '',
                'Email_user' => '',
                'Num_empleado' => '',
                'Edad_user' => 1,
                'Num_contacto' => '',
            ],
        ];
        parent::init();
    }
}
