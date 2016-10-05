<?php
	
	//"[ {name:'阿飞' , age:'18'} , {name:'小妃' , age:'28'} , …… ]"

	$arr = array(
		array( 'name'=>'阿飞' , 'age'=>'18' ),
		array( 'name'=>'小妃' , 'age'=>'小妃' ),
		array( 'name'=>'Vicky' , 'age'=>'38' ),
		array( 'name'=>'mini' , 'age'=>'8' ),
		array( 'name'=>'Rose' , 'age'=>'27' ),
		array( 'name'=>'arry' , 'age'=>'40' ),
		array( 'name'=>'Kevin' , 'age'=>'38' ),
		array( 'name'=>'蓝桥' , 'age'=>'35' ),
	);
	//echo $arr;
	echo json_encode($arr);//对变量进行JSON编码
	//以上代码执行结果为[{"name":"阿飞","age":"18"},{"name":"小妃","age":"小妃"},...]
	//中括号代表数组，花括号代笔对象

?>