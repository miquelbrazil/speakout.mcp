<?php
use Migrations\AbstractMigration;

class Alter88C921F9MobilizerEvents extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change() {
        $this->table( 'mobilizer_events' )
            ->renameColumn( '_created' , 'created' )
            ->renameColumn( '_updated' , 'updated' )
            ->update();
    }
}
