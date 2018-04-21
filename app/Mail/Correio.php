<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Mail;


class Correio extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $dados;

    public function __construct($dados)
    {
        $this->dados = $dados;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('admin.email_visitante')
                    ->with('dados', $this->dados)
                    ->attach($this->dados['imagem'])
                    ->from('contato@flaviosantos.xyz');
    }
}
