<?php

use ConfrariaWeb\Contact\Models\ContactType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ContactsTableSeeder extends Seeder
{

    public function run()
    {
        $this->truncateTables();
        $this->createContactTypes();
    }

    private function createContactTypes()
    {
        $typesContacts = [
            ['name' => 'Telefone', 'slug' => 'phone', 'order' => 1],
            ['name' => 'Celular', 'slug' => 'cellphone', 'order' => 1],
            ['name' => 'E-mail', 'slug' => 'email', 'order' => 1],
            ['name' => 'Skype', 'slug' => 'skype', 'order' => 1],
            ['name' => 'Whatsapp', 'slug' => 'whatsapp', 'order' => 1],
            ['name' => 'Whatsapp/Celular', 'slug' => 'whatsapp_cellphone', 'order' => 1]
        ];

        foreach ($typesContacts as $typeContact) {
            ContactType::create($typeContact);
            $this->command->info('Tipo de contato ' . $typeContact['name'] . ' criado.');
        }
    }

    private function truncateTables()
    {
        Schema::disableForeignKeyConstraints();
        $this->command->info('Fazendo um truncate nas tabelas de contatos, sai da frente... ;/');
        DB::table('contact_types')->truncate();
        DB::table('contacts')->truncate();
        Schema::enableForeignKeyConstraints();
        $this->command->info('Pronto, truncates de contatos feitos, acho que com sucesso :D');
    }
}
