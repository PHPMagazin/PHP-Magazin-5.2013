function password_verify_rehash($password, $hash, $algorithmus, $options-array) {  // $algorithmus = aktuelle Algorithmus-Konstante  // $options-array = aktuelles Optionen-Array  if (!password_verify($password, $hash)) {    // Das Passwort ist falsch!    return false;  }  // Das Passwort ist richtig.  if (password_needs_rehash($hash, $algorithmus, $options-array)) {    // das Passwort muss neu gehasht werden    $hash = password_hash($password, $algorithmus, $options-array);    // jetzt muss der neue Hashwert noch gespeichert werden    speichere_in_Datenbank($hash);  }  return true;}