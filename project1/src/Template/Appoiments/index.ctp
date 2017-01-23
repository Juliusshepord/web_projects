<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <?=$this->Element('actions',array('type'=>'Appoiment', 'typePlural'=>'Appoiments'));?>
</nav>
<div class="appoiments index large-9 medium-8 columns content">
    <h3><?= __('Appoiments') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('patient_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('doctor_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('appoimentdate') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($appoiments as $appoiment): ?>
            <tr>
                <td><?= $this->Number->format($appoiment->id) ?></td>
                <td><?= $appoiment->has('patient') ? $this->Html->link($appoiment->patient->name, ['controller' => 'Patients', 'action' => 'view', $appoiment->patient->id]) : '' ?></td>
                <td><?= $appoiment->has('doctor') ? $this->Html->link($appoiment->doctor->name, ['controller' => 'Doctors', 'action' => 'view', $appoiment->doctor->id]) : '' ?></td>
                <td><?= h($appoiment->appoimentdate) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $appoiment->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $appoiment->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $appoiment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $appoiment->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
