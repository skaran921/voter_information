<center>
    <table id="myTable" class="table table-striped table-sm" data-toggle="table" data-pagination="true" data-search="true" data-height="600" data-sortable="true" data-show-refresh="true" , data-show-toggle="true" , data-show-fullscreen="true" , data-smart-display="true" , data-show-columns="true">

        <thead class="thead-dark">
            <tr>
                <th>Date</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Father Name</th>
                <th>Mobile Number</th>
                <th>Aadhaar No.</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "./db.php";

            $sql = "SELECT family_head_id,first_name,last_name,gender,father_name,mobile_number,aadhar_number,create_date FROM family_head_info ORDER By family_head_id desc;";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) {
                ?>

                <tr>
                    <td><?php echo date("d-m-Y", strtotime($row["create_date"])); ?></td>
                    <td><?php echo $row["first_name"] . " " . $row["last_name"]; ?></td>
                    <td><?php echo $row["gender"]; ?></td>
                    <td><?php echo $row["father_name"]; ?></td>
                    <td><?php echo $row["mobile_number"]; ?></td>
                    <td><?php echo $row["aadhar_number"]; ?></td>

                    <td>
                        <button class="btn btn-primary"><i class="fa fa-eye" onclick="showResult('<?php echo  $row['family_head_id'] ?>')"></i></button>
                        <button class="btn btn-dark"><i class="fa fa-edit" onclick="editResult('<?php echo  $row['family_head_id'] ?>')"></i></button>
                        <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                    </td>
                </tr>
            <?php
            }
            ?>

        </tbody>
    </table>
</center>

<!-- bootstrap-table -->
<script type="text/javascript" src="js/bootstrap-table.min.js"></script>

<script>
    function showResult(family_head_id) {
        window.open(`./family_info.php?family_head_id=${family_head_id}`, '_self');
    }

    function editResult(family_head_id) {
        window.open(`./edit_record.php?family_head_id=${family_head_id}`, '_self');
    }
</script>