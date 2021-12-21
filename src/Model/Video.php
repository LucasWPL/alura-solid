<?php

namespace Alura\Solid\Model;

use Alura\Solid\Model\Slug;

class Video
{
    /** @var bool */
    protected $assistido = false;
    /** @var string */
    protected $nome;
    /** @var \DateInterval */
    protected $duracao;

    public function __construct(string $nome)
    {
        $this->nome = $nome;
        $this->assistido = false;
        $this->duracao = \DateInterval::createFromDateString('0');
    }

    public function assistir(): void
    {
        $this->assistido = true;
    }

    public function minutosDeDuracao(): int
    {
        return $this->duracao->i;
    }

    public function recuperarUrl(): string
    {
        $url = new Slug($this->categoria);
        return 'http://videos.alura.com.br/' . $url;
    }
}
