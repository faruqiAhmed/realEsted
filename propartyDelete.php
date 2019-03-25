<?php session_start(); ?>
<?php 
if(!isset($_SESSION["user"])){ 
    header('Location: index.php');
    exit();
}  
?>
<?php
$id = $_GET["id"];
if(isset($_POST["submitd"]))
{
	include 'connection1.php';
	try 
		{
			$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
			// set the PDO error mode to exception
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$stmt = $conn->query("DELETE FROM `tbl_product` where product_id='$id'");
			header('Location: productUpdate.php');
		}
	catch(PDOException $e)
		{
			echo "Error: " . $e->getMessage();
		}
	$conn = null;
}
else
{
?>
<!DOCTYPE html>
<html>
    <head>
        <script>
            function goBack() {
                window.history.back();
            }
        </script>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="css/index.css" rel="stylesheet">   
        <title>adminCreateConfirm.php</title>
    </head>
    <body style="background-color: #f1f1f1">
		<?php include 'header.php';
		?>
        <!--Start Java Code for receive data from createAdmin page-->

        <?php
            include 'connection1.php';
					try 
					{
						$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password); 
						$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

						$stmt = $conn->query("SELECT * FROM tbl_product where product_id = '$id'");
						while ($row = $stmt->fetch())
						{   
					$id = $row["product_id"];
					$_SESSION["product_id"] = $id;
					 
                    $product_tilte = $row["product_tilte"];
                    $location_address = $row["location_address"]; 
                    $product_area = $row["product_area"];
					$manufacturer_id = $row["manufacturer_id"]; 
					$product_price = $row["product_price"];
					$Description = $row["Description"];
					$youtube_link = $row["youtube_link"];
                    $google_map = $row["google_map"];
                    $product_image = $row["product_image"];
                    $publication_status = $row["publication_status"];
				}
					}
			catch(PDOException $e)
				{
				echo "Error: " . $e->getMessage();
				}
			$conn = null;
            ?>          

        <!--End of Java Code for receive data from createAdmin page-->
        <div class="main_body">
            <div style="margin-top: 100px;">
                <!--Extra Margin add for menu bar-->

            </div>
            <!-------------------------------- End of Header Section -------------------------------->


            <!-------------------------------- Start main Code Here -------------------------------->
           <div class="adminform">
                <form action="#" method="POST">
                    <div style="font-size: 35px; text-align: center; font-weight: bolder; padding-bottom: 50px;">
                        <u>product Delete Confirm</u>
                    </div>
                    <div>
                        <div class="inputtextitle">
                            product_title&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <?php echo $product_tilte;?>
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle">
                            location_address&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <?php echo $location_address; ?>
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle">
                            product_area&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <?php echo $product_area; ?> Classes
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle">
                           manufacturer &nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <?php echo $manufacturer_id; ?>
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle">
                            product_price&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <?php echo $product_price; ?>
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle">
                           Description &nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <?php echo $Description; ?>
                        </div>
                    </div>                    
                    <div>
                        <div class="inputtextitle">
                            youtube_link&nbsp;:
                        </div>
                        <div style="display: inline-table;">
                            <?php echo $youtube_link; ?>
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle">
                            google_map&nbsp;:
                        </div>
                        <div style="display: inline-table;">
                            <?php echo $google_map; ?>
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle">
                            product_image&nbsp;:
                        </div>
                        <div style="display: inline-table;">
                            <?php echo $product_image; ?>
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle">
                            publication_status&nbsp;:
                        </div>
                        <div style="display: inline-table;">
                            <?php echo $publication_status; ?>
                        </div>
                    </div>
                    <div style="margin-left: 350px;">                        
                        <div style="display: inline-table;">
                            <input type="submit" value="Back" onclick="goBack()" class="input_box" style="margin-bottom: 15px;margin-top: 10px;"/>
                        </div>
                        <div style="display: inline-table;">
                            <input type="submit" name="submitd" value="Confirm" style="margin-bottom: 15px;margin-top: 10px;" class="input_box"/>
                        </div>
                    </div>
                </form>
            </div>
            <!-------------------------------- End of main Code Here -------------------------------->      
			<!--------------------------------- Start Footer Section ---------------------------------> 
            <hr style="border: 1px solid violet;">
            <div class="footer">
                <div class="icon">
                    <a href="#">N@zrul</a>
                </div>
                <div class="icon">
                    <a href="#">Branches</a>
                </div>
                <div class="icon">
                    <a href="#">Courses</a>
                </div>
                <div class="icon">
                    <a href="#">Policy</a>
                </div>
                <div class="icon">
                    <a href="#">Suggest</a>
                </div>
                <div class="icon">
                    <a href="#">Branches</a>
                </div>
                <div class="icon">
                    <a href="#">Career</a>
                </div>
                <div class="icon">
                    <a href="#">Contact US</a>
                </div>
            </div>
            <!---------------------- Footer End Here ------------------------------------- ---> 
        </div>
        <!---------------------- Main Div End Here ----------------------------------- -------> 
    </body>
</html>
<?php } ?>