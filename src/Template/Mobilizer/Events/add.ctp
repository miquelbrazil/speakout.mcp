<div class="ui one column grid">
    <div class="column">

        <!--<?php debug( $event ); ?>-->
        <?php if( !isset( $event->media ) ) { $event->media = [ 0 , 1 , 2 ]; } ?>

        <h1 class="ui top attached inverted medium header"> Add New Event</h1>

        <?= $this->Form->create( $event , [ 'url' => [ 'controller' => 'Events' , 'action' => 'add' ] , 'id' => 'new-event' , 'class' => 'ui form' , 'type' => 'file' ] ); ?>

        <div class="ui attached segment">

                <?= $this->Flash->render() ?>

                <div class="ui accordion basic segment">
                    <h1 class="ui small header active title" style="text-transform: uppercase;">Tips for writing good Event Descriptions</h1>

                    <div class="content">
                        <ul>
                            <li>Make sure your description answers the Who, What, When and Where of your event</li>
                            <li>In addition, make sure your description includes the following details:</li>
                            <ul>
                                <li>What and How Many Community Partners were involved in the planning or implementation of your event</li>
                                <li>How many Speak Out cards were signed by participants?</li>
                                <li>Include whether HIV Testing was provided. If so, who was the provider?</li>
                                <li>Were there any reactive HIV tests? Were these individuals linked to care?</li>
                                <li>Detail if any political representatives or notable personalities that were present at the event. Who were they?</li>
                            </ul>
                        </ul>

                        <p><strong>The following is a great example of a good Event Description and Title from one of our South Florida Mobilizers:</strong></p>

                        <h2 class="ui small header">POP UP FLASH MOB PARTY IN SOUTH FLORIDA</h2>

                        <p>On July 30th, South Florida Speak Out team hosted a Pop Up Flash Mob Party.  During this event the Speak Out Team canvassed Fort Lauderdale’s historical Sistrunk community spreading awareness about HIV/AIDS.  Thirty people signed up to our Speak Out network and 26 people received a HIV test on the AHF mobile testing unit.  Out of the 26, we had one reactive, which we linked to care at our local AHF healthcare center.</p>

                        <p>In attendance were Broward County Commissioner, Dale Holness; County Court Judge candidate, Russell Miller Thompson; and Marvin Shaw from the Pride Center.  We also welcomed Mr. Shaw’s giving out condoms to the citizens.  It was a fun filled day of dancing, eating and learning about HIV in our community.</p>
                    </div>
                </div>

                <div class="field">
                    <?= $this->Form->input( 'campaign_id' , [
                        'type' => 'select',
                        'options' => [
                            '1' => 'Martin Luther King Jr. Day (January 16, 2017)',
                            '2' => 'International Condom Day (February 13, 2017)',
                            '3' => 'National HIV Testing Day (June 27, 2017)',
                            '4' => 'World AIDS Day (December 1, 2017)',
                            '5' => 'Local Events (Various Dates)'
                        ],
                        'empty' => 'Select Campaign',
                        'label' => 'Campaign*',
                        'error' => false,
                        'class' => 'ui fluid row dropdown'
                    ]); ?>
                </div>

                <div class="three fields">
                    <div class="field">
                        <?= $this->Form->input( 'region_id' , [
                            'type' => 'select',
                            'options' => [
                                '1' => 'Midwest',
                                '2' => 'South',
                                '3' => 'Northeast',
                                '4' => 'Mid-Atlantic',
                                '5' => 'West',
                                '6' => 'International',
                            ],
                            'empty' => 'Select Region',
                            'default' => $user[ 'region_id' ],
                            'label' => 'Region*',
                            'error' => false,
                            'class' => 'ui fluid row dropdown',
                        ]); ?>
                    </div>

                    <div class="field">
                        <?= $this->Form->input( 'city' , [ 'type' => 'text' , 'label' => 'City*' , 'placeholder' => 'Enter City' , 'default' => $user[ 'city' ] ] ) ?>
                    </div>

                    <div class="field">
                        <?= $this->Form->input( 'state' , [
                            'type' => 'select',
                            'options' => [
                                'AL'=>'Alabama',
                                'AK'=>'Alaska',
                                'AZ'=>'Arizona',
                                'AR'=>'Arkansas',
                                'CA'=>'California',
                                'CO'=>'Colorado',
                                'CT'=>'Connecticut',
                                'DE'=>'Delaware',
                                'DC'=>'District of Columbia',
                                'FL'=>'Florida',
                                'GA'=>'Georgia',
                                'HI'=>'Hawaii',
                                'ID'=>'Idaho',
                                'IL'=>'Illinois',
                                'IN'=>'Indiana',
                                'IA'=>'Iowa',
                                'KS'=>'Kansas',
                                'KY'=>'Kentucky',
                                'LA'=>'Louisiana',
                                'ME'=>'Maine',
                                'MD'=>'Maryland',
                                'MA'=>'Massachusetts',
                                'MI'=>'Michigan',
                                'MN'=>'Minnesota',
                                'MS'=>'Mississippi',
                                'MO'=>'Missouri',
                                'MT'=>'Montana',
                                'NE'=>'Nebraska',
                                'NV'=>'Nevada',
                                'NH'=>'New Hampshire',
                                'NJ'=>'New Jersey',
                                'NM'=>'New Mexico',
                                'NY'=>'New York',
                                'NC'=>'North Carolina',
                                'ND'=>'North Dakota',
                                'OH'=>'Ohio',
                                'OK'=>'Oklahoma',
                                'OR'=>'Oregon',
                                'PA'=>'Pennsylvania',
                                'RI'=>'Rhode Island',
                                'SC'=>'South Carolina',
                                'SD'=>'South Dakota',
                                'TN'=>'Tennessee',
                                'TX'=>'Texas',
                                'UT'=>'Utah',
                                'VT'=>'Vermont',
                                'VA'=>'Virginia',
                                'WA'=>'Washington',
                                'WV'=>'West Virginia',
                                'WI'=>'Wisconsin',
                                'WY'=>'Wyoming'
                            ],
                            'default' => $user[ 'state' ],
                            'empty' => 'Select State',
                            'label' => 'State*',
                            'error' => false,
                            'class' => 'ui fluid row dropdown',
                        ]); ?>
                    </div>
                </div>

                <div class="field">
                    <?= $this->Form->input( 'title' , [ 'type' => 'text' , 'label' => 'Event Name*' , 'placeholder' => 'Enter Event Name' ] ) ?>
                </div>

                <div class="field">
                    <?= $this->Form->input( 'description' , [ 'type' => 'textarea' , 'label' => 'Event Description* &nbsp; (<span id="display_count">0</span> total words of 75 word minimum)' , 'placeholder' => 'Enter Event Description' , 'id' => 'word_count' , 'escape' => false ]) ?>
                </div>

                <div class="three fields">
                    <div class="field">
                        <?= $this->Form->input( 'date' , [ 'type' => 'calendar' , 'label' => 'Event Date*' , 'placeholder' => 'Enter Date' , 'value' => isset( $event->date ) ? $event->date->i18nFormat( 'MM/dd/YYYY') : false , 'templateVars' => [ 'calendar_id' => 'event-calendar' ] ] ) ?>
                    </div>

                    <div class="field">
                        <?= $this->Form->input( 'venue' , [ 'type' => 'text' , 'label' => 'Venue' , 'placeholder' => 'Enter Venue Name*' ] ) ?>
                    </div>

                    <div class="field">
                        <?= $this->Form->input( 'total_participants' , [ 'type' => 'text' , 'label' => 'Total Participants*' , 'placeholder' => 'Enter Total' ] ) ?>
                    </div>
                </div>
        </div>

        <!--<div class="ui attached segment">
            <div class="ui large top attached label">Highlights &amp; Testimonials</div>
            <ul style="margin-top: 3rem !important;">
                <li>First time the Mayor had attended a community event.</li>
                <li>Dramatic increase in participation from the previous month's event</li>
            </ul>
        </div>-->

        <div class="ui attached segment">
            <div class="ui large top attached label">Media</div>
            <div class="ui three cards">
                <div class="card">
                    <div class="image"><img src="<?= isset( $event->media[0]->urn ) ? '/webroot/media/' . $event->media[0]->urn : '/webroot/img/nomedia.jpg'; ?>" class="ui fluid image"/></div>
                    <div class="content">
                        <div class="header"><?= isset( $event->media[0]->title ) ? $event->media[0]->title : 'No Media'; ?></div>
                        <div class="description"><?= isset( $event->media[0]->title ) ? $event->media[0]->description : 'Please upload a valid media file.'; ?></div>
                    </div>
                    <div class="ui bottom attached button">
                        <i class="add icon"></i>Edit Media
                    </div>
                    <div id="media-upload-first" class="ui upload dimmer">
                        <div id="upload" class="content" style="padding: 1.5rem;">
                            <div class="center">
                                <div class="media upload field">
                                    <div class="ui action input upload">
                                        <label for="media-1-upload" class="ui fluid icon button">
                                                <i class="file outline icon"></i>
                                                <?= $this->Form->file( 'media[0][file]' , [ 'id' => 'media-1-upload' , 'class' => 'file upload' , 'style' => 'display: none' ] ) ?>
                                                &nbsp;<span class="status">Choose Media</span>
                                        </label>
                                        <?= $this->Form->hidden( 'media[0][urn]' , [ 'class' => 'urn' , 'value' => isset( $event->media[0]->urn ) ? $event->media[0]->urn : '' ] ) ?>
                                    </div>
                                </div>
                                <div class="field">
                                    <?= $this->Form->input( 'media[0][title]' , [ 'type' => 'text' , 'label' => false, 'placeholder' => 'Media Title' , 'default' => isset( $event->media[0]->title ) ? $event->media[0]->title : false ] ) ?>
                                </div>
                                <div class="field">
                                    <?= $this->Form->input( 'media[0][description]' , [ 'type' => 'textarea' , 'label' => false , 'placeholder' => 'Media Description' , 'default' => isset( $event->media[0]->description ) ? $event->media[0]->description : false ] ) ?>
                                </div>
                                <div class="field"><button class="ui fluid button submit" formnovalidate name="action" value="upload" type="submit">Update Media</button></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="image"><img src="<?= isset( $event->media[1]->urn ) ? '/webroot/media/' . $event->media[1]->urn : '/webroot/img/nomedia.jpg'; ?>" class="ui fluid image"/></div>
                    <div class="content">
                        <div class="header"><?= isset( $event->media[1]->title ) ? $event->media[1]->title : 'No Media'; ?></div>
                        <div class="description"><?= isset( $event->media[1]->title ) ? $event->media[1]->description : 'Please upload a valid media file.'; ?></div>
                    </div>
                    <div class="ui bottom attached button">
                        <i class="add icon"></i>Edit Media
                    </div>
                    <div  id="media-upload-second" class="ui upload dimmer">
                        <div id="upload" class="content" style="padding: 1.5rem;">
                            <div class="center">
                                <div class="media upload field">
                                    <div class="ui action input upload">
                                        <label for="media-2-upload" class="ui fluid icon button">
                                                <i class="file outline icon"></i>
                                                <?= $this->Form->file( 'media[1][file]' , [ 'id' => 'media-2-upload' , 'class' => 'file upload' , 'style' => 'display: none' ] ) ?>
                                                &nbsp;<span class="status">Choose Media</span>
                                        </label>
                                        <?= $this->Form->hidden( 'media[1][urn]' , [ 'class' => 'urn' , 'value' => isset( $event->media[1]->urn ) ? $event->media[1]->urn : '' ] ) ?>
                                    </div>
                                </div>
                                <div class="field">
                                    <?= $this->Form->input( 'media[1][title]' , [ 'type' => 'text' , 'label' => false, 'placeholder' => 'Media Title' , 'default' => isset( $event->media[1]->title ) ? $event->media[1]->title : false ] ) ?>
                                </div>
                                <div class="field">
                                    <?= $this->Form->input( 'media[1][description]' , [ 'type' => 'textarea' , 'label' => false , 'placeholder' => 'Media Description' , 'default' => isset( $event->media[1]->description ) ? $event->media[1]->description : false ] ) ?>
                                </div>
                                <div class="field"><button class="ui fluid button submit" formnovalidate name="action" value="upload" type="submit">Update Media</button></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="image"><img src="<?= isset( $event->media[2]->urn ) ? '/webroot/media/' . $event->media[2]->urn : '/webroot/img/nomedia.jpg'; ?>" class="ui fluid image"/></div>
                    <div class="content">
                        <div class="header"><?= isset( $event->media[2]->title ) ? $event->media[2]->title : 'No Media'; ?></div>
                        <div class="description"><?= isset( $event->media[2]->title ) ? $event->media[2]->description : 'Please upload a valid media file.'; ?></div>
                    </div>
                    <div class="ui bottom attached button">
                        <i class="add icon"></i>Edit Media
                    </div>
                    <div  id="media-upload-third" class="ui upload dimmer">
                        <div id="upload" class="content" style="padding: 1.5rem;">
                            <div class="center">
                                <div class="media upload field">
                                    <div class="ui action input upload">
                                        <label for="media-3-upload" class="ui fluid icon button">
                                                <i class="file outline icon"></i>
                                                <?= $this->Form->file( 'media[2][file]' , [ 'id' => 'media-3-upload' , 'class' => 'file upload' , 'style' => 'display: none' ] ) ?>
                                                &nbsp;<span class="status">Choose Media</span>
                                        </label>
                                        <?= $this->Form->hidden( 'media[2][urn]' , [ 'class' => 'urn' , 'value' => isset( $event->media[2]->urn ) ? $event->media[2]->urn : '' ] ) ?>
                                    </div>
                                </div>
                                <div class="field">
                                    <?= $this->Form->input( 'media[2][title]' , [ 'type' => 'text' , 'label' => false, 'placeholder' => 'Media Title' , 'default' => isset( $event->media[2]->title ) ? $event->media[2]->title : false ] ) ?>
                                </div>
                                <div class="field">
                                    <?= $this->Form->input( 'media[2][description]' , [ 'type' => 'textarea' , 'label' => false , 'placeholder' => 'Media Description' , 'default' => isset( $event->media[2]->description ) ? $event->media[2]->description : false ] ) ?>
                                </div>
                                <div class="field"><button class="ui fluid button submit" formnovalidate name="action" value="upload" type="submit">Update Media</button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="ui bottom attached segment">
            <div class="two fields">
                <div class="field"><button class="ui fluid disabled button" type="reset">Reset</button></div>
                <div class="field"><button class="ui fluid button submit" formnovalidate name="action" value="create" type="submit">Submit Event</button></div>
            </div>
        </div>

        <?= $this->Form->end(); ?>
    </div>
</div>
