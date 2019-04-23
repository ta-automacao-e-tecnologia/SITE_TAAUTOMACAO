# TA AUTO TEC - PHP_FRAMEWORK

## ESTRUTURA BÁSICA

<P>
    O framework foi criado com uma <em>estrutura básica</em> que <strong>*** não deve ser alterada !***</strong><br>
    Esta estrutura é composta pelas pastas abaixo.
</P>

<ul>
    <li><strong>Ajax (Pasta)</strong></li>
        <ul>
            <li><strong>javascript (Pasta)</strong> - Devem receber os arquivos código <em>javascript</em></li>
            <li><strong>php (Pasta)</strong></strong> - Devem receber os arquivos código <em>php</em></li>
        </ul>
    
    <li>Classes (Pasta)</li>
    <li>Sql (Pasta)</li>
</ul>

## Como utilizar o framework

### 3-querys/database_querys.php

<p>Neste arquivo devem ser definidas em variáveis <strong>"protected"</strong> as querys do projeto.</p>
<p>Lembrando-se que no lugar dos valores inseridos ou procurados, devem ser colocados <strong>"?"</strong>.</p>
<p>Ex.:</p>
<br><br>
<p>protected $LOGIN = "SELECT * FROM users WHERE user = ? AND pass = ?";</p>
