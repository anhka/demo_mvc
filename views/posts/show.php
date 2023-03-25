<!DOCTYPE html>
<html lang="en">
<head>
<style>
    #doimau:hover{
        background-color:black;
        color:white;
   
    }
</style>
</head>
<body>

<div style="display:flex; justify-content:center;">
    <table style="border:1px solid black; padding:10px;">
       <tr >
       <th id="doimau" style="border:1px solid black; padding:10px;">STT</th>

        <th id="doimau" style="border:1px solid black; padding:10px;">Tiêu đề</th>
        <th id="doimau" style="border:1px solid black; padding:10px;">Nội dung</th>
        
       </tr> 
   
 <?php
  echo '<tr>
 <td style="border:1px solid black; padding:10px;">'.$post->id.'</td>
 <td style="border:1px solid black; padding:10px;">'.$post->title.'</td>
 <td style="border:1px solid black; padding:10px;">'.$post->content.'</td>

</tr>';
?>   
 </table></div>
</body>
</html>


