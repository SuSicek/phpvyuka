<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php

    $result = "";
    class calculator
    {
        var $a;
        var $b;

        function checkoperation($operator)
        {
            switch($operator)
            {
                case '+':
                return $this->a + $this->b;
                break;

                case '-':
                return $this->a - $this->b;
                break;

                case '*':
                return $this->a * $this->b;
                break;

                case '/':
                return $this->a / $this->b;
                break;

                default:
                return "Sorry No command found";
            }   
        }
        function getresult($a, $b, $c)
        {
            $this->a = $a;
            $this->b = $b;
            return $this->checkoperation($c);
        }
    }

    checkoperation($operator);
    $cal = new calculator();
    if(isset($_POST['submit']))
    {   
        $result = $cal->getresult($_POST['n1'],$_POST['n2'],$_POST['op']);
    }  

    echo $result;
    ?>

  </body>
</html>