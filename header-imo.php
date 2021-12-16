<header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="profile-imo.php" class="logo"><b>ACCOUNTER</b><br></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                    <li id="google_translate_element"></li>
                    <!-- settings end -->

                    <!-- inbox dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu"> 
                    <li><a class="logout" href="imo-logout.php">Logout</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->
      <script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="profile.html"><img src="layout/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered"><?=$_SESSION['mail']?></h5>
              	  	
                  <li class="mt">
                      <a class="active" href="profile-imo.php">
                          <i class="fa fa-dashboard"></i>
                          <span>IMO Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>RMK Schemes</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="loan-promotion-scheme.php">Loan Promotion Schemes</a></li>
                          <li><a  href="#">Main Loan Schemes</a></li>
                          <li><a  href="working-capital-loan.php">Working Capital Schemes</a></li>
                          <li><a  href="#">More Schemes</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>IMO Health</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="show-record.php">Show Record</a></li>
                          <li><a  href="records-imo.php">Add Record</a></li>
                          
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Contacts</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="add-contact-imo.php">Add Contact</a></li>
                          <li><a  href="show-imo-contact.php">All Contacts</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Daily Journal</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="daybook.php">Day Book</a></li>
                          <li><a  href="show-daybook.php">Add new Transaction</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Other Expenses</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="add-estimate.php">All Estimate</a></li>
                          <li><a  href="show-estimate.php">Add other Estimate </a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Authorized Business</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="add-business.php">New Business</a></li>
                          <li><a  href="show-imo-business.php">All Authorized Business</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Payment</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="payment.php">Make Payment</a></li>
                          <li><a  href="bank-detail.php">Bank Details</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>Generate PDF</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="pdf-contact-imo.php">Contact PDF</a></li>
                          <li><a  href="pdf-record.php">Record PDF</a></li>
                          <li><a  href="pdf-daybook.php">Daybook PDF</a></li>
                          <li><a  href="#">More</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>Reports</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="trial-balance-imo.php">Trial Balance</a></li>
                          <li><a  href="profit-loss-imo.php">Profit/ Loss Records</a></li>
                          <li><a  href="#">Balance-Sheet</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>Calculator</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="loan-calculator-imo.php">Loan Calculator</a></li>
                          <li><a  href="profit-loss-imo.php">Profit/ Loss Calculator</a></li>
                          <li><a  href="#">More</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class=" fa fa-bar-chart-o"></i>
                          <span>Profile</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="imo-documents.php">Upload Documents</a></li>
                          <li><a  href="show-allimo-details.php">IMO-Profile</a></li>
                      </ul>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->