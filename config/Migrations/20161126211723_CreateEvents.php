<?php
use Migrations\AbstractMigration;

class CreateEvents extends AbstractMigration {
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change() {
        $this->table( 'events' )
            ->addColumn( 'campaign_id' , 'integer' , [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn( 'title' , 'string' , [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn( 'date' , 'date' , [
                'default' => null,
                'null' => false,
            ])
            ->addColumn( 'region_id' , 'integer' , [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn( 'city' , 'string' , [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn( 'state' , 'string' , [
                'default' => null,
                'limit' => 128,
                'null' => false,
            ])
            ->addColumn( 'venue' , 'string' , [
                'default' => null,
                'limit' => 128,
                'null' => false,
            ])
            ->addColumn( 'description' , 'text' , [
                'default' => null,
                'null' => false,
            ])
            ->addColumn( 'total_participants' , 'integer' , [
                'default' => null,
                'null' => true,
            ])
            ->addColumn( 'user_id' , 'integer' , [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn( 'created' , 'datetime' , [
                'default' => null,
                'null' => false,
            ])
            ->addColumn( 'updated' , 'datetime' , [
                'default' => null,
                'null' => false,
            ])
            ->create();
    }
}
