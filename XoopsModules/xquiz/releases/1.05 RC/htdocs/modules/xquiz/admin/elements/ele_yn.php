<?php

/**
 * Questionair forms with export and plugin set (based on formulaire)
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       Chronolabs Co-Op http://www.chronolabs.coop/
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package         xquiz
 * @since           1.0.5
 * @author          Simon Roberts <simon@chronolabs.coop>
 */

if( !preg_match("/elements.php/", $_SERVER['PHP_SELF']) ){
	exit("Access Denied");
}

if( !empty($ele_id) ){
	if( $value['_YES'] == 1 ){
		$selected = '_YES';
	}elseif( $value['_NO'] == 1) {
		$selected = '_NO';
	}
}
if($selected)
{
	$options = new XoopsFormRadio(_AM_XQUIZ_ELE_DEFAULT, 'ele_value', $selected);
}
else
{
	$options = new XoopsFormRadio(_AM_XQUIZ_ELE_DEFAULT, 'ele_value');
}
$options->addOption('_YES', _YES);
$options->addOption('_NO', _NO);
$form->addElement($options);

?>