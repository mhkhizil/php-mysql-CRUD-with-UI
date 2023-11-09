<?php  require_once 'template/header.php' ;?>


<div class="  container">
  <div class=" row">
        <div class=" col-12">
            <div class=" border rounded-4 p-5 m-5">
              <h1>Create Lists</h1>
              <?php 
              if ($_SERVER["REQUEST_METHOD"]==="POST") {
                $name=$_POST["name"];
                $money=$_POST["money"];
              }
              ?>
              <form>
                <div class=" mb-3">
                  <label for="" class=" form-label">Name</label>
                  <input class=" form-control" type="text" name="name" required>
                </div>
                <div>
                  <label for="" class=" form-label">Money</label>
                  <input class=" form-control" type="number" name="money" required>
                </div>
                <button class=" btn btn-dark mt-5">Submit</button>
              </form>

            </div>
        </div>
  </div>
</div>


<?php  require_once 'template/footer.php' ;?>