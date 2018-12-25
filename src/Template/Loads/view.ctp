<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Load $load
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Load'), ['action' => 'edit', $load->Load_ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Load'), ['action' => 'delete', $load->Load_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $load->Load_ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Loads'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Load'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="loads view large-9 medium-8 columns content">
    <h3><?= h($load->Load_ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Company Name') ?></th>
            <td><?= h($load->Company_Name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= h($load->Status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Load Number') ?></th>
            <td><?= h($load->Load_Number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Driver') ?></th>
            <td><?= h($load->Driver) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rate') ?></th>
            <td><?= h($load->Rate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Payment Method') ?></th>
            <td><?= h($load->Payment_Method) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dispacther') ?></th>
            <td><?= h($load->Dispacther) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Created') ?></th>
            <td><?= h($load->Date_Created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pick Up Address') ?></th>
            <td><?= h($load->Pick_Up_Address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Delivery Address') ?></th>
            <td><?= h($load->Delivery_Address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Comments') ?></th>
            <td><?= h($load->Comments) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bill Of Lading') ?></th>
            <td><?= h($load->Bill_Of_Lading) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Company Address City') ?></th>
            <td><?= h($load->Company_Address_City) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Company Address StateRegion') ?></th>
            <td><?= h($load->Company_Address_StateRegion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Company Address Street 1') ?></th>
            <td><?= h($load->Company_Address_Street_1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Company Date Created') ?></th>
            <td><?= h($load->Company_Date_Created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Company MCNumber') ?></th>
            <td><?= h($load->Company_MCNumber) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Modified') ?></th>
            <td><?= h($load->Date_Modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Delivery Address City') ?></th>
            <td><?= h($load->Delivery_Address_City) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Delivery Address Country') ?></th>
            <td><?= h($load->Delivery_Address_Country) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Delivery Address StateRegion') ?></th>
            <td><?= h($load->Delivery_Address_StateRegion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Delivery Address Street 1') ?></th>
            <td><?= h($load->Delivery_Address_Street_1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Delivery Address Street 2') ?></th>
            <td><?= h($load->Delivery_Address_Street_2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Destination City Name') ?></th>
            <td><?= h($load->Destination_City_Name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Destination State') ?></th>
            <td><?= h($load->Destination_State) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('GenerateInvoice') ?></th>
            <td><?= h($load->GenerateInvoice) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Modified By') ?></th>
            <td><?= h($load->Last_Modified_By) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pick Up Address City') ?></th>
            <td><?= h($load->Pick_Up_Address_City) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pick Up Address Country') ?></th>
            <td><?= h($load->Pick_Up_Address_Country) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pick Up Address StateRegion') ?></th>
            <td><?= h($load->Pick_Up_Address_StateRegion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pick Up Address Street 1') ?></th>
            <td><?= h($load->Pick_Up_Address_Street_1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pick Up Address Street 2') ?></th>
            <td><?= h($load->Pick_Up_Address_Street_2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pick Up City Name') ?></th>
            <td><?= h($load->Pick_Up_City_Name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pick Up State') ?></th>
            <td><?= h($load->Pick_Up_State) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rate Confirmation') ?></th>
            <td><?= h($load->Rate_Confirmation) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Record Owner') ?></th>
            <td><?= h($load->Record_Owner) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Delivery Address Postal Code') ?></th>
            <td><?= $this->Number->format($load->Delivery_Address_Postal_Code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pick Up Address Postal Code') ?></th>
            <td><?= $this->Number->format($load->Pick_Up_Address_Postal_Code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Record ID') ?></th>
            <td><?= $this->Number->format($load->Load_ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Company_ID') ?></th>
            <td><?= $this->Number->format($load->Company_ID) ?></td>
        </tr>
    </table>
</div>
