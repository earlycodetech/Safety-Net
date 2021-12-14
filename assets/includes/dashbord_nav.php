      <!-- sidebar menu area start -->
      <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="dashboard"><img src="../assets/img/logo.png" alt="logo" height="40px"></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li class="nav-link">
                                <a href="dashboard" aria-expanded="true">
                                    <i class="fas fa-tachometer-alt"></i>
                                    <span>dashboard</span>
                                </a>
                                   
                            </li>
                            <li class="nav-link">
                                <a href="inbox" class="text-white ">
                                    <i class="fas fa-bell pe-3"></i>Inbox

                                    <?php 
                                        if ($_SESSION['role'] === 'user') {
                                        $sql = "SELECT * FROM notifications WHERE msg_status= 'unread' AND userid ='$id' AND sender='admin'";
                                        $query = mysqli_query($connect,$sql);
                                        $unread = mysqli_num_rows($query);
                                        if ($unread > 0) {
                                    ?>
                                    <span class="position-absolute top-0 end-25 translate-middle badge rounded-pill bg-danger">
                                        <?php echo $unread; ?>
                                    <span class="visually-hidden">unread messages</span>
                                    </span>
                                    <?php }}else{
                                         $sql = "SELECT * FROM notifications WHERE msg_status= 'unread' AND sender='user'";
                                         $query = mysqli_query($connect,$sql);
                                         $unread = mysqli_num_rows($query);
                                         if ($unread > 0) {
                                    ?>
                                    <span class="position-absolute top-0 end-25 translate-middle badge rounded-pill bg-danger">
                                        <?php echo $unread; ?>
                                    <span class="visually-hidden">unread messages</span>
                                    </span>
                                    <?php }} ?>
                                </a>
                            </li>
                            <li class="nav-link">
                                <a href="update" aria-expanded="true"><i class=""></i>
                                    <i class="fas fa-user  "></i>
                                    <span>Account Update</span>
                                </a>
                            </li>
                            <li class="nav-link">
                               <?php if ($_SESSION['role'] === 'user') {?>
                                <a href="#" aria-expanded="true"><i class=""></i>
                                    <i class="fas fa-money-bill-alt"></i>
                                    <span>Deposit</span>
                                </a>
                            </li>
                            <li class="nav-link">
                                <a href="#" aria-expanded="true"><i class=""></i>
                                    <i class="fas fa-money-check-alt"></i>
                                    <span>Withdrawal</span>
                                </a>
                            </li>
                            <li class="nav-link">
                                <a href="#" aria-expanded="true"><i class=""></i>
                                    <i class="fas fa-exchange-alt"></i>
                                    <span>Transfer</span>
                                </a>
                            </li>
                            <!-- User Ends Here -->
                                <?php }else{ ?>
                                    <a href="#" aria-expanded="true"><i class=""></i>
                                    <i class="fas fa-money-bill-alt"></i>
                                    <span>Users Deposits</span>
                                </a>
                            </li> 

                            <li class="nav-link">
                                <a href="#" aria-expanded="true"><i class=""></i>
                                    <i class="fas fa-money-check-alt"></i>
                                    <span>User Withdrawals</span>
                                </a>
                            </li>
                            <li class="nav-link">
                                <a href="#" aria-expanded="true"><i class=""></i>
                                    <i class="fas fa-exchange-alt"></i>
                                    <span>Transfer Logs</span>
                                </a>
                            </li>
                                <?php } ?>
                          
                           
                           
                            <li class="nav-link">
                                <a href="#" aria-expanded="true"><i class=""></i>
                                    <i class="fas fa-cog"></i>
                                    <span>Setings</span>
                                </a>
                            </li>

                            <li class="nav-link d-lg-none">
                                <a href="../assets/controls/logout_control.php" aria-expanded="true"><i class=""></i>
                                    <i class="fas fa-sign-out-alt"></i>
                                    <span>Log out</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area" style="background-color: #F68D41;" >
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix d-flex justify-content-between">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="ms-auto d-lg-block d-none">
                             <a href="../assets/controls/logout_control.php" aria-expanded="true"><i class="text-white"></i>
                                    <i class="fas fa-sign-out-alt"></i>
                                    <span class="text-white">Log out</span>
                                </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header area end -->