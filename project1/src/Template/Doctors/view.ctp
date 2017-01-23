<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <?=$this->Element('actions',array('type'=>'Doctor', 'typePlural'=>'Doctors'));?>
</nav>
<div class="doctors view large-9 medium-8 columns content">
    <h3><?= h($doctor->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($doctor->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($doctor->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($doctor->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modifield') ?></th>
            <td><?= h($doctor->modifield) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Accepting Patients') ?></th>
            <td><?= $doctor->accepting_patients ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Appoiments') ?></h4>
        <?php if (!empty($doctor->appoiments)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Patient name') ?></th>
                <th scope="col"><?= __('Appoimentdate') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($doctor->appoiments as $appoiments): ?>
            <tr>
                <td><?= h($appoiments->id) ?></td>
                <td><?= $this->Format->getName($appoiments->doctor_id,'patients') ?></td>
                <td><?= h($appoiments->doctor_id) ?></td>
                <td><?= h($appoiments->appoimentdate) ?></td>
                <td><?= h($appoiments->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Appoiments', 'action' => 'view', $appoiments->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Appoiments', 'action' => 'edit', $appoiments->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Appoiments', 'action' => 'delete', $appoiments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $appoiments->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
