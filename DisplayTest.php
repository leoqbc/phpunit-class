<?php
// Laboratório CAP 8 PHP Modulo 2

// Colar em tests/

use PHPUnit\Framework\TestCase;
use App\Displayer;
use App\XMLType;
use App\JSONType;

class DisplayTest extends TestCase
{
    public function getCliente()
    {
        return [
            [
                'nome' => 'João Lima',
                'endereco' => 'Rua teste, 123',
                'email' => 'joao@email.com',
                'telefone' => '11 2222-2222'
            ]
        ];
    }

    public function testValidaSaidaDeXML()
    {
        $displayer = new Displayer($this->getCliente(), new XMLType);

        $this->assertXmlStringEqualsXmlString(
            $displayer->show(), 
            '<cliente>
                <nome>João Lima</nome>
                <endereco>Rua teste, 123</endereco>
                <email>joao@email.com</email>
                <telefone>11 2222-2222</telefone>
             </cliente>'
        );
    }

    public function testValidaSaidaDeJSON()
    {
        $displayer = new Displayer($this->getCliente(), new JSONType);

        $this->assertJsonStringEqualsJsonString(
            $displayer->show(), 
            '[
                {
                "nome": "João Lima",
                "endereco": "Rua teste, 123",
                "email": "joao@email.com",
                "telefone": "11 2222-2222"
                }
            ]'
        );
    }
}
