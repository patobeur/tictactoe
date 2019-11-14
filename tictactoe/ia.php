<?php
		$player="o";
		// ------------------- AI ------------------	
	
			$lv="3";
				//horizont
				if ($coups=="1" AND $case22==""){$case22=$player;$coups++;}
				
				elseif ($coups=="3" AND $lv>="3" AND $case11.$case22.$case33=="oxx" AND $case13==""){$case13=$player;$coups++;}
				elseif ($coups=="3" AND $lv>="3" AND $case31.$case22.$case13=="xox" AND $case12==""){$case12=$player;$coups++;}
				
				
				
				elseif ($coups=="1" AND $lv>="3" AND $case31=="x" AND $case13==""){$case13=$player;$coups++;}	
				elseif ($coups=="1" AND $lv>="3" AND $case11=="x" AND $case33==""){$case33=$player;$coups++;}
				elseif ($coups=="1" AND $lv>="3" AND $case13=="x" AND $case31==""){$case31=$player;$coups++;}
				elseif ($coups=="1" AND $lv>="3" AND $case33=="x" AND $case11==""){$case11=$player;$coups++;}
				
				elseif ($lv>="3" AND $case11.$case13=="xx" AND $case22==""){$case22=$player;$coups++;}
				
				elseif ($case11.$case12=="oo" AND $case13==""){$case13=$player;$coups++;}
				elseif ($lv>="3" AND $case11.$case13=="oo" AND $case12==""){$case12=$player;$coups++;}
				elseif ($lv>="3" AND $case12.$case13=="oo" AND $case11==""){$case11=$player;$coups++;}
				
				elseif ($lv>="3" AND $case21.$case22=="oo" AND $case23==""){$case23=$player;$coups++;}
				elseif ($lv>="3" AND $case21.$case23=="oo" AND $case22==""){$case22=$player;$coups++;}
				elseif ($lv>="3" AND $case22.$case23=="oo" AND $case21==""){$case21=$player;$coups++;}
				
				elseif ($lv>="3" AND $case31.$case32=="oo" AND $case33==""){$case33=$player;$coups++;}
				elseif ($lv>="3" AND $case31.$case33=="oo" AND $case32==""){$case32=$player;$coups++;}
				elseif ($lv>="3" AND $case32.$case33=="oo" AND $case31==""){$case31=$player;$coups++;}
				//verticale
				elseif ($lv>="3" AND $case11.$case21=="oo" AND $case31==""){$case31=$player;$coups++;}
				elseif ($lv>="3" AND $case11.$case31=="oo" AND $case21==""){$case21=$player;$coups++;}
				elseif ($lv>="3" AND $case31.$case21=="oo" AND $case11==""){$case11=$player;$coups++;}
				
				elseif ($lv>="3" AND $case12.$case22=="oo" AND $case32==""){$case32=$player;$coups++;}
				elseif ($lv>="3" AND $case12.$case32=="oo" AND $case22==""){$case22=$player;$coups++;}
				elseif ($lv>="3" AND $case32.$case22=="oo" AND $case12==""){$case12=$player;$coups++;}
				//diagonale
				elseif ($lv>="3" AND $case13.$case23=="oo" AND $case33==""){$case33=$player;$coups++;}
				elseif ($lv>="3" AND $case13.$case33=="oo" AND $case23==""){$case23=$player;$coups++;}
				elseif ($lv>="3" AND $case33.$case23=="oo" AND $case13==""){$case13=$player;$coups++;}
				
				elseif ($lv>="3" AND $case11.$case22=="oo" AND $case33==""){$case33=$player;$coups++;}
				elseif ($lv>="3" AND $case11.$case33=="oo" AND $case22==""){$case22=$player;$coups++;}
				elseif ($lv>="3" AND $case33.$case22=="oo" AND $case11==""){$case11=$player;$coups++;}
				
				elseif ($lv>="3" AND $case13.$case22=="oo" AND $case31==""){$case31=$player;$coups++;}
				elseif ($lv>="3" AND $case13.$case31=="oo" AND $case22==""){$case22=$player;$coups++;}
				elseif ($lv>="3" AND $case31.$case22=="oo" AND $case13==""){$case13=$player;$coups++;}
				//horizont
				elseif ($lv>="2" AND $case11.$case12=="xx" AND $case13==""){$case13=$player;$coups++;}
				elseif ($lv>="2" AND $case11.$case13=="xx" AND $case12==""){$case12=$player;$coups++;}
				elseif ($lv>="2" AND $case12.$case13=="xx" AND $case11==""){$case11=$player;$coups++;}
				
				elseif ($lv>="2" AND $case21.$case22=="xx" AND $case23==""){$case23=$player;$coups++;}
				elseif ($lv>="2" AND $case21.$case23=="xx" AND $case22==""){$case22=$player;$coups++;}
				elseif ($lv>="2" AND $case22.$case23=="xx" AND $case21==""){$case21=$player;$coups++;}
				
				elseif ($lv>="2" AND $case31.$case32=="xx" AND $case33==""){$case33=$player;$coups++;}
				elseif ($lv>="2" AND $case31.$case33=="xx" AND $case32==""){$case32=$player;$coups++;}
				elseif ($lv>="2" AND $case32.$case33=="xx" AND $case31==""){$case31=$player;$coups++;}
				//verticale
				elseif ($lv>="2" AND $case11.$case21=="xx" AND $case31==""){$case31=$player;$coups++;}
				elseif ($lv>="2" AND $case11.$case31=="xx" AND $case21==""){$case21=$player;$coups++;}
				elseif ($lv>="2" AND $case31.$case21=="xx" AND $case11==""){$case11=$player;$coups++;}
				
				elseif ($lv>="2" AND $case12.$case22=="xx" AND $case32==""){$case32=$player;$coups++;}
				elseif ($lv>="2" AND $case12.$case32=="xx" AND $case22==""){$case22=$player;$coups++;}
				elseif ($lv>="2" AND $case32.$case22=="xx" AND $case12==""){$case12=$player;$coups++;}
				//diagonale
				elseif ($lv>="2" AND $case13.$case23=="xx" AND $case33==""){$case33=$player;$coups++;}
				elseif ($lv>="2" AND $case13.$case33=="xx" AND $case23==""){$case23=$player;$coups++;}
				elseif ($lv>="2" AND $case33.$case23=="xx" AND $case13==""){$case13=$player;$coups++;}
				
				elseif ($lv>="2" AND $case11.$case22=="xx" AND $case33==""){$case33=$player;$coups++;}
				elseif ($lv>="2" AND $case11.$case33=="xx" AND $case22==""){$case22=$player;$coups++;}
				elseif ($lv>="2" AND $case33.$case22=="xx" AND $case11==""){$case11=$player;$coups++;}
				
				elseif ($lv>="2" AND $case13.$case22=="xx" AND $case31==""){$case31=$player;$coups++;}
				elseif ($lv>="2" AND $case13.$case31=="xx" AND $case22==""){$case22=$player;$coups++;}
				elseif ($lv>="2" AND $case31.$case22=="xx" AND $case13==""){$case13=$player;$coups++;}
				//autre
				elseif ($lv>="1" AND $case11==""){$case11=$player;$coups++;} 
				elseif ($lv>="1" AND $case12==""){$case12=$player;$coups++;} 
				elseif ($lv>="1" AND $case13==""){$case13=$player;$coups++;}
				elseif ($lv>="1" AND $case21==""){$case21=$player;$coups++;} 
				elseif ($lv>="1" AND $case22==""){$case22=$player;$coups++;} 
				elseif ($lv>="1" AND $case23==""){$case23=$player;$coups++;}
				elseif ($lv>="1" AND $case31==""){$case31=$player;$coups++;} 
				elseif ($lv>="1" AND $case32==""){$case32=$player;$coups++;} 
				elseif ($lv>="1" AND $case33==""){$case33=$player;$coups++;}
				
				?>