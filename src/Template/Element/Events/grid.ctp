<?php
    $campaigns = [
        '1' => 'Martin Luther King Jr. Day (January 16, 2017)',
        '2' => 'International Condom Day (February 13, 2017)',
        '3' => 'National HIV Testing Day (June 27, 2017)',
        '4' => 'World AIDS Day (December 1, 2017)',
        '5' => 'Local Events (Various Dates)'
    ];
    $regions = [
        '1' => 'Midwest',
        '2' => 'South',
        '3' => 'Northeast',
        '4' => 'Mid-Atlantic',
        '5' => 'West',
        '6' => 'International',
    ];
?>

<?php if( $events->count() ): ?>
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
            <td><?= $this->Html->link( $event->title , [ 'controller' => 'Events' , 'action' => 'view' , 'id' => $event->id ] ) ?></td>
            <td><?= $campaigns[ $event->campaign_id ] ?></td>
            <td><?= $event->date ?></td>
            <td><?= $regions[ $event->region_id ] ?></td>
            <td><?= $event->user ? $event->user->fullname : 'ALL' ?></td>
            <td>Submitted</td>
        </tr>
        <?php endforeach; ?>
    </tbody>

</table>
<?php else: ?>

<p>No events to show.</p>

<?php endif; ?>
