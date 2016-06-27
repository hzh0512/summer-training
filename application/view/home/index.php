
<?php $directory=dirname(__FILE__)."/../../../public/files/";
$mydir = dir($directory); 
    while($file = $mydir->read())
	{ 
		if((is_dir("$directory/$file")) AND ($file!=".") AND ($file!="..") ) 
		{
?>
<a name="<?php echo $file;?>" id="<?php echo $file;?>"></a>
<div class="col-md-8 col-md-offset-2 col-xs-12 panel panel-default displaybox">
   <div class="panel-body">
       <div >
           <?php if (file_exists("$directory/$file/author.txt")){?>
       <span class="label badge-label label-success pull-left"><?php echo file_get_contents("$directory/$file/author.txt");?></span>
           <?php }if (file_exists("$directory/$file/time.txt")){ ?>
           <span class="label badge-label label-success pull-right"><?php echo file_get_contents("$directory/$file/time.txt");?></span> <?php } ?><div class="clearfix"></div></div>
      <table class="table table-striped">
   <caption><?php echo $file;?></caption>
   <thead>
      <tr>
         <th>文件名</th>
         <th>上传日期</th>
         <th>操作</th>
      </tr>
        <?php $directory2="$directory/$file";
$mydir2 = dir($directory2); 
    while($file2 = $mydir2->read())
	{ 
		if(!(is_dir("$directory2/$file2")) AND ($file2!="author.txt") AND ($file2!="time.txt")) 
		{
?>
            <tr>
       <td><?php echo $file2;?></td>
                <td><?php echo date("m-d H:i",fileatime("$directory2/$file2"));?></td>
                <td><a href="<?php echo("public/files/$file/$file2");?>">下载</a></td>
       </tr>
       <?php
		} 
		
	} 
$mydir2->close(); 
?>
   </thead>
   <tbody>
      
   </tbody>
</table>
   </div>
    
</div>
    <div class="clearfix"></div>

			
<?php
		} 
		
	} 
$mydir->close(); 
?>


