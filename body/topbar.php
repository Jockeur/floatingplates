<div class="topbar">
	<a class="app-name" href="index.php">Floating Plates</a>
	<span class="menu">
		<?php
			if(isLogged() == 1){
				?>
					<a href="index.php?page=logout" class="<?php echo ($page=='logout')? 'active': '';?>">Deconnexion</a>
				<?php
			} else {
				?>
					<a href="index.php?page=register" class="<?php echo ($page=='register')? 'active' : '';?>">S'inscrire</a>
					<a href="index.php?page=signin" class="<?php echo ($page=='signin')? 'active' : '';?>">Se connecter</a>
				<?php
			}
		?>
	</span>
</div>