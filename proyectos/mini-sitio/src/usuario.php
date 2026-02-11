<?php
// ===============================
// Modelo Usuario
// BLOQUE 7 - POO
// ===============================

class Usuario
{
    public string $nombre;
    public string $email;
    public int $edad;
    public string $estado;

    public function __construct(string $nombre, string $email, int $edad, string $estado)
    {
        $this->nombre = $nombre;
        $this->email  = $email;
        $this->edad   = $edad;
        $this->estado = $estado;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getEdad(): int
    {
        return $this->edad;
    }

    public function getEstado(): string
    {
        return $this->estado;
    }
}
