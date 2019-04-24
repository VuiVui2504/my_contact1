<?php
use Migrations\AbstractMigration;

class Initial extends AbstractMigration
{
    public function up()
    {

        $this->table('accounts')
            ->addColumn('username', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('password', 'string', [
                'comment' => 'MD5 encrypted password',
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('last_login', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created', 'datetime', [
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('updated', 'datetime', [
                'default' => '0000-00-00 00:00:00',
                'limit' => null,
                'null' => false,
            ])
            ->addIndex(
                [
                    'username',
                ],
                ['unique' => true]
            )
            ->create();

        $this->table('contacts')
            ->addColumn('first_name', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('last_name', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('gender', 'tinyinteger', [
                'comment' => '0: Male; 1: Female',
                'default' => '0',
                'limit' => 2,
                'null' => false,
            ])
            ->addColumn('birthday', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('address', 'text', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('bank_account_id', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('bank_account_name', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('avatar', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('created', 'datetime', [
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('updated', 'datetime', [
                'default' => '0000-00-00 00:00:00',
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('bank_id', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('bank_branch_id', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->create();

        $this->table('group_contacts')
            ->addColumn('group_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('contact_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('created', 'datetime', [
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('updated', 'datetime', [
                'default' => '0000-00-00 00:00:00',
                'limit' => null,
                'null' => false,
            ])
            ->create();

        $this->table('groups')
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('created', 'datetime', [
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('updated', 'datetime', [
                'default' => '0000-00-00 00:00:00',
                'limit' => null,
                'null' => false,
            ])
            ->create();
    }

    public function down()
    {
        $this->table('accounts')->drop()->save();
        $this->table('contacts')->drop()->save();
        $this->table('group_contacts')->drop()->save();
        $this->table('groups')->drop()->save();
    }
}
