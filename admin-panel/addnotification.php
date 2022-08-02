<?php
$header_title = "Add Notifications";
require_once('components/header.php');
require_once "config.php";

$title = $subtitle = $link = "";
$err = "";
// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty(trim($_POST["title"])) || empty(trim($_POST["subtitle"])) || empty(trim($_POST["link"]))) {
        $err = "Please input valid data.";
    } else {
        $title = $_POST['title'];
        $subtitle = $_POST['subtitle'];
        $link = $_POST['link'];
        // Prepare an insert statement
        $sql = "INSERT INTO notifications (title,subtitle,link) VALUES (?, ?, ?)";

        if ($stmt = $mysqli->prepare($sql)) {
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("sss", $title, $subtitle, $link);


            // Attempt to execute the prepared statement
            if ($stmt->execute()) {
                // Redirect to notifications page
                $err = "Successfully added!";   
               // header("location: /admin/notifications");
            } else {
                $err = "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            $stmt->close();
        }
    }

    // Close connection
    $mysqli->close();
}
?>
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Create a Notification</h4>
            </div>
            <div class="card-body">
                <form method="post">


                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control" placeholder="Title of the Notification...">
                            </div>

                            <div class="form-group">
                                <label>Content</label>
                                <input type="text" name="subtitle" class="form-control" placeholder="Content of the Notification...">
                            </div>

                            <div class="form-group">
                                <label>Link</label>
                                <input type="text" name="link" class="form-control" placeholder="Link to open when notification click...(Leave as default if to open app)" value="default">
                            </div>
                        </div>
                    </div>

                    <?php
                    if (!empty($err)) {
                        echo '<div class="alert alert-danger">' . $err . '</div>';
                    }
                    ?>

                    <button type="submit" class="btn btn-primary btn-fill pull-right">Send Notification</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                Notice!
            </div>
            <div class="card-body">
                <p class="card-text">Only notifications sent for 10 days are stored in database.</p>
            </div>
        </div>
    </div>
</div>
<?php

include_once('components/footer.php');
?>