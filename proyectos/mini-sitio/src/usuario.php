<?php
// ===============================
// Modelo Usuario
// BLOQUE 8 - POO AVANZADA
// ===============================

class Usuario
{
    // Estado interno (NO accesible desde fuera)
    private string $nombre;
    private string $email;
    private int $edad;
    private string $estado;

    public function __construct(string $nombre, string $email, int $edad, string $estado)
    {
        $this->nombre = $nombre;
        $this->email  = $email;
        $this->edad   = $edad;
        $this->estado = $estado;
    }

    // -------- Getters (acceso controlado) --------

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

    // -------- Comportamiento del dominio --------

    public function estaActivo(): bool
    {
        return $this->estado === 'Activo';
    }
}
