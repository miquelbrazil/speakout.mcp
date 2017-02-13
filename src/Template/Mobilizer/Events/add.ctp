<div class="ui grid">
    <div class="ui four wide column">
        <h1 class="ui top attached inverted small header">Actions</h1>
        <div class="ui bottom attached segment">
            <a href="#">Add New Event</a>
        </div>
    </div>
    <div class="ui twelve wide column">

        <h1 class="ui top attached inverted medium header"> Add New Event</h1>

        <?= $this->Form->create( null , [ 'url' => [ 'controller' => 'Events' , 'action' => 'add' ] , 'id' => 'new-event' , 'class' => 'ui form' , 'type' => 'file' ] ); ?>

        <div class="ui attached segment">

                <div class="field">
                    <?= $this->Form->input( 'campaign_id' , [
                        'type' => 'select',
                        'options' => [
                            '1' => 'World AIDS Day',
                            '2' => 'Keep The Promise',
                            '3' => 'International Condom Day'
                        ],
                        'empty' => 'Select Campaign',
                        'label' => 'Campaign',
                        'error' => false,
                        'class' => 'ui fluid row dropdown',
                    ]); ?>
                </div>

                <div class="three fields">
                    <div class="field">
                        <?= $this->Form->input( 'region_id' , [
                            'type' => 'select',
                            'options' => [
                                '1' => 'Midwest',
                                '2' => 'South',
                                '3' => 'North Atlantic',
                                '4' => 'West',
                                '5' => 'International',
                            ],
                            'empty' => 'Select Region',
                            'label' => 'Region',
                            'error' => false,
                            'class' => 'ui fluid row dropdown',
                        ]); ?>
                    </div>

                    <div class="field">
                        <?= $this->Form->input( 'location_city' , [ 'type' => 'text' , 'label' => 'City' , 'placeholder' => 'Enter City' ] ) ?>
                    </div>

                    <div class="field">
                        <?= $this->Form->input( 'location_state' , [
                            'type' => 'select',
                            'options' => [
                                'OH' => 'Ohio',
                                'CA' => 'California',
                                'IL' => 'Illinois',
                                'NC' => 'North Carolina',
                                'FL' => 'Florida'
                            ],
                            'empty' => 'Select State',
                            'label' => 'State',
                            'error' => false,
                            'class' => 'ui fluid row dropdown',
                        ]); ?>
                    </div>
                </div>

                <div class="field">
                    <?= $this->Form->input( 'event_name' , [ 'type' => 'text' , 'label' => 'Event Name' , 'placeholder' => 'Enter Event Name' ] ) ?>
                </div>

                <div class="field">
                    <?= $this->Form->input( 'event_description' , [ 'type' => 'textarea' , 'label' => 'Event Description (0/75 words)' , 'placeholder' => 'Enter Event Description' ] ) ?>
                </div>

                <p><strong>DESCRIPTION HELP SECTION</strong></p>

                <div class="three fields">
                    <div class="field">
                        <?= $this->Form->input( 'event_date' , [ 'type' => 'calendar' , 'label' => 'Event Date' , 'placeholder' => 'Enter Date' , 'templateVars' => [ 'calendar_id' => 'event-calendar' ] ] ) ?>
                    </div>

                    <div class="field">
                        <?= $this->Form->input( 'venue' , [ 'type' => 'text' , 'label' => 'Venue' , 'placeholder' => 'Enter Venue Name' ] ) ?>
                    </div>

                    <div class="field">
                        <?= $this->Form->input( 'total_participants' , [ 'type' => 'text' , 'label' => 'Total Participants' , 'placeholder' => 'Enter Total' ] ) ?>
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
                    <div class="image"><img src="/webroot/img/nomedia.jpg" class="ui fluid image"/></div>
                    <div class="content">
                        <div class="header">No Media</div>
                        <div class="description">Please upload a valid media file.</div>
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
                                        <?= $this->Form->hidden( 'media[0][filename]' , [ 'class' => 'order-confirmation filename' , 'value' => '' ] ) ?>
                                    </div>
                                </div>
                                <div class="field">
                                    <?= $this->Form->input( 'media[0][title]' , [ 'type' => 'text' , 'label' => false, 'placeholder' => 'Media Title' ] ) ?>
                                </div>
                                <div class="field">
                                    <?= $this->Form->input( 'media[0][description]' , [ 'type' => 'textarea' , 'label' => false , 'placeholder' => 'Media Description' ] ) ?>
                                </div>
                                <div class="field"><button class="ui fluid button submit" formnovalidate name="action" value="upload" type="submit">Update Media</button></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="image"><img src="/webroot/img/nomedia.jpg" class="ui fluid image"/></div>
                    <div class="content">
                        <div class="header">No Media</div>
                        <div class="description">Please upload a valid media file.</div>
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
                                        <?= $this->Form->hidden( 'media[1][filename]' , [ 'class' => 'filename' , 'value' => '' ] ) ?>
                                    </div>
                                </div>
                                <div class="field">
                                    <?= $this->Form->input( 'media[1][title]' , [ 'type' => 'text' , 'label' => false, 'placeholder' => 'Media Title' ] ) ?>
                                </div>
                                <div class="field">
                                    <?= $this->Form->input( 'media[1][description]' , [ 'type' => 'textarea' , 'label' => false , 'placeholder' => 'Media Description' ] ) ?>
                                </div>
                                <div class="field"><button class="ui fluid button submit" formnovalidate name="action" value="upload" type="submit">Update Media</button></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="image"><img src="/webroot/img/nomedia.jpg" class="ui fluid image"/></div>
                    <div class="content">
                        <div class="header">No Media</div>
                        <div class="description">Please upload a valid media file.</div>
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
                                        <?= $this->Form->hidden( 'media[2][filename]' , [ 'class' => 'order-confirmation filename' , 'value' => '' ] ) ?>
                                    </div>
                                </div>
                                <div class="field">
                                    <?= $this->Form->input( 'media[2][title]' , [ 'type' => 'text' , 'label' => false, 'placeholder' => 'Media Title' ] ) ?>
                                </div>
                                <div class="field">
                                    <?= $this->Form->input( 'media[2][description]' , [ 'type' => 'textarea' , 'label' => false , 'placeholder' => 'Media Description' ] ) ?>
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
