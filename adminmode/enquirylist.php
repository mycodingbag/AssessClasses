<!-- *** Head Section *** -->
<?php include('header_m.php'); ?>


    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Enquiry List</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Enquiry</li>
            </ol>
        <div class="card mb-4">
            <div class="card-header"><i class="fas fa-table mr-1"></i>DataTable</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Enquiry Name</th>
                                <th>Email ID</th>
                                <th>Phone No.</th>
                                <th>Course</th>
                                <th>Message</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Date</th>
                                <th>Enquiry Name</th>
                                <th>Email ID</th>
                                <th>Phone No.</th>
                                <th>Course</th>
                                <th>Message</th>
                            </tr>
                        </tfoot>
                        <tbody>

                        <?php
                            // Database Connection 
                            $host = 'localhost:3306';  
                            $user = 'root';  
                            $pass = '';  
                            $dbname = 'assessdb';

                            $conn = mysqli_connect($host, $user, $pass,$dbname);  
                            $sql = 'SELECT * FROM enquiryinfo';

                            $retval =  mysqli_query($conn, $sql);
                            if(mysqli_num_rows($retval) > 0){  
                                while($row = mysqli_fetch_assoc($retval)){ 
                                    echo "<tr><td> {$row['edate']} </td>".
                                    "<td>{$row['ename']}</td>".
                                    "<td>{$row['emailid']}</td>".
                                    "<td>{$row['phoneno']}</td>".
                                    "<td>{$row['course']}</td>".
                                    "<td>{$row['message']}</td></tr>";
                                }
                            }


                            mysqli_close($conn);
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </main>




<!-- *** Footer Section *** -->
<?php include('footer_m.php'); ?>