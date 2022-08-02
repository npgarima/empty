<?php
// necessary variables for the header file, for SEO
$header_title = "My Fiction Home Page";
$active = ["", "active", "", ""];
$keywords = "myfictions, my fictions, blogs, Sandeep Kattel, myfictions3, myfiction";
$author = "Sulav Parajuli";
$desc = "A place where you can find best blogs, summary and podcast in English and Nepali.";
$title = "My Fiction - A place for litreture lovers";

include_once("components/header.php");


// Fetch the top 50 blogs from the database
?>


<div class="band">

<h1>Recent Blogs</h1>
    <?php
    include_once("config.php");

    $sql = "SELECT * FROM posts WHERE published='1' LIMIT 50";
    $result = $mysqli->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        $index = 1;
        while ($row = $result->fetch_assoc()) {
    ?>
            <div class="<?php echo 'item-' . $index; ?>">
                <a href="/single/<?php echo $row['id']; ?>" class="card">
                    <div class="thumb" style="background-image: url(<?php echo $row['media']; ?>);"></div>
                    <article>
                        <h1><?php echo $row['title']; ?></h1>
                        <?php
                        if ($index != 1) {
                        ?>
                            <p> <?php echo substr(strval(strip_tags($row['en_content'])), 0, 200); ?>... </p>
                        <?php } ?>
                        <span><?php echo $row['en_author']; ?></span>
                    </article>
                </a>
            </div>

    <?php
            $index++;
        }
    }

    ?>


</div>
<link rel="stylesheet" href="/assets/css/blog.css">
<?php
include_once("components/footer.php");
?>