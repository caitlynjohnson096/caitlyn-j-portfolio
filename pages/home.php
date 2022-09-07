<?php
$workStyling = "active_page";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale-1" />
  <title>My Work</title>
    <link rel="stylesheet" type="text/css" href="public/styles/site.css" media="all"/>
</head>
  <body>

    <?php include('includes/nav.php'); ?>

    <div class="work-intro">
        <h1> Caitlyn Johnson </h1>

        <p> Aspiring UX and product designer who is focused on creating <b>research-based</b> designs that positively impact the <b>user's experience.</b></p>

      </div>

      <div class=projects>
        <div class="project-row1">
        <div class="project1">

          <h3> Longevitiy Design Challenge - grow&give </h3>
            <!-- Source: (original work) caityn johnson -->
            <img  src="public/images/long-mockup.png" alt="Caitlyn Johnson Resume">
            <p> Product Design  &#9679; App Design &#9679; UX Research</p>
            <a href = "/longevity" class ="projectlink">View Project &#8594;</a>

        </div>


        <div class="project2">
          <h3> Clark's Autobody Repair Shop Website Redesign </h3>
           <!-- Source: (original work) caityn johnson -->
          <img  src="public/images/clarks-markup.png" alt="Caitlyn Johnson Reslume">
          <p>Re-design  &#9679; Web Design  &#9679; User Research</p>
          <a href = "/clarks" class ="projectlink">View Project &#8594;</a>
        </div>

</div>

<div class="project-row2">

        <div class="project3">

  <h3> Circles </h3>
  <!-- Source: (original work) caityn johnson -->
  <img  src="public/images/circles-mockup.png" alt="Caitlyn Johnson Resume">
  <p> Product Design  &#9679; Social Media &#9679; UX Research</p>
  <a href = "/circles" class ="projectlink">View Project &#8594;</a>

</div>


<div class="project4">

<h3> Quantum AI </h3>
<!-- Source: (original work) caityn johnson -->
<img  src="public/images/qa-mockup.png" alt="Caitlyn Johnson Resume">
<p> Web Design  &#9679; Database Design &#9679; B2B </p>
<a href = "/qa" class ="projectlink">View Project &#8594;</a>

</div>
</div>
      </div>



    <?php include('includes/footer.php'); ?>





  </body>
</html>
