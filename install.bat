@ECHO OFF
TITLE Instalador OS
ECHO.
ECHO O instalador automatico esta desativado nesta versao do sistema.
ECHO Ele baixava o OS do repositorio original, sem as alteracoes desta versao.
ECHO.
ECHO Para instalar, siga o guia Instalacao_xampp_windows.md:
ECHO  1. Instale o XAMPP (PHP 8.5) e o Composer.
ECHO  2. Copie esta pasta para C:\xampp\htdocs\os
ECHO  3. Na pasta copiada, rode: composer install --no-dev
ECHO  4. Abra http://localhost/os no navegador e siga o assistente.
ECHO.
PAUSE
EXIT /B 1
