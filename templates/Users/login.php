<div id="login-page">
    <div class="container">
        <?= $this->Form->create(null, ['class' => 'form-login', 'method' => 'post']) ?>
        <h2 class="form-login-heading">Se connecter</h2>
        <div class="login-wrap">
            <?= $this->Form->control('email', ['label' => ['text' => 'Votre email'], 'class' => 'form-control', 'id' => 'nameInput', 'placeholder' => 'Email', 'autofocus' => true]) ?>
            <?= $this->Form->control('password', ['label' => ['text' => 'Mot de passe'], 'class' => 'form-control', 'id' => 'passwordInput', 'placeholder' => 'Mot de passe']) ?>
            <?= $this->Form->button(__('Connexion'), ['class' => 'btn btn-theme btn-block', 'type' => 'submit']) ?>
        </div>
        <?= $this->Form->end() ?>
    </div>
</div>
