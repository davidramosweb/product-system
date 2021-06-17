<?php

namespace App\Dto;

/**
 * Class CatalogDto
 */
class CatalogDto
{
    /**
     * @var string $SkuProvider
     */
    protected $SkuProvider;

    /**
     * @var string $Ean
     */
    protected $Ean;

    /**
     * @var string $ProviderFullDescription
     */
    protected $ProviderFullDescription;

    /**
     * @var string $ProviderName
     */
    protected $ProviderName;

    /**
     * @var string $BrandSupplierName
     */
    protected $BrandSupplierName;

    /**
     * @var string $CategorySupplierName
     */
    protected $CategorySupplierName;

    /**
     * @var float $WidthPackaging
     */
    protected $WidthPackaging;

    /**
     * @var float $HeightPackaging
     */
    protected $HeightPackaging;

    /**
     * @var float $LengthPackaging
     */
    protected $LengthPackaging;

    /**
     * @var float $WeightPackaging
     */
    protected $WeightPackaging;

    /**
     * @var bool $New
     */
    protected $New;

    /**
     * @var bool $Active
     */
    protected $Active;

    /**
     * @var array $Attributes
     */
    protected $Attributes;

    /**
     * @var array $Images
     */
    protected $Images;

    /**
     * @return string
     */
    public function getSkuProvider(): string
    {
        return $this->SkuProvider;
    }

    /**
     * @param string $SkuProvider
     */
    public function setSkuProvider(string $SkuProvider): void
    {
        $this->SkuProvider = $SkuProvider;
    }

    /**
     * @return array
     */
    public function getEans(): array
    {
        return explode(',', $this->Ean);
    }

    /**
     * @return string
     */
    public function getFirstEan(): ?string
    {
        $eans = $this->getEans();
        return $eans[0];
    }

    /**
     * @return string
     */
    public function getEan(): string
    {
        return $this->Ean;
    }

    /**
     * @param string $Ean
     */
    public function setEan(string $Ean): void
    {
        $this->Ean = $Ean;
    }

    /**
     * @return null|string
     */
    public function getProviderFullDescription(): ?string
    {
        return $this->ProviderFullDescription;
    }

    /**
     * @param string $ProviderFullDescription
     */
    public function setProviderFullDescription(string $ProviderFullDescription): void
    {
        $this->ProviderFullDescription = $ProviderFullDescription;
    }

    /**
     * @return null|string
     */
    public function getProviderName(): ?string
    {
        return $this->ProviderName;
    }

    /**
     * @param string $ProviderName
     */
    public function setProviderName(string $ProviderName): void
    {
        $this->ProviderName = $ProviderName;
    }

    /**
     * @return null|string
     */
    public function getBrandSupplierName(): ?string
    {
        return $this->BrandSupplierName;
    }

    /**
     * @param string $BrandSupplierName
     */
    public function setBrandSupplierName(string $BrandSupplierName): void
    {
        $this->BrandSupplierName = $BrandSupplierName;
    }

    /**
     * @return null|string
     */
    public function getCategorySupplierName(): ?string
    {
        return $this->CategorySupplierName;
    }

    /**
     * @param string $CategorySupplierName
     */
    public function setCategorySupplierName(string $CategorySupplierName): void
    {
        $this->CategorySupplierName = $CategorySupplierName;
    }

    /**
     * @return null|float
     */
    public function getWidthPackaging(): ?float
    {
        return $this->WidthPackaging;
    }

    /**
     * @param float $WidthPackaging
     */
    public function setWidthPackaging(float $WidthPackaging): void
    {
        $this->WidthPackaging = $WidthPackaging;
    }

    /**
     * @return null|float
     */
    public function getHeightPackaging(): ?float
    {
        return $this->HeightPackaging;
    }

    /**
     * @param float $HeightPackaging
     */
    public function setHeightPackaging(float $HeightPackaging): void
    {
        $this->HeightPackaging = $HeightPackaging;
    }

    /**
     * @return null|float
     */
    public function getLengthPackaging(): ?float
    {
        return $this->LengthPackaging;
    }

    /**
     * @param float $LengthPackaging
     */
    public function setLengthPackaging(float $LengthPackaging): void
    {
        $this->LengthPackaging = $LengthPackaging;
    }

    /**
     * @return null|float
     */
    public function getWeightPackaging(): ?float
    {
        return $this->WeightPackaging;
    }

    /**
     * @param float $WeightPackaging
     */
    public function setWeightPackaging(float $WeightPackaging): void
    {
        $this->WeightPackaging = $WeightPackaging;
    }

    /**
     * @return null|bool
     */
    public function getNew(): ?bool
    {
        return $this->New;
    }

    /**
     * @param bool $New
     */
    public function setNew(bool $New): void
    {
        $this->New = $New;
    }

    /**
     * @return null|bool
     */
    public function getActive(): ?bool
    {
        return $this->Active;
    }

    /**
     * @param bool $Active
     */
    public function setActive(bool $Active): void
    {
        $this->Active = $Active;
    }

    /**
     * @return null|array
     */
    public function getAttributes(): ?array
    {
        return $this->Attributes;
    }

    /**
     * @param array $Attributes
     */
    public function setAttributes(array $Attributes): void
    {
        $this->Attributes = $Attributes;
    }

    /**
     * @return null|array
     */
    public function getImages(): ?array
    {
        return $this->Images;
    }

    /**
     * @param array $Images
     */
    public function setImages(array $Images): void
    {
        $this->Images = $Images;
    }
}
