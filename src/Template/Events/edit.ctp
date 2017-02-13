<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $mobilizerEvent->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $mobilizerEvent->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Mobilizer Events'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="mobilizerEvents form large-9 medium-8 columns content">
    <?= $this->Form->create($mobilizerEvent) ?>
    <fieldset>
        <legend><?= __('Edit Mobilizer Event') ?></legend>
        <?php
            echo $this->Form->input('campaign_id');
            echo $this->Form->input('event_name');
            echo $this->Form->input('event_date');
            echo $this->Form->input('region_id');
            echo $this->Form->input('location_city');
            echo $this->Form->input('location_state');
            echo $this->Form->input('event_description');
            echo $this->Form->input('total_participants');
            echo $this->Form->input('user_id');
            echo $this->Form->input('_created');
            echo $this->Form->input('_updated');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
