<?php
$header_title = "Add Posts";
require_once('components/header.php');
require_once "config.php";

$get_title = $get_keywords = $get_en_content = $get_np_content = $get_np_author = $get_en_author = $get_status = "";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (!empty(trim($_GET['id']))) {

        $get_id = $_GET["id"];
        $sql = "SELECT * FROM posts WHERE id=$get_id";
        $result = $mysqli->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {

                $get_title = $row['title'];
                $get_keywords = $row['keywords'];
                $get_en_content = $row['en_content'];
                $get_np_content = $row['np_content'];
                $get_np_author = $row['np_author'];
                $get_en_author = $row['en_author'];
                $get_status = $row['published'];;
            }
        } else {
            echo "0 results";
            die();
        }
    }
}

$title = $keywords = $enContent = $npContent = $enAuthor = $npAuthor =  "";
$status = "";
$err = "";
//Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
     if (empty(trim($_POST["title"])) || empty(trim($_POST["id"])) || empty(trim($_POST["keywords"])) || empty(trim($_POST["np-content"]))  || empty(trim($_POST["en-author"])) || empty(trim($_POST["np-author"])) ||   empty(trim($_POST["en-content"]))) {
         $err = "Please input valid data.";
     } else {
        $title = $_POST['title'];
        $keywords = $_POST['keywords'];
        $enContent = $_POST['en-content'];
        $npContent = $_POST['np-content'];
        $enAuthor = $_POST['en-author'];
        $npAuthor = $_POST['np-author'];
        $get_id = trim($_POST["id"]);
        $status = (empty(trim($_POST["title"])))? "0": "1";
        // Prepare an insert statement
        $sql = "UPDATE posts SET title = ? ,keywords = ? ,en_content = ? ,en_author = ?,np_content = ?,np_author = ?,media = ?,en_podcast_url = ?,np_podcast_url = ?,published = ? WHERE id = $get_id";

        if ($stmt = $mysqli->prepare($sql)) {
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("ssssssssss", $title, $keywords, $enContent, $enAuthor, $npContent, $npAuthor, $npAuthor,$npAuthor,$npAuthor,$status);


            // Attempt to execute the prepared statement
            if ($stmt->execute()) {
                // Redirect to notifications page
               $err = "Updated successfully!";
               //header("Location: /admin/posts/edit?id=".$get_id);
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            $stmt->close();
        }

    }

}
?>
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Create a New Post</h4>
            </div>
            <div class="card-body">
                <form method="post">


                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" value="<?php echo $get_title; ?>" name="title" class="form-control" placeholder="Title of the Post...">
                            </div>


                            <input type="text" value="<?php echo $get_id; ?>" hidden name="id" class="form-control" placeholder="Title of the Post...">
                         




                            <div class="form-group">
                                <label>Content(English)</label>
                                <textarea id="editor-en" name="en-content"><?php echo $get_en_content; ?></textarea>
                            </div>

                            <div class="form-group">
                                <label>Content(Nepali)</label>
                                <textarea id="editor-np" name="np-content"><?php echo $get_np_content; ?></textarea>
                            </div>



                        </div>
                    </div>

                    <?php
                    if (!empty($err)) {
                        echo '<div class="alert alert-danger">' . $err . '</div>';
                    }
                    ?>


            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Post Properties for SEO</h4>
            </div>
            <div class="card-body">

                <div class="form-group">
                    <input name="status" type="checkbox" <?php
                                                            if ($get_status == "1") {
                                                                echo "checked";
                                                            }
                                                            ?> id="flexCheckDefault">
                    <label for="flexCheckDefault">
                        Published
                    </label>
                </div>
                <div class="form-group">
                    <label>Keywords</label>
                    <input type="text" data-role="tagsinput" value="<?php echo $get_keywords; ?>" name="keywords" class="form-control" placeholder="Keywords for the contents">
                </div>

                <div class="form-group">
                    <label>Author(English)</label>
                    <input type="text" name="en-author" value="<?php echo $get_en_author; ?>" class="form-control" placeholder="English Content Author...">
                </div>

                <div class="form-group">
                    <label>Author(Nepali)</label>
                    <input type="text" name="np-author" class="form-control" value="<?php echo $get_np_author; ?>" placeholder="Nepali Content Author...">
                </div>

                <button type="submit" class="btn btn-primary btn-fill pull-right">Save Post</button>
                <div class="clearfix"></div>


                </form>
            </div>
        </div>
    </div>
</div>
<?php

include_once('components/footer.php');
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" integrity="sha512-xmGTNt20S0t62wHLmQec2DauG9T+owP9e6VU8GigI0anN7OXLip9i7IwEhelasml2osdxX71XcYm6BQunTQeQg==" crossorigin="anonymous" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js" integrity="sha512-VvWznBcyBJK71YKEKDMpZ0pCVxjNuKwApp4zLF3ul+CiflQi6aIJR+aZCP/qWsoFBA28avL5T5HA+RE+zrGQYg==" crossorigin="anonymous"></script>
<style type="text/css">
    .bootstrap-tagsinput {
        width: 100%;
    }

    .label-info {
        background-color: #17a2b8;

    }



    .label {
        display: inline-block;
        padding: .25em .4em;
        font-size: 75%;
        font-weight: 700;
        line-height: 1;
        text-align: center;
        white-space: nowrap;
        vertical-align: baseline;
        border-radius: .25rem;
        transition: color .15s ease-in-out, background-color .15s ease-in-out,
            border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    }
</style>
<script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
<script>
    var editor1 = ClassicEditor
        .create(document.querySelector('#editor-en'))
        .catch(error => {
            console.error(error);
        });

    var editor2 = ClassicEditor
        .create(document.querySelector('#editor-np'))
        .catch(error => {
            console.error(error);
        });
</script>