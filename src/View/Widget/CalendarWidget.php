<?php
namespace App\View\Widget;

use Cake\View\Form\ContextInterface;
use Cake\View\Widget\WidgetInterface;

class CalendarWidget implements WidgetInterface {

    protected $_templates;

    public function __construct( $templates ) {

        $this->_templates = $templates;
    }

    public function render(array $data, ContextInterface $context) {
        //debug( $data );

        $data += [
            'name' => '',
            'templateVars' => [
                'calendar_id' => 'something'
            ]
        ];

        if ( !array_key_exists( 'calendar_id' , $data[ 'templateVars' ] ) || !$data[ 'templateVars' ][ 'calendar_id' ] ) {
            $data[ 'templateVars' ][ 'calendar_id' ] = 'something';
        }

        if ( !$data[ 'required' ] ) {
            $data[ 'required' ] = true;
        }

        //debug( $data );

        $input = $this->_templates->format( 'calendar' , [
            'name' => $data[ 'name' ],
            'templateVars' => $data[ 'templateVars' ],
            'attrs' => $this->_templates->formatAttributes( $data , [ 'name' ] )
        ]);

        //debug( $input );

        return $input;
    }

    public function secureFields(array $data) {
        return [$data['name']];
    }
}
