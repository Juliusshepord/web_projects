<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <?=$this->Element('actions',array('type'=>'Patient', 'typePlural'=>'Patients'));?>
</nav>
<div class="patients view large-9 medium-8 columns content">
    <h3><?= h($patient->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Carrier') ?></th>
            <td><?= $patient->has('carrier') ? $this->Html->link($patient->carrier->name, ['controller' => 'Carriers', 'action' => 'view', $patient->carrier->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($patient->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Street Address') ?></th>
            <td><?= h($patient->street_address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('City') ?></th>
            <td><?= h($patient->city) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('State') ?></th>
            <td><?= h($patient->state) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Zipcode') ?></th>
            <td><?= h($patient->zipcode) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($patient->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= h($patient->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($patient->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($patient->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modifield') ?></th>
            <td><?= h($patient->modifield) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Appoiments') ?></h4>
        <?php if (!empty($patient->appoiments)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Doctor name') ?></th>
                <th scope="col"><?= __('Appoimentdate') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($patient->appoiments as $appoiments): ?>
            <tr>
                <td><?= h($appoiments->id) ?></td>
                <td><?=
					$this->Format->getName($appoiments->doctor_id,'doctors')
					?>
				</td>
                <td><?= h($appoiments->appoimentdate) ?></td>
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
    <div class="related">
        <h4><?= __('Related Invoices') ?></h4>
        <?php if (!empty($patient->invoices)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Patient Id') ?></th>
                <th scope="col"><?= __('Amount') ?></th>
                <th scope="col"><?= __('Services') ?></th>
                <th scope="col"><?= __('Due') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modifield') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($patient->invoices as $invoices): ?>
            <tr>
                <td><?= h($invoices->id) ?></td>
                <td><?= h($invoices->patient_id) ?></td>
                <td><?= h($invoices->amount) ?></td>
                <td><?= h($invoices->services) ?></td>
                <td><?= h($invoices->due) ?></td>
                <td><?= h($invoices->created) ?></td>
                <td><?= h($invoices->modifield) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Invoices', 'action' => 'view', $invoices->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Invoices', 'action' => 'edit', $invoices->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Invoices', 'action' => 'delete', $invoices->id], ['confirm' => __('Are you sure you want to delete # {0}?', $invoices->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
