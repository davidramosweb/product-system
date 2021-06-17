<?php

namespace App\Dto;

/**
 * Class ProductoDto
 */
class ProductoDto
{
    /**
     * @var string $productId
     */
    protected $productId;

    /**
     * @var string $skuProvider
     */
    protected $skuProvider;

    /**
     * @var string $ean
     */
    protected $ean;

    /**
     * @var null|string $providerFullDescription
     */
    protected $providerFullDescription;

    /**
     * @var string $providerShortDescription
     */
    protected $providerShortDescription;

    /**
     * @var null|string $providerAttributeDescription
     */
    protected $providerAttributeDescription;

    /**
     * @var string $providerName
     */
    protected $providerName;

    /**
     * @var string $intrastat
     */
    protected $intrastat;

    /**
     * @var string $brandSupplierName
     */
    protected $brandSupplierName;

    /**
     * @var string $categorySupplierName
     */
    protected $categorySupplierName;

    /**
     * @var string $categorySupplierName2
     */
    protected $categorySupplierName2;

    /**
     * @var string $categorySupplierName3
     */
    protected $categorySupplierName3;

    /**
     * @var null|float $width
     */
    protected $width;

    /**
     * @var null|float $height
     */
    protected $height;

    /**
     * @var null|float $length
     */
    protected $length;

    /**
     * @var null|float $width2
     */
    protected $width2;

    /**
     * @var null|float $height2
     */
    protected $height2;

    /**
     * @var null|float $length2
     */
    protected $length2;

    /**
     * @var null|float $weightKg
     */
    protected $weightKg;

    /**
     * @var null|float $widthPackaging
     */
    protected $widthPackaging;

    /**
     * @var null|float $heightPackaging
     */
    protected $heightPackaging;

    /**
     * @var null|float $lengthPackaging
     */
    protected $lengthPackaging;

    /**
     * @var null|float $weightPackaging
     */
    protected $weightPackaging;

    /**
     * @var null|float|string $cbm
     */
    protected $cbm;

    /**
     * @var null|string $objectType1
     */
    protected $objectType1;

    /**
     * @var null|string $titleAttribute0
     */
    protected $titleAttribute0;

    /**
     * @var null|string $seoKeywords
     */
    protected $seoKeywords;

    /**
     * @var null|string $titleAttribute1
     */
    protected $titleAttribute1;

    /**
     * @var null|string $titleAttribute2
     */
    protected $titleAttribute2;

    /**
     * @var null|string $titleAttribute3
     */
    protected $titleAttribute3;

    /**
     * @var null|string $titleAttribute4
     */
    protected $titleAttribute4;

    /**
     * @var null|string $titleAttribute5
     */
    protected $titleAttribute5;

    /**
     * @var null|string $translatableTitleAttribute1
     */
    protected $translatableTitleAttribute1;

    /**
     * @var null|string $translatableTitleAttribute2
     */
    protected $translatableTitleAttribute2;

    /**
     * @var null|string $translatableTitleAttribute3
     */
    protected $translatableTitleAttribute3;

    /**
     * @var null|string $translatableTitleAttribute4
     */
    protected $translatableTitleAttribute4;

    /**
     * @var null|string $attribute1
     */
    protected $attribute1;

    /**
     * @var null|string $value1
     */
    protected $value1;

    /**
     * @var null|string $attribute2
     */
    protected $attribute2;

    /**
     * @var null|string|int $value2
     */
    protected $value2;

    /**
     * @var null|string $attribute3
     */
    protected $attribute3;

    /**
     * @var null|string|int $value3
     */
    protected $value3;

    /**
     * @var null|string $attribute4
     */
    protected $attribute4;

    /**
     * @var null|string $value4
     */
    protected $value4;

    /**
     * @var null|string $attribute5
     */
    protected $attribute5;

    /**
     * @var null|string $value5
     */
    protected $value5;

    /**
     * @var null|string $attribute6
     */
    protected $attribute6;

    /**
     * @var null|string $value6
     */
    protected $value6;

    /**
     * @var null|string $attribute7
     */
    protected $attribute7;

    /**
     * @var null|string $value7
     */
    protected $value7;

    /**
     * @var null|string $attribute8
     */
    protected $attribute8;

    /**
     * @var null|string $value8
     */
    protected $value8;

    /**
     * @var null|string $attribute9
     */
    protected $attribute9;

    /**
     * @var null|string $value9
     */
    protected $value9;

    /**
     * @var null|string $attribute10
     */
    protected $attribute10;

    /**
     * @var null|string $value10
     */
    protected $value10;

    /**
     * @var null|string $attribute11
     */
    protected $attribute11;

    /**
     * @var null|string $value11
     */
    protected $value11;

    /**
     * @var null|string $attribute12
     */
    protected $attribute12;

    /**
     * @var null|string $value12
     */
    protected $value12;

    /**
     * @var null|string $attribute13
     */
    protected $attribute13;

    /**
     * @var null|string $value13
     */
    protected $value13;

    /**
     * @var null|string $attribute14
     */
    protected $attribute14;

    /**
     * @var null|string $value14
     */
    protected $value14;

    /**
     * @var null|string $attribute15
     */
    protected $attribute15;

    /**
     * @var null|string $value15
     */
    protected $value15;

    /**
     * @var null|string $attribute16
     */
    protected $attribute16;

    /**
     * @var null|string $value16
     */
    protected $value16;

    /**
     * @var null|string $attribute17
     */
    protected $attribute17;

    /**
     * @var null|string $value17
     */
    protected $value17;

    /**
     * @var null|string $attribute18
     */
    protected $attribute18;

    /**
     * @var null|string $value18
     */
    protected $value18;

    /**
     * @var null|string $attribute19
     */
    protected $attribute19;

    /**
     * @var null|string $value19
     */
    protected $value19;

    /**
     * @var null|string $attribute20
     */
    protected $attribute20;

    /**
     * @var null|string $value20
     */
    protected $value20;

    /**
     * @var null|string $attribute21
     */
    protected $attribute21;

    /**
     * @var null|string $value21
     */
    protected $value21;

    /**
     * @var null|string $attribute22
     */
    protected $attribute22;

    /**
     * @var null|string $value22
     */
    protected $value22;

    /**
     * @var null|string $attribute23
     */
    protected $attribute23;

    /**
     * @var null|string $value23
     */
    protected $value23;

    /**
     * @var null|string $attribute24
     */
    protected $attribute24;

    /**
     * @var null|string $value24
     */
    protected $value24;

    /**
     * @var null|string $attribute25
     */
    protected $attribute25;

    /**
     * @var null|string $value25
     */
    protected $value25;

    /**
     * @var null|string $attribute26
     */
    protected $attribute26;

    /**
     * @var null|string $value26
     */
    protected $value26;

    /**
     * @var null|string $attribute27
     */
    protected $attribute27;

    /**
     * @var null|string $value27
     */
    protected $value27;

    /**
     * @var null|string $attribute28
     */
    protected $attribute28;

    /**
     * @var null|string $value28
     */
    protected $value28;

    /**
     * @var null|string $attribute29
     */
    protected $attribute29;

    /**
     * @var null|string $value29
     */
    protected $value29;

    /**
     * @var null|string $attribute30
     */
    protected $attribute30;

    /**
     * @var null|string $value30
     */
    protected $value30;

    /**
     * @var null|string $attribute31
     */
    protected $attribute31;

    /**
     * @var null|string $value31
     */
    protected $value31;

    /**
     * @var null|string $attribute32
     */
    protected $attribute32;

    /**
     * @var null|string $value32
     */
    protected $value32;

    /**
     * @var null|string $attribute33
     */
    protected $attribute33;

    /**
     * @var null|string $value33
     */
    protected $value33;

    /**
     * @var null|string $attribute34
     */
    protected $attribute34;

    /**
     * @var null|string $value34
     */
    protected $value34;

    /**
     * @var null|string $attribute35
     */
    protected $attribute35;

    /**
     * @var null|string $value35
     */
    protected $value35;

    /**
     * @var null|string $attribute36
     */
    protected $attribute36;

    /**
     * @var null|string $value36
     */
    protected $value36;

    /**
     * @var null|string $attribute37
     */
    protected $attribute37;

    /**
     * @var null|string $value37
     */
    protected $value37;

    /**
     * @var null|string $attribute38
     */
    protected $attribute38;

    /**
     * @var null|string $value38
     */
    protected $value38;

    /**
     * @var null|string $attribute39
     */
    protected $attribute39;

    /**
     * @var null|string $value39
     */
    protected $value39;

    /**
     * @var null|string $attribute40
     */
    protected $attribute40;

    /**
     * @var null|string $value40
     */
    protected $value40;

    /**
     * @var null|string $attribute41
     */
    protected $attribute41;

    /**
     * @var null|string $value41
     */
    protected $value41;

    /**
     * @var null|string $attribute42
     */
    protected $attribute42;

    /**
     * @var null|string $value42
     */
    protected $value42;

    /**
     * @var null|string $attribute43
     */
    protected $attribute43;

    /**
     * @var null|string $value43
     */
    protected $value43;

    /**
     * @var null|string $attribute44
     */
    protected $attribute44;

    /**
     * @var null|string $value44
     */
    protected $value44;

    /**
     * @var null|string $attribute45
     */
    protected $attribute45;

    /**
     * @var null|string $value45
     */
    protected $value45;

    /**
     * @var null|string $attribute46
     */
    protected $attribute46;

    /**
     * @var null|string $value46
     */
    protected $value46;

    /**
     * @var null|string $attribute47
     */
    protected $attribute47;

    /**
     * @var null|string $value47
     */
    protected $value47;

    /**
     * @var null|string $attribute48
     */
    protected $attribute48;

    /**
     * @var null|string $value48
     */
    protected $value48;

    /**
     * @var null|string $attribute49
     */
    protected $attribute49;

    /**
     * @var null|string $value49
     */
    protected $value49;

    /**
     * @var null|string $attribute50
     */
    protected $attribute50;

    /**
     * @var null|string $value50
     */
    protected $value50;

    /**
     * @var null|string $attribute51
     */
    protected $attribute51;

    /**
     * @var null|string $value51
     */
    protected $value51;

    /**
     * @var null|string $attribute52
     */
    protected $attribute52;

    /**
     * @var null|string $value52
     */
    protected $value52;

    /**
     * @var null|string $attribute53
     */
    protected $attribute53;

    /**
     * @var null|string $value53
     */
    protected $value53;

    /**
     * @var null|string $attribute54
     */
    protected $attribute54;

    /**
     * @var null|string $value54
     */
    protected $value54;

    /**
     * @var null|string $attribute55
     */
    protected $attribute55;

    /**
     * @var null|string $value55
     */
    protected $value55;

    /**
     * @var null|string $attribute56
     */
    protected $attribute56;

    /**
     * @var null|string $value56
     */
    protected $value56;

    /**
     * @var null|string $attribute57
     */
    protected $attribute57;

    /**
     * @var null|string $value57
     */
    protected $value57;

    /**
     * @var null|string $attribute58
     */
    protected $attribute58;

    /**
     * @var null|string $value58
     */
    protected $value58;

    /**
     * @var null|string $attribute59
     */
    protected $attribute59;

    /**
     * @var null|string $value59
     */
    protected $value59;

    /**
     * @var null|string $attribute60
     */
    protected $attribute60;

    /**
     * @var null|string $value60
     */
    protected $value60;

    /**
     * @var null|string $attribute61
     */
    protected $attribute61;

    /**
     * @var null|string $value61
     */
    protected $value61;

    /**
     * @var null|string $attribute62
     */
    protected $attribute62;

    /**
     * @var null|string $value62
     */
    protected $value62;

    /**
     * @var null|string $attribute63
     */
    protected $attribute63;

    /**
     * @var null|string $value63
     */
    protected $value63;

    /**
     * @var null|string $attribute64
     */
    protected $attribute64;

    /**
     * @var null|string $value64
     */
    protected $value64;

    /**
     * @var null|string $attribute65
     */
    protected $attribute65;

    /**
     * @var null|string $value65
     */
    protected $value65;

    /**
     * @var null|string $attribute66
     */
    protected $attribute66;

    /**
     * @var null|string $value66
     */
    protected $value66;

    /**
     * @var null|string $attribute67
     */
    protected $attribute67;

    /**
     * @var null|string $value67
     */
    protected $value67;

    /**
     * @var null|string $attribute68
     */
    protected $attribute68;

    /**
     * @var null|string $value68
     */
    protected $value68;

    /**
     * @var null|string $variationAttribute1
     */
    protected $variationAttribute1;

    /**
     * @var null|string $variationValue1
     */
    protected $variationValue1;

    /**
     * @var null|string $variationAttribute2
     */
    protected $variationAttribute2;

    /**
     * @var null|string $variationValue2
     */
    protected $variationValue2;

    /**
     * @var null|string $costePrice
     */
    protected $costePrice;

    /**
     * @var null|string $pvrPrice
     */
    protected $pvrPrice;

    /**
     * @return string
     */
    public function getProductId(): string
    {
        return $this->productId;
    }

    /**
     * @param string $productId
     */
    public function setProductId($productId): void
    {
        $this->productId = $productId;
    }

    /**
     * @return string
     */
    public function getSkuProvider(): string
    {
        return $this->skuProvider;
    }

    /**
     * @param string $skuProvider
     */
    public function setSkuProvider($skuProvider): void
    {
        $this->skuProvider = $skuProvider;
    }

    /**
     * @return string
     */
    public function getEan(): string
    {
        return $this->ean;
    }

    /**
     * @param string $ean
     */
    public function setEan($ean): void
    {
        $this->ean = $ean;
    }

    /**
     * @return null|string
     */
    public function getProviderFullDescription(): ?string
    {
        return $this->providerFullDescription;
    }

    /**
     * @param string $providerFullDescription
     */
    public function setProviderFullDescription($providerFullDescription): void
    {
        $this->providerFullDescription = $providerFullDescription;
    }

    /**
     * @return null|string
     */
    public function getProviderShortDescription(): ?string
    {
        return $this->providerShortDescription;
    }

    /**
     * @param string $providerShortDescription
     */
    public function setProviderShortDescription($providerShortDescription): void
    {
        $this->providerShortDescription = $providerShortDescription;
    }

    /**
     * @return null|string
     */
    public function getProviderAttributeDescription(): ?string
    {
        return $this->providerAttributeDescription;
    }

    /**
     * @param string $providerAttributeDescription
     */
    public function setProviderAttributeDescription($providerAttributeDescription): void
    {
        $this->providerAttributeDescription = $providerAttributeDescription;
    }

    /**
     * @return null|string
     */
    public function getProviderName(): ?string
    {
        return $this->providerName;
    }

    /**
     * @param string $providerName
     */
    public function setProviderName($providerName): void
    {
        $this->providerName = $providerName;
    }

    /**
     * @return null|string
     */
    public function getIntrastat(): ?string
    {
        return $this->intrastat;
    }

    /**
     * @param string $intrastat
     */
    public function setIntrastat($intrastat): void
    {
        $this->intrastat = $intrastat;
    }

    /**
     * @return null|string
     */
    public function getBrandSupplierName(): ?string
    {
        return $this->brandSupplierName;
    }

    /**
     * @param string $brandSupplierName
     */
    public function setBrandSupplierName($brandSupplierName): void
    {
        $this->brandSupplierName = $brandSupplierName;
    }

    /**
     * @return null|string
     */
    public function getCategorySupplierName(): ?string
    {
        return $this->categorySupplierName;
    }

    /**
     * @param string $categorySupplierName
     */
    public function setCategorySupplierName($categorySupplierName): void
    {
        $this->categorySupplierName = $categorySupplierName;
    }

    /**
     * @return null|string
     */
    public function getCategorySupplierName2(): ?string
    {
        return $this->categorySupplierName2;
    }

    /**
     * @param string $categorySupplierName2
     */
    public function setCategorySupplierName2($categorySupplierName2): void
    {
        $this->categorySupplierName2 = $categorySupplierName2;
    }

    /**
     * @return null|string
     */
    public function getCategorySupplierName3(): ?string
    {
        return $this->categorySupplierName3;
    }

    /**
     * @param string $categorySupplierName3
     */
    public function setCategorySupplierName3($categorySupplierName3): void
    {
        $this->categorySupplierName3 = $categorySupplierName3;
    }

    /**
     * @return null|float
     */
    public function getWidth(): ?float
    {
        return (float) $this->width;
    }

    /**
     * @param string $width
     */
    public function setWidth($width): void
    {
        $this->width = (float) $width;
    }

    /**
     * @return null|float
     */
    public function getHeight(): ?float
    {
        return (float) $this->height;
    }

    /**
     * @param float $height
     */
    public function setHeight($height): void
    {
        $this->height = (float) $height;
    }

    /**
     * @return null|float
     */
    public function getLength(): ?float
    {
        return (float) $this->length;
    }

    /**
     * @param float $length
     */
    public function setLength($length): void
    {
        $this->length = (float) $length;
    }

    /**
     * @return null|float
     */
    public function getWidth2(): ?float
    {
        return (float) $this->width2;
    }

    /**
     * @param float $width2
     */
    public function setWidth2($width2): void
    {
        $this->width2 = (float) $width2;
    }

    /**
     * @return null|float
     */
    public function getHeight2(): ?float
    {
        return (float) $this->height2;
    }

    /**
     * @param float $height2
     */
    public function setHeight2($height2): void
    {
        $this->height2 = (float) $height2;
    }

    /**
     * @return null|float
     */
    public function getLength2(): ?float
    {
        return (float) $this->length2;
    }

    /**
     * @param float $length2
     */
    public function setLength2($length2): void
    {
        $this->length2 = (float) $length2;
    }

    /**
     * @return null|float
     */
    public function getWeightKg(): ?float
    {
        return (float) $this->weightKg;
    }

    /**
     * @param float $weightKg
     */
    public function setWeightKg($weightKg): void
    {
        $this->weightKg = (float) $weightKg;
    }

    /**
     * @return null|float
     */
    public function getWidthPackaging(): ?float
    {
        return (float) $this->widthPackaging;
    }

    /**
     * @param float $widthPackaging
     */
    public function setWidthPackaging($widthPackaging): void
    {
        $this->widthPackaging = (float) $widthPackaging;
    }

    /**
     * @return null|float
     */
    public function getHeightPackaging(): ?float
    {
        return (float) $this->heightPackaging;
    }

    /**
     * @param float $heightPackaging
     */
    public function setHeightPackaging($heightPackaging): void
    {
        $this->heightPackaging = (float) $heightPackaging;
    }

    /**
     * @return null|float
     */
    public function getLengthPackaging(): ?float
    {
        return (float) $this->lengthPackaging;
    }

    /**
     * @param float $lengthPackaging
     */
    public function setLengthPackaging($lengthPackaging): void
    {
        $this->lengthPackaging = (float) $lengthPackaging;
    }

    /**
     * @return null|float
     */
    public function getWeightPackaging(): ?float
    {
        return (float) $this->weightPackaging;
    }

    /**
     * @param float $weightPackaging
     */
    public function setWeightPackaging($weightPackaging): void
    {
        $this->weightPackaging = (float) $weightPackaging;
    }

    /**
     * @return null|float
     */
    public function getCbm(): ?float
    {
        return (float) $this->cbm;
    }

    /**
     * @param string $cbm
     */
    public function setCbm($cbm): void
    {
        $this->cbm = (float) $cbm;
    }

    /**
     * @return null|string
     */
    public function getObjectType1(): ?string
    {
        return $this->objectType1;
    }

    /**
     * @param string $objectType1
     */
    public function setObjectType1($objectType1): void
    {
        $this->objectType1 = $objectType1;
    }

    /**
     * @return null|string
     */
    public function getTitleAttribute0(): ?string
    {
        return $this->titleAttribute0;
    }

    /**
     * @param string $titleAttribute0
     */
    public function setTitleAttribute0($titleAttribute0): void
    {
        $this->titleAttribute0 = $titleAttribute0;
    }

    /**
     * @return null|string
     */
    public function getSeoKeywords(): ?string
    {
        return $this->seoKeywords;
    }

    /**
     * @param string $seoKeywords
     */
    public function setSeoKeywords($seoKeywords): void
    {
        $this->seoKeywords = $seoKeywords;
    }

    /**
     * @return null|string
     */
    public function getTitleAttribute1(): ?string
    {
        return $this->titleAttribute1;
    }

    /**
     * @param string $titleAttribute1
     */
    public function setTitleAttribute1($titleAttribute1): void
    {
        $this->titleAttribute1 = $titleAttribute1;
    }

    /**
     * @return null|string
     */
    public function getTitleAttribute2(): ?string
    {
        return $this->titleAttribute2;
    }

    /**
     * @param string $titleAttribute2
     */
    public function setTitleAttribute2($titleAttribute2): void
    {
        $this->titleAttribute2 = $titleAttribute2;
    }

    /**
     * @return null|string
     */
    public function getTitleAttribute3(): ?string
    {
        return $this->titleAttribute3;
    }

    /**
     * @param string $titleAttribute3
     */
    public function setTitleAttribute3($titleAttribute3): void
    {
        $this->titleAttribute3 = $titleAttribute3;
    }

    /**
     * @return null|string
     */
    public function getTitleAttribute4(): ?string
    {
        return $this->titleAttribute4;
    }

    /**
     * @param string $titleAttribute4
     */
    public function setTitleAttribute4($titleAttribute4): void
    {
        $this->titleAttribute4 = $titleAttribute4;
    }

    /**
     * @return null|string
     */
    public function getTitleAttribute5(): ?string
    {
        return $this->titleAttribute5;
    }

    /**
     * @param string $titleAttribute5
     */
    public function setTitleAttribute5($titleAttribute5): void
    {
        $this->titleAttribute5 = $titleAttribute5;
    }

    /**
     * @return null|string
     */
    public function getTranslatableTitleAttribute1(): ?string
    {
        return $this->translatableTitleAttribute1;
    }

    /**
     * @param string $translatableTitleAttribute1
     */
    public function setTranslatableTitleAttribute1($translatableTitleAttribute1): void
    {
        $this->translatableTitleAttribute1 = $translatableTitleAttribute1;
    }

    /**
     * @return null|string
     */
    public function getTranslatableTitleAttribute2(): ?string
    {
        return $this->translatableTitleAttribute2;
    }

    /**
     * @param string $translatableTitleAttribute2
     */
    public function setTranslatableTitleAttribute2($translatableTitleAttribute2): void
    {
        $this->translatableTitleAttribute2 = $translatableTitleAttribute2;
    }

    /**
     * @return null|string
     */
    public function getTranslatableTitleAttribute3(): ?string
    {
        return $this->translatableTitleAttribute3;
    }

    /**
     * @param string $translatableTitleAttribute3
     */
    public function setTranslatableTitleAttribute3($translatableTitleAttribute3): void
    {
        $this->translatableTitleAttribute3 = $translatableTitleAttribute3;
    }

    /**
     * @return null|string
     */
    public function getTranslatableTitleAttribute4(): ?string
    {
        return $this->translatableTitleAttribute4;
    }

    /**
     * @param string $translatableTitleAttribute4
     */
    public function setTranslatableTitleAttribute4($translatableTitleAttribute4): void
    {
        $this->translatableTitleAttribute4 = $translatableTitleAttribute4;
    }

    /**
     * @return null|string
     */
    public function getAttribute1(): ?string
    {
        return $this->attribute1;
    }

    /**
     * @param string $attribute1
     */
    public function setAttribute1($attribute1): void
    {
        $this->attribute1 = $attribute1;
    }

    /**
     * @return null|int|string
     */
    public function getValue1(): ?string
    {
        return $this->value1;
    }

    /**
     * @param string $value1
     */
    public function setValue1($value1): void
    {
        $this->value1 = $value1;
    }

    /**
     * @return null|string
     */
    public function getAttribute2(): ?string
    {
        return $this->attribute2;
    }

    /**
     * @param string $attribute2
     */
    public function setAttribute2($attribute2): void
    {
        $this->attribute2 = $attribute2;
    }

    /**
     * @return null|int|string
     */
    public function getValue2(): ?string
    {
        return $this->value2;
    }

    /**
     * @param string $value2
     */
    public function setValue2($value2): void
    {
        $this->value2 = $value2;
    }

    /**
     * @return null|string
     */
    public function getAttribute3(): ?string
    {
        return $this->attribute3;
    }

    /**
     * @param string $attribute3
     */
    public function setAttribute3($attribute3): void
    {
        $this->attribute3 = $attribute3;
    }

    /**
     * @return null|int|string
     */
    public function getValue3(): ?string
    {
        return $this->value3;
    }

    /**
     * @param string $value3
     */
    public function setValue3($value3): void
    {
        $this->value3 = $value3;
    }

    /**
     * @return null|string
     */
    public function getAttribute4(): ?string
    {
        return $this->attribute4;
    }

    /**
     * @param string $attribute4
     */
    public function setAttribute4($attribute4): void
    {
        $this->attribute4 = $attribute4;
    }

    /**
     * @return null|int|string
     */
    public function getValue4(): ?string
    {
        return $this->value4;
    }

    /**
     * @param string $value4
     */
    public function setValue4($value4): void
    {
        $this->value4 = $value4;
    }

    /**
     * @return null|string
     */
    public function getAttribute5(): ?string
    {
        return $this->attribute5;
    }

    /**
     * @param string $attribute5
     */
    public function setAttribute5($attribute5): void
    {
        $this->attribute5 = $attribute5;
    }

    /**
     * @return null|int|string
     */
    public function getValue5(): ?string
    {
        return $this->value5;
    }

    /**
     * @param string $value5
     */
    public function setValue5($value5): void
    {
        $this->value5 = $value5;
    }

    /**
     * @return null|string
     */
    public function getAttribute6(): ?string
    {
        return $this->attribute6;
    }

    /**
     * @param string $attribute6
     */
    public function setAttribute6($attribute6): void
    {
        $this->attribute6 = $attribute6;
    }

    /**
     * @return null|int|string
     */
    public function getValue6(): ?string
    {
        return $this->value6;
    }

    /**
     * @param string $value6
     */
    public function setValue6($value6): void
    {
        $this->value6 = $value6;
    }

    /**
     * @return null|string
     */
    public function getAttribute7(): ?string
    {
        return $this->attribute7;
    }

    /**
     * @param string $attribute7
     */
    public function setAttribute7($attribute7): void
    {
        $this->attribute7 = $attribute7;
    }

    /**
     * @return null|int|string
     */
    public function getValue7(): ?string
    {
        return $this->value7;
    }

    /**
     * @param string $value7
     */
    public function setValue7($value7): void
    {
        $this->value7 = $value7;
    }

    /**
     * @return null|string
     */
    public function getAttribute8(): ?string
    {
        return $this->attribute8;
    }

    /**
     * @param string $attribute8
     */
    public function setAttribute8($attribute8): void
    {
        $this->attribute8 = $attribute8;
    }

    /**
     * @return null|int|string
     */
    public function getValue8(): ?string
    {
        return $this->value8;
    }

    /**
     * @param string $value8
     */
    public function setValue8($value8): void
    {
        $this->value8 = $value8;
    }

    /**
     * @return null|string
     */
    public function getAttribute9(): ?string
    {
        return $this->attribute9;
    }

    /**
     * @param string $attribute9
     */
    public function setAttribute9($attribute9): void
    {
        $this->attribute9 = $attribute9;
    }

    /**
     * @return null|int|string
     */
    public function getValue9(): ?string
    {
        return $this->value9;
    }

    /**
     * @param string $value9
     */
    public function setValue9($value9): void
    {
        $this->value9 = $value9;
    }

    /**
     * @return null|string
     */
    public function getAttribute10(): ?string
    {
        return $this->attribute10;
    }

    /**
     * @param string $attribute10
     */
    public function setAttribute10($attribute10): void
    {
        $this->attribute10 = $attribute10;
    }

    /**
     * @return null|int|string
     */
    public function getValue10(): ?string
    {
        return $this->value10;
    }

    /**
     * @param string $value10
     */
    public function setValue10($value10): void
    {
        $this->value10 = $value10;
    }

    /**
     * @return null|string
     */
    public function getAttribute11(): ?string
    {
        return $this->attribute11;
    }

    /**
     * @param string $attribute11
     */
    public function setAttribute11($attribute11): void
    {
        $this->attribute11 = $attribute11;
    }

    /**
     * @return null|int|string
     */
    public function getValue11(): ?string
    {
        return $this->value11;
    }

    /**
     * @param string $value11
     */
    public function setValue11($value11): void
    {
        $this->value11 = $value11;
    }

    /**
     * @return null|string
     */
    public function getAttribute12(): ?string
    {
        return $this->attribute12;
    }

    /**
     * @param string $attribute12
     */
    public function setAttribute12($attribute12): void
    {
        $this->attribute12 = $attribute12;
    }

    /**
     * @return null|int|string
     */
    public function getValue12(): ?string
    {
        return $this->value12;
    }

    /**
     * @param string $value12
     */
    public function setValue12($value12): void
    {
        $this->value12 = $value12;
    }

    /**
     * @return null|string
     */
    public function getAttribute13(): ?string
    {
        return $this->attribute13;
    }

    /**
     * @param string $attribute13
     */
    public function setAttribute13($attribute13): void
    {
        $this->attribute13 = $attribute13;
    }

    /**
     * @return null|int|string
     */
    public function getValue13(): ?string
    {
        return $this->value13;
    }

    /**
     * @param string $value13
     */
    public function setValue13($value13): void
    {
        $this->value13 = $value13;
    }

    /**
     * @return null|string
     */
    public function getAttribute14(): ?string
    {
        return $this->attribute14;
    }

    /**
     * @param string $attribute14
     */
    public function setAttribute14($attribute14): void
    {
        $this->attribute14 = $attribute14;
    }

    /**
     * @return null|int|string
     */
    public function getValue14(): ?string
    {
        return $this->value14;
    }

    /**
     * @param string $value14
     */
    public function setValue14($value14): void
    {
        $this->value14 = $value14;
    }

    /**
     * @return null|string
     */
    public function getAttribute15(): ?string
    {
        return $this->attribute15;
    }

    /**
     * @param string $attribute15
     */
    public function setAttribute15($attribute15): void
    {
        $this->attribute15 = $attribute15;
    }

    /**
     * @return null|int|string
     */
    public function getValue15(): ?string
    {
        return $this->value15;
    }

    /**
     * @param string $value15
     */
    public function setValue15($value15): void
    {
        $this->value15 = $value15;
    }

    /**
     * @return null|string
     */
    public function getAttribute16(): ?string
    {
        return $this->attribute16;
    }

    /**
     * @param string $attribute16
     */
    public function setAttribute16($attribute16): void
    {
        $this->attribute16 = $attribute16;
    }

    /**
     * @return null|int|string
     */
    public function getValue16(): ?string
    {
        return $this->value16;
    }

    /**
     * @param string $value16
     */
    public function setValue16($value16): void
    {
        $this->value16 = $value16;
    }

    /**
     * @return null|string
     */
    public function getAttribute17(): ?string
    {
        return $this->attribute17;
    }

    /**
     * @param string $attribute17
     */
    public function setAttribute17($attribute17): void
    {
        $this->attribute17 = $attribute17;
    }

    /**
     * @return null|int|string
     */
    public function getValue17(): ?string
    {
        return $this->value17;
    }

    /**
     * @param string $value17
     */
    public function setValue17($value17): void
    {
        $this->value17 = $value17;
    }

    /**
     * @return null|string
     */
    public function getAttribute18(): ?string
    {
        return $this->attribute18;
    }

    /**
     * @param string $attribute18
     */
    public function setAttribute18($attribute18): void
    {
        $this->attribute18 = $attribute18;
    }

    /**
     * @return null|int|string
     */
    public function getValue18(): ?string
    {
        return $this->value18;
    }

    /**
     * @param string $value18
     */
    public function setValue18($value18): void
    {
        $this->value18 = $value18;
    }

    /**
     * @return null|string
     */
    public function getAttribute19(): ?string
    {
        return $this->attribute19;
    }

    /**
     * @param string $attribute19
     */
    public function setAttribute19($attribute19): void
    {
        $this->attribute19 = $attribute19;
    }

    /**
     * @return null|int|string
     */
    public function getValue19(): ?string
    {
        return $this->value19;
    }

    /**
     * @param string $value19
     */
    public function setValue19($value19): void
    {
        $this->value19 = $value19;
    }

    /**
     * @return null|string
     */
    public function getAttribute20(): ?string
    {
        return $this->attribute20;
    }

    /**
     * @param string $attribute20
     */
    public function setAttribute20($attribute20): void
    {
        $this->attribute20 = $attribute20;
    }

    /**
     * @return null|int|string
     */
    public function getValue20(): ?string
    {
        return $this->value20;
    }

    /**
     * @param string $value20
     */
    public function setValue20($value20): void
    {
        $this->value20 = $value20;
    }

    /**
     * @return null|string
     */
    public function getAttribute21(): ?string
    {
        return $this->attribute21;
    }

    /**
     * @param string $attribute21
     */
    public function setAttribute21($attribute21): void
    {
        $this->attribute21 = $attribute21;
    }

    /**
     * @return null|int|string
     */
    public function getValue21(): ?string
    {
        return $this->value21;
    }

    /**
     * @param string $value21
     */
    public function setValue21($value21): void
    {
        $this->value21 = $value21;
    }

    /**
     * @return null|string
     */
    public function getAttribute22(): ?string
    {
        return $this->attribute22;
    }

    /**
     * @param string $attribute22
     */
    public function setAttribute22($attribute22): void
    {
        $this->attribute22 = $attribute22;
    }

    /**
     * @return null|int|string
     */
    public function getValue22(): ?string
    {
        return $this->value22;
    }

    /**
     * @param string $value22
     */
    public function setValue22($value22): void
    {
        $this->value22 = $value22;
    }

    /**
     * @return null|string
     */
    public function getAttribute23(): ?string
    {
        return $this->attribute23;
    }

    /**
     * @param string $attribute23
     */
    public function setAttribute23($attribute23): void
    {
        $this->attribute23 = $attribute23;
    }

    /**
     * @return null|int|string
     */
    public function getValue23(): ?string
    {
        return $this->value23;
    }

    /**
     * @param string $value23
     */
    public function setValue23($value23): void
    {
        $this->value23 = $value23;
    }

    /**
     * @return null|string
     */
    public function getAttribute24(): ?string
    {
        return $this->attribute24;
    }

    /**
     * @param string $attribute24
     */
    public function setAttribute24($attribute24): void
    {
        $this->attribute24 = $attribute24;
    }

    /**
     * @return null|int|string
     */
    public function getValue24(): ?string
    {
        return $this->value24;
    }

    /**
     * @param string $value24
     */
    public function setValue24($value24): void
    {
        $this->value24 = $value24;
    }

    /**
     * @return null|string
     */
    public function getAttribute25(): ?string
    {
        return $this->attribute25;
    }

    /**
     * @param string $attribute25
     */
    public function setAttribute25($attribute25): void
    {
        $this->attribute25 = $attribute25;
    }

    /**
     * @return null|int|string
     */
    public function getValue25(): ?string
    {
        return $this->value25;
    }

    /**
     * @param string $value25
     */
    public function setValue25($value25): void
    {
        $this->value25 = $value25;
    }

    /**
     * @return null|string
     */
    public function getAttribute26(): ?string
    {
        return $this->attribute26;
    }

    /**
     * @param string $attribute26
     */
    public function setAttribute26($attribute26): void
    {
        $this->attribute26 = $attribute26;
    }

    /**
     * @return null|int|string
     */
    public function getValue26(): ?string
    {
        return $this->value26;
    }

    /**
     * @param string $value26
     */
    public function setValue26($value26): void
    {
        $this->value26 = $value26;
    }

    /**
     * @return null|string
     */
    public function getAttribute27(): ?string
    {
        return $this->attribute27;
    }

    /**
     * @param string $attribute27
     */
    public function setAttribute27($attribute27): void
    {
        $this->attribute27 = $attribute27;
    }

    /**
     * @return null|int|string
     */
    public function getValue27(): ?string
    {
        return $this->value27;
    }

    /**
     * @param string $value27
     */
    public function setValue27($value27): void
    {
        $this->value27 = $value27;
    }

    /**
     * @return null|string
     */
    public function getAttribute28(): ?string
    {
        return $this->attribute28;
    }

    /**
     * @param string $attribute28
     */
    public function setAttribute28($attribute28): void
    {
        $this->attribute28 = $attribute28;
    }

    /**
     * @return null|int|string
     */
    public function getValue28(): ?string
    {
        return $this->value28;
    }

    /**
     * @param string $value28
     */
    public function setValue28($value28): void
    {
        $this->value28 = $value28;
    }

    /**
     * @return null|string
     */
    public function getAttribute29(): ?string
    {
        return $this->attribute29;
    }

    /**
     * @param string $attribute29
     */
    public function setAttribute29($attribute29): void
    {
        $this->attribute29 = $attribute29;
    }

    /**
     * @return null|int|string
     */
    public function getValue29(): ?string
    {
        return $this->value29;
    }

    /**
     * @param string $value29
     */
    public function setValue29($value29): void
    {
        $this->value29 = $value29;
    }

    /**
     * @return null|string
     */
    public function getAttribute30(): ?string
    {
        return $this->attribute30;
    }

    /**
     * @param string $attribute30
     */
    public function setAttribute30($attribute30): void
    {
        $this->attribute30 = $attribute30;
    }

    /**
     * @return null|int|string
     */
    public function getValue30(): ?string
    {
        return $this->value30;
    }

    /**
     * @param string $value30
     */
    public function setValue30($value30): void
    {
        $this->value30 = $value30;
    }

    /**
     * @return null|string
     */
    public function getAttribute31(): ?string
    {
        return $this->attribute31;
    }

    /**
     * @param string $attribute31
     */
    public function setAttribute31($attribute31): void
    {
        $this->attribute31 = $attribute31;
    }

    /**
     * @return null|int|string
     */
    public function getValue31(): ?string
    {
        return $this->value31;
    }

    /**
     * @param string $value31
     */
    public function setValue31($value31): void
    {
        $this->value31 = $value31;
    }

    /**
     * @return null|string
     */
    public function getAttribute32(): ?string
    {
        return $this->attribute32;
    }

    /**
     * @param string $attribute32
     */
    public function setAttribute32($attribute32): void
    {
        $this->attribute32 = $attribute32;
    }

    /**
     * @return null|int|string
     */
    public function getValue32(): ?string
    {
        return $this->value32;
    }

    /**
     * @param string $value32
     */
    public function setValue32($value32): void
    {
        $this->value32 = $value32;
    }

    /**
     * @return null|string
     */
    public function getAttribute33(): ?string
    {
        return $this->attribute33;
    }

    /**
     * @param string $attribute33
     */
    public function setAttribute33($attribute33): void
    {
        $this->attribute33 = $attribute33;
    }

    /**
     * @return null|int|string
     */
    public function getValue33(): ?string
    {
        return $this->value33;
    }

    /**
     * @param string $value33
     */
    public function setValue33($value33): void
    {
        $this->value33 = $value33;
    }

    /**
     * @return null|string
     */
    public function getAttribute34(): ?string
    {
        return $this->attribute34;
    }

    /**
     * @param string $attribute34
     */
    public function setAttribute34($attribute34): void
    {
        $this->attribute34 = $attribute34;
    }

    /**
     * @return null|int|string
     */
    public function getValue34(): ?string
    {
        return $this->value34;
    }

    /**
     * @param string $value34
     */
    public function setValue34($value34): void
    {
        $this->value34 = $value34;
    }

    /**
     * @return null|string
     */
    public function getAttribute35(): ?string
    {
        return $this->attribute35;
    }

    /**
     * @param string $attribute35
     */
    public function setAttribute35($attribute35): void
    {
        $this->attribute35 = $attribute35;
    }

    /**
     * @return null|int|string
     */
    public function getValue35(): ?string
    {
        return $this->value35;
    }

    /**
     * @param string $value35
     */
    public function setValue35($value35): void
    {
        $this->value35 = $value35;
    }

    /**
     * @return null|string
     */
    public function getAttribute36(): ?string
    {
        return $this->attribute36;
    }

    /**
     * @param string $attribute36
     */
    public function setAttribute36($attribute36): void
    {
        $this->attribute36 = $attribute36;
    }

    /**
     * @return null|int|string
     */
    public function getValue36(): ?string
    {
        return $this->value36;
    }

    /**
     * @param string $value36
     */
    public function setValue36($value36): void
    {
        $this->value36 = $value36;
    }

    /**
     * @return null|string
     */
    public function getAttribute37(): ?string
    {
        return $this->attribute37;
    }

    /**
     * @param string $attribute37
     */
    public function setAttribute37($attribute37): void
    {
        $this->attribute37 = $attribute37;
    }

    /**
     * @return null|int|string
     */
    public function getValue37(): ?string
    {
        return $this->value37;
    }

    /**
     * @param string $value37
     */
    public function setValue37($value37): void
    {
        $this->value37 = $value37;
    }

    /**
     * @return null|string
     */
    public function getAttribute38(): ?string
    {
        return $this->attribute38;
    }

    /**
     * @param string $attribute38
     */
    public function setAttribute38($attribute38): void
    {
        $this->attribute38 = $attribute38;
    }

    /**
     * @return null|int|string
     */
    public function getValue38(): ?string
    {
        return $this->value38;
    }

    /**
     * @param string $value38
     */
    public function setValue38($value38): void
    {
        $this->value38 = $value38;
    }

    /**
     * @return null|string
     */
    public function getAttribute39(): ?string
    {
        return $this->attribute39;
    }

    /**
     * @param string $attribute39
     */
    public function setAttribute39($attribute39): void
    {
        $this->attribute39 = $attribute39;
    }

    /**
     * @return null|int|string
     */
    public function getValue39(): ?string
    {
        return $this->value39;
    }

    /**
     * @param string $value39
     */
    public function setValue39($value39): void
    {
        $this->value39 = $value39;
    }

    /**
     * @return null|string
     */
    public function getAttribute40(): ?string
    {
        return $this->attribute40;
    }

    /**
     * @param string $attribute40
     */
    public function setAttribute40($attribute40): void
    {
        $this->attribute40 = $attribute40;
    }

    /**
     * @return null|int|string
     */
    public function getValue40(): ?string
    {
        return $this->value40;
    }

    /**
     * @param string $value40
     */
    public function setValue40($value40): void
    {
        $this->value40 = $value40;
    }

    /**
     * @return null|string
     */
    public function getAttribute41(): ?string
    {
        return $this->attribute41;
    }

    /**
     * @param string $attribute41
     */
    public function setAttribute41($attribute41): void
    {
        $this->attribute41 = $attribute41;
    }

    /**
     * @return null|int|string
     */
    public function getValue41(): ?string
    {
        return $this->value41;
    }

    /**
     * @param string $value41
     */
    public function setValue41($value41): void
    {
        $this->value41 = $value41;
    }

    /**
     * @return null|string
     */
    public function getAttribute42(): ?string
    {
        return $this->attribute42;
    }

    /**
     * @param string $attribute42
     */
    public function setAttribute42($attribute42): void
    {
        $this->attribute42 = $attribute42;
    }

    /**
     * @return null|int|string
     */
    public function getValue42(): ?string
    {
        return $this->value42;
    }

    /**
     * @param string $value42
     */
    public function setValue42($value42): void
    {
        $this->value42 = $value42;
    }

    /**
     * @return null|string
     */
    public function getAttribute43(): ?string
    {
        return $this->attribute43;
    }

    /**
     * @param string $attribute43
     */
    public function setAttribute43($attribute43): void
    {
        $this->attribute43 = $attribute43;
    }

    /**
     * @return null|int|string
     */
    public function getValue43(): ?string
    {
        return $this->value43;
    }

    /**
     * @param string $value43
     */
    public function setValue43($value43): void
    {
        $this->value43 = $value43;
    }

    /**
     * @return null|string
     */
    public function getAttribute44(): ?string
    {
        return $this->attribute44;
    }

    /**
     * @param string $attribute44
     */
    public function setAttribute44($attribute44): void
    {
        $this->attribute44 = $attribute44;
    }

    /**
     * @return null|int|string
     */
    public function getValue44(): ?string
    {
        return $this->value44;
    }

    /**
     * @param string $value44
     */
    public function setValue44($value44): void
    {
        $this->value44 = $value44;
    }

    /**
     * @return null|string
     */
    public function getAttribute45(): ?string
    {
        return $this->attribute45;
    }

    /**
     * @param string $attribute45
     */
    public function setAttribute45($attribute45): void
    {
        $this->attribute45 = $attribute45;
    }

    /**
     * @return null|int|string
     */
    public function getValue45(): ?string
    {
        return $this->value45;
    }

    /**
     * @param string $value45
     */
    public function setValue45($value45): void
    {
        $this->value45 = $value45;
    }

    /**
     * @return null|string
     */
    public function getAttribute46(): ?string
    {
        return $this->attribute46;
    }

    /**
     * @param string $attribute46
     */
    public function setAttribute46($attribute46): void
    {
        $this->attribute46 = $attribute46;
    }

    /**
     * @return null|int|string
     */
    public function getValue46(): ?string
    {
        return $this->value46;
    }

    /**
     * @param string $value46
     */
    public function setValue46($value46): void
    {
        $this->value46 = $value46;
    }

    /**
     * @return null|string
     */
    public function getAttribute47(): ?string
    {
        return $this->attribute47;
    }

    /**
     * @param string $attribute47
     */
    public function setAttribute47($attribute47): void
    {
        $this->attribute47 = $attribute47;
    }

    /**
     * @return null|int|string
     */
    public function getValue47(): ?string
    {
        return $this->value47;
    }

    /**
     * @param string $value47
     */
    public function setValue47($value47): void
    {
        $this->value47 = $value47;
    }

    /**
     * @return null|string
     */
    public function getAttribute48(): ?string
    {
        return $this->attribute48;
    }

    /**
     * @param string $attribute48
     */
    public function setAttribute48($attribute48): void
    {
        $this->attribute48 = $attribute48;
    }

    /**
     * @return null|int|string
     */
    public function getValue48(): ?string
    {
        return $this->value48;
    }

    /**
     * @param string $value48
     */
    public function setValue48($value48): void
    {
        $this->value48 = $value48;
    }

    /**
     * @return null|string
     */
    public function getAttribute49(): ?string
    {
        return $this->attribute49;
    }

    /**
     * @param string $attribute49
     */
    public function setAttribute49($attribute49): void
    {
        $this->attribute49 = $attribute49;
    }

    /**
     * @return null|int|string
     */
    public function getValue49(): ?string
    {
        return $this->value49;
    }

    /**
     * @param string $value49
     */
    public function setValue49($value49): void
    {
        $this->value49 = $value49;
    }

    /**
     * @return null|string
     */
    public function getAttribute50(): ?string
    {
        return $this->attribute50;
    }

    /**
     * @param string $attribute50
     */
    public function setAttribute50($attribute50): void
    {
        $this->attribute50 = $attribute50;
    }

    /**
     * @return null|int|string
     */
    public function getValue50(): ?string
    {
        return $this->value50;
    }

    /**
     * @param string $value50
     */
    public function setValue50($value50): void
    {
        $this->value50 = $value50;
    }

    /**
     * @return null|string
     */
    public function getAttribute51(): ?string
    {
        return $this->attribute51;
    }

    /**
     * @param string $attribute51
     */
    public function setAttribute51($attribute51): void
    {
        $this->attribute51 = $attribute51;
    }

    /**
     * @return null|int|string
     */
    public function getValue51(): ?string
    {
        return $this->value51;
    }

    /**
     * @param string $value51
     */
    public function setValue51($value51): void
    {
        $this->value51 = $value51;
    }

    /**
     * @return null|string
     */
    public function getAttribute52(): ?string
    {
        return $this->attribute52;
    }

    /**
     * @param string $attribute52
     */
    public function setAttribute52($attribute52): void
    {
        $this->attribute52 = $attribute52;
    }

    /**
     * @return null|int|string
     */
    public function getValue52(): ?string
    {
        return $this->value52;
    }

    /**
     * @param string $value52
     */
    public function setValue52($value52): void
    {
        $this->value52 = $value52;
    }

    /**
     * @return null|string
     */
    public function getAttribute53(): ?string
    {
        return $this->attribute53;
    }

    /**
     * @param string $attribute53
     */
    public function setAttribute53($attribute53): void
    {
        $this->attribute53 = $attribute53;
    }

    /**
     * @return null|int|string
     */
    public function getValue53(): ?string
    {
        return $this->value53;
    }

    /**
     * @param string $value53
     */
    public function setValue53($value53): void
    {
        $this->value53 = $value53;
    }

    /**
     * @return null|string
     */
    public function getAttribute54(): ?string
    {
        return $this->attribute54;
    }

    /**
     * @param string $attribute54
     */
    public function setAttribute54($attribute54): void
    {
        $this->attribute54 = $attribute54;
    }

    /**
     * @return null|int|string
     */
    public function getValue54(): ?string
    {
        return $this->value54;
    }

    /**
     * @param string $value54
     */
    public function setValue54($value54): void
    {
        $this->value54 = $value54;
    }

    /**
     * @return null|string
     */
    public function getAttribute55(): ?string
    {
        return $this->attribute55;
    }

    /**
     * @param string $attribute55
     */
    public function setAttribute55($attribute55): void
    {
        $this->attribute55 = $attribute55;
    }

    /**
     * @return null|int|string
     */
    public function getValue55(): ?string
    {
        return $this->value55;
    }

    /**
     * @param string $value55
     */
    public function setValue55($value55): void
    {
        $this->value55 = $value55;
    }

    /**
     * @return null|string
     */
    public function getAttribute56(): ?string
    {
        return $this->attribute56;
    }

    /**
     * @param string $attribute56
     */
    public function setAttribute56($attribute56): void
    {
        $this->attribute56 = $attribute56;
    }

    /**
     * @return null|int|string
     */
    public function getValue56(): ?string
    {
        return $this->value56;
    }

    /**
     * @param string $value56
     */
    public function setValue56($value56): void
    {
        $this->value56 = $value56;
    }

    /**
     * @return null|string
     */
    public function getAttribute57(): ?string
    {
        return $this->attribute57;
    }

    /**
     * @param string $attribute57
     */
    public function setAttribute57($attribute57): void
    {
        $this->attribute57 = $attribute57;
    }

    /**
     * @return null|int|string
     */
    public function getValue57(): ?string
    {
        return $this->value57;
    }

    /**
     * @param string $value57
     */
    public function setValue57($value57): void
    {
        $this->value57 = $value57;
    }

    /**
     * @return null|string
     */
    public function getAttribute58(): ?string
    {
        return $this->attribute58;
    }

    /**
     * @param string $attribute58
     */
    public function setAttribute58($attribute58): void
    {
        $this->attribute58 = $attribute58;
    }

    /**
     * @return null|int|string
     */
    public function getValue58(): ?string
    {
        return $this->value58;
    }

    /**
     * @param string $value58
     */
    public function setValue58($value58): void
    {
        $this->value58 = $value58;
    }

    /**
     * @return null|string
     */
    public function getAttribute59(): ?string
    {
        return $this->attribute59;
    }

    /**
     * @param string $attribute59
     */
    public function setAttribute59($attribute59): void
    {
        $this->attribute59 = $attribute59;
    }

    /**
     * @return null|int|string
     */
    public function getValue59(): ?string
    {
        return $this->value59;
    }

    /**
     * @param string $value59
     */
    public function setValue59($value59): void
    {
        $this->value59 = $value59;
    }

    /**
     * @return null|string
     */
    public function getAttribute60(): ?string
    {
        return $this->attribute60;
    }

    /**
     * @param string $attribute60
     */
    public function setAttribute60($attribute60): void
    {
        $this->attribute60 = $attribute60;
    }

    /**
     * @return null|int|string
     */
    public function getValue60(): ?string
    {
        return $this->value60;
    }

    /**
     * @param string $value60
     */
    public function setValue60($value60): void
    {
        $this->value60 = $value60;
    }

    /**
     * @return null|string
     */
    public function getAttribute61(): ?string
    {
        return $this->attribute61;
    }

    /**
     * @param string $attribute61
     */
    public function setAttribute61($attribute61): void
    {
        $this->attribute61 = $attribute61;
    }

    /**
     * @return null|int|string
     */
    public function getValue61(): ?string
    {
        return $this->value61;
    }

    /**
     * @param string $value61
     */
    public function setValue61($value61): void
    {
        $this->value61 = $value61;
    }

    /**
     * @return null|string
     */
    public function getAttribute62(): ?string
    {
        return $this->attribute62;
    }

    /**
     * @param string $attribute62
     */
    public function setAttribute62($attribute62): void
    {
        $this->attribute62 = $attribute62;
    }

    /**
     * @return null|int|string
     */
    public function getValue62(): ?string
    {
        return $this->value62;
    }

    /**
     * @param string $value62
     */
    public function setValue62($value62): void
    {
        $this->value62 = $value62;
    }

    /**
     * @return null|string
     */
    public function getAttribute63(): ?string
    {
        return $this->attribute63;
    }

    /**
     * @param string $attribute63
     */
    public function setAttribute63($attribute63): void
    {
        $this->attribute63 = $attribute63;
    }

    /**
     * @return null|int|string
     */
    public function getValue63(): ?string
    {
        return $this->value63;
    }

    /**
     * @param string $value63
     */
    public function setValue63($value63): void
    {
        $this->value63 = $value63;
    }

    /**
     * @return null|string
     */
    public function getAttribute64(): ?string
    {
        return $this->attribute64;
    }

    /**
     * @param string $attribute64
     */
    public function setAttribute64($attribute64): void
    {
        $this->attribute64 = $attribute64;
    }

    /**
     * @return null|int|string
     */
    public function getValue64(): ?string
    {
        return $this->value64;
    }

    /**
     * @param string $value64
     */
    public function setValue64($value64): void
    {
        $this->value64 = $value64;
    }

    /**
     * @return null|string
     */
    public function getAttribute65(): ?string
    {
        return $this->attribute65;
    }

    /**
     * @param string $attribute65
     */
    public function setAttribute65($attribute65): void
    {
        $this->attribute65 = $attribute65;
    }

    /**
     * @return null|int|string
     */
    public function getValue65(): ?string
    {
        return $this->value65;
    }

    /**
     * @param string $value65
     */
    public function setValue65($value65): void
    {
        $this->value65 = $value65;
    }

    /**
     * @return null|string
     */
    public function getAttribute66(): ?string
    {
        return $this->attribute66;
    }

    /**
     * @param string $attribute66
     */
    public function setAttribute66($attribute66): void
    {
        $this->attribute66 = $attribute66;
    }

    /**
     * @return null|int|string
     */
    public function getValue66(): ?string
    {
        return $this->value66;
    }

    /**
     * @param string $value66
     */
    public function setValue66($value66): void
    {
        $this->value66 = $value66;
    }

    /**
     * @return null|string
     */
    public function getAttribute67(): ?string
    {
        return $this->attribute67;
    }

    /**
     * @param string $attribute67
     */
    public function setAttribute67($attribute67): void
    {
        $this->attribute67 = $attribute67;
    }

    /**
     * @return null|int|string
     */
    public function getValue67(): ?string
    {
        return $this->value67;
    }

    /**
     * @param string $value67
     */
    public function setValue67($value67): void
    {
        $this->value67 = $value67;
    }

    /**
     * @return null|string
     */
    public function getAttribute68(): ?string
    {
        return $this->attribute68;
    }

    /**
     * @param string $attribute68
     */
    public function setAttribute68($attribute68): void
    {
        $this->attribute68 = $attribute68;
    }

    /**
     * @return null|int|string
     */
    public function getValue68(): ?string
    {
        return $this->value68;
    }

    /**
     * @param string $value68
     */
    public function setValue68($value68): void
    {
        $this->value68 = $value68;
    }

    /**
     * @return null|string
     */
    public function getVariationAttribute1(): ?string
    {
        return $this->variationAttribute1;
    }

    /**
     * @param string $variationAttribute1
     */
    public function setVariationAttribute1($variationAttribute1): void
    {
        $this->variationAttribute1 = $variationAttribute1;
    }

    /**
     * @return null|string
     */
    public function getVariationValue1(): ?string
    {
        return $this->variationValue1;
    }

    /**
     * @param string $variationValue1
     */
    public function setVariationValue1($variationValue1): void
    {
        $this->variationValue1 = $variationValue1;
    }

    /**
     * @return null|string
     */
    public function getVariationAttribute2(): ?string
    {
        return $this->variationAttribute2;
    }

    /**
     * @param string $variationAttribute2
     */
    public function setVariationAttribute2($variationAttribute2): void
    {
        $this->variationAttribute2 = $variationAttribute2;
    }

    /**
     * @return null|string
     */
    public function getVariationValue2(): ?string
    {
        return $this->variationValue2;
    }

    /**
     * @param string $variationValue2
     */
    public function setVariationValue2($variationValue2): void
    {
        $this->variationValue2 = $variationValue2;
    }

    /**
     * @return null|string
     */
    public function getCostePrice(): ?string
    {
        return $this->costePrice;
    }

    /**
     * @param string $costePrice
     */
    public function setCostePrice($costePrice): void
    {
        $this->costePrice = $costePrice;
    }

    /**
     * @return null|string
     */
    public function getPvrPrice(): ?string
    {
        return $this->pvrPrice;
    }

    /**
     * @param string $pvrPrice
     */
    public function setPvrPrice($pvrPrice): void
    {
        $this->pvrPrice = $pvrPrice;
    }

    /**
     * Return all Attributes
     *
     * @return array
     */
    public function getAttributes(): array
    {
        $attributes = [];
        for ($i = 1; $i < 68; $i++) {
            if ($value = $this->{"getValue$i"}()) {
                $attribute['id'] = $i;
                $attribute['name'] = $this->{"getAttribute$i"}();
                $attribute['value'] = $value;
                $attributes[] = $attribute;
            }
        }
        return $attributes;
    }

    /**
     * @return null|string
     */
    public function getDescription(): ?string
    {
        return ($this->getProviderFullDescription()) ? $this->getProviderFullDescription() : $this->getProviderShortDescription();
    }

    /**
     * @return null|string
     */
    public function getCategoryName(): ?string
    {
        return $this->getCategorySupplierName3() . ' / ' . $this->getCategorySupplierName2() . ' / ' . $this->getCategorySupplierName();
    }
}
