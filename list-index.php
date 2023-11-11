<?php  require_once 'template/header.php' ;?>


<div class="  container">
  <div class=" row">
        <div class=" col-12">
            <div class=" border rounded-4 p-5 m-5">
              <h1> Lists</h1>
              <?php 
              $sql="SELECT * FROM testing";
              if (isset($_GET['q'])) {
                $q=$_GET['q'];
                $sql.=" WHERE sname LIKE '%$q%'";
              }
              $query=mysqli_query($con,$sql);
              // dd(mysqli_fetch_assoc($query));
              $sumSql="SELECT SUM(money) AS Total_Dept FROM testing";
              $sumSql=mysqli_query($con,$sumSql);
       
          
              ?>
              <div class=" my-2 row justify-content-between align-items-center">
               <div class="col-4">
               Total Lists:<?= $query->num_rows?>
               </div>
               <div class="col-8">
                <form action="" method="get">
                  <div class="input-group">
                <input type="text" name="q" id="" class="   form-control  rounded-4 mx-2">
                <button class=" btn btn-dark  rounded-4">Search</button>
                  </div>
                </form>
               </div>
              </div>
              <table class=" table  table-hover">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th class=" text-end">Money</th>
                    <th>Created at</th>
                    <th>Action</th>
                   
                  </tr>
                </thead>
                <tbody>
                  <?php while($rows=mysqli_fetch_assoc($query)) :?>
                      <tr class=" align-middle">
                        <td><?=$rows["id"]?></td>
                        <td><?=$rows["sname"]?></td>
                        <td class=" text-end"><?=$rows["money"]?></td>
                      
                        <td>
                          <p class=" mb-0 small">
                          <i class=" bi bi-calendar"> </i>  
                          <?=ShowDatTimeFormatted($rows["created_at"])?></p>
                          <p class=" mb-0  small">
                          <i class=" bi bi-clock"> </i>  
                          <?=ShowDatTimeFormatted($rows["created_at"],'h:i:s')?></p>
                        </td>
                        <td>
                          <a href="./list-update.php?id=<?=$rows["id"]?>" class=" btn btn-dark">Update</a>
                          <form action="./list-delete.php" method="post" class="   d-inline">
                            <input type="hidden" value="<?=$rows["id"]?>" name="id">
                          <button onclick="return confirm('Do you really want to delete this list?')" href="./list-delete.php" class=" btn btn-danger">Delete</button>
                          </form>
                        
                        </td>
                      </tr>

                    <?php endwhile;?>
                </tbody>
                <tfoot>
                  <tr>
                    <td colspan="2">Total</td>
                    <td colspan="" class=" text-end"><?=mysqli_fetch_assoc($sumSql)['Total_Dept']?></td>
                    <td colspan="2"></td>
                  </tr>
                </tfoot>
              </table>

            </div>
        </div>
  </div>
</div>


<?php  require_once 'template/footer.php' ;?>