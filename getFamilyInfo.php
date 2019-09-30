<div class="card">
    <h3 class="card-title p-4">Family Head Info</h3>

    <div class="row">
        <?php
        include "./db.php";
        include "./function.php";
        $family_head_id = $_GET["family_head_id"];
        $sql = "SELECT * FROM family_head_info WHERE family_head_id='$family_head_id';";
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
            ?>
            <div class="col-sm-4 ml-2 mb-2">
                <div class="card">

                    <div class="card-body">
                        <center>
                            <div class="rounded-circle bg-success text-center text-light" style="font-size:25px;width:50px;height:50px;display:flex;align-items:center;justify-content:center;">
                                <?php echo $row["first_name"][0] . $row["last_name"][0]; ?>
                            </div>
                            <?php echo $row["first_name"] . " " . $row["last_name"]; ?><br>
                        </center>
                        <hr>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <b>Name:</b> <?php echo $row["first_name"] . " " . $row["last_name"]; ?>
                            </li>
                            <li class="list-group-item">
                                <b>Gender:</b> <?php echo $row["gender"]; ?>
                            </li>
                            <li class="list-group-item">
                                <b>Father Name:</b> <?php echo $row["father_name"]; ?>
                            </li>
                            <li class="list-group-item">
                                <b>Mobile Number:</b> <?php echo $row["mobile_number"]; ?>
                            </li>

                            <li class="list-group-item">
                                <b>Aadhaar Number:</b> <?php echo $row["aadhar_number"]; ?>
                            </li>
                        </ul>


                    </div>
                </div>
            </div>
            <!-- col-2 start -->
            <div class="col-sm-4 mb-2">
                <div class="card">

                    <div class="card-body">

                        <center>
                            <img src="./upload/aadhaarCardImages/<?php echo $row["aadhar_number"]; ?>/<?php echo $row["image_name"]; ?>" alt="aadhar_card image" class="img-fluid rounded">
                            <?php echo $row["image_name"]; ?><br>
                        </center>
                        <hr>

                        <ul class="list-group">
                            <li class="list-group-item">
                                <b>Serial Number:</b> <?php echo $row["serial_number"]; ?>
                            </li>
                            <li class="list-group-item">
                                <b>Vote Number:</b> <?php echo $row["vote_number"]; ?>
                            </li>


                        </ul>

                    </div>
                </div>
            </div> <!-- col2 end -->
            <!-- col3 start -->
            <div class="col-sm-3 mb-2">
                <div class="card">
                    <div class="card-body">
                        <li class="list-group-item">
                            <b>ID Number:</b> <?php echo $row["id_number"]; ?>
                        </li>

                        <ul class="list-group">
                            <li class="list-group-item">
                                <b>Create By:</b> <?php echo getUserNameByID($row["create_by"]); ?>
                            </li>
                            <li class="list-group-item">
                                <b>Update By:</b> <?php echo getUserNameByID($row["update_by"]); ?>
                            </li>
                            <li class="list-group-item">
                                <b>Create Date:</b> <?php echo date("d-m-Y", strtotime($row["create_date"])); ?>
                            </li>
                            <li class="list-group-item">
                                <b>Update Date:</b> <?php echo date("d-m-Y", strtotime($row["update_date"])); ?>
                            </li>
                            <li class="list-group-item">
                                <b>Status:</b> <span class="p-1 rounded text-light <?php if ($row["status"] == 'Active') {
                                                                                            echo 'bg-success';
                                                                                        } else {
                                                                                            echo 'bg-danger';
                                                                                        }; ?>">
                                    <?php echo $row["status"]; ?>
                                </span>
                            </li>
                        </ul>


                    </div>
                </div>
            </div>
            <!-- col3 end -->
        <?php
        }
        ?>
    </div>

    <!-- row end -->
</div>

<table id="myTable" class="table table-striped table-sm" data-toggle="table" data-pagination="true" data-search="true" data-height="600" data-sortable="true" data-show-refresh="true" , data-show-toggle="true" , data-show-fullscreen="true" , data-smart-display="true" , data-show-columns="true">

    <thead class="thead-dark">
        <tr>
            <th>Date</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Vote Number</th>
            <th>ID Number</th>
            <th>Added By</th>
            <th>Update By</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include "./db.php";
        $family_head_id = $_GET["family_head_id"];
        $sql = "SELECT * FROM family_member_info WHERE family_head_id='$family_head_id';";
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
            ?>

            <tr>
                <td><?php echo date("d-m-Y", strtotime($row["create_date"])); ?></td>
                <td><?php echo $row["family_member_name"]; ?></td>
                <td><?php echo $row["family_member_gender"]; ?></td>
                <td><?php echo $row["family_member_vote_number"]; ?></td>
                <td><?php echo $row["family_member_id_card_number"]; ?></td>
                <td><?php echo getUserNameByID($row["added_by"]); ?></td>
                <td><?php echo getUserNameByID($row["updated_by"]); ?></td>
                <td><?php echo $row["status"]; ?></td>

                <td>
                    <!-- <button class="btn btn-primary"><i class="fa fa-eye"></i></button> -->
                    <button class="btn btn-dark"><i class="fa fa-edit"></i></button>
                    <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                </td>
            </tr>
        <?php } ?>

    </tbody>
</table>


<!-- bootstrap-table -->
<script type="text/javascript" src="js/bootstrap-table.min.js"></script>

<script>
    //  function go(guest_id) {
    //      window.open(`viewGuestRecord.php?guest_id=${guest_id}`)
    //  }
</script>