<div class="ui stackable grid container" style="margin-top: 0 !important;">
    <div class="six wide column">

        <header class="ui inverted large top attached header tk-open-sans">Event Snapshot</header>

        <div class="ui bottom attached segment">
            <table class="ui very basic two column padded table">
                <caption>Event Snapshot Details</caption>
                <tbody>
                    <tr>
                        <th>Event Date</th>
                        <td class="right aligned">12/01/2016</td>
                    </tr>
                    <tr>
                        <th>Region</th>
                        <td class="right aligned">Midwest</td>
                    </tr>
                    <tr>
                        <th>Location</th>
                        <td class="right aligned">Cleveland, OH</td>
                    </tr>
                    <tr>
                        <th>Venue</th>
                        <td class="right aligned">AHF Midwest HQ</td>
                    </tr>
                    <tr>
                        <th>Total Participants</th>
                        <td class="right aligned">58</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="ui one column right aligned grid">
            <div class="column">

                <?= $this->Html->link(
                            '<i class="arrow left icon"></i>Back to Events',
                            [ 'controller' => 'MobilizerEvents' , 'action' => 'index' ],
                            [ 'escape' => false ]
                        );
                ?>

            </div>
        </div>
    </div>

    <div class="ten wide column">

        <header class="ui inverted huge top attached header">Voices of Tomorrow Poetry Slam</header>

        <div class="ui attached segment">
            <div class="ui large top attached label" style="background-color: rgb(241,233,219);">World AIDS Day</div>

            <p style="margin-top: 3rem !important; margin-bottom: 1rem !important;"><strong>Event Synopsis:</strong> The Voices of Tomorrow Poetry Slam event was held on Wednesday, December 1, 2016 in commemoration of World AIDS Day. It featured poetry and music from young people around Greater Cleveland as they were tasked to write a piece refelcting on a world without HIV. Participants were mentored in probing this thought-provoking topic and offered guidance in developing works that showcased their perspectives.</p>

        </div>

        <div class="ui attached segment">
            <div class="ui large top attached label">Highlights &amp; Testimonials</div>
            <ul style="margin-top: 3rem !important;">
                <li>First time the Mayor had attended a community event.</li>
                <li>Dramatic increase in participation from the previous month's event</li>
            </ul>
        </div>

        <div class="ui attached segment">
            <div class="ui large top attached label">Statistics</div>
            <div class="ct-chart ct-double-octave" style="margin-top: 3rem !important;"></div>
        </div>

        <div class="ui bottom attached segment">
            <div class="ui large top attached label">Media</div>

            <table class="ui striped fixed single line table" style="table-collapse: collapse; margin-top: 2.5rem !important;">

                <thead>
                    <tr>
                        <th>ID</th>
                        <th class="two wide">Type</th>
                        <th>Uploaded</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td><a href="#">0B9C844E-684C-4DFD-BAFA-8B2D7C9786B2</a></th>
                        <td>JPEG</th>
                        <td>01/10/2017 2:16PM</th>
                        <td>Pending Approval</td>
                    </tr>
                    <tr>
                        <td><a href="#">1FEB7D9A-DA25-460B-9FF0-8F5BADA1AC60</a></th>
                        <td>JPEG</th>
                        <td>01/10/2017 2:18PM</th>
                        <td>Processed</td>
                    </tr>
                    <tr>
                        <td><a href="#">1FEB7D9A-DA25-460B-9FF0-8F5BADA1AC60</a></th>
                        <td>JPEG</th>
                        <td>01/10/2017 2:18PM</th>
                        <td>Pending Approval</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
