<?php
$header_title = "Posts";
require_once('components/header.php');
?>


<a class="btn btn-primary btn-fill pull-left" href="/admin/posts/add" role="button">Create New Post</a>

<table id="table_id" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>Title</th>
            <th>Analytics</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>

        <?php
        include_once("config.php");

        function getStatus($value)
        {
            if ($value == "0" || $value == 0) {
                return '<span class="badge badge-pill badge-secondary">DRAFT</span>';
            }
            return '<span class="badge badge-pill badge-primary">PUBLISHED</span>';
        }
        $sql = "SELECT * FROM posts";
        $result = $mysqli->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                echo
                "<tr><td>" . $row["title"] .
                    "</td><td> App View Count: " . $row["view_count_app"] . "<br>Webiste View Count: " . $row["view_count_web"] .
                    "</td><td>" . getStatus($row["published"]) .
                    "</td><td>" . '
                    <a class="btn btn-primary btn-sm btn-fill rounded-0" role="button" data-toggle="tooltip" data-placement="top" title="Edit"href="/admin/posts/edit?id='.$row["id"].'"><i class="fa fa-edit" style="color:white;font-weight:bold;"></i></a>
                    <a class="btn btn-danger btn-sm rounded-0 btn-fill" role="button" data-toggle="tooltip" data-placement="top" title="Delete" href="/admin/posts/delete?delid='.$row["id"].'"><i class="fa fa-trash" style="color:white;font-weight:bold;"></i></a>
                    ' .
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