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

function getMyTransactions($user_id)
{
    $pdo = getConnexion();
    $req = $pdo->prepare('SELECT * FROM
        transactions WHERE seller_id = ?
        OR buyer_id = ?');
    $req->execute([$user_id, $user_id]);
    $datas = $req->fetchAll();
    $req->closeCursor();
    sendJSON($datas);
}

function getRates()
{
    $pdo = getConnexion();
    $req = $pdo->prepare('SELECT * FROM
        rates');
    $req->execute();
    $datas = $req->fetchAll();
    $req->closeCursor();
    sendJSON($datas);
}

function setAccount()
{
    $pdo = getConnexion();
    if (!empty($_POST)) {
        $errors = [];

        //mise a jour du compte
        if (empty($_POST['username'])) {
            $errors['username'] = 'Please check the username';
        } else {
            $req = $pdo->prepare('SELECT id FROM users WHERE username = ?');
            $req->execute([$_POST['username']]);
            $user = $req->fetch();
            if ($user) {
                $errors['username'] = 'Username unavailable';
            }
        }

        if (empty($_POST['password1'])) {
            $errors['password1'] = 'Please check the password';
        }

        if ($_POST['password2'] != $_POST['password1']) {
            $errors['password2'] = 'Please check the passwords';
        }

        if (!empty($errors)) { ?>
errors: <br>
<ul>
    <?php foreach ($errors as $error): ?>
    <li style="color: red"><?= $error ?></li>
    <?php endforeach; ?>
</ul>
<?php }

        if (empty($errors)) {

            $user_id = $_SESSION['registration']['id'];
            //mise à jour du compte adhérent

            $req = $pdo->prepare("UPDATE users SET  username= ?,
            pass = ?, account_status ='active'
            WHERE id = ?");

            $username = verifyInput($_POST['username']);
            $password = password_hash($_POST['password1'], PASSWORD_BCRYPT);

            $req->execute([$username, $password, $user_id]);

            $_SESSION['user'] = [
                'id' => $user_id,
                'role' => $_SESSION['register']['role'],
                'username' => $username,
            ];
            ?>

<script>
alert("Done, you will be redirected to your dashboard");
window.location.replace("http://127.0.0.1:8080/dashboard");
</script><?php
        }
    }
}

function getTransactions()
{
    $pdo = getConnexion();
    $req = $pdo->prepare('SELECT * FROM
        transactions ORDER BY id DESC LIMIT 50');
    $req->execute();
    $datas = $req->fetchAll();
    $req->closeCursor();
    sendJSON($datas);
}

function getPendingTransactions()
{
    $pdo = getConnexion();
    $req = $pdo->prepare('SELECT * FROM
        transactions WHERE status =     "En attente de validation"');
    $req->execute();
    $datas = $req->fetchAll();
    $req->closeCursor();
    sendJSON($datas);
}

function getTotalTransactionsValue()
{
    $pdo = getConnexion();
    $req = $pdo->prepare('SELECT * FROM
        payments');
    $req->execute();
    $tab = [];
    $value = 0;
    while ($datas = $req->fetch()) {
        $value += $datas['amount'];
    }

    sendJSON($value);
}

function editRate()
{
    $pdo = getConnexion();
    if (!empty($_POST)) {
        $errors = [];

        $id = verifyInput($_POST['id']);
        $req = $pdo->prepare('SELECT * FROM rates
                WHERE id = ?');
        $req->execute([$id]);

        if (!empty($_POST['selling_price'])) {
            $selling_price = verifyInput($_POST['selling_price']);
            $sql = $pdo->prepare('UPDATE rates SET selling_rate = ?
                    WHERE id = ?');
            $sql->execute([$selling_price, $id]);
        }

        if (!empty($_POST['buying_price'])) {
            $buying_price = verifyInput($_POST['buying_price']);
            $sql = $pdo->prepare('UPDATE rates SET buying_rate = ?
                    WHERE id = ?');
            $sql->execute([$buying_price, $id]);
        }
    }
}

function contact()
{
    $pdo = getConnexion();
    if (!empty($_POST)) {

        $errors = [];

        if (empty($_POST['first_name'])) {
            $errors['first_name'] = 'Prenom non valide';
        }

        if (empty($_POST['last_name'])) {
            $errors['last_name'] = 'Nom non valide';
        }

        if (
            empty($_POST['email']) ||
            !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)
        ) {
            $errors['email'] = 'Email non valide';
        }

        if (empty($_POST['subject'])) {
            $errors['subject'] = "Veuillez sélectionner l'objet du message";
        }

        if (empty($_POST['message'])) {
            $errors['message'] = 'Veuillez entrer un message';
        }

        if (empty($errors)) {
            $email = verifyInput($_POST['email']);
            $first_name = verifyInput($_POST['first_name']);
            $last_name = $_POST['last_name'];
            $subject = $_POST['subject'];

            if ($subject = 'Support technique') {
                $receiver = 'adekambirachad@gmail.com';
                $message = 'Email expediteur: ' . $email . ' <br>';
                $message .=
                    'Nom expediteur: ' .
                    $first_name .
                    ' ' .
                    $last_name .
                    ' <br>';
                $message .= verifyInput($_POST['message']);

                //  sendmail($subject, $message, $receiver);
            } else {
                $receiver = 'xnetwork32@gmail.com';
                $message = 'Email expediteur: ' . $email . ' <br>';
                $message .=
                    'Nom expediteur: ' .
                    $first_name .
                    ' ' .
                    $last_name .
                    ' <br>';
                $message .= verifyInput($_POST['message']);

                //    sendmail($subject, $message, $receiver);
            }
        }
        ?>
<script>
alert("Thanks for your message, a reply will be sent to you very soon");
//window.location.replace("../index.php");
</script>
<?php
    }
}

function register()
{
    $pdo = getConnexion();
    if (!empty($_POST)) {

        $errors = [];

        if (empty($_POST['first_name'])) {
            $errors['first_name'] = 'Please, check the first     name';
        }

        if (empty($_POST['last_name'])) {
            $errors['last_name'] = 'Please, check the last name';
        }

        if (
            empty($_POST['email']) ||
            !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)
        ) {
            $errors['email'] = 'Please, check the email';
        }

        if (empty($_POST['phone_number'])) {
            $errors['phone_number'] = 'Please, check the phone number';
        }

        if (!empty($errors)) { ?>

<?php include 'errors.php'; ?>
<?php }
        if (empty($errors)) {
            $email = verifyInput($_POST['email']);
            $first_name = verifyInput($_POST['first_name']);
            $last_name = $_POST['last_name'];
            $phone_number = $_POST['phone_number'];
            $token = str_random(20);
            $req = $pdo->prepare(
                'INSERT INTO users SET
                        date_of_insertion = NOW(),
                         first_name = ?, last_name = ?,
                        email = ?, phone_number = ?,
                        account_status = "Pending", token = ?,
                        role = "user" '
            );
            $req->execute([
                $first_name,
                $last_name,
                $email,
                $phone_number,
                $token,
            ]);
            $_SESSION['resgistration'] = [
                'id' => $pdo->lastInsertId(),
            ];
        }
        ?>
<script>
alert("Registration completed, please set up your account details");
window.location.replace("http://127.0.0.1:8080/setAccount");
</script>
<?php
    }
}
function getUserById($user_id)
{
    $pdo = getConnexion();
    $stmt = $pdo->prepare(
        "SELECT *
        FROM users
        WHERE id = ?"
    );
    $stmt->execute([$user_id]);
    $datas = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    sendJSON($datas);
}
function getHistoricalOfUser($user_id)
{
    $pdo = getConnexion();
    $stmt = $pdo->prepare("SELECT *
        FROM transactions
        WHERE seller_id = ?
        OR buyer_id = ?");
    $stmt->execute([$user_id, $user_id]);
    $datas = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    sendJSON($datas);
}
function getMyBalance($user_id)
{
    $pdo = getConnexion();
    $stmt = $pdo->prepare("SELECT balance
        FROM users
        WHERE id = ?");
    $stmt->execute([$user_id]);
    $datas = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    sendJSON($datas);
}
function getUsers()
{
    $pdo = getConnexion();
    $stmt = $pdo->prepare("SELECT * FROM
      users WHERE account_status = 'actif' ORDER BY
     id ASC");
    $stmt->execute();
    $datas = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    sendJSON($datas);
}
function getPayments()
{
    $pdo = getConnexion();
    $stmt = $pdo->prepare("SELECT * FROM
      payments ORDER BY id DESC");
    $stmt->execute();
    $datas = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    sendJSON($datas);
}
function getUserName()
{
    $pdo = getConnexion();
    $stmt = $pdo->prepare("SELECT username FROM
      users WHERE id = ?");
    $stmt->execute([$_SESSION['user']['id']]);
    $datas = $stmt->fetch(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    $username = $datas['username'];
    sendJSON($username);
}
function getRateById($id)
{
    $pdo = getConnexion();
    $req = $pdo->prepare('SELECT * FROM
        rates WHERE id = ?');
    $req->execute([$id]);
    $datas = $req->fetch(PDO::FETCH_ASSOC);
    $req->closeCursor();
    sendJSON($datas);
}
function getBuyingRate($id)
{
    $pdo = getConnexion();
    $req = $pdo->prepare('SELECT * FROM
        rates WHERE id = ?');
    $req->execute([$id]);
    while ($datas = $req->fetch()) {
        $buying_price = $datas['buying_price'];
    }
    $req->closeCursor();
    sendJSON($buying_price);
}
function settings()
{
    $pdo = getConnexion();
    echo 'olk';
    if (!empty($_POST)) {

        $errors = [];
        echo 'ok';
        if (empty($_POST['username'])) {
            $username = verifyInput($_POST['username']);
            $req = $pdo->prepare('SELECT id FROM users WHERE username = ?');
            $req->execute([$username]);
            $email = $req->fetch();
            $email->closeCursor();
            if ($email) {
                $errors['username'] =
                    'Username alreay registered, please choose a new one';
            } else {
                $req = $pdo->prepare(
                    'UPDATE users SET username = ? WHERE id = ?'
                );
                $req->execute([$_SESSION['user']['id']]);
            }
        }
        ?>
<script>
//   alert('Settings updated successfully');
//   window.location.replace('http://127.0.0.1:8080/dashboard')
</script>
<?php
    }
} /* actions*/
if ($action == 'login') {
    login();
}
if ($action == 'editRate') {
    editRate();
}
if ($action == 'register') {
    register();
}
if ($action == 'setAccount') {
    setAccount();
}
if ($action == 'settings') {
    settings();
}
if ($action == 'logout') {
    unset($_SESSION['user']);
    header('Location: ../');
}
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