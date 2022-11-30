<?php
session_start();
//local
$pdo = new PDO('mysql:dbname=rapidnote;host=localhost', 'root', '');

function getConnexion()
{
    return new PDO(
        'mysql:host=localhost; dbname=rapidnote; charset=UTF8',
        'root',
        ''
    );
}

//production
/*
function getConnexion(){
    return new PDO("mysql:host=localhost; dbname=adra7128_frankobizness; charset=UTF8", "adra7128_adra7128", "g@RT@iOQ0Amn");
}

$pdo = new PDO('mysql:dbname=adra7128_sezam;host=localhost', 'adra7128_adra7128', 'g@RT@iOQ0Amn');
*/
$error = ['error' => false];
$action = '';

if (isset($_GET['action'])) {
    $action = $_GET['action'];
}

function str_random($length)
{
    $alphabet =
        '0123456789qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM';

    return substr(str_shuffle(str_repeat($alphabet, $length)), 0, $length);
}

// obtenir le titre de la page
function PageName()
{
    return substr(
        $_SERVER['SCRIPT_NAME'],
        strrpos($_SERVER['SCRIPT_NAME'], '/') + 1
    );
}

$current_page = PageName();

//controle des input
function verifyInput($inputContent)
{
    $inputContent = htmlspecialchars($inputContent);

    $inputContent = trim($inputContent);

    return $inputContent;
}
/*
    function getAllCars(){
        $pdo = getConnexion();
        $req = $pdo->prepare("SELECT *  FROM cars
        WHERE status = ? ORDER BY id DESC");
        $req->execute(array('Disponible'));
        $datas = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();
        sendJSON($datas);
        return $datas;
    }
*/

/*
function newCar(){
    $pdo = getConnexion();
    if (!empty ($_POST)){
        $errors = array ();
            if (empty ($_POST['name'])) {
                $errors['name'] = 'Nom non valide';
            }

            if (empty ($_POST['price'])) {
                $errors['price'] = 'Veuillez definir le prix';
            }

            if (empty ($_POST['color'])) {
                $errors['color'] = 'Veuillez définir la couleur';
            }



            if (empty ($_POST['brand_name'])) {
                $errors['brand_name'] = "Veuillez définir la marque";
            }

            if (empty ($_POST['category'])) {
                $errors['category'] = "Veuillez definir l'action";
            }

            if (empty ($_POST['year'])) {
                $errors['year'] = "Veuillez definir l'année";
            }

            if (empty ($_POST['rate'])) {
                $errors['year'] = "Veuillez definir l'état";
            }

            $_SESSION['car'] = [
                "name" => verifyInput($_POST['name']),
                ];


            if(!empty($errors)){ ?>
<ul>
    <?php foreach ($errors as $error): ?>
    <li style="color: red"><?= $error; ?></li>
    <?php endforeach;?>
</ul>
<?php }


            if(empty($errors)){
                          $name = verifyInput($_POST['name']);
                          $price = verifyInput($_POST['price']);
                          $description = verifyInput($_POST['description']);
                          $year = verifyInput($_POST['year']);
                          $category = verifyInput($_POST['category']);
                          $color = verifyInput($_POST['color']);
                          $brand_name = verifyInput($_POST['brand_name']);
                          $rate = verifyInput($_POST['rate']);
                          $status = 'Disponible';

                           //On insere dans la table cars
                    $sql = $pdo->prepare('INSERT INTO cars SET  date_of_insertion = NOW(),
                         name = ?, price = ?, description = ?, year = ?, category = ?, color = ?,
                         brand_name = ?, status = ?, rate = ?');

                    $sql->execute(array($name, $price, $description, $year, $category,
                $color, $brand_name, $status, $rate ));

                //on insere l'image
                $car_id = $pdo->lastInsertId();
                $pic1 = time() . '_' .$_FILES['pic1'] ['name'];
                $pic2 = time() . '_' .$_FILES['pic2'] ['name'];
                $pic3 = time() . '_' .$_FILES['pic3'] ['name'];
                $pic4 = time() . '_' .$_FILES['pic4'] ['name'];


                $target = '../public/img/' .$pic1;

                if( move_uploaded_file($_FILES['pic1']['tmp_name'], $target)){

                    $req = $pdo -> prepare ("UPDATE cars SET
                    pic1 = ? WHERE id = ? ");

                   $req -> execute([$pic1, $car_id]);
                }

                if( move_uploaded_file($_FILES['pic2']['tmp_name'], $target)){

                    $req = $pdo -> prepare ("UPDATE cars SET
                    pic2 = ? WHERE id = ? ");

                   $req -> execute([$pic2, $car_id]);
                }

                if( move_uploaded_file($_FILES['pic3']['tmp_name'], $target)){

                    $req = $pdo -> prepare ("UPDATE cars SET
                    pic3 = ? WHERE id = ? ");

                   $req -> execute([$pic3, $car_id]);
                }

                if( move_uploaded_file($_FILES['pic4']['tmp_name'], $target)){

                    $req = $pdo -> prepare ("UPDATE cars SET
                    pic4 = ? WHERE id = ? ");

                   $req -> execute([$pic4, $car_id]);
                }
               ?>
<script>
alert('Nouveau vehicule ajouté avec succes');
window.location.replace('./index.php?action=dashboard');
</script>
<?php
    }
    }
}
*/

function login()
{
    if (!empty($_POST)) {
        $pdo = getConnexion();

        $errors = [];

        if (
            isset($_POST['username'], $_POST['pass']) &&
            !empty($_POST['username'] && !empty($_POST['pass']))
        ) {
            $sql = 'SELECT * FROM `users` WHERE `username` = ?';

            $query = $pdo->prepare($sql);

            $query->execute([verifyInput($_POST['username'])]);

            $user = $query->fetch();

            if (!$user) {
                $errors['username'] = 'Utilisateur/mot de passe incorrect';
            }

            if (!password_verify($_POST['pass'], $user['pass'])) {
                $errors['pass'] = 'Utilisateur/mot de passe incorrect';
            }

            if (!empty($errors)) {
                $_SESSION['login'] = [
                    'username' => verifyInput($_POST['username']),
                    'pass' => verifyInput($_POST['pass']),
                ]; ?>

<script>
alert('Please check your login details');
window.location.replace('../index.php?action=loginPage')
</script>
<?php
            }

            if (empty($errors)) {
                $_SESSION['user'] = [
                    'username' => $user['username'],
                    'role' => $user['admin'],
                    'first_name' => $user['first_name'],
                    'last_name' => $user['last_name'],
                    'id' => $user['id'],
                ];
                header('Location: ../index.php?action=dashboard');
            }
        }
    }
}

function logout()
{
    unset($_SESSION['user']);

    header('Location: ../index.php');
}

if ($action == 'login') {
    login();
}

if ($action == 'logout') {
    logout();
}

function sendJSON($infos)
{
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');
    echo json_encode($infos, JSON_UNESCAPED_UNICODE);
}