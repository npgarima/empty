<?php
// necessary variables for the header file, for SEO
$header_title = "My Fiction Blog Page";
$active = ["", "active", "", ""];
$keywords = "myfictions, my fictions, blogs, Sandeep Kattel, myfictions3, myfiction";
$author = "Sulav Parajuli";
$desc = "A place where you can find best blogs, summary and podcast in English and Nepali.";
$title = "My Fiction - A place for litreture lovers";

include_once("components/header.php");

require_once "config.php";

$get_title = $get_keywords = $get_en_content = $get_np_content = $get_np_author = $get_en_author = $get_status = "";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (!empty(trim($id))) {

        $sql = "SELECT * FROM posts WHERE id=$id";
        $result = $mysqli->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {

                $get_title = $row['title'];
                $get_keywords = $row['keywords'];
                $get_en_content = $row['en_content'];
                $get_media = $row['media'];
                $get_np_content = $row['np_content'];
                $get_np_author = $row['np_author'];
                $get_created = $row['created_at'];
                $get_en_author = $row['en_author'];
                $get_status = $row['published'];;
            }
        } else {
            echo "0 results";
            die();
        }
    }
}
?>

<div class="main-container">

    <div class="title">
        <?php echo $get_title; ?>
    </div>

    <div class="image">
    </div>

    <div class="author">
        Author: <?php echo $get_en_author; ?><br>
        Posted at: <?php echo $get_created; ?>
    </div>
    <div class="post">
        <?php echo $get_en_content; ?>
    </div>

</div>


<style>
    .main-container {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .title {
        margin-top: 20px;
        margin-bottom: 10px;
        width: 99vw;
        padding-left: 3%;
        font-weight: bolder;
        font-size: 1.7em;
    }

    .author {
        margin-top: 20px;
        width: 99vw;
        padding-left: 3%;
        color: grey;
    }


    .post {
        width: 99vw;
        padding: 3%;
        margin-bottom: 20px;
    }

    .image,
    img {
        background: url(<?php echo $get_media ?>);
        margin-top: 10px;
        margin-bottom: 10px;
        border-radius: 20px;
        width: 95vw;
        height: 50vh;

    }
</style>
<?php
include_once("components/footer.php");
?>