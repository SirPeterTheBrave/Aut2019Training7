<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Formation $formation
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $formation->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $formation->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Formations'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="formations form large-9 medium-8 columns content">
    <?= $this->Form->create($formation) ?>
    <fieldset>
        <legend><?= __('Edit Formation') ?></legend>
        <?php
            echo $this->Form->control('number');
            echo $this->Form->control('title');
            echo $this->Form->control('categorie_id', ['options' => $categories]);
            echo $this->Form->control('frequence_id', ['options' => $frequences]);
            echo $this->Form->control('start_reminder_id', ['options' => $startReminders]);
            echo $this->Form->control('modality_id', ['options' => $modalities]);
            echo $this->Form->control('duration');
            echo $this->Form->control('note');
            echo $this->Form->control('position_titles._ids', ['options' => $positionTitles]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
