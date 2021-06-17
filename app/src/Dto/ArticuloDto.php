<?php

namespace App\Dto;

/**
 * Class ArticuloDto
 */
class ArticuloDto
{
    /**
     * @var string $Codigo
     */
    protected $Codigo;

    /**
     * @var string $Descripcion
     */
    protected $Descripcion;

    /**
     * @var string $CodigoBarras
     */
    protected $CodigoBarras;

    /**
     * @var string $Precio
     */
    protected $Precio;

    /**
     * @var string $PrecioBase
     */
    protected $PrecioBase;

    /**
     * @var array|string $Surtido
     */
    protected $Surtido;

    /**
     * @var string $Cantidad
     */
    protected $Cantidad;

    /**
     * @var string $StockReal
     */
    protected $StockReal;

    /**
     * @var string $StockTeorico
     */
    protected $StockTeorico;

    /**
     * @var string $StockDisponible
     */
    protected $StockDisponible;

    /**
     * @var string $VMD
     */
    protected $VMD;

    /**
     * @return string
     */
    public function getCodigo(): string
    {
        return $this->Codigo;
    }

    /**
     * @param string $Codigo
     */
    public function setCodigo(string $Codigo): void
    {
        $this->Codigo = $Codigo;
    }

    /**
     * @return null|string
     */
    public function getDescripcion(): ?string
    {
        return $this->Descripcion;
    }

    /**
     * @param string $Descripcion
     */
    public function setDescripcion(string $Descripcion): void
    {
        $this->Descripcion = $Descripcion;
    }

    /**
     * @return string
     */
    public function getCodigoBarras(): string
    {
        return $this->CodigoBarras;
    }

    /**
     * @param string $CodigoBarras
     */
    public function setCodigoBarras(string $CodigoBarras): void
    {
        $this->CodigoBarras = $CodigoBarras;
    }

    /**
     * @return null|string
     */
    public function getPrecio(): ?string
    {
        return $this->Precio;
    }

    /**
     * @param string $Precio
     */
    public function setPrecio(string $Precio): void
    {
        $this->Precio = $Precio;
    }

    /**
     * @return null|string
     */
    public function getPrecioBase(): ?string
    {
        return $this->PrecioBase;
    }

    /**
     * @param string $PrecioBase
     */
    public function setPrecioBase(string $PrecioBase): void
    {
        $this->PrecioBase = $PrecioBase;
    }

    /**
     * @return null|int
     */
    public function getSurtido()
    {
        return $this->Surtido;
    }

    /**
     * @param string $Surtido
     */
    public function setSurtido($Surtido): void
    {
        $this->Surtido = (int) $Surtido;
    }

    /**
     * @return null|string
     */
    public function getCantidad(): ?string
    {
        return $this->Cantidad;
    }

    /**
     * @param string $Cantidad
     */
    public function setCantidad(string $Cantidad): void
    {
        $this->Cantidad = $Cantidad;
    }

    /**
     * @return null|string
     */
    public function getStockReal(): ?string
    {
        return $this->StockReal;
    }

    /**
     * @param string $StockReal
     */
    public function setStockReal(string $StockReal): void
    {
        $this->StockReal = $StockReal;
    }

    /**
     * @return null|string
     */
    public function getStockTeorico(): ?string
    {
        return $this->StockTeorico;
    }

    /**
     * @param string $StockTeorico
     */
    public function setStockTeorico(string $StockTeorico): void
    {
        $this->StockTeorico = $StockTeorico;
    }

    /**
     * @return null|string
     */
    public function getStockDisponible(): ?string
    {
        return $this->StockDisponible;
    }

    /**
     * @param string $StockDisponible
     */
    public function setStockDisponible(string $StockDisponible): void
    {
        $this->StockDisponible = $StockDisponible;
    }

    /**
     * @return null|string
     */
    public function getVMD(): ?string
    {
        return $this->VMD;
    }

    /**
     * @param string $VMD
     */
    public function setVMD(string $VMD): void
    {
        $this->VMD = $VMD;
    }
}
