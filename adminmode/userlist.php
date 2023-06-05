<!-- *** Head Section *** -->
<?php include('header_m.php'); ?>


    <main>
        <div class="container-fluid">
            <h1 class="mt-4">User List</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Users</li>
            </ol>
        <div class="card mb-4">
            <div class="card-header"><i class="fas fa-table mr-1"></i>DataTable</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>User Name</th>
                                <th>Password</th>
                                <th>Remark</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>User Name</th>
                                <th>Password</th>
                                <th>Remark</th>
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
                            $sql = 'SELECT * FROM userlogin';

                            $retval =  mysqli_query($conn, $sql);
                            if(mysqli_num_rows($retval) > 0){  
                                while($row = mysqli_fetch_assoc($retval)){ 
                                    echo "<tr><td> {$row['uid']} </td>".
                                    "<td>{$row['uname']}</td>".
                                    "<td>{$row['upassword']}</td>".
                                    "<td>{$row['remark']}</td></tr>";
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