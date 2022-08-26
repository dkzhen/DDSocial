<?php 
include "../Controllers/database.php";
 $query = mysqli_query($conn,"SELECT * FROM datas");
 
 while ($data = mysqli_fetch_assoc($query)){
    $datas = [
        'id' => $data['id'],
        'nama' => $data['nama'],
        'text' => $data['text'],
        'audience' => $data['audience'],
        'img' => $data['img']
      ];

    // $datas = array("'".$data['id']."'"."'".$data['nama']."'"."'".$data['text']."'"."'".$data['audience']."'"."'".$data['img']."'");
    // var_dump($datas);
?>

 <script type="text/javascript">
 	var datas =  [<?php echo '"'.implode('","', $datas).'"' ?>];
 	for(x=0; x<1; x++){
     var id = datas[0]
     var nama = datas[1]
     var text = datas[2]
     var audience = datas[3]
     var img = datas[4]
     document.write(
        "Biodata Members <br>",
        "nama :"+nama+"<br>",
        "description :"+text+"<br>",
        "audience :"+audience+"<br>",
        "img : <img src='../public/Assets/images/"+img+"' <br>"
     )

     console.log(datas)
    }
 </script> 

 <?php }?>