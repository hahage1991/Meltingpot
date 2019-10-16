<?php
/**
 *
Template Name: Dish Filter
 * *   */


get_header(); ?>

<?php

$wordpressroot=$_SERVER['DOCUMENT_ROOT'];
require_once("$wordpressroot/wp-config.php");


$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);
mysqli_select_db($connection, DB_NAME);

?>

    <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

<?php

            while ( have_posts() ) : the_post();

                get_template_part( 'content', 'page' );

                if ( comments_open() || get_comments_number() ) :
                               comments_template();
                               endif;
                               endwhile;
?>
<div class="entry-content">
  <style>
    .backgroundImage{
      background-image: url(https://www.meltingpot.tk/wp-content/uploads/2019/10/Untitled-77.png);
      background-repeat: repeat-y;
      background-size: cover;
      width:100%;
      min-height:900px;
    }
    .title{
      padding-top:150px;
      padding-bottom:30px;
      color:#684A35;
      text-align:center;
      font-size:50px;
      font-family: 'Acme';
    }
    .title2{
      padding-top:10px;
        padding-bottom:10px;
        color:#684A35;
        text-align:center;
        font-size:40px;
        font-family: 'Acme';
}

    .subtitle{
      padding-top:30px;
      padding-bottom:30px;
      color:#684A35;
      text-align:center;
      font-size:30px;
        font-family: 'Acme'
}
    .quicksearchDisplayContainer{
      height:130px;
      background-color: white;
      border-radius: 10px;
      display:flex;
      justify-content: space-between;
      padding-left:120px;
      padding-right:120px;
      align-items:center;

    }
    .quickSearchContainer{
      width:67%;
      margin:auto;
    }
    .quickSearchImg{
      width:85px;
      height:auto;
    }

    .quickSearchItem{
      margin-left:45px;
      margin-right:45px;
      margin-bottom:30px;
      margin-top:30px;
        cursor:pointer;
        align-items:center;
        text-align:center;
        border:1px solid;
        border-radius:5px;
        overflow:hidden;
    }
        .quickSearchItem p{
        font-family:'Acme';
        font-size:25px;
        text-decoration:none;
        font-weight:bold;
}
.quickSearchName{
margin-bottom:0px;
}
.quickSearchItem a{
        text-decoration:none;
}

    /* Set the food container style*/
    .foodSearchContainer{
      justify-content: space-between;
      flex-direction: row;
      white-space: nowrap;
      overflow-x: auto;
      text-align: center;
      padding-left: 300px;
      padding-right:300px;
      padding-bottom: 70px;
    }

    .cookingBoyPic{
      padding-top:55px;
      height:450px;
      width:auto;
                    }

    /* Add styles to the form container */
    .formcontainer {
      margin: 20px;
      height:480px;
      width: 400px;
      padding: 16px;
      background-color: white;
      float: right;
      border-radius: 25px;
    }
    .formquestions{
      text-align: left;
      padding-left: 50px;
      padding-bottom: 40px;
    }

    input[type=radio] {
      display: inline;
      }

    /* Set a style for the submit button */
    .btn {
      background-color: #684A35;
      color: white;
      padding: 16px 20px;
      border: none;
     text-align: center;
   cursor: pointer;
      width: 50%;
      opacity: 0.9;
      font-size:20px;
      border-radius: 10px;
    }

    .btn:hover {
      opacity: 0.8;
    }
    label{
      padding-right: 20px;
    }

.resultContainer{
        margin-top:20px;
        display:flex;
        background-color:white;
        width:65%;
        margin-left:auto;
        margin-right:auto;
}
.resultImgContainer{
        width:275px;
        height:250px;
}
.resultDesContainer{
        margin-top:auto;
        margin-bottom:auto;
        padding:40px;
        width:550px;
        text-align:left;
}
.resultTitle{
font-family: "Raleway", Sans-serif;
    font-size: 22px;
    font-weight: bold;
    text-transform: uppercase;
    letter-spacing: 1px;
}
.resultDes{
        font-size:16px;
        overflow-wrap: break-word;
        margin-bottom: 16px;
    font-weight: 400;
    line-height: 1.6;
    color: #46707f;
        text-align:left;
        max-width:350px;
        word-break:break-word;
}
.resultDesDiv{
        width:320px;
}
.resultButtonContainer{
        width:200px;
        height:250px;
        display: flex;
        align-items: center;
        justify-content: center
}
.resultButton{
        margin:auto;
        font-weight: bold;
        color:white;
        text-transform: uppercase;
        background-color: #02ddf7;
        border-radius: 50px 50px 50px 50px;
        font-size: 15px;
    padding: 12px 24px;
        cursor:pointer;
        border:none;
}
/*on hover, change the appearance of the button*/
.resultButton:hover{
        opacity:0.8;
        background-color:#ac44f6;
        cursor:pointer;
}
  </style>
  <div class="backgroundImage">
    <h1 class="title">Hey! what would you like to eat today?</h1>
    <div>
      <div class="quickSearchContainer">
        <h2 class="subtitle" style="text-align:left; padding-bottom: 5px; margin-bottom: 5px;"> Quick Search</h2>
        <div class="quicksearchDisplayContainer">
          <div class="quickSearchItem">
                <a href="https://meltingpot.tk/dish-filter/breakfast-2" style="text-decoration:none;">
                <img class="quickSearchImg" src="https://www.meltingpot.tk/wp-content/uploads/2019/10/Untitled-2019-10-11T130905.227.png"/>
                <p class="quickSearchName">Brekkie</p></a>
          </div>
          <div class="quickSearchItem">
                <a href="https://meltingpot.tk/dish-filter/lunch">
                <img class="quickSearchImg" src="https://www.meltingpot.tk/wp-content/uploads/2019/10/Untitled-85.png"/>
                <p class="quickSearchName" >Lunch</p></a>
          </div>
          <div class="quickSearchItem">
                <a href="https://meltingpot.tk/dish-filter/dinner">
                <img class="quickSearchImg" src="https://www.meltingpot.tk/wp-content/uploads/2019/10/Untitled-86.png"/>
                <p class="quickSearchName">Dinner</p></a>
  </div>
          <div class="quickSearchItem">
               <a href="https://meltingpot.tk/dish-filter/desserts">
              <img class="quickSearchImg" src="https://www.meltingpot.tk/wp-content/uploads/2019/10/Untitled-88.png"/>
                <p class="quickSearchName">Dessert</p></a>
          </div>
        </div>
      </div>
      <div style="height:60px;"></div>

      <div class="foodSearchContainer">
        <div style="max-width:300px;float:left;">
          <img class="cookingBoyPic" src="https://meltingpot.tk/wp-content/uploads/2019/10/cook.png" />
        </div>
        <div>
          <form action="#resultSection" method="post" class="formcontainer">
            <h2 class="subtitle" style="padding:20px;"> Select your preference: </h2>
            <div class="formquestions">
              <p style="padding-top: 15px;">Do you like spicy food: </p>
              <label><input type="radio" name="spicy" value="1">Yes</label>
              <label><input type="radio" name="spicy" value="0"> No</label>

              <p style="padding-top: 15px;">You have sweet tooth: </p>
              <label><input type="radio" name="Sweet" value="1"> Yes</label>
              <label><input type="radio" name="Sweet" value="0"> No</label>

              <p style="padding-top: 15px;">Are you vegetarian: </p>
              <label><input type="radio" name="vegetarian" value="1"> Yes</label>
              <label><input type="radio" name="vegetarian" value="0"> No</label>
            </div>
            <button type="submit" class="btn" href="#resultSection" >Submit</button>

          </form>
        </div>
      </div>
<?php
  /** Store three variable from user selection*/
  $spicy =$_POST["spicy"];
  $sweet= $_POST["Sweet"];
  $vegetarian= $_POST["vegetarian"];

  /** Check if user did not select any choice */
  if ($spicy == null or $sweet == null or $vegetarian==null) {
    $localtime=date('Y-m-d H:i:s',time());
    $query_Recordset1 ="SELECT * FROM `table 26`";
    $Recordset1 = mysqli_query($connection, $query_Recordset1 ) or die(mysqli_error($connection));
    /** loop every entry in the table */
    while( $row_Recordset1 = mysqli_fetch_assoc($Recordset1)){
      $totalRows_Recordset1 = mysqli_num_rows($Recordset1);
        /** If there are no result */
        if($totalRows_Recordset1 <= 0) {
          echo "do not exit<br>";
        }
      }
      mysqli_close($connection);
  }
  else {
    $localtime=date('Y-m-d H:i:s',time());
    /** Use SQL query to search in the database */
    $query_Recordset1 ="SELECT * FROM `table 26` WHERE (spicy='$spicy' OR Sweet='$sweet') AND vegetarian='$vegetarian'";
    $Recordset1 = mysqli_query($connection, $query_Recordset1 ) or die(mysqli_error($connection));
    /** Print the title */
    echo("<h1 class=\"title2\">These are the dishes we selected for you:</h1>");
    while( $row_Recordset1 = mysqli_fetch_assoc($Recordset1)){                                                                                                                                                                               $totalRows_Recordset1 = mysqli_num_rows($Recordset1);                                                                                                                                               if ($totalRows_Recordset1 <= 0) {
      echo "do not exit<br>";                                                                                                                                                                                                      }
      else{
        /** Store the image value and encode it */
        $image =$row_Recordset1[pic];
        $imageData = base64_encode(file_get_contents($image));
        echo("<div class=\"resultContainer\">");
        /** the image */
        echo'<img class=resultImgContainer src="data:image/jpeg;base64,'.$imageData.'">';
        echo("<div class=\"resultDesContainer\">");
        /** The title */
        echo'<h3 class=resultTitle>' .$row_Recordset1[sh].'</h3>';
        echo("<div class=\"resultDesDiv\">");
        /** The description */
        echo'<p class=resultDes >' .$row_Recordset1[infor].'</p>';
        echo("</div>");
        echo("</div>");
        echo("<div class=\"resultButtonContainer\">");
        /** The result button */
        echo("<button class=\"resultButton\" onclick=\"location.href='$row_Recordset1[Url]'\">Learn More</button>");
        echo("</div>");
        echo("</div>");
        }
      }
    mysqli_close($connection);
  }
?>

</div>
<br>
<br>
</div>
</div>
</div>
</div>
</div>
</main>
</div>



<?php get_footer(); ?>




