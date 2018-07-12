<?


function plural($n, $form1, $form2, $form3) {  
			return in_array($n % 10, array(2,3,4)) && !in_array($n % 100, array(11,12,13,14)) ? $form2 : ($n % 10 == 1 ? $form1 : $form3); 
		}