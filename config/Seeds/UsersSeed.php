<?php
use Migrations\AbstractSeed;

/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => '1',
                'username' => 'miquel@mobrazilliance.com',
                'password' => '$2y$10$r4PHDOVlTmcPPGYBFiFF/.Y0oFBjz1Hy0XyGfkYpk0aOgkD7l.Y9u',
                'fullname' => 'Miquel Brazil',
                'role' => 'admin',
                '_created' => '2016-11-24 12:57:54',
                '_modified' => '2016-11-24 12:57:54',
            ],
            [
                'id' => '2',
                'username' => 'jreinhart',
                'password' => '$2y$10$tYRuJ8XSf3kBfyHzLBj/aeWFieFswh.WnD.g6yYTrg9dvnChs7mCC',
                'fullname' => NULL,
                'role' => 'admin',
                '_created' => '2017-01-10 15:36:57',
                '_modified' => '2017-01-10 15:36:57',
            ],
            [
                'id' => '3',
                'username' => 'tnarducci',
                'password' => '$2y$10$ZzdUXhsuZUybTcoqL6JVte5EvKtdoji7t9C/m71kxLA0fzitfmR7K',
                'fullname' => NULL,
                'role' => 'admin',
                '_created' => '2017-01-10 15:40:49',
                '_modified' => '2017-01-10 15:40:49',
            ],
            [
                'id' => '4',
                'username' => 'jking',
                'password' => '$2y$10$rbr6sR.vvOBRhWAFkrKBJesQlMBQkDw9qNlJjLgjtcHLgIZfORBki',
                'fullname' => NULL,
                'role' => 'admin',
                '_created' => '2017-01-10 16:08:54',
                '_modified' => '2017-01-10 16:08:54',
            ],
            [
                'id' => '5',
                'username' => 'telarkin2@gmail.com',
                'password' => '$2y$10$EY3iIrp1RC92CXf5iWvE8.zLuGbDxozDHodEsNw5iVsLMXo4.lavy',
                'fullname' => 'Tony Larkin',
                'role' => 'user',
                '_created' => '2017-02-08 17:18:13',
                '_modified' => '2017-02-08 17:18:13',
            ],
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}
