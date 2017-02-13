<?php
use Migrations\AbstractMigration;

class CreateMobilizerEvents extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change() {
        $table = $this->table('mobilizer_events');
        $table->addColumn( 'campaign_id' , 'integer' , [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn( 'event_name' , 'string' , [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn( 'event_date' , 'date' , [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn( 'region_id' , 'integer' , [
            'default' => null,
            'limit' => 11,
            'null' => true,
        ]);
        $table->addColumn( 'location_city' , 'string' , [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn( 'location_state' , 'string' , [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn( 'event_description' , 'text' , [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn( 'total_participants' , 'integer' , [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn( 'user_id' , 'integer' , [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn( '_created' , 'datetime' , [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn( '_updated' , 'datetime' , [
            'default' => null,
            'null' => false,
        ]);
        $table->create();
    }
}
