<body>
    <?php //Link para acesso: http://localhost/EtecDS03/Ds03Ag09/index.php

        include_once 'Fisica.php'; 
        include_once 'Juridica.php';

        $fisica = new Fisica();
        $fisica ->setNome("Zeca");
        $fisica->setCpf("111.111.111-11");
        echo 'Nome: ' . $fisica->getNome() . '<br>'; 
        echo 'CPF: ' . $fisica->getCpf() . '<br>';

        $fisica->mudarNome();
        echo 'Nome: '.$fisica->getNome().'<br>'; 
        echo 'CPF: '.$fisica->getCpf(); echo '<br>';
        echo '<br>';

        $juridica = new Juridica();
        $juridica->setNome("Industria do Zeca");
        $juridica->setCnpj("999.888.777/0001-11");
        echo 'Nome: ' . $juridica->getNome() . '<br>'; 
        echo 'CNPJ: ' . $juridica->getCnpj() . '<br>';

    ?>
    
</body>
