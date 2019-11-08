<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Employee $employee
 */
use Cake\ORM\TableRegistry;
use Cake\I18n\Date;
use Cake\I18n\Time;

 $page = null;
ob_start();
?>
<!DOCTYPE html>
<html>
<img></img>
<h2>Plan de formation</h2>
<hr size="2" color="red">
<div class="employees view large-9 medium-8 columns content">
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Numéro de l\'employé:') ?></th>
            <td><?= h($employee->number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nom de l\'employé:') ?></th>
            <td><?= h($employee->civility->civility)." ".h($employee->first_name)." ".h($employee->last_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Titre du poste') ?></th>
            <td><?= h($employee->position_title->position_title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Supervisor') ?></th>
            <td><?= h( $employee->supervisor->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Building') ?></th>
            <td><?= h( $employee->building->building) ?></td>
        </tr>
    </table>
    <div class="related">
        <?php if (!empty($employee->employee_formations)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Formation') ?></th>
                <th scope="col"><?= __('Statut') ?></th>
                <th scope="col"><?= __('Fréquence') ?></th>
                <th scope="col"><?= __('Faite le') ?></th>
                <th scope="col"><?= __('Prévue le') ?></th>
                <th scope="col"><?= __('Expirée') ?></th>
                <th scope="col"><?= __('À venir') ?></th>
                <th scope="col"><?= __('À faire') ?></th>
                <th scope="col"><?= __('Jamais faite') ?></th>
            </tr>
            <?php foreach ($employee->employee_formations as $employeeFormations): ?>
            <?php $formation =  TableRegistry::get('Formations')->get($employeeFormations->formation_id, ['contain' => ['Categories' , 'Frequences']]); 
            $formationposition = TableRegistry::get('formationsPositionTitles')->
            find()->
            where(['position_title_id' => $employee['position_title_id']]);
    
            $formationposition = $formationposition->first(); 
            $status =   TableRegistry::get('FormationStatuses')->get($formationposition->formation_status_id); ?>
            <tr>
            
                <td><?= h($formation->title) ?></td>
                <td><?= h($status->formation_status) ?></td>
                <td><?= h(TableRegistry::get('frequences')->get($formation->frequence_id)->frequence); ?></td>
                <td><?= h($employeeFormations->date_done) ?></td>
                <?=
        $date = null;

        switch($formation->frequence_id){
            case 1:
                $date= '+1 week';
            break;

            case 2:
                $date= '+1 month';
            break;

            case 3:
                $date= '+3 month';
            break;

            case 4:
                $date= '+6 month';
            break;

            case 5:
                $date= '+18 month';
            break;

            case 6:
                $date= '+1 year';
            break;

            case 7:
                $date= '+2 year';
            break;

            case 8:
                $date= '+3 year';
            break;

            case 9:
                $date= '+4 year';
            break;

            case 10:
                $date= '+5 year';
            break;

            case 11:
                $date = null;
            break;

            case 12:
                $date = null;
            break;
        }

        $datetime = date('d/m/y', strtotime($employeeFormations->date_done .  $date ) )
    ?>


                <td><?= $employeeFormations->date_done == null || $date == null  ? '' : $datetime ; ?></td>
                <td><?= ($employeeFormations->date_done != null && $date != null) && ($date != null && $datetime < $employeeFormations->date_done) ? __('Yes') : __('No'); ?></td>
                <td><?= ($employeeFormations->date_done != null && $date != null) && ($date != null && $datetime > $employeeFormations->date_done) ? __('Yes') : __('No'); ?></td>
                <td><?= ($employeeFormations->date_done == null && $date != null) || $datetime == Time::now() ? __('Yes') : __('No'); ?></td>
                <td><?= $employeeFormations->date_done == null ? __('Yes') : __('No'); ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
</html>
<?php
$page = ob_get_contents();
ob_end_flush();
$adress = $employee->email; 
$_SESSION['adress'] = $adress;
$_SESSION['page'] = $page;
?>
<?php echo $this->Form->create('Send', array('action'=>'mailPage'));
        echo$this->Form->button(__('Send'));
        echo $this->Form->end(); ?>


