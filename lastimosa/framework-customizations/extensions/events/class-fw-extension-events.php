<?php if (!defined('FW')) die('Forbidden');

class FW_Extension_Event_Tickets extends FW_Extension implements FW_Events_Interface_Tabs {

    public function fw_get_tabs_options() {
        return array(
            'events_tab' => array(
                'title'   => __( 'New Demo Tab Options', 'fw' ),
                'type'    => 'tab',
                'options' => array(
                    'demo_text_id' => array(
                        'type'  => 'text',
                        'desc'  => 'Demo text description',
                        'label' => 'Demo Text Label',
                    )
                )
            )
        );
    }
}