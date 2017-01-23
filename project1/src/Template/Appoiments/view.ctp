<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <?=$this->Element('actions',array('type'=>'Appoiment', 'typePlural'=>'Appoiments'));?>
</nav>
<div class="appoiments view large-9 medium-8 columns content">
    <h3><?= h($appoiment->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Patient') ?></th>
            <td><?= $appoiment->has('patient') ? $this->Html->link($appoiment->patient->name, ['controller' => 'Patients', 'action' => 'view', $appoiment->patient->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Doctor') ?></th>
            <td><?= $appoiment->has('doctor') ? $this->Html->link($appoiment->doctor->name, ['controller' => 'Doctors', 'action' => 'view', $appoiment->doctor->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($appoiment->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Appoimentdate') ?></th>
            <td><?= h($appoiment->appoimentdate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($appoiment->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modifield') ?></th>
            <td><?= h($appoiment->modifield) ?></td>
        </tr>
    </table>
</div>
