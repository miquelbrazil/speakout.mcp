<?php
use Migrations\AbstractMigration;

class AddTimestampsToMedia extends AbstractMigration {
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change() {
        $this->table( 'media' )
            ->addColumn( 'created' , 'datetime' , [
                'default' => null,
                'null' => false
            ])
            ->addColumn( 'updated' , 'datetime' , [
                'default' => null,
                'null' => false
            ])
            ->update();
    }
}
