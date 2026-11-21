# OS

Sistema web para controle de ordens de serviço: clientes, produtos, serviços, vendas, financeiro e relatórios.

## Requisitos

- PHP 8.5 com as extensões `curl`, `gd`, `mysqli`, `zip`, `mbstring`, `dom`, `xml`, `zlib`, `iconv`, `json`, `openssl` e `fileinfo`
- MySQL ou MariaDB
- Composer

No Windows, o [XAMPP](https://www.apachefriends.org/) com PHP 8.5 já traz o Apache, o PHP e o MySQL.

## Instalação (Windows com XAMPP)

1. Instale o XAMPP e o [Composer](https://getcomposer.org/Composer-Setup.exe).
2. No arquivo `C:\xampp\php\php.ini`, tire o `;` do começo das linhas `extension=gd` e `extension=zip`.
3. Abra o painel do XAMPP e ligue o **Apache** e o **MySQL**.
4. Copie a pasta do projeto para `C:\xampp\htdocs\os`.
5. Na pasta copiada, rode:

   ```
   composer install --no-dev
   ```

6. Abra `http://localhost/os` no navegador, clique em **Próximo**, digite a senha do administrador e clique em **Instalar**. Os outros campos já vêm preenchidos para o XAMPP:
   - **Banco de dados:** host `localhost`, usuário `root`, senha em branco e banco `os` (o instalador cria o banco).
   - **Administrador:** `Teste` e e-mail `admin@admin.com`. A senha fica em branco: escolha uma com pelo menos 8 caracteres.
   - **URL:** `http://localhost/os/`
   - **Pasta dos anexos:** `C:/xampp/htdocs/os-storage`, criada pelo instalador.
7. Pronto. Depois de instalado, o instalador se bloqueia sozinho. **Não apague a pasta `install`** desta pasta do projeto: ela faz parte do código. O aviso do painel sobre ela pode ser ignorado neste computador; apague a pasta só numa cópia publicada num servidor de verdade.

## Primeiro acesso

Entre em `http://localhost/os` com `admin@admin.com` e a senha escolhida no passo 6. Os dados da empresa e o e-mail de envio ficam em **Configurações**.
