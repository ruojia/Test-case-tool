<?phpinclude "header.php";include "mysqli_connection.php";if ($_SESSION["authority"]==4){       echo "You do not allowed to edit this page!";	   echo "<script>window.location.href='dev.php'</script>";}elseif (!isset($_SESSION["username"])){   echo "<script>window.location.href='index.php'</script>";}$product = $_POST["product"];$app = $_POST["app"];$feature = $_POST["feature"];//判斷帳號密碼是否為空值//確認密碼輸入的正確性if($product != null && $app != null && $feature != null ){        //新增資料進資料庫語法        $sql = "INSERT INTO af (product, app, feature) values ('".$product."', '".$app."', '".$feature."');";        //echo $sql;		if(mysqli_query($mysqli,$sql))        {                echo 'Create successfully!';                echo '<meta http-equiv=REFRESH CONTENT=2;url=af.php>';        }        else        {                echo 'Fail to create!';				//echo mysqli_error($mysqli);                echo '<meta http-equiv=REFRESH CONTENT=2;url=af.php>';        }}else{        echo "<div style = 'color:red;'>Please fullfill your info!</div>" ;        echo '<meta http-equiv=REFRESH CONTENT=2;url=af.php>';}?><img src="wait.gif"/><br /><?phpmysqli_close($mysqli);	include "footer.php";