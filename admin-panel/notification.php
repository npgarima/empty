<?php
$header_title = "Notifications";
require_once('components/header.php');
?>


<a class="btn btn-primary btn-fill pull-left" href="/admin/notifications/add" role="button">Create Notification</a>
                                     
<table id="table_id" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>Title</th>
            <th>Content</th>
            <th>Link</th>
            <th>Sent At</th>
        </tr>
    </thead>
    <tbody>

        <?php
        include_once("config.php");
        $sql = "SELECT * FROM notifications";
        $result = $mysqli->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                echo
                "<tr><td>" . $row["title"] .
                    "</td><td>" . $row["subtitle"] .
                    "</td><td>" . $row["link"] .
                    "</td><td>" . $row["created_at"] .
                    "</td></tr>";
            }
        }

        ?>


    </tbody>
</table>

<?php

include_once('components/footer.php');
?>


<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>

<script>
    $(document).ready(function() {
        $('#table_id').DataTable({
            'searching': true,
        });
    });
</script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">