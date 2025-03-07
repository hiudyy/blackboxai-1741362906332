<?php
require 'firebase_config.php';
require 'vendor/autoload.php'; // Include Firebase PHP SDK

use Kreait\Firebase\Factory;
use Kreait\Firebase\Auth;

$factory = (new Factory)->withServiceAccount('path/to/your/firebase_credentials.json');
$auth = $factory->createAuth();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $referralCode = $_POST['referralCode'] ?? null;

    try {
        $user = $auth->createUserWithEmailAndPassword($email, $password);
        // Handle referral code logic here
        // Save user data to Firebase Database if needed
        echo "Usuário cadastrado com sucesso!";
    } catch (Exception $e) {
        echo "Erro ao cadastrar usuário: " . $e->getMessage();
    }
}
?>
