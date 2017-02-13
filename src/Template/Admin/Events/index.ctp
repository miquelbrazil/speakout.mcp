<?php
    $campaigns = [
        1 => 'World AIDS Day',
        2 => 'Keep The Promise',
        3 => 'International Condom Day'
    ];
    $regions = [
        '1' => 'Midwest',
        '2' => 'South',
        '3' => 'North Atlantic',
        '4' => 'West',
        '5' => 'International',
    ];
?>

<table class="ui striped fixed table" style="table-collapse: collapse;">

    <thead>
        <tr>
            <th>Name</th>
            <th>Campaign</th>
            <th>Event Date</th>
            <th>Region</th>
            <th>Mobilizer</th>
            <th>Status</th>
        </tr>
    </thead>

    <tbody>

        <?php foreach( $events as $event ): ?>
        <tr>
            <td><?= $this->Html->link( $event->event_name , [ 'controller' => 'Events' , 'action' => 'view' , 'id' => $event->id ] ) ?></td>
            <td><?= $campaigns[ $event->campaign_id ] ?></td>
            <td><?= $event->event_date ?></td>
            <td><?= $regions[ $event->region_id ] ?></td>
            <td><?= $event->user->fullname ?></td>
            <td>Approved</td>
        </tr>
        <?php endforeach; ?>
    </tbody>

</table>
