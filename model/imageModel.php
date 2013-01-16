<?

	class img{
			
		public function getGD(){
			
			return gd_info();
			
		}
		
		public function imageCopy($orgfile, $newfile){
	
		$n = imagecreatefromjpeg($orgfile);
		imagejpeg($n,$newfile);
		imagedestroy($n);	
		
		}
		
		public function imageResize($orgfile, $newfile, $h, $w){
			
			$n = imagecreatefromjpeg($orgfile);
			$ar = getimagesize($orgfile);
			$orgw = $ar[0];
			$orgh = $ar[1];
			
			$cont = imagecreatetruecolor($w,$h);
			imagecopyresampled($cont, $n, 0, 0, 0, 0, $w, $h, $orgw, $orgh);
			imagejpeg($cont,$newfile,100);
			imagedestroy($n);
		}
		
		public function msg($msg){
			/*
			$container = imagecreate(300, 200);
			$black = imagecolorallocate($container, 0, 0, 0);
			$white = imagecolorallocate($container, 255, 255, 255);
			$font = '/model/dali.ttf';
			imagefilledrectangle($container, 0, 0, 250, 150, $black);
			imagerectangle($container, 0, 0, 50, 60, $white);
			imagefttext($container, 50, 0, 50, 100, $white, $font, $msg);
			header('Content-Type: image/png');
			imagepng($container, null);
			imagedestroy($container); */
			
			$container = imagecreate(300,200);
			$black = imagecolorallocate($container, 0, 0, 0);
			$white = imagecolorallocate($container,255,255,255);
			$font = 'fonts/dali.ttf';
			//imagefilledrectangle($container, 0, 0, 50, 60, $white);
			imagefttext($container, 30, 5, 10, 90, $white, $font, $msg);
			//header('Content-Type: image/png');
			imagejpeg($container, "images/captcha.jpg");
			imagedestroy($container);
			
			//remove header in the blog model replace null with image
		}
		
		public function fileUpload($file){
		
			$tempfile = $file["tmp_name"];
			//copy($tempfile,"images/profile.jpg");
	
			//move_uploaded_file($tempfile,$file["name"]);
			//move_uploaded_file("/Applications/MAMP/htdocs/ssl/lab8/userImages",$file["name"]);
	//move_uploaded_file("/Users/JoshuaLFerreira/Desktop/railo-3.3.1.000-railo-express-macosx/webroot/ssl/lab6/userImages",$file["name"]);
			
		
		}
		
		public function pictureUpload($file,$title){
		
			$tempfile = $file["tmp_name"];
			$path = "postImages/";
			$jpg = ".jpg";
			move_uploaded_file($tempfile,$path.$title.$jpg);
			//move_uploaded_file($tempfile,$file["name"]);
			
			//echo $tempfile;
			
			//copy($tempfile,$filepath);
			
			
			/*$db = new \PDO("mysql:hostname=127.0.0.1;port=8889;dbname=ssl","root","root");
		
			$query = "update users set profileImage = :filename where username = :uname";
			$statement = $db->prepare($query);
			$statement->execute(array(":filename"=>$file["name"],":uname"=>$uname));*/
			
			
			
		}
		
	}
	
?>
<!---
 <cffunction name="fileUpload" returntype="void" access="public">
    <cfargument name="upfile" type="any">
    <cfargument name="username" type="any">
        
        <cffile action="upload" filefield="fileName" destination="/Users/JoshuaLFerreira/Desktop/railo-3.3.1.000-railo-express-macosx/webroot/ssl/lab6/userImages" nameconflict="makeunique" result="fileResult">
      	
        <cfquery name="userUpdate" datasource="ssl">
        	update users set profileImage = '#fileresult.serverfile#' where username = '#username#'
        </cfquery>
        
    </cffunction>
--->