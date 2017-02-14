<?php
use Migrations\AbstractMigration;

class CreateCampaigns extends AbstractMigration {
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change() {
        $this->table( 'campaigns' )
            ->addColumn( 'name' , 'string' , [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn( 'description' , 'text' , [
                'default' => null,
                'null' => false,
            ])
            ->addColumn( 'start_date' , 'date' , [
                'default' => null,
                'null' => false,
            ])
            ->addColumn( 'end_date' , 'date' , [
                'default' => null,
                'null' => false,
            ])
            ->addColumn( 'scope' , 'string' , [
                'default' => null,
                'limit' => 32,
                'null' => false,
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
