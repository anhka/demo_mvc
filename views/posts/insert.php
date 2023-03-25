
  <h2 style="display:flex; justify-content:center;padding-top:10px;font-size:30px;height:70px;background-color:#F5F7BD;">Thêm </h2>
  <form action="index.php?controller=posts&action=store" method="POST" style="display:flex; justify-content:center;">
    <div style="width:500px ;height:300px;background-color:#F5F7BD;padding-top:15px; text-align:center">
        <div  style="font-size:24px; padding:10px; ">
        <div class="">Tên tiêu đề</div>
        <input type="text"name="title" class="" style="height:35px; width:300px;"placeholder="Nhập tiêu đề"></br>
        </div>
        <div style="font-size:24px; padding:10px;">
        <div class=""  >Nội dung</div>
        <input type="text"name="content" class="" style="height:35px; width:300px;"placeholder="Nhập nội dung">
        </div>
    
    <div>
        <input style=" height:35px; width:80px;" type="submit" name="submitth" class="" value="Thêm">
    </div>
   <div style="padding-top:20px"> <a href="http://localhost/demo_mvc/index.php?controller=posts">BACK</a></div>
</div>
</form>

  

