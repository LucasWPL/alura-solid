<?php

namespace Alura\Solid\Model;

use Alura\Solid\Model\Slug;

class AluraMais extends Video implements Pontuavel
{
    private $categoria;

    public function __construct(string $nome, string $categoria)
    {
        parent::__construct($nome);
        $this->categoria = $categoria;
    }

    public function recuperarUrl(): string
    {
        $url = new Slug($this->categoria);
        return 'http://videos.alura.com.br/' . $url;
    }

    public function recuperarPontuacao(): int
    {
        return $this->minutosDeDuracao() * 2;
    }
}
