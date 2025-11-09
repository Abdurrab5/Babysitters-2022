 <?php
    //require '../navbar.php';     

    ?>

 <?php include 'header.php'; ?>
 <?php

    $page = "dashboard";
    $countservices = countservices($link);
    $usercount = getuser($link);
    $pendingreq = pendingreq($link);
    $approve = approve($link);
    $rejected = rejected($link);
    $countbabysitter = countbabysitter($link);
    ?>

 <body>
     <div class="content">
         <h1 style="text-align:center;color:blue"></h1>


         <div id="status">
             <div id="faculty" class="info-box status-item">
                 <div class="heading">
                     <h5> Users</h5>
                     <div class="info">
                         <i class="fas fa-ticket-alt"></i>
                     </div>
                 </div>
                 <div class="info-content text-primary">
                     <p>Total Users</p>
                     <p class="num ">
                         <?php
                            echo count($usercount);
                            ?>
                     </p>
                 </div>
                 <a href="manage_user.php">View More <i class="fas fa-arrow-right"></i></a>
             </div>
             <div id="student" class="info-box status-item">
                 <div class="heading">
                     <h5>Baby Sitter</h5>
                     <div class="info">
                         <i class="fas fa-bus"></i>
                     </div>
                 </div>
                 <div class="info-content text-success">
                     <p>Total baby sitter</p>
                     <p class="num" data-target="<?php

                                                    ?>">
                         <?php
                            echo count($countbabysitter);
                            ?>
                     </p>
                 </div>
                 <a href="manage_babysitter.php">View More <i class="fas fa-arrow-right"></i></a>
             </div>
             <div id="course" class="info-box status-item">
                 <div class="heading">
                     <h5>Services</h5>
                     <div class="info">
                         <i class="fas fa-road"></i>
                     </div>
                 </div>
                 <div class="info-content text-danger">
                     <p>Total Services</p>
                     <p class="num" data-target="<?php

                                                    ?>">
                         <?php
                            echo count($countservices);
                            ?>
                     </p>
                 </div>
                 <a href="manage_services.php">View More <i class="fas fa-arrow-right"></i></a>
             </div>

             <div id="faculty" class="info-box status-item">
                 <div class="heading">
                     <h5> Enrolled Child</h5>
                     <div class="info">
                         <i class="fas fa-ticket-alt"></i>
                     </div>
                 </div>
                 <div class="info-content text-primary">
                     <p>Total Enrolled Child</p>
                     <p class="num ">
                         <?php
                            echo count($approve);
                            ?>
                     </p>
                 </div>
                 <a href="manage_enrollment.php">View More <i class="fas fa-arrow-right"></i></a>
             </div>


             <div id="student" class="info-box status-item">
                 <div class="heading">
                     <h5>Pending Enrollment</h5>
                     <div class="info">
                         <i class="fas fa-bus"></i>
                     </div>
                 </div>
                 <div class="info-content text-success">
                     <p>Total Pending Enrollment</p>
                     <p class="num" data-target="<?php

                                                    ?>">
                         <?php
                            echo count($pendingreq);
                            ?>
                     </p>
                 </div>
                 <a href="manage_enrollment.php">View More <i class="fas fa-arrow-right"></i></a>
             </div>


             <div id="course" class="info-box status-item">
                 <div class="heading">
                     <h5>Rejected Enrollment</h5>
                     <div class="info">
                         <i class="fas fa-road"></i>
                     </div>
                 </div>
                 <div class="info-content text-danger">
                     <p>Total Rejected Enrollment</p>
                     <p class="num" data-target="<?php

                                                    ?>">
                         <?php
                            echo count($rejected);
                            ?>
                     </p>
                 </div>
                 <a href="manage_enrollment.php">View More <i class="fas fa-arrow-right"></i></a>
             </div>
         </div>
 </body>