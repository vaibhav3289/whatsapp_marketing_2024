<?php

$favr_url = explode("/", $_SERVER['REQUEST_URI']);

$favorite = array("acc_favorite.php");
$info = array('category_detail.php', 'category.php', 'update_category.php', 'sub_category_detail.php', 'sub_category.php', 'update_sub_category.php', 'product_detail.php', 'product.php', 'update_product.php', 'terms_detail.php', 'term.php', 'term.php', 'barcode_list.php', 'barcode.php', 'category_detail.php', 'category.php', 'update_category.php', 'purchase_detail.php', ' purchase.php', 'purchase_update_Bill.php', 'purchase_return.php', 'purchase_return_detail.php', 'update_purchase_return.php', 'purchase_detail_invoice.php');

$sales = array('sales_detail.php', 'sales.php', 'update_sales.php', 'sales_return.php', 'sales_return_detail.php', 'update_sales_return.php', 'quotation_detail.php', 'quatation.php', 'bill_update_Bill.php', 'quotation_update.php', 'note_detail.php', 'edit_note.php', 'note.php', 'sales_tax.php', 'production_detail.php', 'production.php', 'update_production.php', 'purchase_detail_invoice_Bill.php', 'purchase_update_Voucher.php', 'vaucher.php', 'bill_update_Voucher.php', 'other_sales_details.php', 'update_other_sales.php', 'add_other_sales.php', 'update_challan.php', 'challan_detail.php', 'challan.php', 'bill_generate.php', 'pur_vaucher.php', 'new_quat_detail.php', 'challan_view_detail.php', 'production_view.php','sales_with_barcode.php','new_retail_sales.php','update_retail_sales.php','update_barcode_with_sales.php');


$accpayment = array('acc_payment.php', 'acc_payment_detail.php', 'acc_payment_update.php', 'acc_payment_pay.php', 'acc_payment_pay_detail.php', 'acc_payment_pay_update.php', 'acc_ledger.php', 'acc_case_register.php', 'cheque_new.php', 'cheque_print_detail.php', 'cheque_print_update.php', 'transaction.php', 'transaction_detail.php', 'edit_transaction_detail.php', 'trial_balance.php', 'acc_day_register.php', 'trial_balanceac.php', 'ledger_ac.php', 'register_acc_day.php', 'register_acc_case.php', 'proloss_details.php', 'register_acc_day.php', 'balanc_sheet.php', 'update_account.php', 'new_account.php', 'account_detail.php', 'new_group.php', 'acc_group.php', 'update_group.php', 'acc_group_details.php','acc_debit_note_detail.php','acc_credit_note_detail.php','add_acc_credit_note_detail.php','add_acc_debit_note_detail.php');

$setting = array('shortcut.php', 'change_password.php', 'back_up_setting.php', 'add_unit.php', 'unit_details.php', 'update_unit.php', 'bill_prefix.php', 'add_bill_prefix.php', 'update_bill_prefix.php', 'print_setting.php', 'purchase_setting.php', 'help_module.php', 'closing_year.php', 'terms_detail.php', 'term.php', 'profile_details.php', 'profile.php', 'add_profile.php');
$sms = array('sms_setting.php', 'sms_report.php', 'custome_sms.php', 'sms_pending_report.php', 'server_start.php', 'sms_login.php');
$index = array('main.php', 'customer.php', 'supplayer.php', 'purchase_detail_dash.php', 'sales_detail_dash.php', 'party_payment_detail.php', 'notes.php');
$user = array('user_detail.php');
$profile = array('profile_details.php', 'profile.php', 'add_profile.php');
$favorite = array('custom_url.php');
$report = array('all_report.php', 'purchase_report.php', 'sales_report.php', 'stock_report.php', 'gst_purchase_view.php', 'gst_sales_view.php');
$partys = array('partydetails_file.php', 'party_file.php', 'party_edit_file.php', 'party_all_details.php');
$utility = array('closing_year.php', 'clean_data.php', 'data_backup.php', 'user_detail.php', 'update_user.php', 'add_user.php', 'user_right.php', 'help_file.php', 'acc_change_password.php');
if ($_SESSION['admin_right']['product'] == 'Y') {
  $product_rights = 'Y';
}
if ($_SESSION['admin_right']['party'] == 'Y') {
  $party_rights = 'Y';
}
if ($_SESSION['admin_right']['category'] == 'Y') {
  $product_rights = 'Y';
}
if ($_SESSION['admin_right']['sub_category'] == 'Y') {
  $product_rights = 'Y';
}

if ($_SESSION['admin_right']['quotation'] == 'Y') {
  $quotation_rights = 'Y';
}
if ($_SESSION['admin_right']['purchase'] == 'Y') {
  $purchase_rights = 'Y';
}
if ($_SESSION['admin_right']['sales'] == 'Y') {
  $sales_rights = 'Y';
}
if ($_SESSION['admin_right']['challan'] == 'Y') {
  $challan_rights = 'Y';
}
if ($_SESSION['admin_right']['bill_of_material'] == 'Y') {
  $bill_of_material_rights = 'Y';
}
if ($_SESSION['admin_right']['rules'] == 'Y') {
  $rules_rights = 'Y';
}

if ($_SESSION['admin_right']['account_group'] == 'Y') {
  $groupt_rights = 'Y';
}
if ($_SESSION['admin_right']['voucher'] == 'Y') {
  $voucher_rights = 'Y';
}
if ($_SESSION['admin_right']['ledger_account'] == 'Y') {
  $ledger_rights = 'Y';
}
if ($_SESSION['admin_right']['trial_balancesheet'] == 'Y') {
  $trial_rights = 'Y';
}
if ($_SESSION['admin_right']['daybook'] == 'Y') {
  $daybook_rights = 'Y';
}
if ($_SESSION['admin_right']['profit_loss'] == 'Y') {
  $profit_loss_rights = 'Y';
}
if ($_SESSION['admin_right']['balance_sheet'] == 'Y') {
  $balance_sheet_rights = 'Y';
}

if ($_SESSION['admin_right']['change_password'] == 'Y') {
  $change_password_rights = 'Y';
}
if ($_SESSION['admin_right']['unit'] == 'Y') {
  $unit_rights = 'Y';
}
if ($_SESSION['admin_right']['bill_prefix'] == 'Y') {
  $bill_prefix_rights = 'Y';
}
if ($_SESSION['admin_right']['print_setting'] == 'Y') {
  $print_setting_rights = 'Y';
}
if ($_SESSION['admin_right']['report'] == 'Y') {
  $report_rights = 'Y';
}
?>
<script>
  <?php
  if (in_array($curUrl, $report)) {
    echo "document.getElementById('fav_icon').value='nav-icon fas fa-file';";
  }
  if (in_array($curUrl, $info)) {
    echo "document.getElementById('fav_icon').value='nav-icon fas fa-info';";
  }
  if (in_array($curUrl, $purchase)) {
    echo "document.getElementById('fav_icon').value='fas fa-shopping-cart nav-icon';";
  }
  if (in_array($curUrl, $sales)) {
    echo "document.getElementById('fav_icon').value='fas fa-store nav-icon';";
  }
  if (in_array($curUrl, $accpayment)) {
    echo "document.getElementById('fav_icon').value='nav-icon fas fa-money-bill-alt';";
  }
  if (in_array($curUrl, $sms)) {
    echo "document.getElementById('fav_icon').value='nav-icon fas fa-envelope';";
  }
  if (in_array($curUrl, $setting)) {
    echo "document.getElementById('fav_icon').value='nav-icon fas fa-cogs';";
  }
  if (in_array($curUrl, $index)) {
    echo "document.getElementById('fav_icon').value='nav-icon fas fa-tachometer-alt';";
  }
  if (in_array($curUrl, $user)) {
    echo "document.getElementById('fav_icon').value='nav-icon fas fa-user-circle';";
  }
  if (in_array($curUrl, $profile)) {
    echo "document.getElementById('fav_icon').value='nav-icon fas fa-user';";
  }
  if (in_array($curUrl, $favorite)) {
    echo "document.getElementById('fav_icon').value='nav-icon fas fa-star';";
  }
  if (in_array($curUrl, $partys)) {
    echo "document.getElementById('fav_icon').value='nav-icon fas fa-user';";
  }
  ?>

  function set_db(val) {
    $.ajax({
      url: "<?php echo $path; ?>selectyear",
      type: "GET",
      data: {
        val: val
      },
      success: function(data) {
        location.reload();
      }
    })
  }
</script>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="#" class="brand-link"> <img src="<?php echo $path; ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> <span class="brand-text font-weight-light">Green Store</span> </a>
  <div class="sidebar">
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent nav-compact" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item" style="padding-top:10px;"> <a href="<?php echo $path; ?>favouriteurl" class="nav-link <?php if ($curUrl == "custom_url.php" & in_array($curUrl, $favorite)) echo 'active'; ?>"> <i class="nav-icon fa fa-star"></i>
            <p> Favorite Menu </p>
          </a></li>
        <?php
        if ($_SESSION['admin'] == 1) {
        ?>
          <li class="nav-item"> <a href="<?php echo $path; ?>home" class="nav-link <?php if ($curUrl == "main.php" & in_array($curUrl, $index) or $curUrl == "customer.php" or $curUrl == "supplayer.php"  or $curUrl == "purchase_detail_dash.php" or $curUrl == "party_payment_detail.php" or $curUrl == "notes.php") echo 'active'; ?>"> <i class="nav-icon fas fa-tachometer-alt"></i>
              <p> Dashboard </p>
            </a> </li>
       
          <li class="nav-item"><a class="nav-link" href="<?php echo $path; ?>hospitaldetail"><i class="nav-icon fa fa-table"></i> Hospital </a></li>
          
       
            <li class="nav-item"> <a href="<?php echo $path; ?>logout" class="nav-link"> <i class="nav-icon fas fa-sign-out-alt"></i>
                <p> Logout </p>
              </a> </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
<div class="modal fade" id="back_up_data" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body"> Do You Want To Logout? </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="location.href='<?php echo $path . 'logout'; ?>'">Yes</button>
        <?php /*?><button type="button" class="btn btn-primary"  onclick="location.href='<?php echo $path.'backupdata'; ?>'">Yes</button><?php */ ?>
     <?php } ?>
     
      </div>
    </div>
  </div>
</div>