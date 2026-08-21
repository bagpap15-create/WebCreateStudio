<?php $title = "Επικοινωνία"; ?>
<?php include "header.php"; ?>
	<main>
		<h2 class="header-site">Επικοινωνία</h2>
		<img src="images/communication.png" alt="Επικοινωνία με πελάτες" class="img-site">
		<div class="content-site">
			<p>Επικοινωνήστε μαζί μας αν έχετε οποιαδήποτε απορία η θέλετε να συζητήσετε τις ανάγκες της επιχειρησής σας.</p>
		</div>
		<div class="com-align">
			<div class="list-com">
				<h2>Στοιχεία επικοινωνίας</h2>
				<p>Πως μπορείτε να μας βρείτε:</p>
				<ul>
                    <li><i class="fa fa-envelope"></i> bagpap15@gmail.com</li>
                    <li><i class="fa fa-location-dot"></i> Λάρισα</li>
                    <li><i class="fa fa-phone"></i> +306939370369</li>
				</ul>
			</div>
			<div class="form-container">
				<h2 class="header-form">Φόρμα Επικοινωνία</h2>
				<!-- Frontend only - form submission best for backend integration -->
				<form>
					<div class="form-content">
						<div class="input-texts">
							<input type="text" placeholder="Όνομα*" name="first-name" class="first-name"><input type="text" placeholder="Επώνυμο*" name="last-name" class="last-name"><input type="email" placeholder="Email*" name="email" class="email"/>
						</div>
						<textarea placeholder="Μήνυμα*" name="messager"></textarea>
						<input type="submit" value="Αποστολή">
					</div>
				</form>
			</div>
		</div>
	</main>
<?php include "footer.php"; ?>
