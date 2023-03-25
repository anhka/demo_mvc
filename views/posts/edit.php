
        <h2 style="display:flex; justify-content:center;padding-top:10px;font-size:30px"> Sửa thông tin</h2>


<form action="index.php?controller=posts&action=updated" method="POST"style="display:flex; justify-content:center;">
    <div style="width:500px ;height:300px;background-color:#F5F7BD;padding-top:15px; text-align:center">
        <div  style="font-size:24px; padding:10px; ">
        <div class="">Tên tiêu đề</div>
        <input type="text"name="title" class="" style="height:35px; width:300px;"value=" <?=$post->title ?>"/>
        </div>
        <div style="font-size:24px; padding:10px;">
        <div class=""  >Nội dung</div>
        <input type="text"name="content" class="" style="height:35px; width:300px;" value=" <?=$post->content ?>"/>
        </div>
    
    <div>
        <input style=" height:35px; width:80px;" type="submit" name="submitth" class="" value="Cập Nhật">
    </div>
   <div style="padding-top:20px"> <a href="http://localhost/demo_mvc/index.php?controller=posts">BACK</a></div>
</div>
</form>
