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
                'username' => 'mobrazil@icloud.com',
                'password' => '$2y$10$r4PHDOVlTmcPPGYBFiFF/.Y0oFBjz1Hy0XyGfkYpk0aOgkD7l.Y9u',
                'fullname' => 'Miquel Brazil',
                'role' => 'mobilizer',
                'region_id' => '2',
                'city' => 'Atlanta',
                'state' => 'GA',
                'created' => '2016-11-24 12:57:54',
                'updated' => '2016-11-24 12:57:54',
            ],
            [
                'id' => '2',
                'username' => 'jessica.reinhart@aidshealth.org',
                'password' => '$2y$10$lI5.qKEx2uEKPJasL/9Rj.VGQD/dGJAolmzHxBTqNsplNq6qbAMRm',
                'fullname' => 'Jessica Reinhart',
                'role' => 'mobilizer',
                'region_id' => '3',
                'city' => 'Brooklyn',
                'state' => 'NY',
                'created' => '2017-01-10 15:36:57',
                'updated' => '2017-02-28 16:45:59',
            ],
            [
                'id' => '3',
                'username' => 'tyler@sobeviral.com',
                'password' => '$2y$10$/xLmWZ/5Jcu.wRLEd6qQheAhbau/fm.m0MbvYnI3Vcva0adLHw38.',
                'fullname' => 'Tyler Narducci',
                'role' => 'mobilizer',
                'region_id' => '2',
                'city' => NULL,
                'state' => 'FL',
                'created' => '2017-01-10 15:40:49',
                'updated' => '2017-02-28 16:45:22',
            ],
            [
                'id' => '4',
                'username' => 'jason.king@aidshealth.org',
                'password' => '$2y$10$vyJZaMcQqjIwtDUbeEbJMODwTk18fl.6JAomT.B8B8EMV8McTWTpi',
                'fullname' => 'Jason King',
                'role' => 'mobilizer',
                'region_id' => '2',
                'city' => NULL,
                'state' => 'FL',
                'created' => '2017-01-10 16:08:54',
                'updated' => '2017-02-28 16:43:59',
            ],
            [
                'id' => '6',
                'username' => 'mbrazil@clevelandtaskforce.org',
                'password' => '$2y$10$2vTCWyTeMjIThcV2lh8rtuLa90wbyWR9p47b3HEGC/Qb90nYQwYaC',
                'fullname' => 'Miquel Brazil',
                'role' => 'admin',
                'region_id' => NULL,
                'city' => NULL,
                'state' => NULL,
                'created' => '2017-02-28 11:59:12',
                'updated' => '2017-02-28 11:59:12',
            ],
            [
                'id' => '7',
                'username' => 'dbarnett@clevelandtaskforce.org',
                'password' => '$2y$10$jx3/LaDgU8f6SU3Exd.UN.XSUetPiMay6tTEr/AcJ0Iq7wtwFCaSG',
                'fullname' => 'Derek Barnett',
                'role' => 'mobilizer',
                'region_id' => '1',
                'city' => 'Cleveland',
                'state' => 'OH',
                'created' => '2017-02-28 16:47:32',
                'updated' => '2017-02-28 16:47:32',
            ],
            [
                'id' => '8',
                'username' => 'timothy.webb@aidshealth.org',
                'password' => '$2y$10$BdSqCH9W7aqoOY00SirEYu2Rrme3.L73.Zlsa8FNiCgKiO3ax3hL.',
                'fullname' => NULL,
                'role' => 'mobilizer',
                'region_id' => '2',
                'city' => 'Atlanta',
                'state' => 'GA',
                'created' => '2017-02-28 16:49:03',
                'updated' => '2017-02-28 16:49:03',
            ],
            [
                'id' => '9',
                'username' => 'sharon.brown@aidshealth.org',
                'password' => '$2y$10$GftRyrNrvUd6i5bifMDNmufE7VAPfcahcZILadtXfFDj65VMDnPHS',
                'fullname' => NULL,
                'role' => 'mobilizer',
                'region_id' => '2',
                'city' => 'Clinton',
                'state' => 'MS',
                'created' => '2017-02-28 16:49:25',
                'updated' => '2017-02-28 16:50:38',
            ],
            [
                'id' => '10',
                'username' => 'sashika.baunchand@aidshealth.org',
                'password' => '$2y$10$MPf7q769OuhIvtYiS/4lje7W2BSjPFJpNdpgjqrb2ldO..HYVdsyS',
                'fullname' => 'Sashika Baunchand',
                'role' => 'mobilizer',
                'region_id' => '2',
                'city' => 'Baton Rouge',
                'state' => 'LA',
                'created' => '2017-02-28 16:51:02',
                'updated' => '2017-02-28 16:51:02',
            ],
            [
                'id' => '11',
                'username' => 'terl.gleason@aidshealth.org',
                'password' => '$2y$10$XR5EvTCrJpw7kLsalkEhaeVa1C9XmDzbIUFsRo8XOlai54A/sVzyW',
                'fullname' => NULL,
                'role' => 'mobilizer',
                'region_id' => '4',
                'city' => 'Greensboro',
                'state' => 'NC',
                'created' => '2017-02-28 16:51:57',
                'updated' => '2017-02-28 16:51:57',
            ],
            [
                'id' => '12',
                'username' => 'wandabrendle.moss@aidshealth.org',
                'password' => '$2y$10$OUI07pI7W1SiKkcCJ5iJxOZ0Byb2/N.rP04usSOhso0iMfdLrAfei',
                'fullname' => 'Wanda Brendle-Moss',
                'role' => 'mobilizer',
                'region_id' => '4',
                'city' => 'Winston-Salem',
                'state' => 'NC',
                'created' => '2017-02-28 16:53:04',
                'updated' => '2017-02-28 16:53:04',
            ],
            [
                'id' => '13',
                'username' => 'rebecca.strong@aidshealth.org',
                'password' => '$2y$10$tDzkgXKdh1Ggv6Y4w2rKwOoo1LclCkJ7QcBI.kkPruu06MAI/.mUO',
                'fullname' => 'Rebecca Strong',
                'role' => 'mobilizer',
                'region_id' => '1',
                'city' => 'Cleveland',
                'state' => 'OH',
                'created' => '2017-02-28 16:58:33',
                'updated' => '2017-02-28 16:58:33',
            ],
            [
                'id' => '14',
                'username' => 'tracy.jones@aidshealth.org',
                'password' => '$2y$10$NkCYPhpE8yHlNN9x216EeeApWjhtZO8EqM.KFj.byS0kQOlk6RfqG',
                'fullname' => 'Tracy Jones',
                'role' => 'mobilizer',
                'region_id' => '1',
                'city' => 'Cleveland',
                'state' => 'OH',
                'created' => '2017-02-28 16:58:53',
                'updated' => '2017-02-28 16:58:53',
            ],
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}
