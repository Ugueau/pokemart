<?php
declare(strict_types=1);

use Migrations\AbstractMigration;
use Cake\ORM\TableRegistry;
use App\Model\Table\UsersTable;

class FirstMigration extends AbstractMigration
{
    /**
     * Up Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-up-method
     * @return void
     */
    public function up(): void
    {
        $this->table('card')
            ->addColumn('type', 'string', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('hp', 'tinyinteger', [
                'default' => null,
                'limit' => null,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('pokemon_type', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => true,
            ])
            ->addColumn('level', 'tinyinteger', [
                'default' => null,
                'limit' => null,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('description', 'text', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('weakness', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('resistance', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('retreat_cost', 'tinyinteger', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('rarity_index', 'tinyinteger', [
                'default' => '-1',
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('rarity_symbol', 'string', [
                'default' => 'undefined',
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('image_url', 'string', [
                'default' => 'no_image',
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('origin_country', 'string', [
                'default' => 'undefined',
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('copies', 'tinyinteger', [
                'default' => '1',
                'limit' => null,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('price', 'decimal', [
                'default' => '1000.00',
                'null' => false,
                'precision' => 10,
                'scale' => 2,
            ])
            ->create();

        $this->table('users')
            ->addColumn('email', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('password', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->create();

        $usersTable = TableRegistry::getTableLocator()->get('Users');

        $user = $usersTable->newEmptyEntity();
        $user->email = 'admin@pokemart.fr';
        $user->password = 'admin';

        $usersTable->save($user);

    }

    /**
     * Down Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-down-method
     * @return void
     */
    public function down(): void
    {
        $this->table('card')->drop()->save();
        $this->table('users')->drop()->save();
    }
}
