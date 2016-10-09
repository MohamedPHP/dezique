<?php
	ob_start();
	include "init.php";

?>
<!-- Page Content -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">About
                <small>Us</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="index.php">Home</a>
                </li>
                <li class="active">About</li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <!-- Intro Content -->
    <div class="row">
        <div class="col-md-6">
            <img class="img-responsive" src="Layout/img/AboutUs.jpg" alt="">
        </div>
        <div class="col-md-6">
            <h2>About Me &amp; Alaa</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate nihil eum consectetur similique? Consectetur, quod, incidunt, harum nisi dolores delectus reprehenderit voluptatem perferendis dicta dolorem non blanditiis ex fugiat.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, magni, aperiam vitae illum voluptatum aut sequi impedit non velit ab ea pariatur sint quidem corporis eveniet. Odit, temporibus reprehenderit dolorum!</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti eum ratione ex ea praesentium quibusdam? Aut, in eum facere corrupti necessitatibus perspiciatis quis?</p>
        </div>
    </div>
    <!-- /.row -->

    <!-- Team Members -->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Our Team</h2>
        </div>
		<?php
		$stmt  = $conn->prepare("SELECT * FROM our_team");
		$stmt->execute();
		$rows  = $stmt->fetchAll();
		$count = $stmt->rowCount();
		?>
		<?php foreach ($rows as $row): ?>
			<div class="col-md-4 text-center">
				<div class="thumbnail">
					<img class="img-responsive" src="Admin/Layout/img/team_img/<?php echo $row['Img']; ?>" alt="">
					<div class="caption">
						<h3>John Smith<br>
							<small><?php echo $row['Name']; ?></small>
						</h3>
						<p><?php echo $row['Jop_Title'] ?></p>
						<ul class="list-inline">
							<li><a href="<?php echo $row['Facebook'] ?>"><i class="fa fa-2x fa-facebook-square"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
    </div>
    <!-- /.row -->
    <hr>
</div><!-- /.container -->
<?php
	include "includes/templates/footer.php";
	ob_end_flush();
?>
