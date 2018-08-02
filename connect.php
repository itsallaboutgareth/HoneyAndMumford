<?

$inputuser = $_POST['user'];
$inputpass = $_POST['pass'];

if ($inputuser == "Hirsh" && $inputpass == "123")
{

echo "Welcome";

    header('Location: index.php');

} else {

  echo "⛔️";

    header('Location: fail.html');

}

?>
