<?php
// Enkripsi Vigenere
function vigenere_encrypt($plaintext, $key) {
    $ciphertext = "";
    $key_length = strlen($key);
    for ($i = 0; $i < strlen($plaintext); $i++) {
        $c = ord($plaintext[$i]) + ord($key[$i % $key_length]) - 2 * ord('A');
        $ciphertext .= chr($c % 26 + ord('A'));
    }
    return $ciphertext;
}

$plaintext = "Anisyah Oktariani Supriady";
$key = "SHOLATLAHSEBELUMDISHOLAT";
$ciphertext = vigenere_encrypt($plaintext, $key);
echo "Enkripsi Vigenere:<br>";
echo "Plaintext: " . $plaintext . "<br>";
echo "Ciphertext: " . $ciphertext . "<br><br>";

// Encoding Base64
$base64_encoded = base64_encode($plaintext);
echo "Encoding Base64:<br>";
echo "Plaintext: " . $plaintext . "<br>";
echo "Encoded: " . $base64_encoded . "<br><br>";

// Enkripsi ROT13
$rot13_encoded = str_rot13($plaintext);
echo "Enkripsi ROT13:<br>";
echo "Plaintext: " . $plaintext . "<br>";
echo "Encoded: " . $rot13_encoded . "<br>";
?>