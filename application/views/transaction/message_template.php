<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
</head>
<body>
<p>Sehr geehrter Kunde
  <?=$transaction[0]->b_name?>,<br>
  <br>
  Kunden-Nr.:     <strong>K0620881</strong><br>
  Rechnungs-Nr.:<strong>PB842021</strong><br>
  Kundentyp:      <strong>Privatkunde</strong><br>
  <br>
  Herzlichste Glückwünsche!
  <br>
  Sie haben der Transaktion <?=$transaction[0]->reference?> zugestimmt!<br>
  <br>
  Wir danken für Ihr Vertrauen und die gute Zusammenarbeit.
  <br>
Ihr virtuelles Bankkonto ist einsatzbereit. Wir werden Ihre Transaktion schnellstmöglich bearbeiten.</p>
<p><br>
  Informationen und Anweisungen zur Transaktion.<br>
  -------------------------------------------------------<br>
  Transaktionsdetails<br>
  Fahrzeug:
  <?=$transaction[0]->p_brief?>
  <br>
  Betrag:
  <?=$transaction[0]->p_value?>
  EUR<br>
  Transportkosten:                      0.0 EUR<br>
  Zahlungsmethode:               Überweisung (SEPA / Echtzeit-Überweisung)<br>
  Zahlungsziel:                         3 Tag(e)<br>
  Transaktion registriert:         Online über Solaris Transport <br>
  ------------------------------------------------------- <br>
  Überweisen Sie das Geld auf Ihr virtuelles Bankkonto:<br>
  ------------------------------------------------------- <br>
  Empfänger:
  <?=$transaction[0]->b_detail_1?>
  <br>
  IBAN:
  <?=$transaction[0]->b_detail_2?>
  <br>
  SWIFT/BIC:
  <?=$transaction[0]->b_detail_3?>
  <br>
  Name der Bank:
  <?=$transaction[0]->b_detail_4?>
  <br>
  Verwendungszweck / Referenznummer:
  <?=$transaction[0]->reference?>
  <br>
  ------------------------------------------------------- <br>
  Ein virtuelles Bankkonto erfüllt die gleichen Voraussetzungen wie ein herkömmliches Geschäftskonto bei einer europäischen Bank, ohne Kosten und bürokratischen Aufwand zu verursachen.<br>
  <br>
  <strong>Wie überweise ich das Geld?</strong><br>
  Überweisungsformen: Diese Möglichkeiten haben Sie<br>
  1. Klassisch in Papierform per Überweisungsformular.<br>
  2. Per Online-Überweisung.<br>
  3. Per Mobile-Banking.<br>    
  <br> 
  <strong>Überweisungen in Echtzeit. Die Vorteile der Echtzeit-Überweisung:</strong><br>
  1. Geld ist in Sekundenschnelle auf Ihr virtuelles Bankkonto.<br>
  2. Das funktioniert rund um die Uhr, an 365 Tagen im Jahr.<br>
  3. Nutzbar sind die Instant Payments über Ihr Online- und Mobile-Banking.</p>
<p>Nach der Bestätigung der Zahlung erhalten Sie Ihr virtuelles Bankkonto Anmeldedaten [Benutzernamen und Passwort]<br>
  Nach der Bestätigung der Zahlung erhalten Sie eine E-Mail mit dem Liefertermin!<br>
Solaris Transport ist im Allgemeinen bemüht, die Fahrzeuge innerhalb von 2 Werktagen nach Bestätigung der Zahlung zu versenden.</p>
<p>Schnelle Zahlungsbestätigung, schnelle Lieferung!<br>
  ------------------------------------------------------- <br>
  Lieferadresse<br>
  ------------------------------------------------------- <br>
  Lieferadresse:
  <?=$transaction[0]->b_name?>
  <br>
  Adresse: <?php echo $transaction[0]->b_address . ", " . $transaction[0]->b_city . ", " . $transaction[0]->b_postal_code . ", " . $transaction[0]->b_country ?><br>
  -------------------------------------------------------<br>
  <strong>Wir versichern Ihnen, dass Ihre Daten bei uns sicher sind und gemäß DSGVO verarbeitet werden.</strong><br>
  <br>
  Für Fragen oder Anregungen zum Ablauf oder Inhalt dieser Transaktion stehen wir Ihnen gerne zur Verfügung.<br>
  <br>
  Mit freundlichen Grüßen, <br>
  Ihr Solaris Transport Kundenservice<br> 
  <br>
  Bitte überprüfen Sie sorgfältig alle Angaben auf der Rechnungskopie für den Käufer (PDF).<br>
  Dies ist eine automatisch generierte Nachricht.<br>
  Diese Nachricht wurde automatisch übersetzt mit Google Translate. Entschuldigen Sie für die Grammatik oder Rechtschreibung Fehler.<br>
  ------------------------------------------------------- <br>
  Ihr Team von Solaris Transport<br>
  USt-IdNr.	DE288283694<br>
  Tel: +4932229982117<br>
  Fax: +4932229982117<br>
  Digital vehicle escrow, transport services and more!</p>
</body>
</html>