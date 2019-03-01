<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>




<form action ="" onsubmit="" style='width:450px; display:block; margin: auto; margin-top:2em;'>
   
        <button style="margin-left:1em; float:right; height: 3em;">
            Search
        </button>
 
        <input type="text" style="width:270px; display:block; margin:auto;float: right; height: 3em;"
        placeholder="date to start report" id="datepicker" name='date' value='<?= $date?>'>
   
</form>


<table>
<th scope="col" class="mobile-font-small font-size-8">Company</th>
<th scope="col" class="mobile-font-small font-size-8">Pickup</th>
<th scope="col" class="mobile-font-small font-size-8">Drop</th>
<th scope="col" class="mobile-font-small font-size-8">Status</th>
<th scope="col" class="mobile-font-small font-size-8">Rate Breakdown</th>

<?php foreach ($loads as $key=>$load): ?>
<?php if(isset($currentCompany) && $currentCompany != $load->Companies['Name'])
{
    echo '
<tr class="row-grey font-bold">
<td class="mobile-font-small font-size-8">'.'-'.'</td>
<td class="mobile-font-small font-size-8">'.'-'.'</td>
<td class="mobile-font-small font-size-8">'.'-'.'</td>

<td class="mobile-font-small font-size-8"> $'.$summaryMap[$currentCompany].'</td>
</tr>
'; }
?>
<tr class="row-grey">
<td class="mobile-font-small font-size-8"><?= h($load->Companies['Name'])?></td>
<td class="mobile-font-small font-size-8"><?= h($load->PickUpAddress)?></td>
<td class="mobile-font-small font-size-8"><?= h($load->DeliveryAddress)?></td>
<td class="mobile-font-small font-size-8"><?= h($load->Status)?></td>
<td class="mobile-font-small font-size-8"><?= '( '.$load->Rate.' x '.$load->Companies['Rate'].'% ) = $' . $load->Rate * ($load->Companies['Rate'] /100) ?></td>
</tr>

<?php
$currentCompany = $load->Companies['Name'] ;
if($key == count($loads)-1){
    echo '
    <tr class="row-grey font-bold ">
    <td class="mobile-font-small font-size-8">'.'-'.'</td>
    <td class="mobile-font-small font-size-8">'.'-'.'</td>
    <td class="mobile-font-small font-size-8">'.'-'.'</td>
    
    <td class="mobile-font-small font-size-8" > $'.$summaryMap[$currentCompany].'</td>
    </tr>
    '; }

?>
<?php endforeach; ?>


<script>
  $( function() {
    $( "#datepicker" ).datepicker({
        dateFormat: "yy-mm-dd"
    });
  });

// function myFunction() {
//   let date =  $( "#datepicker" ).val();
//   console.log(window.location.href)
//   let url = window.location.href;
//   let index = url.lastIndexOf('/');
//   url = url.slice(0,index)+'/'+date;
//   window.location =  url;
// }


</script>


</table>


