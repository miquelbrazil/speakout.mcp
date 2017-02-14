<?php
use Migrations\AbstractMigration;

class CreateMedia extends AbstractMigration {
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change() {
        $this->table( 'media' )
            ->addColumn( 'event_id' , 'integer' , [
                'default' => null,
                'null' => false,
                'limit' => 11
            ])
            ->addColumn( 'title' , 'string' , [
                'default' => null,
                'null' => false,
                'limit' => 64
            ])
            ->addColumn( 'description' , 'text' , [
                'default' => null,
                'null' => false
            ])
            ->addColumn( 'urn' , 'string' , [
                'default' => null,
                'null' => true,
                'limit' => 225
            ])
            ->addColumn( 'storage' , 'string' , [
                'default' => 'LOCAL',
                'null' => true,
                'limit' => 32
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
