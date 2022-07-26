<style>
	@page {
		sheet-size: A3;
	}
.style1 {font-size: 12px}
.style2 {font-size: 12; }
</style>
<div style="width: 100%;">
	<div class="header">
		<div style="float: left; width: 50%; font-size: 18px; padding-top: 50px;">
			<strong>Ihre Rechnung</strong>
		</div>
		<div style="text-align: right; float: right; width: 50%;">
			<img src="<?php echo base_url(); ?>assets/img/logo.png" style="width: auto; height: 70px; margin-top: -40px;">
		</div>
	</div>

	<div class="content" style="clear: both;">
		<div class="detail-1-1">
			<div style="width: 35%; float: left; font-size: 12px; padding-top: 10px;">
				<p style="margin: 5px 0px;"><strong><?= $transaction[0]->b_name ?></strong></p>
				<p style="margin: 5px 0px;"><?= $transaction[0]->b_address ?></p>
				<p style="margin: 5px 0px;"><?= $transaction[0]->b_city ?></p>
				<p style="margin: 5px 0px;"><?= $transaction[0]->b_postal_code ?></p>
				<p style="margin: 5px 0px;"><?= $transaction[0]->b_country ?></p>
			</div>
			<div style="width: 60%; float: right;">
				<img src="<?php echo base_url() ?>assets/img/nicht.jpg" width="100%">
			</div>
			<div style="font-size: 14px; width: 100%; padding-top: 14px; clear: both;">
				<div class="detail-1-2" style="background-color: #f2f2f2;">
					<div style="font-size: 13px;">
						<p style="margin: 5px 0px;">Rechnungsdatum: <strong><?= $current_date ?></strong></p>
						<p style="margin: 5px 0px;">Kundennummer: <strong>K0620881</strong></p>
						<p style="margin: 5px 0px;">Zahlungsziel: <strong>3 Tag(e)</strong></p>
				  </div>
				</div>
			</div>
			<div style="font-size: 13px;">
				<p>Wir bedanken uns für die gute Zusammenarbeit und stellen Ihnen vereinbarungsgemäß folgende Lieferungen und Leistungen in Rechnung: </p>
			</div>
		</div>

		<div class="table" style="clear: both;">
			<table style="width: 100%; border-collapse: collapse;">
				<thead style="border-top: 1px solid black; border-bottom: 1px solid black;">
					<tr>
						<td style="width: 15%; text-align: center;">Lfd.Nr.</td>
						<td style="width: 50%;">Bezeichnung</td>
						<td style="width: 25%; text-align: center;">Brutto</td>
						<td style="width: 25%; text-align: center;">MwSt (%)</td>
					</tr>
				</thead>
				<tbody>
					<tr style="background-color: #c0c0c0;">
						<td style="text-align: center;">1</td>
						<td><?= $transaction[0]->p_description ?></td>
						<td style="text-align: center;"><?= $transaction[0]->p_value ?></td>
						<td style="text-align: center;">19</td>
					</tr>
					<tr>
						<td style="text-align: center;">2</td>
						<td>PKW TRANSPORT</td>
						<td style="text-align: center;">0,00</td>
						<td style="text-align: center;">19</td>
					</tr>
					<tr style="background-color: #c0c0c0;">
						<td style="background-color: white;"></td>
						<td><strong>Zwischensumme netto (19,00%)</strong></td>
						<td></td>
						<td style="text-align: center;"><?php echo round(($transaction[0]->p_value / 119 * 100), 2) ?> EUR</td>
					</tr>
					<tr>
						<td></td>
						<td><strong>+ Mehrwertsteuer (19,00%)</strong></td>
						<td></td>
						<td style="text-align: center;"><?php echo round(($transaction[0]->p_value / 119 * 19), 2) ?> EUR</td>
					</tr>
					<tr style="position: relative; background-color: #c0c0c0; border-bottom: 1px solid black;">
						<td style="background-color: white; border-bottom: none; border-bottom: 1px solid white;"></td>
						<td style="font-size: 16px;"><strong>Zu zahlender Betrag</strong></td>
						<td></td>
						<td style="position: absolute; right: 60px; font-size: 16px;"><strong><?= $transaction[0]->p_value ?> EUR</strong></td>
					</tr>
				</tbody>
			</table>
		</div>

		<div class="desc-1-1" style="font-size: 14px; margin-top: 20px;">
			<p class="style1">Sehr geehrter Kunde,</p>
			<p class="style1">vielen Dank für Ihren Transportauftrag!</p>
			<p class="style1">Vielen Dank, dass Sie unsere Allgemeinen Geschäftsbedingungen akzeptieren.</p>
			<p class="style1">&nbsp;</p>
			<p><span class="style1">		    Ein virtuelles Bankkonto erfüllt die gleichen Voraussetzungen wie ein herkömmliches Geschäftskonto bei einer europäischen Bank, ohne Kosten und bürokratischen Aufwand zu verursachen.<br />
		    Überweisen Sie das Geld bitte auf Ihr virtuelles Bankkonto.</span><br />
			</p>
<div style="margin: 35px 0;">
				<div>
					<p style="margin-top: 2px; margin-bottom: 2px;">Empfänger: <strong><?= $transaction[0]->b_detail_1 ?></strong></p>
				</div>
				<div>
					<p style="margin-top: 2px; margin-bottom: 2px;">IBAN: <strong><?= $transaction[0]->b_detail_2 ?></strong></p>
				</div>
				<div>
					<p style="margin-top: 2px; margin-bottom: 2px;">BIC/SWIFT: <strong><?= $transaction[0]->b_detail_3 ?></strong></p>
				</div>
				<div>
					<p style="margin-top: 2px; margin-bottom: 2px;">Referenznummer: <strong><?= $transaction[0]->reference ?></strong></p>
				</div>
			</div>
		</div>

		<div style="width: 100%;">
			<p class="style1">Überweisungen in Echtzeit. Die Vorteile der Echtzeit-Überweisung:<br />
			  1. Geld ist in Sekundenschnelle auf Ihr virtuelles Bankkonto.<br />
			  2. Das funktioniert rund um die Uhr, an 365 Tagen im Jahr.<br />
			  3. Nutzbar sind die Instant Payments über Ihr Online- und Mobile-Banking.</p>
			<p class="style1" style="margin-bottom: 40px">Nach der Bestätigung der Zahlung erhalten Sie Ihr virtuelles Bankkonto Anmeldedaten [Benutzernamen und Passwort]<br />
			  Nach der Bestätigung der Zahlung erhalten Sie eine E-Mail mit dem Liefertermin!<br />
			</p>
	  </div>
  </div>
	<!-- padding-bottom: 20px; margin-top: 20px; -->
	<div class="footer" style="border-top: 1px solid black; padding-top: 5px; font-size: 8px;">
		<div style="width: 10%; float: left;">
			<img src="<?php echo base_url(); ?>assets/img/pic_footer.png" style="width: 54px; margin-top: -8px;">
		</div>
		<div style="width: 30%; float: left;">
		  <?= WEBSITE_NAME; ?>
	    <br>
			Kurfürstendamm 21<br>
			Berlin 10719<br>
			Deutschland<br>
		</div>
<div style="width: 30%; float: left;">
			USt-IdNr. DE288283694<br>
			Tel: <?= WEBSITE_PHONE; ?><br>
			Email: <?= WEBSITE_EMAIL; ?><br>
		</div>
		<div style="width: 30%; float: left;">
			<?= $transaction[0]->b_detail_1 ?><br>
			IBAN: <?= $transaction[0]->b_detail_2 ?><br>
			SWIFT/BIC: <?= $transaction[0]->b_detail_3 ?><br>
		</div>
	</div>
</div>
<div style="width: 100%; clear: both;">
	<div class="header">
		<div style="font-size: 15px;">
			<strong>Allgemeine Geschäftsbedingungen</strong><br>
			<strong>für die Nutzung des transport inkl. Treuhandservice</strong><br>
			<strong>für die <?= WEBSITE_NAME; ?></strong>
		</div>
		<div style="text-align: right;">
			<img src="<?php echo base_url(); ?>assets/img/logo.png" style="width: auto; height: 70px; margin-top: -80px;">
		</div>
	</div>

	<div class="content" style="font-size: 12px; clear: both;">
		<div class="detail-2-1" style="padding-top: 30px;">
			<div style="float: left; width: 33%;">
				<p style="margin: 0;"><strong>Vermittler:</strong><?= WEBSITE_NAME; ?></p>
				<p style="margin: 0;"><strong><strong></p>
		  </div>
			<div style="float: left; width: 33%;">
				<p style="margin: 0;"><strong>Käufer: </strong><?= $transaction[0]->b_name ?></p>
				<p style="margin: 0;"><?= $transaction[0]->b_address ?></p>
				<p style="margin: 0;"><?= $transaction[0]->b_city ?></p>
				<p style="margin: 0;"><?= $transaction[0]->b_postal_code ?></p>
				<p style="margin: 0;"><?= $transaction[0]->b_country ?></p>
			</div>
			<div style="float: left; width: 33%;">
				<p style="margin: 0;"><strong>Verkäufer: </strong><?= $transaction[0]->s_name ?></p>
				<p style="margin: 0;">Adresse: <span><?= !empty($s_address[0]) ? $s_address[0] : "" ?></span></p>
				<p style="margin: 0;">Stadt: <span><?= !empty($s_address[2]) ? $s_address[2] : "" ?></span></p>
				<p style="margin: 0;">Postleitzahl: <span><?= !empty($s_address[1]) ? $s_address[1] : "" ?></span></p>
				<p style="margin: 0;"><?= !empty($s_address[3]) ? $s_address[3] : "" ?></p>
			</div>
		</div>

		<div class="detail-2-2" style="clear: both; padding-top: 15px;">
			<div style="float: left; width: 33%;">
				<p style="margin: 0;"><strong>Transaktion einzelheiten</strong></p>
				<p style="margin: 0;">Transaktion #: <span><?= $transaction[0]->reference ?></span></p>
				<p style="margin: 0;">Fahrzeug: <span><?= $transaction[0]->p_description ?></span></p>
				<p style="margin: 0;">Fahrzeugpreis: <span><?= $transaction[0]->p_value ?> €</span></p>
			</div>

			<div class="desc-2-1" style="clear: both; padding-top: 20px;">
				<p style="margin: 0;"><strong>1. Gegenstand des Vertrages</strong></p>
				<p style="margin: 0 0 5px 0;padding-left: 50px;">a. Grundsätzlich ist der Vermittler auch Spediteur der Ware. Als Spediteur arbeitet der Treuhänder nach den Allgemeinen  Spediteursbedingungen.</p>
				<p style="margin: 0 0 5px 0;padding-left: 50px;">b. Der Käufer bezahlt den Fahrzeugpreis auf ein eigenes dafür eingerichtetes Treuhandkonto des Vermittlers.</p>
				<p style="margin: 0 0 5px 0;padding-left: 50px;">c. Da der Vermittler zugleich als Spediteur agiert, hat er für den auftragsgemäßen Transport der Ware zu sorgen.  </p>
				<p style="margin: 0 0 5px 0;padding-left: 50px;">d. Der Vermittler haftet nicht für die Beschaffenheit der Ware, sondern nur nach der AdSp. für nachgewiesene Schäden, die auf dem  Transportwege eingetreten sind.</p>
				<p style="margin: 0 0 5px 0;padding-left: 50px;">e. Der Vermittler bietet eine 21 Tage Geld-zurück-Garantie.</p>
			  <p style="margin: 0; padding-left: 50px;">f. Der Vermittler wird den Kaufpreis zurückerstatten an 
			    <?= $transaction[0]->b_name ?> wenn <?= $transaction[0]->b_name ?> nicht  mit dem Fahrzeug zufrieden ist oder / und es nicht geliefert wurde. </p>

  <div class="desc-2-2" style="padding-top: 15px;">
					<p style="margin: 0;"><strong>2. Zusicherungen des Verkäufers</strong></p>
					<p style="margin: 0 0 5px 0; padding-left: 50px;">a. Das Fahrzeug einschließlich des mitverkauften Zubehörs steht in seinem alleinigen Eigentum.</p>
					<p style="margin: 0 0 5px 0;padding-left: 50px;">b. Das Fahrzeug hat den Originalmotor. </p>
				  <p style="margin: 0 0 5px 0;padding-left: 50px;">c. Das Fahrzeug hatte, seit es im Eigentum des Verkäufers war, keinen Unfallschaden.</p>
					<p style="margin: 0 0 5px 0;padding-left: 50px;">d. Das Fahrzeug wurde nicht gewerblich genutzt, z.B. als Taxi, Miet- oder Fahrschulwagen.</p>
					<p style="margin: 0 0 5px 0;padding-left: 50px;">e. Zustimmung mit 21 Tagen Inspektionszeitraum.</p>
			  </div>

				<div class="desc-2-3" style="padding-top: 15px;">
					<p style="margin: 0;"><strong>3. Zusicherungen des Käufers</strong></p>
					<p style="margin: 0 0 5px 0;padding-left: 50px;">a. Erklärt sich bereit, den Preis des Fahrzeugs in den nächsten 24 Stunden zu bezahlen.</p>
					<p style="margin: 0; padding-left: 50px;">b. Inspiziert das Fahrzeug innerhalb eines Umkreises von 500 km.</p>
			  </div>

				<div class="desc-2-4" style="padding-top: 15px;">
					<p style="margin: 0;"><strong>4. Ummelde-/Stilllegungsverpflichtung</strong></p>
					<p style="margin: 0; padding-left: 50px;">a. Der Käufer verpflichtet sich, das Fahrzeug innerhalb von zwei Werktagen nach Übergabe bei der zuständigen Straßenverkehrszulassungsbehörde auf seinen Namen anzumelden oder stillzulegen und Anmeldung bzw. Stilllegung dem Verkäufer nachzuweisen.</p>
			  </div>

				<div class="sign" style="z-index: 1; margin-top: 10px; margin-bottom: 20px;">
					<div style="width: 45%; float: right; padding-top: 100px;">
						<img src="<?php echo base_url(); ?>assets/img/sellersignature.png" style="width: 100px; z-index: 4; margin-bottom: -100px;">
						<p style="width: 170px; border-top: 1px dashed; padding-top: 5px; margin-top: 0;">Unterschrift des Verkäufers</p>
					</div>
					<div style="width: 100%; margin-bottom: 100px; margin-top: 0px; padding-top: 30px;">
						<span style="color: red;">Keine Unterschrift erforderlich. Ihre IP-Adresse ist Ihre digitale Unterschrift.   </span>
						<p style="width: 170px; border-top: 1px dashed; padding-top: 5px;">Unterschrift des Käufers</p>
				  </div>
	  <div style="width: 45%;">
						<p style="width: 200px; border-top: 1px dashed; padding-top: 5px; z-index: 2;">Unterschrift des Vermittler</p>
						<div>
							<img src="<?php echo base_url(); ?>assets/img/final_sign.png" style="width: 100px; margin-top: -80px; z-index: 3;">
						</div>
						<div style="margin-top: 30px; margin-left: 30px;">
							<img src="<?php echo base_url(); ?>assets/img/stamp.png" style="width: 130px; right: 125px; margin-top: -120px; z-index: 4; margin-left: 55px;">
						</div>
					</div>
				</div>

				<div class="footer" style="border-top: 1px solid black; padding-top: 5px; font-size: 8px;">
					<div style="width: 10%; float: left;">
						<img src="<?php echo base_url(); ?>assets/img/pic_footer.png" style="width: 54px; margin-top: -8px;">
					</div>
					<div style="width: 30%; float: left;">
						<?= WEBSITE_NAME; ?><br>
						Kurfürstendamm 21<br>
						Berlin 10719<br>
						Deutschland<br>
					</div>
					<div style="width: 30%; float: left;">
						USt-IdNr. DE288283694<br>
						Tel: <?= WEBSITE_PHONE; ?><br>
						Email: <?= WEBSITE_EMAIL; ?><br>
					</div>
					<div style="width: 30%; float: left;">
						<?= $transaction[0]->b_detail_1 ?><br>
						IBAN: <?= $transaction[0]->b_detail_2 ?><br>
						SWIFT/BIC: <?= $transaction[0]->b_detail_3 ?><br>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>