 <div class="col-5">
      <h1 class="text-dark">
        <?php
        if(isset($_POST['result'])&& isset($_POST['students'])){
        	$students =$_POST['students'];
        	$count= count($students);
        	for ($i=0; $i < $count; $i++){
        		echo $students[$i]."<br>";
        	}
        } else{
        	echo " You need to select the minimum one";
        }

        ?>
      </h1>
    </div>