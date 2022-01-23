<?php

namespace App\Commands;

use CodeIgniter\CLI\BaseCommand;
use CodeIgniter\CLI\CLI;

class AddDB extends BaseCommand
{
    /**
     * The Command's Group
     *
     * @var string
     */
    protected $group = 'DB';

    /**
     * The Command's Name
     *
     * @var string
     */
    protected $name = 'command:create_db';

    /**
     * The Command's Description
     *
     * @var string
     */
    protected $description = 'Cria o banco de dados que será usado no projeto.';

    /**
     * The Command's Usage
     *
     * @var string
     */
    protected $usage = 'command:name [arguments] [options]';

    /**
     * The Command's Arguments
     *
     * @var array
     */
    protected $arguments = [];

    /**
     * The Command's Options
     *
     * @var array
     */
    protected $options = [];

    /**
     * Actually execute a command.
     *
     * @param array $params
     */
    public function run(array $params)
    {
        $forge = \Config\Database::forge();
        $forge->createDatabase('relatorio_pessoas');
    }
}
