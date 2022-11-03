<?php
$i = -1;
$file = "D:\ospanel\domains\php\pswrd.txt";
$strings =  file_get_contents($file);
$passwords = fopen($file,"r");
$read = fread($passwords, filesize($file));
$countsl = substr_count($read, ' ');
$lines = explode(" ", $read);

/*while($i<=3):
    $i++;
    $hash = '<br>' . $lines[$i];
    $md5h = md5($hash);
    echo $read . ' | ' . $hash . ' < Hash |<br>' . ' md5 | ' . $md5h . '<br>';
endwhile;*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body{
            background-color: black;
        }
        *{
            color: white;
            text-align: center;
        }
        input{
            background-color: black;
            border-radius: 20px;
            border-color: whitesmoke;
            border: 10px;
            margin: 10px;
        }
        footer{
            background-color: #181818;
        }
        .ads-left{
            background-image: url("screen-0.jpg");
            width: 500px;
            height: 100px;
            text-align: left;
        }
        .ads{
            background-image: url("screen-0.jpg");
            width: 500px;
            height: 100px;
            text-align: center;
        }
        form{
            background-color: #181818;
            text-align: 30px;
            border-color: white;
            border-bottom: 10vh;
            padding: 30px;
        }
        button{
            background-color: black;
            border-radius: 20px;
            border-color: whitesmoke;
            border: 10px;
            margin: 10px;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hash List || count: <?echo $countsl?></title>
</head>
<body>
    <h2><strong>HESHED PASSWORDS</strong></h2>
    
    <form method="post" id="formencrypt">
    <a href="#footer">Go to <strong>FOOTER</strong></a> <p></p>
      Your Text to encrypt
      <input type="text" name="texthash"> <button name="button" type="submit" name="submit">Click to start</button>
      <p><strong>___________________________________________________________________________________________________________________________________________________________________________</strong></p>
        <?php
        
        if(empty($_POST['texthash'])){
            echo null;
            unset($_POST); 
        }else{
            
            $posttext = htmlspecialchars($_POST['texthash']);
            $requesttext = htmlspecialchars($_REQUEST['texthash']);
            echo '<table><ul><strong>MD5 : ' . md5($posttext) . '<br>MD2 : ' . hash('md2', $posttext) . '<br>SHA-1 : ' . hash('sha1',$hash) . '<br>SHA-224 : ' . hash('sha224',$hash) . '<br>SHA256 : ' . hash('sha256',$hash) . '<br>Original text : ' . $posttext . '</strong></ul></table>';
            unset($_POST); 
        }



        
        ?>
    </form>




    <?php

            while($i<=$countsl -1):
                $i++;
                $hash = $lines[$i];
                $md5h = md5($hash);
                $md2h = hash('md2', $hash);
                $sha1 = hash('sha1',$hash);

                $sha224 = hash('sha224',$hash);
                $sha256 = hash('sha256',$hash);
                $md4h = hash('md4',$hash);
                echo '<p><strong>___________________________________________________________________________________________________________________________________________________________________________</strong></p>';
                echo $hash . ' < Password | ' . $md5h . ' < MD5 | ' . $md2h . ' < MD2 | '.$md4h.' < MD4 | <br>'.$sha1.' < SHA-1 | ' .  $sha224 . ' < SHA-224 | ' . $sha256 . ' < SHA-256 ' . ' <br>';
            endwhile;

            ?>
            
            <pre>

            </pre>
            <footer id="footer">
                Are you wanna add here new <strong> password? </strong>Send me this password in DS: <strong> VVK_What#4511</strong> or Mail: <strong><a href="mailto:shortmc.org@gmail.com">shortmc.org@gmail.com</a></strong><br>
                Support this project: Visa-Card: 4320370060262344 | QIWI: <a href="https://qiwi.com/n/VVKWHAT22" target="_blank">qiwi.com/n/VVKWHAT22</a>
            </footer>
</body>
</html>