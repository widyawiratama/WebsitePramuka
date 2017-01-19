<?php
class pag
{
 private $db;
 
 function __construct($DB_con)
 {
  $this->db = $DB_con;
 }

public function dataview_berita_index($query)
 {
  $stmt = $this->db->prepare($query);
  $stmt->execute();
 
  if($stmt->rowCount()>0)
  {
  while ($row = $stmt->fetch(PDO::FETCH_LAZY)) {
    ?>
        <table width="100%">
          <tr>
            <td><h4><?php echo $row['judul_berita'];?></h4></td>
            <td align="right"><a href="index-berita-view.php?id_berita=<?php echo $row['id_berita'] ?>"><button class="btn xs-btn btn-primary"><span class="glyphicon glyphicon-search"></span></button></a></td>
          </tr>
        </table>
        <p><?php echo substr($row['berita'], 0, 180);?></p>
        <br>
        <table width="100%">
          <tr>
            <td style="font-size: 11px; color:#696969;">posted by <?php echo $row['level'];?></td>
            <td style="font-size: 11px; color:#696969;" align="right"><?php echo $row['tanggal'];?></td>
          </tr>
        </table><br>
        <hr>
    
    <?php
   }
  }
  else
  {
   ?>
            <tr>
            <td>Nothing here...</td>
            </tr>
            <?php
  }
  
 }

 public function dataview_agenda_index($query)
 {
  $stmt = $this->db->prepare($query);
  $stmt->execute();
 
  if($stmt->rowCount()>0)
  {
  while ($row = $stmt->fetch(PDO::FETCH_LAZY)) {
    ?>
        <table width="100%">
          <tr>
            <td><h4><?php echo $row['judul_agenda'];?></h4></td>
            <td align="right"><a href="index-agenda-view.php?id_agenda=<?php echo $row['id_agenda'] ?>"><button class="btn xs-btn btn-primary"><span class="glyphicon glyphicon-search"></span></button></a></td>
          </tr>
        </table>
        <font>Hari : <?php echo $row['Nama_Hari_ID']?>, <?php echo $row['tanggal']?></font><br>
        <font>Jam : <?php echo $row['waktu']?> WIB</font>
        <p><?php echo substr($row['agenda'], 0, 180);?></p>
        <table width="100%">
          <tr>
            <td style="font-size: 11px; color:#696969;">posted by <?php echo $row['level'];?></td>
            <td style="font-size: 11px; color:#696969;" align="right"><?php echo $row['tanggal_post'];?></td>
          </tr>
        </table><br>
        <hr>
    
    <?php
   }
  }
  else
  {
   ?>
            <tr>
            <td>Nothing here...</td>
            </tr>
            <?php
  }
  
 }

public function dataview_agenda($query)
 {
  $stmt = $this->db->prepare($query);
  $stmt->execute();
 
  if($stmt->rowCount()>0)
  {
   while($row=$stmt->fetch(PDO::FETCH_ASSOC))
   {
    ?>
                <tr>
		    	<td><?php echo substr($row['judul_agenda'], 0, 40);?></td>
		    	<td><?php echo substr($row['agenda'], 0, 75);?></td>
		    	<td><?php echo $row['tgl_agenda'];?></td>
		    	<td style="text-align: center;">
					<a href="admin-agenda-view.php?id_agenda=<?php echo $row['id_agenda'] ?>"><button class="btn xs-btn btn-primary"><span class="glyphicon glyphicon-search"></span></button></a>
					<a href="admin-agenda-edit.php?id_agenda=<?php echo $row['id_agenda'] ?>"><button class="btn xs-btn btn-warning"><span class="glyphicon glyphicon-edit"></span></button></a>
					<a onclick="return konfirmasi()" href="admin-agenda-hapus.php?id_agenda=<?php echo $row['id_agenda'] ?>"><button class="btn xs-btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a>
				</td>
		  	</tr>
			<?php
   }
  }
  else
  {
   ?>
            <tr>
            <td>Nothing here...</td>
            </tr>
            <?php
  }
  
 }

 public function dataview_berita($query)
 { 
  $stmt = $this->db->prepare($query);
  $stmt->execute();
 
  if($stmt->rowCount()>0)
  {
   while ($row = $stmt->fetch(PDO::FETCH_LAZY)) {
      ?>
      <tr>
          <td><?php echo substr($row['judul_berita'], 0, 40);?></td>
          <td><?php echo substr($row['berita'], 0, 75);?></td>
          <td><?php echo $row['tgl_berita'];?></td>
          <td style="text-align: center;">
          <a href="admin-berita-view.php?id_berita=<?php echo $row['id_berita'] ?>"><button class="btn xs-btn btn-primary"><span class="glyphicon glyphicon-search"></span></button></a>
          <a href="admin-berita-edit.php?id_berita=<?php echo $row['id_berita'] ?>"><button class="btn xs-btn btn-warning"><span class="glyphicon glyphicon-edit"></span></button></a>
          <a onclick="return konfirmasi()" href="admin-berita-hapus.php?id_berita=<?php echo $row['id_berita'] ?>"><button class="btn xs-btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a>
        </td>
        </tr>
      <?php
   }
  }
  else
  {
   ?>
            <tr>
            <td>Nothing here...</td>
            </tr>
            <?php
  }
  
 }

 public function dataview_berita_home($query)
 { 
  $stmt = $this->db->prepare($query);
  $stmt->execute();
 
  if($stmt->rowCount()>0)
  {
   while ($data = $stmt->fetch(PDO::FETCH_LAZY)) {
    ?>
      <h4><?php echo substr($data['judul_berita'], 0, 90);?></h4>
      <p><?php echo substr($data['berita'], 0, 180);?></p>
      <br>
      <table width="100%">
        <tr>
          <td style="font-size: 11px; color:#696969;">posted by <?php echo $data['level'];?></td>
          <td style="font-size: 11px; color:#696969;" align="right"><?php echo $data['tanggal'];?></td>
        </tr>
      </table><br>
      <hr>
    <?php
   }
  }
  else
  {
   ?>
            <tr>
            <td>Nothing here...</td>
            </tr>
            <?php
  }
  
 }

 public function dataview_agenda_home($query)
 { 
  $stmt = $this->db->prepare($query);
  $stmt->execute();
 
  if($stmt->rowCount()>0)
  {
  while ($data = $stmt->fetch(PDO::FETCH_LAZY)) {
    ?>
      <h4><?php echo substr($data['judul_agenda'], 0, 90);?></h4>
      <font><b>Hari : <?php echo $data['Nama_Hari_ID'];?>, <?php echo $data['tanggal'];?></b></font><br>
      <font><b>jam &nbsp: <?php echo $data['waktu'];?> WIB</b></font>
      <p><?php echo substr($data['agenda'], 0, 180);?></p>
      <table width="100%">
        <tr>
          <td style="font-size: 11px; color:#696969;">posted by <?php echo $data['level'];?></td>
          <td style="font-size: 11px; color:#696969;" align="right"><?php echo $data['tanggal_post'];?></td>
        </tr>
      </table><br>
      <hr>
    <?php
   }
  }
  else
  {
   ?>
            <tr>
            <td>Nothing here...</td>
            </tr>
            <?php
  }
  
 }

 public function dataview_akun($query)
 { 
  $stmt = $this->db->prepare($query);
  $stmt->execute();
 
  if($stmt->rowCount()>0)
  {
   while ($row = $stmt->fetch(PDO::FETCH_LAZY)) {
      ?>
      <tr>
        <td><?php echo $row['id'];?></td>
          <td><?php echo $row['level'];?></td>
          <td><?php echo $row['username'];?></td>
          <td><?php echo $row['name'];?></td>
          <td><?php echo $row['email'];?></td>
          <td><?php echo $row['password'];?></td>
          <td style="text-align: center;">
          <a href="admin-info-akun-biodata.php?id=<?php echo $row['id'] ?>"><button class="btn xs-btn btn-primary"><span class="glyphicon glyphicon-search"></span></button></a>
          <a onclick="return reset()" href="admin-info-akun-reset.php?id=<?php echo $row['id'] ?>"><button class="btn xs-btn btn-warning"><span class="glyphicon glyphicon-cog"></span></button></a>
          <a onclick="return konfirmasi()" href="admin-info-akun-hapus.php?id=<?php echo $row['id'] ?>"><button class="btn xs-btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a>
        </td>
        </tr>
      <?php
   }
  }
  else
  {
   ?>
            <tr>
            <td>Nothing here...</td>
            </tr>
            <?php
  }
  
 }
 
 public function paging($query,$records_per_page)
 {
  $starting_position=0;
  if(isset($_GET["page_no"]))
  {
   $starting_position=($_GET["page_no"]-1)*$records_per_page;
  }
  $query2=$query." limit $starting_position,$records_per_page";
  return $query2;
 }
 
 public function paginglink($query,$records_per_page)
 {
  
  $self = $_SERVER['PHP_SELF'];
  
  $stmt = $this->db->prepare($query);
  $stmt->execute();
  
  $total_no_of_records = $stmt->rowCount();
  
  if($total_no_of_records > 0)
  {
   ?><ul class="pagination"><?php
   $total_no_of_pages=ceil($total_no_of_records/$records_per_page);
   $current_page=1;
   if(isset($_GET["page_no"]))
   {
    $current_page=$_GET["page_no"];
   }
   if($current_page!=1)
   {
    $previous =$current_page-1;
    echo "<li><a href='".$self."?page_no=1'>First</a></li>";
    echo "<li><a href='".$self."?page_no=".$previous."'>Previous</a></li>";
   }
   for($i=1;$i<=$total_no_of_pages;$i++)
   {
    if($i==$current_page)
    {
     echo "<li><a href='".$self."?page_no=".$i."' style='color:red;'>".$i."</a></li>";
    }
    else
    {
     echo "<li><a href='".$self."?page_no=".$i."'>".$i."</a></li>";
    }
   }
   if($current_page!=$total_no_of_pages)
   {
    $next=$current_page+1;
    echo "<li><a href='".$self."?page_no=".$next."'>Next</a></li>";
    echo "<li><a href='".$self."?page_no=".$total_no_of_pages."'>Last</a></li>";
   }
   ?></ul><?php
  }
 }

 /* paging */
 
}
?>