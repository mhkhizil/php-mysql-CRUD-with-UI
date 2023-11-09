<?php  require_once 'template/header.php' ;?>


<div class="  container">
  <div class=" row">
        <div class=" col-12">
            <div class=" border rounded-4 p-5 m-5">
              <h1> Lists</h1>
              <?php 
              $sql="SELECT * FROM testing";
              $query=mysqli_query($con,$sql);
              $sumSql="SELECT SUM(money) AS Total_Dept FROM testing";
              $sumSql=mysqli_query($con,$sumSql);
       
          
              ?>
              <div class=" my-2">
                Total:<?= $query->num_rows?>
              </div>
              <table class=" table  table-hover">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Money</th>
                    <th>Created at</th>
                  </tr>
                </thead>
                <tbody>
                  <?php while($rows=mysqli_fetch_assoc($query)) :?>
                      <tr class=" align-middle">
                        <td><?=$rows["id"]?></td>
                        <td><?=$rows["name"]?></td>
                        <td><?=$rows["money"]?></td>
                        <td>
                          <p class=" mb-0 small">
                          <i class=" bi bi-calendar"> </i>  
                          <?=ShowDatTimeFormatted($rows["created_at"])?></p>
                          <p class=" mb-0  small">
                          <i class=" bi bi-clock"> </i>  
                          <?=ShowDatTimeFormatted($rows["created_at"],'h:i:s')?></p>
                        </td>
                      </tr>

                    <?php endwhile;?>
                </tbody>
                <tfoot>
                  <tr>
                    <td colspan="2">Total</td>
                    <td colspan="2"><?=mysqli_fetch_assoc($sumSql)['Total_Dept']?></td>
                  </tr>
                </tfoot>
              </table>

            </div>
        </div>
  </div>
</div>


<?php  require_once 'template/footer.php' ;?>