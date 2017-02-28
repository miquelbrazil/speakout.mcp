<?php
use Migrations\AbstractMigration;

class AddRegionToUsers extends AbstractMigration {
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change() {
        $this->table( 'users' )
            ->addColumn( 'region_id' , 'integer' , [
                'default' => null,
                'null' => true,
                'after' => 'role'
            ])
            ->addColumn( 'city' , 'string' , [
                'default' => null,
                'null' => true,
                'after' => 'region_id'
            ])
            ->addColumn( 'state' , 'string' , [
                'default' => null,
                'null' => true,
                'after' => 'city'
            ])
            ->update();
    }
}
