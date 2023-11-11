<?php  require_once 'template/header.php' ;?>


<div class="  container">
  <div class=" row">
        <div class=" col-12">
            <div class=" border rounded-4 p-5 m-5">
              <h1>Update Lists</h1>
            <?php 
            $id=$_GET['id'];
            $sql="SELECT * FROM testing WHERE id=$id";
            $query=mysqli_query($con,$sql);
            $data=mysqli_fetch_assoc($query);
            // dd($data);
            ?>
              <form action="" method="post">
                <div class=" mb-3">
                  <label for="" class=" form-label">Name</label>
                  <input value='<?=$data['sname']?>' class=" form-control" type="text" name="name" required>
                </div>
                <div>
                  <label for="" class=" form-label">Money</label>
                  <input value='<?=$data['money']?>' class=" form-control" type="number" name="money" required>
                </div>
                <button class=" btn btn-dark mt-5">Update</button>
              </form>

            </div>
        </div>
  </div>
</div>


<?php  require_once 'template/footer.php' ;?>