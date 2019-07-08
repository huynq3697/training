<nav class="large-3 medium-4 columns" id="actions-sidebar">
	<ul class="side-nav">
		<li class="heading"><?= __('Users') ?></li>
		<li><?= $this->Html->link(__('Login'), ['action' => 'login']) ?></li>
		<li><?= $this->Html->link(__('Sign Up'), ['action' => 'signup']) ?></li>
	</ul>
</nav>
<div class="products view large-9 medium-8 columns content">
	<h1>Sign Up</h1>
	<?= $this->Form->create() ?>
	<div class="form-group">
		<label for="exampleInputEmail1">Email address</label>
		<input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
		<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
	</div>
	<div class="form-group">
		<label for="exampleInputPassword1">Password</label>
		<input type="password" class="form-control" id="password" name="password" placeholder="Password">
	</div>
	<div class="form-check">
		<input type="checkbox" class="form-check-input" id="exampleCheck1">
	</div>
	<?= $this->Form->button('Login', ['class' => 'btn btn-primary']) ?>
	<?= $this->Form->end() ?>
</div>