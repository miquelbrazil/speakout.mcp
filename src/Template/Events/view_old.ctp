<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Mobilizer Event'), ['action' => 'edit', $mobilizerEvent->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Mobilizer Event'), ['action' => 'delete', $mobilizerEvent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mobilizerEvent->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Mobilizer Events'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Mobilizer Event'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="mobilizerEvents view large-9 medium-8 columns content">
    <h3><?= h($mobilizerEvent->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Event Name') ?></th>
            <td><?= h($mobilizerEvent->event_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Location City') ?></th>
            <td><?= h($mobilizerEvent->location_city) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Location State') ?></th>
            <td><?= h($mobilizerEvent->location_state) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($mobilizerEvent->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Campaign Id') ?></th>
            <td><?= $this->Number->format($mobilizerEvent->campaign_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Region Id') ?></th>
            <td><?= $this->Number->format($mobilizerEvent->region_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Total Participants') ?></th>
            <td><?= $this->Number->format($mobilizerEvent->total_participants) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Id') ?></th>
            <td><?= $this->Number->format($mobilizerEvent->user_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Event Date') ?></th>
            <td><?= h($mobilizerEvent->event_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __(' Created') ?></th>
            <td><?= h($mobilizerEvent->_created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __(' Updated') ?></th>
            <td><?= h($mobilizerEvent->_updated) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Event Description') ?></h4>
        <?= $this->Text->autoParagraph(h($mobilizerEvent->event_description)); ?>
    </div>
</div>
