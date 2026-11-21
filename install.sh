#!/bin/bash

# O instalador automatico baixava o OS do repositorio original, sem as
# alteracoes desta versao do sistema, e por isso esta desativado.

cat <<'MSG'
O instalador automatico esta desativado nesta versao do sistema.
Ele baixava o OS do repositorio original, sem as alteracoes desta versao.

Para instalar num servidor com Apache, PHP 8.5 e MySQL/MariaDB:
 1. Copie esta pasta para a pasta publica do servidor (ex.: /var/www/os).
 2. Na pasta copiada, rode: composer install --no-dev
 3. Abra o endereco do servidor no navegador e siga o assistente de instalacao.

Veja tambem a secao "Seguranca do servidor" do README.md.
MSG

exit 1
