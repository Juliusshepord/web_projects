<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <?=$this->Element('actions',array('type'=>'Appoiment', 'typePlural'=>'Appoiments'));?>
</nav>
<div class="appoiments form large-9 medium-8 columns content">
    <?= $this->Form->create($appoiment) ?>
    <fieldset>
        <legend><?= __('Edit Appoiment') ?></legend>
        <?php
            echo $this->Form->input('patient_id', ['options' => $patients]);
            echo $this->Form->input('doctor_id', ['options' => $doctors]);
            echo $this->Form->input('appoimentdate');
            echo $this->Form->input('modifield');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
