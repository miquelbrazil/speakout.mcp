<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Mobilizer Event'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="mobilizerEvents index large-9 medium-8 columns content">
    <h3><?= __('Mobilizer Events') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('campaign_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('event_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('event_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('region_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('location_city') ?></th>
                <th scope="col"><?= $this->Paginator->sort('location_state') ?></th>
                <th scope="col"><?= $this->Paginator->sort('total_participants') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('_created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('_updated') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mobilizerEvents as $mobilizerEvent): ?>
            <tr>
                <td><?= $this->Number->format($mobilizerEvent->id) ?></td>
                <td><?= $this->Number->format($mobilizerEvent->campaign_id) ?></td>
                <td><?= h($mobilizerEvent->event_name) ?></td>
                <td><?= h($mobilizerEvent->event_date) ?></td>
                <td><?= $this->Number->format($mobilizerEvent->region_id) ?></td>
                <td><?= h($mobilizerEvent->location_city) ?></td>
                <td><?= h($mobilizerEvent->location_state) ?></td>
                <td><?= $this->Number->format($mobilizerEvent->total_participants) ?></td>
                <td><?= $this->Number->format($mobilizerEvent->user_id) ?></td>
                <td><?= h($mobilizerEvent->_created) ?></td>
                <td><?= h($mobilizerEvent->_updated) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $mobilizerEvent->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $mobilizerEvent->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $mobilizerEvent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mobilizerEvent->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
