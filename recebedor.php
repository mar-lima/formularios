<link rel="stylesheet" href="style.css">
<?php 
session_start();

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);

if($nome && $email) {
    $nome.'<br>';
    $email.'<br>';
    $idade;
} else {
    $_SESSION['Aviso!'] = 'Preencha corretamente!';

    header("Location: index.php");
    exit;
}
?>

<div class="recebe">
    <div>
        <th>
            Nome:
            <tr><?php echo $nome?></tr>  <br>     
        </th>
    </div>
    <div>
        <th>
            E-mail:
            <tr><?php echo $email?></tr> <br> 
        </th>
    </div>
    <div>
        <th>
            Idade:
            <tr><?php echo $idade?></tr> <br>  
        </th>
    </div>
    
</div>
