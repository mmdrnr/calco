        <?php 

            if (isset($_POST['submit'])) {
                $result1 = $_POST['n1'];
                $result2 = $_POST['n2'];
                $operator = $_POST['operator'];
                switch ($operator) {
                    case 'انتخاب عملگر':
                        echo "لطفا یک عملگر را انتخاب کنید!";
                        break;
                    case 'جمع':
                        echo $result1 + $result2;
                        break;
                    case 'کم':
                        echo $result1 - $result2;
                        break;
                    case 'ضرب':
                        echo $result1 * $result2;
                        break;
                    case 'تقسیم':
                        echo $result1 / $result2;
                        break;
                    case 'توان':
                        echo $result1 ** $result2;
                        break;
                }
            }
         ?>        
    </body>
    </html>