<?php include './inc/header.php'; ?>
<?php include './inc/function.php'; ?>
   
    <div class="calculation-div">
        <form action="" method="post">
            Number one: <input type="number" name="number1"> <br>
            
            Number two: <input type="number" name="number2" style="margin-top:2px;"> <br>

            <button type="submit" name="calculate">Calculate</button>
        </form>
    </div>
    <?php 
        if(isset($_POST['calculate'])){
            $number1 = $_POST['number1'];
            $number2 = $_POST['number2'];

            if (empty($number1) || empty($number2)) {
               echo "<span style='color:#FF0000'>Field must not be empty</span>";
            }else{
                echo "Number 1 = " . $number1 ."<br/>";
                echo "Number 2 = " . $number2 ."<br/>";

                $newCal = new Calculate;
                $newCal->add($number1, $number2); 
                $newCal->minus($number1, $number2); 
            }
        }
    ?>

<?php include './inc/footer.php';  ?> 