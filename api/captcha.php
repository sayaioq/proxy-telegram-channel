<?php

error_reporting(0);
	class CAPTCHA{
		private static function randomString($len=5, $str=''){
			for($i=1; $i<=$len; $i++ ){        
				//generates a random number that will be the ASCII code of the character.
				//We only want numbers (ascii code from 48 to 57) and caps letters. 	
		 		$ord=rand(50, 90);	 
		 		if((($ord >= 48) && ($ord <= 57)))
		 			$str.=chr($ord);	 //If the number is not good we generate another one	
		 		else
		 			$str.=self::randomString(1);
		 	}
		 	return $str;
		}

		  public static function show($vendors,$rand_str){
			//create the random string using the upper function 
			//(if you want more than 5 characters just modify the parameter)
			if($rand_str===0) $rand_str=self::randomString(5);
			// جدا کردن رشته به صورت 5 کاراکتر
			$letter1=substr($rand_str,0,1);
			$letter2=substr($rand_str,1,1);
			$letter3=substr($rand_str,2,1);
			$letter4=substr($rand_str,3,1);
			$letter5=substr($rand_str,4,1);
			//Creates an image from a png file. If you want to use gif or jpg images, 
            //$image=imagecreatefrompng($vendors['background']);
            //creates an image without png file
            $image = imagecreatetruecolor(200, 75);
            imagealphablending($image, false);
            $col=imagecolorallocatealpha($image,255,255,255,127);
            imagefill($image, 0, 0, $col);

            //transparent background
            imageAlphaBlending($image, true);
            imagesavealpha($image, true);
            //Get a random angle for each letter to be rotated with.
			// تعیین زاویه نمایش کاراکترها
			$angle1 = rand(-20, 20);
			$angle2 = rand(-20, 20);
			$angle3 = rand(-20, 20);
			$angle4 = rand(-20, 20);
			$angle5 = rand(-20, 20);
			//Get a random font. (In this examples, the fonts are located in "fonts" directory and named from 1.ttf to 10.ttf)
			// تعیین فونت برای نمایش هر یک از کاراکترها
			$font1 =$vendors['font'][0];
			$font2 =$vendors['font'][1];
			$font3 =$vendors['font'][2];
			$font4 =$vendors['font'][3];
			$font5 =$vendors['font'][4];
			//Define a table with colors (the values are the RGB components for each color).
			//Get a random color for each letter.
			// تعیین رنگ برای هر یک از کاراکتر ها
			$color1=rand(0,255);
			$color2=rand(0,255);
			$color3=rand(0,255);
			$color4=rand(0,255);
			$color5=rand(0,255);
			//Allocate colors for letters.
			$textColor1 = imagecolorallocate ($image, $color1,10, $color3);
			$textColor2 = imagecolorallocate ($image, $color4,13, $color2);
			$textColor3 = imagecolorallocate ($image, $color2,20, $color1);
			$textColor4 = imagecolorallocate ($image, $color3,10, $color5);
			$textColor5 = imagecolorallocate ($image, $color5,20, $color4);

			//Write text to the image using TrueType fonts.
			// تعیین سایز برای هر یک از کاراکترها
			$size1 = rand(25,40);
			$size2 = rand(25,30);
			$size3 = rand(25,30);
			$size4 = rand(25,30);
			$size5 = rand(20,45);
			// تعیین موقعیت نمایش برای هر کدام از کاراکترها
			$y_pos1 = rand(38,58);
			$y_pos2 = rand(38,58);
			$y_pos3 = rand(38,58);
			$y_pos4 = rand(38,58);
			$y_pos5 = rand(38,58);
			imagettftext($image, $size1, $angle1, 5, $y_pos1, $textColor1, $font1, $letter1);
			imagettftext($image, $size2, $angle2, 40, $y_pos2, $textColor2, $font2, $letter2);
			imagettftext($image, $size3, $angle3, 75, $y_pos3, $textColor3, $font3, $letter3);
			imagettftext($image, $size4, $angle4, 110, $y_pos4, $textColor4, $font4, $letter4);
			imagettftext($image, $size5, $angle5, 150, $y_pos5, $textColor5, $font5, $letter5);
			//add noise
            for ($i = 0; $i < 7; $i++) {
                $color = imagecolorallocate($image, rand(0,255), rand(0,255), rand(0,255));
                imagesetthickness($image, rand(1, $i));
                //noise line
                imageline($image,mt_rand(0,180),mt_rand(0,50),mt_rand(0,50),mt_rand(0,180),$color);
                //noise curve
                imagearc(
                    $image,
                    rand(1, 180), // x-coordinate of the center.
                    rand(1, 180), // y-coordinate of the center.
                    rand(1, 180), // The arc width.
                    rand(1, 180), // The arc height.
                    rand(1, 180), // The arc start angle, in degrees.
                    rand(1, 180), // The arc end angle, in degrees.
                    $color // A color identifier.
                );
                //noise dotted
                for($j=0;$j<50;$j++) {
                    imagesetpixel($image,rand()%255,rand()%255,$color);
                }
            }
			header('Content-type: image/png');
			//Output image to browser
			// imagejpeg($image);
			imagepng($image);
			imagedestroy($image);
			return strtolower($rand_str);
		}
	}
unlink("error_log");

?>
