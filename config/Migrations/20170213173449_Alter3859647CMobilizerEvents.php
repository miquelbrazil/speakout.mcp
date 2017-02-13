<?php
use Migrations\AbstractMigration;

class Alter3859647CMobilizerEvents extends AbstractMigration {

    public function up() {
        $this->table( 'mobilizer_events' )
            ->rename( 'events' )
            ->update();
    }

    public function down() {
        $this->table( 'events' )
            ->rename( 'mobilizer_events' )
            ->update();
    }
}
