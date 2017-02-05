<?php
namespace App;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use PHPUnit\Framework\TestCase;

class NotesTest extends TestCase
{
    //Con este trait no guarda datos en la base de datos al hacer pruebas como seeInDatabase(...)
   // use DatabaseTransactions;
    use WithoutMiddleware;

    public function test_notes_list()
    {
        // Having

        Note::create(['note' => 'Prueba']);
        Note::create(['note' => 'Prueba2']);
        // When
        $this->visit('notes')
            // Then
            ->see('Prueba')
            ->see('Prueba2');
    }
    public function test_create_note()
    {
        $this->visit('notes')
            ->click('Creando una nota')
            ->seePageIs('notes/create')
            ->see('Create a note')
            ->type('A new note', 'note')
            ->press('Creando una nota')
            ->seePageIs('notes')
            ->see('A new note')
            ->seeInDatabase('notes', [
                'note' => 'A new note'
            ]);
    }
}
