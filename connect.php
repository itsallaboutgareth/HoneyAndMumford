<?

$inputuser = $_POST['user'];
$inputpass = $_POST['pass'];

if ($input user == "Hirsh" && $inputpass == "123")
{

echo "Welcome";

header('Location: home.php')

} else {

  echo "⛔️";

  header('Location: fail.html')

}

?>
