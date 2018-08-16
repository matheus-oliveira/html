<?php

require_once 'dao/ClienteDAO.php';

$clienteDAO = new ClienteDAO();
$clienteDAO->getAllCliente();
