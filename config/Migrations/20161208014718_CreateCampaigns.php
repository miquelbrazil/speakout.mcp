<?php
use Migrations\AbstractMigration;

class CreateCampaigns extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table( 'campaigns' );
        $table->addColumn( 'name' , 'string' , [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn( 'description' , 'text' , [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn( 'start_date' , 'date' , [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn( 'end_date' , 'date' , [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn( 'scope' , 'string' , [
            'default' => null,
            'limit' => 255,
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
