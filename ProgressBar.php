
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="en">
<head>
    <title>Progress Bar</title>
</head>
<body>
<!-- Progress bar holder -->
<div id="progress" style="width:500px;border:1px solid #ccc;"></div>
<!-- Progress information -->

<?php
// Total processes
set_time_limit(0);
$total = 100;
// Loop through process
for($i=1; $i<=$total; $i=$i+2){
    // Calculate the percentation
    //$percent = intval($i/$total * 100)."%";
    $k = $i."%";
    // Javascript for updating the progress bar and information
    echo '<script language="javascript">
    document.getElementById("progress").innerHTML="<div style=\"width:'.$k.';background-color:#ddd;\">&nbsp;</div>";
    
    </script>';
    

// This is for the buffer achieve the minimum size in order to flush data
    //echo str_repeat(' ',1024*64);
    

// Send output to browser immediately
    ob_flush();
        flush();
    

// Sleep one second so we can see the delay
    sleep(1);
}
// Tell user that the process is completed
echo '<script language="javascript">document.getElementById("information").innerHTML="Process completed"</script>';
?>
</body>
</html>