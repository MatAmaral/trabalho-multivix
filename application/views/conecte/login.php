<?php
/**
 * Login da área do cliente (v5), como superfície de entrada do DESIGN.md
 * (#2918). Mesma moldura do login do painel (views/entrada/inicio.php e
 * fim.php), com o acesso da equipe na top nav em button-ghost-on-dark.
 *
 * O envio usa o mesmo módulo do painel, assets/js/modules/login/formulario.js:
 * mine/login responde no mesmo contrato {result, message, OS_TOKEN}.
 *
 * @var string|null $erro     Mensagem de erro vinda de um redirect (flashdata)
 * @var string|null $sucesso  Mensagem de sucesso (cadastro, troca de senha)
 * @var string      $email    E-mail para preencher o campo (mine?e=...)
 */
$entrada = [
    'titulo' => 'Área do cliente',
    'secundaria' => ['label' => 'Acesso da equipe', 'href' => site_url('login'), 'icon' => 'log-in'],
];
include APPPATH . 'views/entrada/inicio.php';
?>
    <main class="mx-auto flex w-full max-w-md flex-1 flex-col justify-center px-4 py-6 lg:py-12">
        <section class="superficie-entrada w-full rounded-xxl border border-hairline-violet bg-night p-6 text-text sm:p-8" aria-labelledby="titulo-login">
            <h1 id="titulo-login" class="mb-6 font-display text-heading-md text-text">Entre na sua conta</h1>

            <?php if (! empty($sucesso)) { ?>
                <div class="mb-4"><?= component('alert', ['message' => (string) $sucesso, 'variant' => 'success']) ?></div>
            <?php } ?>

            <form id="formLogin" method="post" action="<?= e(site_url('mine/login?ajax=true')) ?>" novalidate class="flex flex-col gap-4" <?= js_module('login/formulario') ?> data-destino="<?= e(site_url('mine/painel')) ?>">
                <input type="hidden" name="<?= e($this->security->get_csrf_token_name()) ?>" value="<?= e($this->security->get_csrf_hash()) ?>">

                <div data-login-mensagem<?= empty($erro) ? ' hidden' : '' ?>>
                    <?= component('alert', ['message' => new HtmlSeguro('<span data-login-texto>' . e($erro ?? '') . '</span>'), 'variant' => 'danger']) ?>
                </div>

                <?= component('input', [
                    'name' => 'email',
                    'id' => 'email',
                    'label' => 'E-mail',
                    'type' => 'email',
                    'value' => ($email ?? '') !== '' ? $email : null,
                    'required' => true,
                    'autocomplete' => 'username',
                    'placeholder' => 'voce@email.com.br',
                    'attrs' => ['autofocus' => ($email ?? '') === '', 'inputmode' => 'email', 'data-msg-vazio' => 'Informe o e-mail.', 'data-msg-invalido' => 'Informe um e-mail válido.'],
                ]) ?>

                <?= component('input', [
                    'name' => 'senha',
                    'id' => 'senha',
                    'label' => 'Senha',
                    'type' => 'password',
                    'required' => true,
                    'autocomplete' => 'current-password',
                    'attrs' => ['autofocus' => ($email ?? '') !== '', 'data-msg-vazio' => 'Informe a senha.'],
                ]) ?>

                <?= component('button', [
                    'label' => 'Entrar',
                    'type' => 'submit',
                    'size' => 'lg',
                    'icon' => 'log-in',
                    'id' => 'btn-acessar',
                    // DESIGN.md: na superfície de entrada o button-primary leva o halo nível 3.
                    'class' => 'mt-2 w-full shadow-elev-3',
                    'attrs' => ['data-rotulo-carregando' => 'Entrando…'],
                ]) ?>
            </form>

            <div class="mt-6 flex flex-wrap items-center justify-between gap-x-4 gap-y-2 text-body-md">
                <a href="<?= e(site_url('mine/resetarSenha')) ?>" class="rounded-xs text-on-dark underline underline-offset-4 hover:decoration-2 focus-visible:outline-3 focus-visible:outline-ring max-sm:inline-flex max-sm:min-h-11 max-sm:items-center">Esqueci minha senha</a>
                <a href="<?= e(site_url('mine/cadastrar')) ?>" class="rounded-xs text-on-dark underline underline-offset-4 hover:decoration-2 focus-visible:outline-3 focus-visible:outline-ring max-sm:inline-flex max-sm:min-h-11 max-sm:items-center">Criar conta</a>
            </div>
        </section>
    </main>
<?php include APPPATH . 'views/entrada/fim.php'; ?>
