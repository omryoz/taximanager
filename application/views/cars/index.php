<?php
/**
 *
 * @author Mikito Takada
 * @package default
 */
?>
<div class="block">
<div class="submenu">
   <ul>
      <li><?php echo Html::anchor('admin_user/edit', __('?add.user'))?></li>
   </ul>
   <br style="clear:both;">
</div>
<h1><?php echo __('cars.stock'); ?></h1>
<div class="content">
<?php
echo $paging->render();
// format data for DataTable
$data = array();
$merge = null;

foreach ($cars as $car) {
   if ($car->isInStock) {
		$row = $car->as_array();
	   // reformat dates
		$row['degem']=$car->degems->name;
		$row['brand']=$car->degem->brand->name;

		$row['last_login'] = Helper_Format::relative_time($row['last_login']);
	//   $row['last_failed_login'] = Helper_Format::relative_time(strtotime($row['last_failed_login']));
	   // add actions
		$row['actions'] = Html::anchor('user/carinfo/'.$row['id'], __('more.info')).' | '.Html::anchor('user/activatecar/'.$row['id'], __('activate'));
   		$data[] = $row;
   }
}

$column_list = array( 'platenumber' => array( 'label' => __('platenumber'),'sortable' ),
                       'degem' => array( 'label' => __('degem'), 'sortable' ),
					   'brand' => array( 'label' => __('last.name'), 'sortable' ),
                     );
$column_list['actions'] = array( 'label' => __('actions'), 'sortable' => false );
$datatable = new Helper_Datatable($column_list, array('paginator' => true, 'class' => 'table', 'sortable' => 'true', 'default_sort' => 'username'));
$datatable->values($data);
echo $datatable->render();
echo $paging->render();
?>
</div>
</div>
